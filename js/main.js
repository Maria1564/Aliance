const navbar = document.querySelector(".navbar");
const logoLight = document.querySelector(".logo-light"); 
const logo = document.querySelector(".logo"); 
const mMenuToggle = document.querySelector(".mobile-menu-toggle")
const menu = document.querySelector(".mobile-menu")
const isFront = document.body.classList.contains("front-page") //содержит ли body класс front-page

//Включает светлый режим меню
const lightModeOn = (event)=>{
   navbar.classList.add("navbar-light"); //Добавляет класс под название navbar-light
}

//Выключает светлый режим меню
const lightModeOff = (event)=>{
   navbar.classList.remove("navbar-light");
}

// Меняет высоту навигации
const changeNavHeight = (height)=> {
  navbar.style.height = height
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
   this.scrollY > 1 ? changeNavHeight("4.625rem") : changeNavHeight("5.875rem");
   if(isFront) {
    this.scrollY > 1 ? lightModeOn() : lightModeOff();
   }
});

mMenuToggle.addEventListener("click", (event)=>{
   event.preventDefault();
   menu.classList.contains("is-open") ? closeMenu() : openMenu();
});

const swiper = new Swiper('.features-slider', {
   speed: 400,
   slidesPerView: "auto",
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


 const swiperSteps = new Swiper('.steps-slider', {
   speed: 400,
   slidesPerView: "auto",
   navigation: {
      nextEl: '.steps-button-next',
      prevEl: '.steps-button-prev',
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
      }
    }
 });

 const swiperBlog = new Swiper('.blog-slider', {
   speed: 400,
   slidesPerView: 1,
   spaceBetween: 30,
   navigation: {
      nextEl: '.blog-button-next',
      prevEl: '.blog-button-prev',
    },
    breakpoints: {
  
      768: {
        slidesPerView: 2,

      }
    }
 });

const modal = document.querySelector(".modal")
const modalDilog = document.querySelector(".modal-dialog")
const modalThanks = document.querySelector(".modal-thanks")
const modalDilogThanks = document.querySelector(".modal-dialog-thanks")
const btnSend = document.querySelector(".btn-send")

document.addEventListener("click", (event)=>{
    if(event.target.dataset.toggle == "modal" || 
    event.target.parentNode.dataset.toggle == "modal" ||
    !event.composedPath().includes(modalDilog) && modal.classList.contains("is-open") ) {
      
      event.preventDefault();
      modal.classList.toggle("is-open")
      if(modal.classList.contains("is-open")){
        document.body.style.overflow = "hidden"
      }else{
        document.body.style.overflow = "auto"
      }
      
    }
})


// document.addEventListener("click", (event)=>{
//   if(event.target.dataset.toggle == "modal-thanks" || 
//     event.target.parentNode.dataset.toggle == "modal-thanks" ||
//     !event.composedPath().includes(modalDilogThanks) && modalThanks.classList.contains("is-open")
//     ){
//       console.log(modalThanks.classList)
//       event.preventDefault();
//       modalThanks.classList.remove("is-open")
    
//       if(modalThanks.classList.contains("is_open2")){
//         document.body.style.overflow = "hidden"
//       }else{
//         document.body.style.overflow = "auto"
//       }
      
//     }
// })
document.addEventListener("keyup", (event)=>{
  if (event.key === 'Escape' && modal.classList.contains("is-open")) {
    modal.classList.toggle("is-open")
  }
})

btnSend.addEventListener("click", (event)=>{
  event.preventDefault();
  modal.classList.toggle("is-open")
  modalThanks.classList.add("is-open2")
  if(modalThanks.classList.contains("is-open2")){
    document.body.style.overflow = "hidden"
  }else{
    document.body.style.overflow = "auto"
  }
})


const forms = document.querySelectorAll("form"); 
forms.forEach((form)=>{
  let inputPhone = form.querySelector("[name=userphone]")
  let inpMask = new Inputmask("+7 (999) 999-99-99")
  inpMask.mask(inputPhone)
  const validation = new JustValidate(form, {
    errorFieldCssClass: 'is-invalid',
  });
  validation
  .addField("[name = username]", [
    {
      rule: 'required', //поле обязательно для заполнения
      errorMessage: 'Укажите имя',
    },
    {
      rule: 'maxLength',
      value: 30,
      errorMessage: 'Максимально 30 символов ',
    },
  ])
  .addField("[name = userphone]", [
    {
      rule: 'required',
      errorMessage: 'Укажите номер телефона',
    },
  ])
  .onSuccess((event) => {
    const thisForm = event.target;  //наща форма
    const formData = new FormData(thisForm) //данные из нашей формы

    const ajaxSend = (formData) => {
      fetch(thisForm.getAttribute("action"), {
        method: thisForm.getAttribute("method"),
        body: formData,
      }).then((respons)=>{
        if(respons.ok) {
          thisForm.reset() //очистка формы
          alert("Форма отправлена!")
        }else { 
          alert("Ошибка: ", respons.status.text)
        }
      })
    } 

    ajaxSend(formData)
  });
})
