window.addEventListener("scroll", function(){

    const nav = document.getElementById("navbar");

    if(window.scrollY > 10){
        nav.classList.add("nav-scroll");
    }else{
        nav.classList.remove("nav-scroll");
    }

});