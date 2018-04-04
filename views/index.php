<!--<!DOCTYPE html>-->
<!--<html>-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <title>bluebird</title>-->
<!--</head>-->
<!---->
<!--<body>-->
<!---->
<!--    <select id="offices">-->
<!--        <option disabled selected id="default">Оберіть відділення: </option>-->
<!--        --><?php //foreach($data['offices'] as $offices) { ?>
<!--            <option value="--><?//= $offices['id'] ?><!--">--><?//= $offices['name'] ?><!--</option>-->
<!--        --><?php //} ?>
<!--    </select>-->
<!---->
<!--    <select id="doctors">-->
<!--        <option disabled selected id="default">Оберіть лікаря: </option>-->
<!--        --><?php //foreach($data['doctors'] as $doctors) { ?>
<!--            <option value="--><?//= $doctors['office_id'] ?><!--" data-doctor_id="--><?//= $doctors['id'] ?><!--">--><?//= $doctors['name'] ?><!--</option>-->
<!--        --><?php //} ?>
<!--    </select>-->
<!---->
<!--    <select id="days_of_the_week">-->
<!--        <option disabled selected id="default">Оберіть день тижня: </option>-->
<!--        --><?php //foreach($data['days_of_the_week'] as $days_of_the_week) { ?>
<!--            <option value="--><?//= $days_of_the_week['id'] ?><!--">--><?//= $days_of_the_week['day'] ?><!--</option>-->
<!--        --><?php //} ?>
<!--    </select>-->
<!---->
<!--    <input type="time" name="time_reception">-->
<!---->
<!--    <script type="text/javascript" src="/public/src/js/jquery.min.js"></script>-->
<!--    <script type="text/javascript" src="/public/src/js/script.js"></script>-->
<!--</body>-->
<!---->
<!--</html>-->
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Районна поліклініка</title>

    <!-- Bootstrap Core CSS -->
    <link href="/public/src/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="/public/src/css/animate.css" rel="stylesheet" type="text/css">
    <link href="/public/src/css/style.css" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:300' rel='stylesheet' type='text/css'>

    <!-- IE8 support for HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index" data-spy="scroll" data-target=".navbar-fixed-top">
