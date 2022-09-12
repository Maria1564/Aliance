const navbar = document.querySelector(".navbar");
const logo = document.querySelector(".logo-svg use"); //обращение через класс .logo-svg к тегу svg (который внутри этого класса)
const mMenuToggle = document.querySelector(".mobile-menu-toggle")
const menu = document.querySelector(".mobile-menu")

//Включает светлый режим меню
const lightModeOn = (event)=>{
   navbar.classList.add("navbar-light"); //Добавляет класс под название navbar-light
   logo.href.baseVal = "./img/sprite.svg#logo"
}

//Выключает светлый режим меню
const lightModeOff = (event)=>{
   navbar.classList.remove("navbar-light");
   logo.href.baseVal = "./img/sprite.svg#logo-light"
}

//Функция открывания меню
const openMenu = (event)=>{  
   menu.classList.add ("is-open"); //Вешает класс is-open
   mMenuToggle.classList.add("close-menu")
   document.body.style.overflow = "hidden" //Запрещает прокрутку сайта под меню
   lightModeOn()
}

//Функция закрывания меню
const closeMenu = (event)=>{  
   menu.classList.remove ("is-open"); //Убирает класс is-open
   mMenuToggle.classList.remove("close-menu")
   document.body.style.overflow = "" //Возвращает прокрутку сайта под меню
   this.scrollY > 1 ? lightModeOn() : lightModeOff();
   
}

window.addEventListener("scroll", () => {
   this.scrollY > 1 ? lightModeOn() : lightModeOff();
});

mMenuToggle.addEventListener("click", (event)=>{
   event.preventDefault();
   menu.classList.contains("is-open") ? closeMenu() : openMenu();
});

const swiper = new Swiper('.swiper', {
   speed: 400,
   autoHeight: true,
   slidesPerView: 1,
   navigation: {
      nextEl: '.slider-button-next',
      prevEl: '.slider-button-prev',
    },
    breakpoints: {
      // when window width is >= 576px
      576: {
        slidesPerView: 2,
      },
      // when window width is >= 768px
      768: {
        slidesPerView: 3,
      },
      // when window width is >= 1024px
      1024: {
        slidesPerView: 4,
      },
      // when window width is >= 1200px
      1200: {
         slidesPerView: 5,
       }
    }
 });


 const swiper_step = new Swiper('.swiper-step', {
   speed: 400,
   autoHeight: true,
   slidesPerView: 1,
   navigation: {
      nextEl: '.slider-button-next_step',
      prevEl: '.slider-button-prev_step',
    },
    breakpoints: {
 
    300: {
        slidesPerView: 2,
      },
   
      760: {
         slidesPerView: 3,
      },

      1100: {
         slidesPerView:4,
      }
    }
 });