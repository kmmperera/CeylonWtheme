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



 jQuery(document).ready(function($){
    console.log("jq works");
    $('.memeber-page-service-submit-btn').click(function(e){
        e.preventDefault();
        console.log('Form Submitted');
  
        let formSelected = e.currentTarget.parentElement;
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
                    $('.blog-description').html(res);
                   // window.location.reload();
                },
                error: function(err){
                    console.log(err);
                },
            });
        
  
        //formSelected.reset();
        
        // console.log(formSelected);
        // console.log(values);
        
    });
  });