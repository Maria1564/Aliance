<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;600;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="./css/normalize.css" />
    <link rel="stylesheet" href="./css/style.css?v=9.8" />
    <title>Aliance Production</title>
  </head>
  <body class="front-page">
    <div class="mobile-menu">
      <ul class="mobile-menu-nav">
        <li class="mobile-menu-nav-item">
          <a href="#" class="mobile-menu-link">О компании</a>
        </li>
        <li class="mobile-menu-nav-item">
          <a href="#" class="mobile-menu-link">Контрактное производство</a>
          <ul class="mobile-submenu">
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#">Автомобильная химия</a>
            </li>
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#">Бытовая химия</a>
            </li>
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#"
                >Дезинфицирующие средства</a
              >
            </li>
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#">Пищевые аэрозоли</a>
            </li>
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#"
                >Косметическая продукция</a
              >
            </li>
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#">Краски аэрозольные</a>
            </li>
          </ul>
        </li>
        <li class="mobile-menu-nav-item">
          <a href="#" class="mobile-menu-link">Собственные торговые марки</a>
          <ul class="mobile-submenu">
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#">Автохимия AG-Tech</a>
            </li>
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#">Автохимия AP</a>
            </li>
          </ul>
        </li>
        <li class="mobile-menu-nav-item">
          <a href="#" class="mobile-menu-link">Новости</a>
        </li>
        <li class="mobile-menu-nav-item">
          <a href="#" class="mobile-menu-link">Контакты</a>
        </li>
      </ul>
      <a href="tel:+74996861014" class="mobile-phone">+7 (499) 686-10-14</a>
      <div class="mobile-info">
        <svg class="mark-icon" width="24" height="24">
          <use href="./img/sprite.svg#mark"></use>
        </svg>
        <address class="mobile-info-address">
          г. Мосвка, Холодильный пер. 4к1с8
        </address>
      </div>
      <!-- /.mobile-info -->
      <div class="mobile-info">
        <svg class="mail-icon" width="24" height="24">
          <use href="./img/sprite.svg#mail"></use>
        </svg>
        <a href="mailto:a.dragunov@tdaliance.ru" class="mobile-info-email">
          a.dragunov@tdaliance.ru
        </a>
      </div>
      <!-- /.mobile-info -->
      <div class="mobile-networks">
        <a href="#" class="mobile-networks-links">
          <svg class="vk-icon" width="24" height="24">
            <use href="./img/sprite.svg#vk"></use>
          </svg>
        </a>
        <a href="#" class="mobile-networks-links">
          <svg class="inst-icon" width="24" height="24">
            <use href="./img/sprite.svg#inst"></use>
          </svg>
        </a>
      </div>
      <!-- /.mobile-networks -->
    </div>
    <nav class="navbar">
      <a href="#" class="mobile-menu-toggle">
        <div class="mobile-menu-line"></div>
        <div class="mobile-menu-line"></div>
        <div class="mobile-menu-line"></div>
      </a>
      <a href="./" class="header-logo">
        <svg class="logo-svg logo-light">
          <use href="./img/sprite.svg#logo-light"></use>
        </svg>
        <svg class="logo-svg logo-dark">
          <use href="./img/sprite.svg#logo"></use>
        </svg>
      </a>
      <ul class="header-nav">
        <li class="header-nav-item">
          <a href="./about.php" class="header-nav-link">О компании</a>
        </li>
        <li class="header-nav-item">
          <a href="./production.php" class="header-nav-link">Контрактное производство</a>
        </li>
        <li class="header-nav-item">
          <a href="#" class="header-nav-link">Собственные торговые марки</a>
        </li>
        <li class="header-nav-item">
          <a href="#" class="header-nav-link">Новости</a>
        </li>
        <li class="header-nav-item">
          <a href="#" class="header-nav-link">Контакты</a>
        </li>
      </ul>
      <div class="header-phone">
        <svg class="phone-icon" width="24" height="24">
          <use href="./img/sprite.svg#phone"></use>
        </svg>
        <a href="tel:+74996861014" class="header-phone-link">
          +7 (499) 686-10-14
        </a>
      </div>
      <!-- /.header-phone -->
      <button class="btn navbar-btn" data-toggle="modal">
        <svg class="button-icon" width="24" height="24">
          <use href="./img/sprite.svg#phone"></use>
        </svg>
        <span class="btn-text">Получить консультацию</span>
      </button>
    </nav>
    <!-- /.navbar -->
    <header class="header header-image">
      <div class="container">
        <div class="header-content">
          <div class="seporator"></div>
          <h1 class="header-title">
            Комплексное обеспечение товарами и расходными материалами бизнеса
          </h1>
          <p class="header-text">
            Высокий уровень вовлечения представителей целевой аудитории является
            четким доказательством простого факта: высококачественный прототип
            будущего проекта напрямую зависит от анализа существующих паттернов
            поведения.
          </p>
          <button class="btn" data-toggle="modal">Подробнее о компании</button>
        </div>
        <!-- /.header-content -->

        <!-- основной блок слайдера -->
        <div class="swiper features-slider">
          <!-- оберта слайдера-->
          <ul class="swiper-wrapper header-features">
            <!-- слайды -->
            <li class="swiper-slide header-features-item" style="width: 250px">
              <svg width="36" height="36">
                <use href="./img/sprite.svg#time"></use>
              </svg>
              <p class="header-features-text">Непрерывная работа c 2017 года</p>
            </li>
            <li class="swiper-slide header-features-item">
              <svg width="36" height="36">
                <use href="./img/sprite.svg#certificate"></use>
              </svg>
              <p class="header-features-text">Вся продукция сертифицирована</p>
            </li>
            <li class="swiper-slide header-features-item">
              <svg width="36" height="36">
                <use href="./img/sprite.svg#control"></use>
              </svg>
              <p class="header-features-text">
                Контроль качества на всех этапах
              </p>
            </li>
            <li class="swiper-slide header-features-item">
              <svg width="36" height="36">
                <use href="./img/sprite.svg#delivery"></use>
              </svg>
              <p class="header-features-text">
                Возможны поставки по всей России
              </p>
            </li>
            <li class="swiper-slide header-features-item">
              <svg width="36" height="36">
                <use href="./img/sprite.svg#speed"></use>
              </svg>
              <p class="header-features-text">Оперативное производство</p>
            </li>
          </ul>

          <!-- кнопки навигации вперёд.назад-->
          <div class="slider-buttons">
            <div class="slider-button-prev">
              <svg width="36" height="24">
                <use href="./img/sprite.svg#arrow-prev"></use>
              </svg>
            </div>
            <div class="slider-button-next">
              <svg width="36" height="24">
                <use href="./img/sprite.svg#arrow-next"></use>
              </svg>
            </div>
          </div>
          <!-- /.slider-buttons -->
        </div>

        <!-- /.header-features -->
      </div>
      <!-- /.container -->
    </header>

    <section class="section section-light">
      <div class="container">
        <div class="seporator"></div>
        <h2 class="section-title">схема работы</h2>

        <div class="swiper-step steps-slider">
          <ol class="swiper-wrapper steps">
            <li class="swiper-slide steps-item">
              <span class="steps-num">01</span>
              <h3 class="steps-title">Знакомство</h3>
              <p class="steps-text">
                Безусловно, сплочённость команды профессионалов позволяет
                оценить значение форм воздействия.
              </p>
              <a href="" class="button-link">Оставить заявку</a>
            </li>
            <li class="swiper-slide steps-item">
              <span class="steps-num">02</span>
              <h3 class="steps-title">Заключение договора</h3>
              <p class="steps-text">
                Лишь интерактивные прототипы призваны к ответу.
              </p>
            </li>
            <li class="swiper-slide steps-item">
              <span class="steps-num">03</span>
              <h3 class="steps-title">Производство</h3>
              <p class="steps-text">
                А также стремящиеся вытеснить традиционное производство,
                нанотехнологии функционально разнесены на независимые элементы.
              </p>
            </li>
            <li class="swiper-slide steps-item">
              <span class="steps-num">04</span>
              <h3 class="steps-title">Доставка</h3>
              <p class="steps-text">
                В частности, экономическая повестка сегодняшнего дня говорит о
                возможностях приоритизации разума над эмоциями.
              </p>
            </li>
          </ol>

          <div class="steps-buttons primary-buttons-wrapper">
            <div class="steps-button-prev primary-button-prev">
              <svg width="30" height="20">
                <use href="./img/sprite.svg#arrow-prev"></use>
              </svg>
            </div>
            <div class="steps-button-next primary-button-next">
              <svg width="30" height="20">
                <use href="./img/sprite.svg#arrow-next"></use>
              </svg>
            </div>
          </div>
          <!-- /.steps-buttons -->
        </div>
      </div>
      <!-- /.container -->
    </section>

    <section class="section production">
      <div class="container">
        <div class="seporator"></div>
        <h2 class="section-title">Контрактное производство</h2>
        <div class="cards">
          <a href="#" class="card">
            <div class="card-content">
              <h3 class="card-title">Автомобильная химия</h3>
              <p class="card-text">
                Безусловно, сплочённость команды профессионалов позволяет
                оценить значение форм воздействия.
              </p>
            </div>
            <!-- /.card-content -->
            <img
              src="./img/0503577001614868834_1.png"
              alt="Автомобильная химия"
              class="card-img"
            />
          </a>
          <a href="#" class="card">
            <div class="card-content">
              <h3 class="card-title">Бытовая химия</h3>
              <p class="card-text">
                А также стремящиеся вытеснить традиционное производство,
                нанотехнологии функционально разнесены на независимые элементы.
              </p>
            </div>
            <img
              src="./img/Без имени-2.png"
              alt="Бытовая химия"
              class="card-img"
            />
          </a>
          <a href="#" class="card">
            <div class="card-content">
              <h3 class="card-title">Дезинфицирующие средства</h3>
              <p class="card-text">
                Лишь интерактивные прототипы призваны к ответу.
              </p>
            </div>
            <img
              src="./img/5dd4c227c7dc6914837490.png"
              alt="Дезинфицирующие средства"
              class="card-img"
            />
          </a>
          <a href="#" class="card">
            <div class="card-content">
              <h3 class="card-title">Пищевые аэрозоли</h3>
              <p class="card-text">
                Безусловно, сплочённость команды профессионалов позволяет
                оценить значение форм воздействия.
              </p>
            </div>
            <img
              src="./img/5dd4c227c7dc6914837490.png"
              alt="Пищевые аэрозоли"
              class="card-img"
            />
          </a>
          <a href="#" class="card">
            <div class="card-content">
              <h3 class="card-title">Косметическая продукция</h3>
              <p class="card-text">
                Лишь интерактивные прототипы призваны к ответу.
              </p>
            </div>
            <img
              src="./img/0503577001614868834_1.png"
              alt="Косметическая продукция"
              class="card-img"
            />
          </a>
          <a href="#" class="card">
            <div class="card-content">
              <h3 class="card-title">Краски аэрозольные</h3>
              <p class="card-text">
                А также стремящиеся вытеснить традиционное производство,
                нанотехнологии функционально разнесены на независимые элементы.
              </p>
            </div>
            <img
              src="./img/Без имени-2.png"
              alt="Краски аэрозольные"
              class="card-img"
            />
          </a>
        </div>
        <!-- /.cards -->
      </div>
    </section>

    <section class="section trademark">
      <div class="container">
        <div class="seporator"></div>
        <h2 class="section-title">собственные <span>торговые</span> марки</h2>
        <div class="trademark-cards">
          <div class="trademark-card">
            <svg class="trademark-card-logo">
              <use href="./img/sprite.svg#agtech"></use>
            </svg>
            <h3 class="trademark-card-title">Автохимия AG-Tech</h3>
            <p class="trademark-card-text">
              Для современного мира разбавленное изрядной долей эмпатии,
              рациональное мышление создаёт предпосылки для поставленных
              обществом задач.
            </p>
          </div>
          <div class="trademark-card">
            <svg class="trademark-card-logo">
              <use href="./img/sprite.svg#ap"></use>
            </svg>
            <h3 class="trademark-card-title">Автохимия AP</h3>
            <p class="trademark-card-text">
              Для современного мира разбавленное изрядной долей эмпатии,
              рациональное мышление создаёт предпосылки для поставленных
              обществом задач.
            </p>
          </div>
        </div>
        <!-- /.trademark-cards -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /.section trademark -->

    <section class="section founder">
      <img src="./img/founder.jpg" alt="founder" class="founder-photo" />
      <div class="container">
        <div class="founder-content-wrapper">
          <div class="founder-content">
            <div class="seporator"></div>
            <h2 class="section-title">Отношение к делу и к клиентам</h2>
            <p class="founder-text">
              Кстати, интерактивные прототипы описаны максимально подробно.
              Повседневная практика показывает, что укрепление и развитие
              внутренней структуры говорит о возможностях соответствующих
              условий активизации. Внезапно, независимые государства, которые
              представляют собой яркий пример континентально-европейского типа
              политической культуры, будут подвергнуты целой серии независимых
              исследований. С учётом сложившейся международной обстановки,
              синтетическое тестирование выявляет срочную потребность системы
              массового участия. <br />
            </p>

            <p class="founder-text founder-text2">
              А ещё действия представителей оппозиции, превозмогая сложившуюся
              непростую экономическую ситуацию, в равной степени предоставлены
              сами себе. Не следует, однако, забывать, что выбранный нами
              инновационный путь в значительной степени обусловливает важность
              дальнейших направлений развития.
            </p>
            <a href="" class="button-link">Подробнее о компании</a>
          </div>
          <!-- /.founder-content-wrapper -->
        </div>
        <!-- /.founder-content -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /.section founder -->

    <section class="section clients">
      <div class="container">
        <div class="seporator"></div>
        <div class="clients-wrapper">
          <div class="clients-content">
            <h2 class="section-title">
              Производим аэрозольную продукцию для разных сфер
            </h2>
            <ul class="clients-list">
              <li class="clients-list-item">
                <svg width="30" height="30" class="clinet-list-icon">
                  <use href="./img/sprite.svg#him"></use>
                </svg>
                Химические производства
              </li>
              <li class="clients-list-item">
                <svg width="30" height="30" class="clinet-list-icon">
                  <use href="./img/sprite.svg#car"></use>
                </svg>
                Автомойки
              </li>
              <li class="clients-list-item">
                <svg width="30" height="30" class="clinet-list-icon">
                  <use href="./img/sprite.svg#eat"></use>
                </svg>
                Пищевая продукция
              </li>
              <li class="clients-list-item">
                <svg width="30" height="30" class="clinet-list-icon">
                  <use href="./img/sprite.svg#brush"></use>
                </svg>
                Лаки и краски
              </li>
              <li class="clients-list-item">
                <svg width="30" height="30" class="clinet-list-icon">
                  <use href="./img/sprite.svg#cosmetic"></use>
                </svg>
                Косметические средства
              </li>
              <li class="clients-list-item">
                <svg width="30" height="30" class="clinet-list-icon">
                  <use href="./img/sprite.svg#car-cosm"></use>
                </svg>
                Автомобильная косметика
              </li>
              <li class="clients-list-item">
                <svg width="30" height="30" class="clinet-list-icon">
                  <use href="./img/sprite.svg#shirt"></use>
                </svg>
                Косметика по уходу за одеждой
              </li>
              <li class="clients-list-item">
                <svg width="30" height="30" class="clinet-list-icon">
                  <use href="./img/sprite.svg#boots"></use>
                </svg>
                Косметика по уходу за обувью
              </li>
              <li class="clients-list-item">
                <svg width="30" height="30" class="clinet-list-icon">
                  <use href="./img/sprite.svg#bricks"></use>
                </svg>
                Строительные материалы
              </li>
              <li class="clients-list-item">
                <svg width="30" height="30" class="clinet-list-icon">
                  <use href="./img/sprite.svg#more"></use>
                </svg>
                И многих других
              </li>
            </ul>
          </div>
          <!-- /.clients-content -->

          <div class="clients-logo-list">
            <a href="#" class="clients-logo-item">
              <img src="./img/client.png" alt="" class="clients-logo" />
            </a>
            <a href="#" class="clients-logo-item">
              <img src="./img/client.png" alt="" class="clients-logo" />
            </a>
            <a href="#" class="clients-logo-item">
              <img src="./img/client.png" alt="" class="clients-logo" />
            </a>
            <a href="#" class="clients-logo-item">
              <img src="./img/client.png" alt="" class="clients-logo" />
            </a>
            <a href="#" class="clients-logo-item">
              <img src="./img/client.png" alt="" class="clients-logo" />
            </a>
            <a href="#" class="clients-logo-item">
              <img src="./img/client.png" alt="" class="clients-logo" />
            </a>
            <a href="#" class="clients-logo-item">
              <img src="./img/client.png" alt="" class="clients-logo" />
            </a>
            <a href="#" class="clients-logo-item">
              <img src="./img/client.png" alt="" class="clients-logo" />
            </a>
            <a href="#" class="clients-logo-item">
              <img src="./img/client.png" alt="" class="clients-logo" />
            </a>
          </div>
          <!-- /.clients-logo -->
        </div>
        <!-- /.clients-wrapper -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /.section clients -->

    <section class="section blog">
      <div class="container">
        <div class="seporator"></div>
        <h2 class="section-title">Блог экспертов в области производства</h2>

        <div class="swiper blog-slider">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
        
            <!-- Slides -->
            <a href="#" class="swiper-slide blog-card">
              <img src="./img/blog/img-blog1.jpg" alt="" class="blog-card-img">
              <h3 class="blog-card-title">Современная методология разработки одухотворила всех причастных</h3>
              <p class="blog-card-text">
                Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую ситуацию, 
                в равной степени предоставлены...
              </p>
            </a>
            <a href="#" class="swiper-slide blog-card">
              <img src="./img/blog/img-blog2.jpg" alt="" class="blog-card-img">
              <h3 class="blog-card-title">Сложно сказать, почему жизнь прекрасна</h3>
              <p class="blog-card-text">
                Сложно сказать, почему элементы политического процесса функционально разнесены на независимые элементы. 
                Безусловно, высокотехнологичная...
              </p>
            </a>
            <a href="#" class="swiper-slide blog-card">
              <img src="./img/blog/img-blog1.jpg" alt="" class="blog-card-img">
              <h3 class="blog-card-title">Современная методология разработки одухотворила всех причастных</h3>
              <p class="blog-card-text">
                Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую ситуацию, 
                в равной степени предоставлены...
              </p>
            </a>
          </div>

          <div class="blog-slider-footer">
            <a href="#" class="button-link">Весь блог</a>
            <div class="blog-buttons primary-buttons-wrapper">
              <div class="blog-button-prev primary-button-prev">
                <svg width="30" height="20">
                  <use href="./img/sprite.svg#arrow-prev"></use>
                </svg>
              </div>
              <div class="blog-button-next primary-button-next">
                <svg width="30" height="20">
                  <use href="./img/sprite.svg#arrow-next"></use>
                </svg>
              </div>
            </div>
          </div>
          <!-- /.blog-slider-footer -->
          <!-- /.blog-buttons -->
        </div>
      </div>
      <!-- /.container -->
    </section>
    <!-- /.section blog -->

