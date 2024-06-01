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