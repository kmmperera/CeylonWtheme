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
    $('.member-page-service-input-form').on('submit',function(e){
        e.preventDefault();
        console.log('Form Submitted');
          let  jobform = $(this);
                    
          let membermodal = jobform.siblings().find(".member-modal");

          let closespan = jobform.siblings().find(".member-modal-close");

          closespan.click(function(){

            membermodal.css("display", "none");
          });

       
         let name= jobform.find('.name').val();
         let surname= jobform.find('.surname').val();
         let address= jobform.find('.address').val();
         let telnum= jobform.find('.telnum').val();
         let staff= jobform.find('.staff').val();
         let operation= jobform.find('.operation').val();
       // console.log(jobform);
        console.log(name);

        //  let name   = document.getElementById('name').value;
        //  let surname   = document.getElementById('surname').value;
        //  let address   = document.getElementById('address').value;
        //  let telnum   = document.getElementById('telnum').value;
        //  let staff   = document.getElementById('staff').value;
        //  let operation   = document.getElementById('operation').value;

            $.ajax({
                // Pass the admin-ajax.php into url.
                url: ajax_object.ajax_url,
                data: {
                    'action': 'ceylonms_jobs_add',
                    'name': name,
                    'surname': surname,
                    'address': address, 
                    'telnum': telnum,
                    'staff': staff,
                    'operation': operation

                },
                type: 'post',
                success: function(res){
                    console.log(res);
                  //  document.getElementById("member-modal").style.display = "block";
                  //  document.querySelector('.submit-results-member-jobs').innerHTML=res;

                    let siblings = jobform.siblings();
                    let  siblingsChildren = siblings.find('.member-modal');
                    siblingsChildren.css("display", "block");
                    siblingsChildren.find('.submit-results-member-jobs').html(res);
                    jobform[0].reset();
                   // window.location.reload();
                },
                error: function(err){
                    console.log(err);
                  //  document.getElementById("member-modal").style.display = "block";
                    //document.querySelectorAll(".modal-pay-btn").style.display = "none";

                   // document.querySelector('.submit-results-member-jobs').innerHTML=err;
                   let siblings = jobform.siblings();
                   let  siblingsChildren = siblings.find('.member-modal');
                   let  paybutton = siblings.find('.modal-pay-btn');

                   siblingsChildren.css("display", "block");
                   paybutton.css("display", "none");
                   siblingsChildren.find('.submit-results-member-jobs').html(err);
                   jobform[0].reset();

                },
            });
        
  
        //formSelected.reset();
        
        // console.log(formSelected);
        // console.log(values);
        
    });



    // accordion
     // Function to toggle accordion sections
     console.log("accordion work");
     function toggleAccordion(sectionId) {
         $('.accordion-content').slideUp();
         $('#' + sectionId + ' .accordion-content').slideDown();
     }
 
     // Get the URL parameter and expand the corresponding section
     const section =window.location.hash ? window.location.hash.substring(1) :null ;
     const ifaccordion=$('.staff-accordion');
     if (section) {
         toggleAccordion(section);
     }
 
     // Add click event to accordion headers to toggle sections
     if(ifaccordion){ 
             $('.accordion-header').click(function() {
                 const sectionId = $(this).parent().attr('id');
                 toggleAccordion(sectionId);
             });
 
         }   
         
         function toggleAccordion(sectionId) {
            $('.accordion-content').slideUp();
            $('#' + sectionId + ' .accordion-content').slideDown();
        }  
   

  });


  

  