<<<<<<< HEAD
    <? include_once("footer.php")?>
=======
    <section class="section calltoaction">
      <div class="bg-gray section-cta">
        <img src="./img/cta.png" alt="call to action" class="cta-image">
        <div class="cta-form-wrapper container">
          <form action="#" class="cta-form">
            <h2 class="section-title cta-form-title">
              Хотите сотрудничать?
            </h2>
            <p class="cta-form-text">
              Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время 
              ответит на все интересующие вопросы и поможем даже в самых сложных случаях!
            </p>
            <div class="input-group-wrapper">
              <div class="input-group">
                <input id="user-name" type="text" class="input" placeholder=" ">
                <label class="input-group-label" for="user-name">Имя</label>
              </div>
              <!-- /.input-group -->
              <div class="input-group">
                <input id="user-phone" type="tel" class="input" placeholder=" ">
                <label class="input-group-label" for="user-phone">Номер телефона</label>
              </div>
              <!-- /.input-group -->
            </div>
             <!-- /.input-group-wrapper -->
            <div class="cta-form-footer">
              <button type="submit" class="btn cta-form-btn">Отправить заявку</button>
              <div class="notify">
                <svg class="notify-icon" width="14" height="14">
                  <use href="./img/sprite.svg#shield"></use>
                </svg>
                <p class="notify-text">
                  Обращаясь к нам вы получаете не только профессиональную работу, 
                  но и абсолютную конфиденциальность информации!
                </p>
              </div>
            </div>
            <!-- /.cta-form-footer -->
          </form>
        </div>
        <!-- /.cta-form-wrapper -->
      </div>
      <!-- /.section calltoaction -->
    </section>
    <!-- /.calltoaction -->

    <footer class="footer">
      <div class="container">
        <div class="footer-top">
          <svg class="logo-svg footer-logo">
            <use href="./img/sprite.svg#logo"></use>
          </svg>
          <a href="tel:+74996861014" class="footer-phone">+7 (499) 686-10-14</a>
          
          <div class="footer-info">
            <svg class="mark-icon" width="24" height="24">
              <use href="./img/sprite.svg#mark"></use>
            </svg>
            <address class="footer-info-address">
              г. Мосвка, Холодильный пер. 4к1с8
            </address>
          </div>
          <!-- /.footer-info -->
          <div class="footer-info">
            <svg class="mail-icon" width="24" height="24">
              <use href="./img/sprite.svg#mail"></use>
            </svg>
            <a href="mailto:a.dragunov@tdaliance.ru" class="footer-info-email">
              a.dragunov@tdaliance.ru
            </a>
          </div>
          <!-- /.footer-info -->

          <div class="footer-social">
            <a class="footer-social-link">
              <svg class="footer-social-icon" width="24" height="24">
                <use href="./img/sprite.svg#vk"></use>
              </svg>
            </a>
            <a class="footer-social-link">
              <svg class="footer-social-icon" width="24" height="24">
                <use href="./img/sprite.svg#inst"></use>
              </svg>
            </a>
          </div>
          <!-- /.footer-social -->
        </div>
        <!-- /.footer-top -->
      </div>

      <hr color="#EBEBF0" class="footer-seporator"/>

      <div class="container">
        <div class="footer-bottom">
          <div class="footer-menu-wrapper">
              <h2 class="footer-menu-title">Контрактное производство</h2>
              <ul class="footer-menu-list footer-menu-column-2">
                <li class="footer-menu-item">
                  <a href="#" class="footer-menu-link">Автомобильная химия</a>
                </li>
                <li class="footer-menu-item">
                  <a href="#" class="footer-menu-link">Бытовая химия</a>
                </li>
                <li class="footer-menu-item">
                  <a href="#" class="footer-menu-link">Дезинфицирующие средства</a>
                </li>
                <li class="footer-menu-item">
                  <a href="#" class="footer-menu-link">Пищевые аэрозоли</a>
                </li>
                <li class="footer-menu-item">
                  <a href="#" class="footer-menu-link">Косметическая продукция</a>
                </li>
                <li class="footer-menu-item">
                  <a href="#" class="footer-menu-link">Краски аэрозольные</a>
                </li>
              </ul>
              
          </div>
          <!-- /.footer-menu-wrapper -->

        <div class="footer-menu-wrapper">
            <h2 class="footer-menu-title">Собственные марки</h2>
            <ul class="footer-menu-list">
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Автохимия AG-Tech</a>
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Автохимия AP</a>
              </li>
            </ul>
        </div>
        <!-- /.footer-menu-wrapper -->

        <div class="footer-menu-wrapper">
          <ul class="footer-menu-list">
            <li class="footer-menu-item">
              <a href="#" class="footer-menu-link footer-menu-link-bold">О компании</a>
            </li>
            <li class="footer-menu-item">
              <a href="#" class="footer-menu-link footer-menu-link-bold">Новости</a>
            </li>
            <li class="footer-menu-item">
              <a href="#" class="footer-menu-link footer-menu-link-bold">Контакты</a>
            </li>
          </ul>
        </div>
        <!-- /.footer-menu-wrapper -->
        </div>
        
        <!-- /.footer-bottom -->
      </div>
      <!-- /.container -->

      <hr color="#EBEBF0" class="footer-seporator"/>

      <div class="container">
        <div class="footer-wrapper">
          <div class="footer-legal">
            <p class="footer-copyright">
              &copy; <?echo date("d.M.Y") ?> «Aliance Production». Все права защищены.
            </p>
            <a href="#" class="footer-policy">
              Политики конфиденциальности
            </a>
          </div>
          <!-- /.footer-legal -->
  
          <div class="footer-author">
            <span class="made-in">Сделано в</span>
            <svg width="52" height="11">
              <use href="./img/sprite.svg#ruso"></use>
            </svg>
          </div>
          <!-- /.footer-author -->
        </div>
        <!-- /.footer-wrapper -->
      </div>
      <!-- /.container -->
    </footer>
    <!-- /.footer -->

    <div class="modal">
      <div class="modal-dialog">
        <h2 class="modal-title">Есть вопросы?</h2>
        <a href="#" class="modal-close" data-toggle="modal">
          <svg class="close-icon" width="24" height="24">
            <use href="./img/sprite.svg#close"></use>
          </svg>
        </a>
        <p class="modal-text">
          Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время ответит на 
          все интересующие вопросы и поможем даже в самых сложных случаях!
        </p>
        <form action="#" class="modal-form">
          <div class="input-group-wrapper input-group-vertical">
            <div class="input-group modal-input-group">
              <input id="modal-user-name" type="text" class="input modal-input" placeholder=" ">
              <label class="input-group-label modal-input-label" for="modal-user-name">Имя</label>
            </div>
            <!-- /.input-group -->
            <div class="input-group modal-input-group">
              <input id="modal-user-phone" type="tel" class="input modal-input" placeholder=" ">
              <label class="input-group-label modal-input-label" for="modal-user-phone">Номер телефона</label>
            </div>
            <!-- /.input-group -->
          </div>
           <!-- /.input-group-wrapper -->
          <div class="modal-form-footer">
            <button type="submit" class="btn modal-form-btn">Отправить заявку</button>
            <div class="notify">
              <svg class="notify-icon" width="14" height="14">
                <use href="./img/sprite.svg#shield"></use>
              </svg>
              <p class="notify-text">
                Обращаясь к нам вы получаете не только профессиональную работу, 
                но и абсолютную конфиденциальность информации!
              </p>
            </div>
          </div>
        </form>
      </div>
    </div>

    <script src="./js/swiper-bundle.min.js"></script>
    <script src="./js/main.js?v=3.8"></script>
  </body>
</html>
>>>>>>> df7c95c53fed29d89433b0741999109e418c11eb
