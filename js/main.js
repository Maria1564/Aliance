const navbar = document.querySelector(".navbar")
window.addEventListener("scroll", () => {
   if(this.scrollY > 1 ){
    navbar.classList.add("navbar-light")  //Добавляет класс под название navbar-light
   }else{
    navbar.classList.remove("navbar-light")
   }
    
})