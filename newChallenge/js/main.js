window.addEventListener('scroll', function(){

  var tete = document.getElementById("tete");
  var nav = document.getElementById("nav");
  var title = document.querySelectorAll(".Navbar-title");

  if (window.scrollY > 400){

    tete.classList.add("teteScroll");
    nav.classList.add("navScroll");

    for (var i = 0; i < title.length; i++){
      title[i].classList.add("titleScroll");
    }

    title.ClassList.add("titleScroll");
  }

  else{

    tete.classList.remove("teteScroll");
    nav.classList.remove("navScroll");
         
    for (var i = 0; i < title.length; i++){
      title[i].classList.remove("titleScroll");
    }
  }
})



/*----------------------------------------------------------------------------------*/



var docTitle = document.title;

if (docTitle == "Smartphone") {
  document.querySelectorAll('#icon-phone').forEach(item => {
    item.style.color="#eb7371";
  })
}

if (docTitle == "Ordinateur") {
  document.querySelectorAll('#icon-ordi').forEach(item => {
    item.style.color="#eb7371";
  })
}

if (docTitle == "Télévision") {
  document.querySelectorAll('#icon-tele').forEach(item => {
    item.style.color="#eb7371";
  })
}



/*-----------------------------------------------------------------------------------*/

/*-----------------------------------------------------------------------------------*/


