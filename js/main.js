const navbar = document.querySelector(".navbar");
const logo = document.querySelector(".logo-svg use"); //обращение через класс .logo-svg к тегу svg (который внутри этого класса)
window.addEventListener("scroll", () => {
   if(this.scrollY > 1 ){
    navbar.classList.add("navbar-light");  //Добавляет класс под название navbar-light
    logo.href.baseVal = "./img/sprite.svg#logo"
   }else{
    navbar.classList.remove("navbar-light");
    logo.href.baseVal = "./img/sprite.svg#logo-light"
   }
    
});