<div id="content">
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top navbar-shrink text-center">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!--<a class="navbar-brand" href="#page-top">Clinix</a>-->
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="page-scroll">
                        <a href="#page-top"><i class="fa fa-home fa-lg"></i> Головна</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about"><i class="fa fa-user fa-lg"></i> Про нас</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#skills"><i class="fa fa-rocket fa-lg"></i> Навички</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#doctors"><i class="fa fa-users fa-lg"></i> Керіництво</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#services"><i class="fa fa-signal fa-lg"></i> Послуги</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contact"><i class="fa fa-envelope"></i> Контакти</a>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header class="home">
        <div class="home_wrap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="intro-text">
                            <img src="/public/src/img/TemplateImg/logo.png" alt=""/>
                        </div>
                        <div class="text-center">
                            <ul class="list-inline">
                                <li><a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                                </li>
                                <li><a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
                                </li>
                                <li><a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="text-center">
                            <div class="page-scroll menu-icon">
                                <a href="#about">
                                    <i class="fa fa-angle-down fa-lg fa-border"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="" id="about">
        <div class="container">
            <div class="text-center animateup">
                <div class="inline-icons-text section-heading">
                    <div class="inline-icon">
                        <hr/><hr/><hr/><hr/><hr/>
                    </div>
					<span class="inline-icon heading-width">
						<span class="heading-text">Про нас</span>
					</span>
                    <div class="inline-icon">
                        <hr/><hr/><hr/><hr/><hr/>
                    </div>
                </div>
            </div>
            <div class="gap-30"></div>
            <div class="row">
                <div class="col-lg-8 no-right-padding-large">
                    <div id="aboutslider" class="carousel slide fancy-carousel" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="/public/src/img/team/slider1.jpg" alt="First slide"/>
                                <div class="carousel-caption">
                                    <p>
                                        1. Над швидка перша допомога.
                                    </p>
                                </div>
                            </div>
                            <div class="item">
                                <img src="/public/src/img/team/slider2.jpg" alt="First slide"/>
                                <div class="carousel-caption">
                                    <p>
                                        2. Нове покоління стоматології.
                                    </p>
                                </div>
                            </div>
                            <div class="item">
                                <img src="/public/src/img/team/slider3.jpg" alt="First slide"/>
                                <div class="carousel-caption">
                                    <p>
                                        3. Кваліфіковані спеціалісти.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <a class="left carousel-control" href="#aboutslider" data-slide="prev">
                            <i class="fa fa-angle-left fa-lg"></i>
                        </a>
                        <a class="right carousel-control" href="#aboutslider" data-slide="next">
                            <i class="fa fa-angle-right fa-lg"></i>
                        </a>
                    </div>

                </div>
                <div class="col-lg-4 primary-background margin-small">
                    <h4>Хто ми</h4>
                    <p>Районна поліклініка з високим рівнем обслуговування та над новим обладннаям. У нас кваліфіковані спеціалісти та медперсонал.</p>
                    <br>
                    <br>
                    <br>
                    <br>
                    <h4>Час роботи:</h4>
                    <ul class="list-unstyled">
                        <li> Понеділок - П'ятниця <div class="pull-right">8:00 - 17:00</div></li>
                        <li> Субота  <div class="pull-right">10:00 - 15:00</div></li>
                        <li> Неділя  <div class="pull-right">Вихідний</div></li>
                    </ul>



                </div>
            </div>
        </div>
    </section>
    <section class="grey-area talkabout ">
        <h2 class="main_heading animatezoomin">Не стій в черзі реєструйся онлайн</h2>

        <div class="gap-80"></div>
        <div class="page-scroll">
            <a href="#modalForm" class="btn btn-default btn-lg animatezoomin" data-toggle="modal"><i class="fa fa-hand-o-right fa-fw"></i> Записатись</a>
        </div>
    </section>

    <section class="skills" id="skills">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center animateup">
                    <div class="inline-icons-text section-heading">
                        <div class="inline-icon">
                            <hr/><hr/><hr/><hr/><hr/>
                        </div>
						<span class="inline-icon heading-width">
							<span class="heading-text">Навички</span>
						</span>
                        <div class="inline-icon">
                            <hr/><hr/><hr/><hr/><hr/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-3 col-sm-6 animateleft">
                    <input class="knob" readonly="readonly" data-width="150" data-fgColor="#444" data-skin="tron" data-thickness=".1" value="99">
                    <h3>
                        Перша медична допомога
                    </h3>
                    <p>
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                    </p>
                </div>
                <div class="col-md-3 col-sm-6 animateleft">
                    <input class="knob" readonly="readonly" data-width="150" data-fgColor="#444" data-skin="tron" data-thickness=".1" value="90">
                    <h3>
                        Дитяча медицина
                    </h3>
                    <p>
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                    </p>
                </div>
                <div class="col-md-3 col-sm-6 animateright">
                    <input class="knob" readonly="readonly" data-width="150" data-fgColor="#444" data-skin="tron" data-thickness=".1" value="80">
                    <h3>
                        Амбулаторна хірургія
                    </h3>
                    <p>
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                    </p>
                </div>
                <div class="col-md-3 col-sm-6 animateright">
                    <input class="knob" readonly="readonly" data-width="150" data-fgColor="#444" data-skin="tron" data-thickness=".1" value="70">
                    <h3>
                        Серцева медицина
                    </h3>
                    <p>
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                    </p>
                </div>
            </div>

        </div>
    </section>

    <section class="video-section">
        <video id="myvideo" loop="">


        </video>
        <div class="button-background">
            <i class="playbtn fa fa-play-circle"></i>
        </div>
    </section>

    <section class="doctors" id="doctors">
        <div class="container">

            <div class="text-center animateup">
                <div class="inline-icons-text section-heading">
                    <div class="inline-icon">
                        <hr/><hr/><hr/><hr/><hr/>
                    </div>
					<span class="inline-icon heading-width">
						<span class="heading-text">Наші лікарі</span>
					</span>
                    <div class="inline-icon">
                        <hr/><hr/><hr/><hr/><hr/>
                    </div>
                </div>
            </div>
            <div class="doctors-list">
                <div class="gap-50"></div>
                <div class="fullwidth" style="display:flex">
                    <div class="col-md-6 no-padding" style="display: flex">
                        <div class="fullwidth white-background">
                            <div class="col-sm-6 no-left-padding">
                                <div class="image-area">
                                    <img class="img-responsive" src="/public/src/img/TemplateImg/doctor-img1.jpg" alt=""/>
                                </div>
                                <div class="text-center">
                                    <ul class="list-inline">
                                        <li><a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                                        </li>
                                        <li><a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
                                        </li>
                                        <li><a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-6 no-padding">
                                <div class="doctorname">
                                    <h4>Щурук Георгій</h4>
                                    <small>доцент</small>
                                </div>
                                <table class="table">
                                    <tbody>
                                    <tr>
                                        <td><strong>Спеціалізація</strong></td>
                                        <td>Отоларинтолог</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Довсвід</strong></td>
                                        <td>40 років досвіду</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Тренінг</strong></td>
                                        <td>Лектор університету</td>

                                    </tr>
                                    <tr>
                                        <td><strong>Дні роботи</strong></td>
                                        <td>Понеділок, Пятниця</td>

                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 no-right-padding" style="display: flex">
                        <div class="fullwidth white-background">
                            <div class="col-sm-6 no-left-padding">
                                <div class="image-area">
                                    <img class="img-responsive" src="/public/src/img/TemplateImg/doctor-img2.jpg" alt=""/>
                                </div>
                                <div class="text-center">
                                    <ul class="list-inline">
                                        <li><a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                                        </li>
                                        <li><a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
                                        </li>
                                        <li><a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-6 no-padding">
                                <div class="doctorname">
                                    <h4>Розуменко Артем</h4>
                                    <small>професор</small>
                                </div>
                                <table class="table">
                                    <tbody>
                                    <tr>
                                        <td><strong>Спеціалізація</strong></td>
                                        <td>Нейрохірург</td>

                                    </tr>
                                    <tr>
                                        <td><strong>Досвід</strong></td>
                                        <td>37 років досвіду</td>

                                    </tr>
                                    <tr>
                                        <td><strong>Тренінги</strong></td>
                                        <td>Лектор унівирситету</td>

                                    </tr>
                                    <tr>
                                        <td><strong>Work Days</strong></td>
                                        <td>Monday, Friday</td>

                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="fullwidth" style="display:flex">
                    <div class="col-md-6 no-padding" style="display: flex">
                        <div class="fullwidth white-background">
                            <div class="col-sm-6 no-left-padding">
                                <div class="image-area">
                                    <img class="img-responsive" src="/public/src/img/TemplateImg/doctor-img3.jpg" alt=""/>
                                </div>
                                <div class="text-center">
                                    <ul class="list-inline">
                                        <li><a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                                        </li>
                                        <li><a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
                                        </li>
                                        <li><a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-6 no-padding">
                                <div class="doctorname">
                                    <h4>Бугро Вікторія</h4>
                                    <small>професор</small>
                                </div>
                                <table class="table">
                                    <tbody>
                                    <tr>
                                        <td><strong>Спеціалізація</strong></td>
                                        <td>Дієтолог</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Довсвід</strong></td>
                                        <td>25 років досвіду</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Тренінг</strong></td>
                                        <td>Лектор університету</td>

                                    </tr>
                                    <tr>
                                        <td><strong>Дні роботи</strong></td>
                                        <td>Понеділок, Пятниця</td>

                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 no-right-padding" style="display: flex">
                        <div class="fullwidth white-background">
                            <div class="col-sm-6 no-left-padding">
                                <div class="image-area">
                                    <img class="img-responsive" src="/public/src/img/TemplateImg/doctor-img4.jpg" alt=""/>
                                </div>
                                <div class="text-center">
                                    <ul class="list-inline">
                                        <li><a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                                        </li>
                                        <li><a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
                                        </li>
                                        <li><a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-6 no-padding">
                                <div class="doctorname">
                                    <h4>Наумов Юрій</h4>
                                    <small>професор</small>
                                </div>
                                <table class="table">
                                    <tbody>
                                    <tr>
                                        <td><strong>Спеціалізація</strong></td>
                                        <td>Анестезіологія</td>

                                    </tr>
                                    <tr>
                                        <td><strong>Досвід</strong></td>
                                        <td>37 років досвіду</td>

                                    </tr>
                                    <tr>
                                        <td><strong>Тренінги</strong></td>
                                        <td>Лектор унівирситету</td>

                                    </tr>
                                    <tr>
                                        <td><strong>Work Days</strong></td>
                                        <td>Monday, Friday</td>

                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="grey-area milestones">
        <h2 class="main_heading animatezoomin">Наші досягення</h2>

        <div class="gap-50"></div>
        <div class="container countup">
            <div class="row">
                <div class="col-sm-3">
                    <i class="fa fa-user fa-5x"></i>
                    <h2 id="counting_elem1">12,967 </h2>
                    <h4>Задоволених пацієнтів </h4>


                </div>
                <div class="col-sm-3">
                    <i class="fa fa-rocket fa-5x"></i>
                    <h2 id="counting_elem2">1,586</h2>
                    <h4>Успішних операцій</h4>


                </div>
                <div class="col-sm-3">
                    <i class="fa fa-clock-o fa-5x"></i>
                    <h2 id="counting_elem3">35,890</h2>
                    <h4>Годин роботи</h4>


                </div>
                <div class="col-sm-3">
                    <i class="fa fa-users fa-5x"></i>
                    <h2 id="counting_elem4">90</h2>
                    <h4>Лікарів-спеціалістів</h4>


                </div>
            </div>

        </div>
    </section>

    <section class="services" id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center animateup">
                    <div class="inline-icons-text section-heading">
                        <div class="inline-icon">
                            <hr/><hr/><hr/><hr/><hr/>
                        </div>
						<span class="inline-icon heading-width">
							<span class="heading-text">Сервіс</span>
						</span>
                        <div class="inline-icon">
                            <hr/><hr/><hr/><hr/><hr/>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 left-services">
                        <div class="service-item animateleft">
							<span class="fa-stack fa-3x right">
							    <i class="fa fa-circle fa-2x fa-stack-2x"></i>
							    <i class="fa fa-user-md fa-stack-1x fa-inverse service-icon"></i>
							</span>
                            <h3>
                                Кваліфіковані спеціалісти
                            </h3>
                            <p class="white">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec iaculis metus vitae ligula elementum ut luctus lorem facilisis.
                            </p>
                        </div>
                        <div class="service-item animateleft">
							<span class="fa-stack fa-3x right">
							    <i class="fa fa-circle fa-2x fa-stack-2x"></i>
							    <i class="fa fa-ambulance fa-stack-1x fa-inverse service-icon"></i>
							</span>
                            <h3>
                                Обладнанні автомобілі
                            </h3>
                            <p class="white">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec iaculis metus vitae ligula elementum ut luctus lorem facilisis.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 right-services">
                        <div class="service-item animateright">
							<span class="fa-stack fa-3x right">
							    <i class="fa fa-circle fa-2x fa-stack-2x"></i>
							    <i class="fa fa-stethoscope fa-stack-1x fa-inverse service-icon"></i>
							</span>
                            <h3>
                                Швидке встановлення діагнозу
                            </h3>
                            <p class="white">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec iaculis metus vitae ligula elementum ut luctus lorem facilisis.
                            </p>
                        </div>
                        <div class="service-item animateright">
							<span class="fa-stack fa-3x right">
							    <i class="fa fa-circle fa-2x fa-stack-2x"></i>
							    <i class="fa fa-medkit fa-stack-1x fa-inverse service-icon"></i>
							</span>
                            <h3>
                                Найкращі дієтологи
                            </h3>
                            <p class="white">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec iaculis metus vitae ligula elementum ut luctus lorem facilisis.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="contact" id="contact">
        <div class="container">
            <div class="text-center animateup">
                <div class="inline-icons-text section-heading">
                    <div class="inline-icon">
                        <hr/><hr/><hr/><hr/><hr/>
                    </div>
					<span class="inline-icon heading-width">
						<span class="heading-text">Контакти</span>
					</span>
                    <div class="inline-icon">
                        <hr/><hr/><hr/><hr/><hr/>
                    </div>
                </div>
            </div>

            <div class="gap-50"></div>
            <h3 class="text-center">Ми готові працювати з вами</h3>
            <div class="row">
                <div class="col-md-7 animateright">
                    <form role="form">
                        <div class="form-group input-group col-xs-12 floating-label-form-group">
                            <span class="input-group-addon"> <i class="fa fa-user fa-lg"></i> </span>

                            <label for="name">Ім'я</label>

                            <input class="form-control" type="text" name="name" id="name" placeholder="Ім'я">
                        </div>
                        <div class="form-group input-group col-xs-12 floating-label-form-group">
                            <span class="input-group-addon"> <i class="fa fa-envelope-o fa-lg"></i> </span>
                            <label for="email">Email</label>
                            <input class="form-control" type="email" name="email" id="email" placeholder="Email">
                        </div>
                        <div class="form-group input-group col-xs-12 floating-label-form-group message-addon">
                            <span class="input-group-addon"> <i class="fa fa-pencil-square-o fa-lg"></i> </span>
                            <label for="message">Повідмлення</label>
                            <textarea placeholder="Повідмлення" class="form-control" name="message" id="message" rows="5"></textarea>
                        </div>

                        <br>
                        <div class="form-group col-xs-12">
                            <button type="submit" class="btn btn-default btn-lg">Надіслати</button>
                        </div>

                    </form>
                </div>
                <div class="col-md-5 animateleft contact-sidebar">
                    <div class="inline-icons-text">
                        <div class="inline-icon">
                            <div class="btn-social btn-outline"><i class="fa fa-fw fa-map-marker"></i>
                            </div>
                        </div>
                        <div class="inline-icon">
                            <div class="marker">Івано-Франківськ, Україна</div>

                        </div>
                    </div>
                    <div class="inline-icons-text">
                        <div class="inline-icon">
                            <div class="btn-social btn-outline"><i class="fa fa-fw fa-envelope"></i>
                            </div>
                        </div>
                        <div class="inline-icon">
                            <div class="marker">poliklinika@gmail.com</div>

                        </div>
                    </div>
                    <div class="inline-icons-text">
                        <div class="inline-icon">
                            <div class="btn-social btn-outline"><i class="fa fa-fw fa-phone"></i>
                            </div>
                        </div>
                        <div class="inline-icon">
                            <div class="marker">+380990099000</div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <div id="googleMap" style="width:100%;height:350px;"></div>

    <footer class="text-center">
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; 2018 - by Klimthyk
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>

