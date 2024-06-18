 let hamburgericon= document.querySelector(".bi-list");
 let closebtn= document.querySelector(".bi-x-square");
 let overlay= document.querySelector(".overlay-div");
 let navlinks= document.querySelectorAll(".nav-li");
 let hamburgerclose= document.querySelector(".bi-x-square");

 let mobilemune= document.querySelector("#nav-menus");

  function Funcremovemobilenav(){

    mobilemune.classList.remove("active");
    closebtn.classList.remove("active");
    overlay.classList.remove("active");
    hamburgerclose.classList.remove("active");

 }

 hamburgericon.addEventListener("click",()=>{
    mobilemune.classList.add("active");
   // hamburgericon.classList.remove("active");
    closebtn.classList.add("active");
    overlay.classList.add("active");


 });
 navlinks.forEach((nlink)=>{
     nlink.addEventListener("click",()=>{
        Funcremovemobilenav();
     });
 });
 hamburgerclose.addEventListener("click",()=>{
    Funcremovemobilenav();

 });
 overlay.addEventListener("click",()=>{
    Funcremovemobilenav();

 });

// //modal


//   // Get the modal
let membermodal = document.getElementById("member-modal");

let closespan = document.querySelector(".member-modal-close");

closespan.onclick=function() {
    if(membermodal){
        membermodal.style.display = "none";
    }
   
  };

    window.addEventListener("click", function(event) {
      if (event.target == membermodal) {
        membermodal.style.display = "none";
      }
  });


//   // Get the button that opens the modal
//let memberbtn = document.getElementById("openModalBtn");
  
//   // Get the <span> element that closes the modal
//   let span = document.querySelector(".member-modal-close");
  
//   // Get the "Back" and "Next" buttons
//   let backBtn = document.getElementById("backBtn");
//   let nextBtn = document.getElementById("nextBtn");
  
   // When the user clicks the button, open the modal
//    memberbtn.onclick = function() {
//     membermodal.style.display = "block";
//   }
  
//   // When the user clicks on <span> (x), close the modal
//   span.addEventListener("click", function() {
//       modal.style.display = "none";
//   });
  
//   // When the user clicks anywhere outside of the modal, close it
//   window.addEventListener("click", function(event) {
//       if (event.target == modal) {
//           modal.style.display = "none";
//       }
//   });
  
//   // Add click events for "Back" and "Next" buttons
//   backBtn.onclick = function() {
//       alert("Back button clicked!");
//   }
  
//   nextBtn.onclick = function() {
//       alert("Next button clicked!");
//   }
  








// form submition member page 

 jQuery(document).ready(function($){
    console.log("jq works");
    $('.memeber-page-service-submit-btn').click(function(e){
        e.preventDefault();
        console.log('Form Submitted');
  
        let formSelected = e.currentTarget.parentElement;
        //let nextele=formSelected.next();
       // let modaldiv=nextele.children()[0];
       // let product_id   = document.getElementById(formSelected.id + '-hidden').value;
  
       // let values = [];
  
       // values = Array.from( document.querySelectorAll( 'input[type=checkbox]:checked' )).map(item=>item.value);
  
         let name   = document.getElementById('name').value;
         let surname   = document.getElementById('surname').value;
         let address   = document.getElementById('address').value;
         let telnum   = document.getElementById('telnum').value;
        
            $.ajax({
                // Pass the admin-ajax.php into url.
                url: ajax_object.ajax_url,
                data: {
                    'action': 'ceylonms_jobs_add',
                    'name': name,
                    'surname': surname,
                    'address': address, 
                    'telnum': telnum
                },
                type: 'post',
                success: function(res){
                    console.log(res);
                    document.getElementById("member-modal").style.display = "block";
                    document.querySelector('.submit-results-member-jobs').innerHTML=res;
                    formSelected.reset();
                   // window.location.reload();
                },
                error: function(err){
                    console.log(err);
                    document.getElementById("member-modal").style.display = "block";
                    //document.querySelectorAll(".modal-pay-btn").style.display = "none";

                    document.querySelector('.submit-results-member-jobs').innerHTML=err;
                    formSelected.reset();
                },
            });
        
  
        //formSelected.reset();
        
        // console.log(formSelected);
        // console.log(values);
        
    });


   

  });


  