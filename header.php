<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>AUTO-SERVICE</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/media.css">
    <script type="text/javascript" src="js/libs.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
  </head>
  <body>
    <header>
      <div class="wrapper-header">
        <img class="logo" src="img/logo.png" alt="AUTO-SERVICE">
        <button class="feedback" type="button">заказать звонок</button>
        <span class="phone">(044)525-25-25</span>
        <div class="clear"></div>
        <img class="photo" src="img/bg.jpg" alt="">
        <p class="tagline">Автосервис с безупречной репутацией!</p>
        <p class="services">рихтовка • покраска • полировка</p>
      </div>
    </header>

    <form id="form">
      <p>Форма обратной связи</p>
      <span>Оставьте Ваши данные и мы свяжемся с Вами</span>
      <p class="userDate">Ваше имя:</p><input type="text" required name="name" placeholder="Имя">
      <p class="userDate">Ваш номер телефона:</p><input type="text" required name="phone" placeholder="Телефон">
      <div class="buttons">
        <button>Отправить</button>
        <button class="closed" type="button">Отмена</button>
    </div>

    <div id="fountainG">
	    <div id="fountainG_1" class="fountainG"></div>
	    <div id="fountainG_2" class="fountainG"></div>
	    <div id="fountainG_3" class="fountainG"></div>
	    <div id="fountainG_4" class="fountainG"></div>
      <div id="fountainG_5" class="fountainG"></div>
      <div id="fountainG_6" class="fountainG"></div>
      <div id="fountainG_7" class="fountainG"></div>
	    <div id="fountainG_8" class="fountainG"></div>
    </div>
  </form>

    <div class="accepted">
      <p>Ваша заявка принята!</p>
      <span>Мы свяжемся с Вами в ближайшее время.</span>
      <button class="closed">Закрыть</button>
    </div>

    <div class="blackout"></div>

    <main>
      <div class="left">
        <p class="menu">Навигация</p>
        <ul>
          <li><a href="/">Главная</a></li>
          <li><a href="repairs">Ремонт кузова</a></li>
          <li><a href="painting">Покраска автомобиля</a></li>
          <li><a href="bumper">Ремонт бамперов</a></li>
          <li><a href="selection">Подбор автоэмалей</a></li>
          <li><a href="local">Локальный ремонт</a></li>
          <li><a href="polish">Полировка автомобиля</a></li>
          <li><a href="contacts">Контакты</a></li>
        </ul>
        <p class="menu menu__vacancies">Вакансии</p>
        <div class="vacancies">
          <p>В настоящее время требуется: рихтовщик, бухгалтер.</p>
        </div>
      </div>

      <div class="right">
        <p class="menu">Новости и акции</p>
        <div class="news">
          <span>После покраски
            полировка прилегающих деталей бесплатно!</span>
            <span>При покраски более одной детали
              подбор краски бесплатно!</span>
            </div>
            <p class="menu menu__equipment">Наше оборудование</p>
            <div class="equipment">
              <img src="img/Trommelberg.jpg" alt="">
              <a href="equipment">Стапель для проверки и восстановления
                геометрии кузова Trommelberg B19 G.</a>
                <img src="img/ColorTech.jpg" alt="">
                <a href="equipment">Окрасочно-сушильная камера
                  ColorTech - высокое европейское качество и надежность.</a>
                </div>
              </div>