<div class="gallery-modal modal fade" id="modalForm" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <form action="#" method="post" id="registerForm">

                            <select placeholder="Subject line" name="offices" required>
                                <?php foreach ($this->data['offices'] as $office) { ?>
                                    <option value="<?= $office['id'] ?>"><?= $office['name'] ?></option>
                                <?php } ?>
                            </select>

                            <div class="name">
                                <label for="name"></label>
                                <input type="date" placeholder="Дата прийому" name="date" required>
                            </div>

                            <select placeholder="Subject line" name="time" required>
                                <option disabled hidden selected>Час</option>
                            </select>

                            <select placeholder="Subject line" name="doctors" required>
                                <option disabled hidden selected>Лікар</option>
                            </select>

                            <div class="name">
                                <label for="name"></label>
                                <input type="text" placeholder="Ваше прізвище" name="name" id="name_input" required>
                            </div>

                            <div class="email">
                                <label for="email"></label>
                                <input type="email" placeholder="Ваше e-mail" name="email" id="email_input" required>
                            </div>

                            <div class="telephone">
                                <label for="name"></label>
                                <input type="text" placeholder="Ваш телефон" name="telephone" id="telephone_input" required>
                            </div>

                            <div class="submit">
                                <input type="submit" value="Записатись" id="form_button" />
                            </div>
                        </form><!-- // End form -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="/public/src/js/jquery-1.10.2.js"></script>
<script src="/public/src/js/bootstrap.min.js"></script>
<script src="/public/src/js/jquery.easing.js"></script>
<script src="/public/src/js/classie.js"></script>
<script src="/public/src/js/jquery.appear.js"></script>
<script src="/public/src/js/jquery.flexslider-min.js"></script>
<script src="/public/src/js/jquery.knob.js"></script>
<script src="/public/src/js/countUp.min.js"></script>
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyALl-WUnKHFD26s6bPPpOo3MMEWBugZjy0&amp;sensor=false">
</script>

<script src="/public/src/js/site.js"></script>



</body>

</html>
