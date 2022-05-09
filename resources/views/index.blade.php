@extends('layouts.template')
@section('content')
<header id="banner">
    <div class="container-fluid">
        <div class="row">
            <!-- /// Left Column /// -->
            <div class="col-lg-6">
                <!-- // Banners Caption -->
                <div class="caption">
                    <h1>Сделай первый шаг к преодолению языкового барьера с <br/><span id="text-rotator"></span></h1>
                    <p>Получи первый результат, записавшись на бесплатную встречу с иностранцем</p>
                    <a href="#contact" class="btn btn-primary page-scroll">Записаться</a>
                </div>
            </div>
            <!-- /// Right Column (Banners IMG) /// -->
            <div class="col-lg-6 banners-img"></div>
        </div>
    </div>
</header>
<!-- ==============================================
SOCIAL MEDIA
=============================================== -->
<div id="social-media">
    <div class="container-fluid">
        <div class="row">
            <!-- Social Media Starts Here -->
            <div class="col-md-6 wow fadeInLeft m-0 p-0" data-wow-duration=".2s" data-wow-delay=".2s">
                <!-- Facebook -->
                <div class="facebook">
                    <a href="https://www.facebook.com/profile.php?id=100045901071364" target="_blank"><i class="fab fa-facebook-f"></i></a>
                </div>
            </div>
            <div class="col-md-6 wow fadeInRight m-0 p-0" data-wow-duration=".2s" data-wow-delay=".4s">
                <!-- instagram -->
                <div class="instagram">
                    <a href="https://www.instagram.com/teachhouse.nikopol/" target="_blank"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
@guest
    <!-- ==============================================
CALL TO REGISTER
=============================================== -->
    <section id="ctr">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-offset-2 text-center mx-auto wow fadeInUp" data-wow-duration=".2s" data-wow-delay=".4s">
                    <h2>Чтобы тебе было легче учить английский - мы ведём наш блог</h2>
                    <p class="lead">Зарегистрируйся и получи доступ к морю информации!</p>
                    <a href="{{ route('register') }}" class="btn btn-white page-scroll">Зарегистрироваться</a>
                </div>
            </div>
        </div>
    </section>
@endif
<!-- ==============================================
ABOUT US
=============================================== -->
<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-sm-offset-2 text-center mx-auto wow fadeInUp" data-wow-duration=".2s" data-wow-delay=".4s">
                <h5 class="sans-serif">О нас</h5>
                <h2><span>Клуб</span> разговорного английского</h2>
                <p>Проводим обучающие онлайн и офлайн встречи с американцем, на которых разговаиваем только на английском, чтобы приодолеть боязнь иностранного языка.</p>
                <a href="#pricing" class="btn btn-primary page-scroll">Наши услуги</a>
            </div>
        </div>
    </div>
</section>
<!-- ==============================================
FEATURES
=============================================== -->
<section id="features">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 wow fadeInLeft" data-wow-duration=".2s" data-wow-delay=".2s">
                <img src="{{ asset('assets/icons/svg/icon_travelbook.svg') }}" class="img-fluid" alt="">
                <h5>Занятия ведёт иностранец</h5>
            </div>
            <div class="col-lg-6 col-md-6 wow fadeInLeft" data-wow-duration=".2s" data-wow-delay=".2s">
                <img src="{{ asset('assets/icons/svg/icon_book2.svg') }}" class="img-fluid" alt="">
                <h5>Учим тому, чему не учат в школе</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 wow fadeInRight" data-wow-duration=".2s" data-wow-delay=".4s">
                <img src="{{ asset('assets/icons/svg/icon_bullseye.svg') }}" class="img-fluid" alt="">
                <h5>Делаем рзультат после первой встречи</h5>
            </div>
            <div class="col-lg-6 col-md-6 wow fadeInRight" data-wow-duration=".2s" data-wow-delay=".4s">
                <img src="{{ asset('assets/icons/svg/icon_wallet.svg') }}" class="img-fluid" alt="svg-icon4">
                <h5>Возвращаем деньги, если не понравилось</h5>
                <p>Возвращаем деньги в течении 1 недели, если занятия не понравились.</p>
            </div>
        </div>
    </div>
</section>
<!-- ==============================================
PORTFOLIO
=============================================== -->
<section id="portfolio">
    <div class="container-fluid">
        <h5 class="sans-serif">Классные моменты</h5>
        <h2>Фотографии со встреч</h2>
        <div class="row wow fadeInUp" data-wow-duration=".2s" data-wow-delay=".6s" id="Container">
            <div class="col-lg-4 mix design" data-myorder="1">
                <div class="box">
                    <!-- Top Curve -->
                    <svg class="curve1" x="0px" y="0px" viewBox="0 0 400 200">
                        <path d="M398.938,143.806c-24.004,26.063-155.373,104.33-224.724,7.328 C69.626,4.846,0.5,71.583,0.5,71.583V1.5h398.629L398.938,143.806z"></path>
                    </svg>
                    <!-- Work Img -->
                    <img src="{{ asset('assets/img/banners/photos/1.jpg') }}" class="img-fluid" alt="1">
                    <div class="box-content">
                        <h3 class="title">Встреча в кафе Монтекристо</h3>
                    </div>
                    <svg class="curve2" x="0px" y="0px" width="150px" height="150px" viewBox="0 0 150 50">
                        <path d="M1.114,7.567C87.544-33.817,150,150.5,150,150.5H1.361L1.114,7.567z"></path>
                    </svg>
                </div>
            </div>
            <div class="col-lg-4 mix design" data-myorder="2">
                <div class="box">
                    <!-- Top Curve -->
                    <svg class="curve1" x="0px" y="0px" viewBox="0 0 400 200">
                        <path d="M398.938,143.806c-24.004,26.063-155.373,104.33-224.724,7.328 C69.626,4.846,0.5,71.583,0.5,71.583V1.5h398.629L398.938,143.806z"></path>
                    </svg>
                    <!-- Work Img -->
                    <img src="{{ asset('assets/img/banners/photos/2.jpg') }}" class="img-fluid" alt="2">
                    <div class="box-content">
                        <h3 class="title">Вторая встреча в Монтекристо</h3>
                    </div>
                    <svg class="curve2" x="0px" y="0px" width="150px" height="150px" viewBox="0 0 150 50">
                        <path d="M1.114,7.567C87.544-33.817,150,150.5,150,150.5H1.361L1.114,7.567z"></path>
                    </svg>
                </div>
            </div>
            <div class="col-lg-4 mix design" data-myorder="3">
                <div class="box">
                    <!-- Top Curve -->
                    <svg class="curve1" x="0px" y="0px" viewBox="0 0 400 200">
                        <path d="M398.938,143.806c-24.004,26.063-155.373,104.33-224.724,7.328 C69.626,4.846,0.5,71.583,0.5,71.583V1.5h398.629L398.938,143.806z"></path>
                    </svg>
                    <!-- Work Img -->
                    <img src="{{ asset('assets/img/banners/photos/3.jpg') }}" class="img-fluid" alt="3">
                    <div class="box-content">
                        <h3 class="title">Встреча с программистом на английском</h3>
                    </div>
                    <svg class="curve2" x="0px" y="0px" width="150px" height="150px" viewBox="0 0 150 50">
                        <path d="M1.114,7.567C87.544-33.817,150,150.5,150,150.5H1.361L1.114,7.567z"></path>
                    </svg>
                </div>
            </div>
            <div class="col-lg-4 mix development" data-myorder="4">
                <div class="box">
                    <!-- Top Curve -->
                    <svg class="curve1" x="0px" y="0px" viewBox="0 0 400 200">
                        <path d="M398.938,143.806c-24.004,26.063-155.373,104.33-224.724,7.328 C69.626,4.846,0.5,71.583,0.5,71.583V1.5h398.629L398.938,143.806z"></path>
                    </svg>
                    <!-- Work Img -->
                    <img src="{{ asset('assets/img/banners/photos/4.jpg') }}" class="img-fluid" alt="4">
                    <div class="box-content">
                        <h3 class="title">Встреча перед весенними каникулами 2021</h3>
                    </div>
                    <svg class="curve2" x="0px" y="0px" width="150px" height="150px" viewBox="0 0 150 50">
                        <path d="M1.114,7.567C87.544-33.817,150,150.5,150,150.5H1.361L1.114,7.567z"></path>
                    </svg>
                </div>
            </div>
            <div class="col-lg-4 mix development" data-myorder="5">
                <div class="box">
                    <!-- Top Curve -->
                    <svg class="curve1" x="0px" y="0px" viewBox="0 0 400 200">
                        <path d="M398.938,143.806c-24.004,26.063-155.373,104.33-224.724,7.328 C69.626,4.846,0.5,71.583,0.5,71.583V1.5h398.629L398.938,143.806z"></path>
                    </svg>
                    <!-- Work Img -->
                    <img src="{{ asset('assets/img/banners/photos/5.jpg') }}" class="img-fluid" alt="5">
                    <div class="box-content">
                        <h3 class="title">Встреча летом 2020</h3>
                    </div>
                    <svg class="curve2" x="0px" y="0px" width="150px" height="150px" viewBox="0 0 150 50">
                        <path d="M1.114,7.567C87.544-33.817,150,150.5,150,150.5H1.361L1.114,7.567z"></path>
                    </svg>
                </div>
            </div>
            <div class="col-lg-4 mix photography" data-myorder="6">
                <div class="box">
                    <!-- Top Curve -->
                    <svg class="curve1" x="0px" y="0px" viewBox="0 0 400 200">
                        <path d="M398.938,143.806c-24.004,26.063-155.373,104.33-224.724,7.328 C69.626,4.846,0.5,71.583,0.5,71.583V1.5h398.629L398.938,143.806z"></path>
                    </svg>
                    <!-- Work Img -->
                    <img src="{{ asset('assets/img/banners/photos/6.jpg') }}" class="img-fluid" alt="6">
                    <div class="box-content">
                        <h3 class="title">Первая встреча в офисе</h3>
                    </div>
                    <svg class="curve2" x="0px" y="0px" width="150px" height="150px" viewBox="0 0 150 50">
                        <path d="M1.114,7.567C87.544-33.817,150,150.5,150,150.5H1.361L1.114,7.567z"></path>
                    </svg>
                </div>
            </div>
            <div class="view-all wow bounceIn">
                <a href="#contact" class="btn btn-primary">Записаться на встречу</a>
            </div>
        </div>
    </div>
</section>
<section id="services">
    <div class="container-fluid wow bounceInUp">
        <div class="row">
            <div class="col-lg-6 services-caption">
                <h5 class="sans-serif">Наша программа</h5>
                <h2>Что мы делаем на занятиях</h2>
                <div class="services">
                    <div class="service wow fadeInLeft" data-wow-duration=".2s" data-wow-delay=".2s">
                        <div class="service-icon">
                            <img src="{{ asset('assets/icons/svg/icon_blurb.svg') }}" alt="svg-supplies">
                        </div>
                        <div class="service-content">
                            <h5>Говорим на английском</h5>
                            <p>Наша суть заключается в том, чтобы разговорить вас</p>
                        </div>
                    </div>
                    <div class="service wow fadeInLeft" data-wow-duration=".2s" data-wow-delay=".4s">
                        <div class="service-icon">
                            <img src="{{ asset('assets/icons/svg/icon_learning.svg') }}" alt="svg-mock7">
                        </div>
                        <div class="service-content">
                            <h5>Смотрим фильмы</h5>
                            <p>Для того, чтобы привыкнуть к английскому, не достаточно разговаривать. Ещё нужно уметь хорошо слушать</p>
                        </div>
                    </div>
                    <div class="service wow fadeInLeft" data-wow-duration=".2s" data-wow-delay=".6s">
                        <div class="service-icon">
                            <img src="{{ asset('assets/icons/svg/icon_books.svg') }}" alt="svg-mock">
                        </div>
                        <div class="service-content">
                            <h5>Читаем</h5>
                            <p>Чтение разной литературы помогает узнавать и запоминать новые слова и их произношение.</p>
                        </div>
                    </div>
                    <div class="service wow fadeInLeft" data-wow-duration=".2s" data-wow-delay=".8s">
                        <div class="service-icon">
                            <img src="{{ asset('assets/icons/svg/icon_network2.svg') }}" alt="svg-camera">
                        </div>
                        <div class="service-content">
                            <h5>Приглашаем других спикеров</h5>
                            <p>Чтобы занятия были интересней, мы приглашаем других англоговорящий спикеров из разных сфер деятельности.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 services-bg"></div>
        </div>
    </div>
</section>
<section id="work-process">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 process-bg"></div>
            <!-- Work Process Caption -->
            <div class="col-lg-6">
                <!-- Process Holder -->
                <div class="process-wrap">
                    <h5 class="sans-serif">подоробности занятий</h5>
                    <h2>Как проходит встреча</h2>
                    <!-- First Process -->
                    <div class="process wow fadeInRight" data-wow-duration=".2s" data-wow-delay=".2s">
                        <!-- Process Number -->
                        <div class="process-num">
                            <span class="first">1.</span>
                        </div>
                        <!-- Process Description -->
                        <div class="process-content">
                            <h5>45 минут</h5>
                            <p>Занятие длится 45 минут</p>
                        </div>
                    </div>
                    <!-- Second Process -->
                    <div class="process wow fadeInRight" data-wow-duration=".2s" data-wow-delay=".4s">
                        <!-- Process Number -->
                        <div class="process-num">
                            <span>2.</span>
                        </div>
                        <!-- Process Description -->
                        <div class="process-content">
                            <h5>10 человек в группе</h5>
                            <p>На занятии присутствует 10 человек, этого достаточно, чтобы играть в игры и общаться на английском. И не много, чтобы все сумели по учавствовать</p>
                        </div>
                    </div>
                    <!-- Third Process -->
                    <div class="process wow fadeInRight" data-wow-duration=".2s" data-wow-delay=".6s">
                        <!-- Process Number -->
                        <div class="process-num">
                            <span>3.</span>
                        </div>
                        <!-- Process Description -->
                        <div class="process-content">
                            <h5>Домашнее задание</h5>
                            <p>После каждой встречи задаётся общее и индивидуальное домашнее задание, выполняя которое дома ты сможешь намного быстрее преодолеть разговорный барьер. (За индивидуальным после встрече подходите к учителю)</p>
                        </div>
                    </div>
                    <!-- Fourth Process -->
                    <div class="process wow fadeInRight" data-wow-duration=".2s" data-wow-delay=".8s">
                        <!-- Process Number -->
                        <div class="process-num">
                            <span>4.</span>
                        </div>
                        <!-- Process Description -->
                        <div class="process-content">
                            <h5>Сертификат</h5>
                            <p>Если вы сдали все дз, то после окончания курса получаете сертификат, который потом можете использовать на последующих встречах и продуктах в качестве скидки -20%</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="fun-facts">
    <div class="container-fluid">
        <div class="row">
            <!-- First Fun Fact -->
            <div class="col-md-4 wow fadeInLeft" data-wow-duration=".2s" data-wow-delay=".4s">
                <div class="fact">
                    <span class="timer">200</span>
                    <h4>Счастливых клиентов</h4>
                </div>
            </div>
            <!-- Second Fun Fact -->
            <div class="col-md-4 wow fadeInLeft" data-wow-duration=".2s" data-wow-delay=".6s">
                <div class="fact">
                    <span class="timer">3</span>
                    <h4>Года опыта на рынке</h4>
                </div>
            </div>
            <!-- Third Fun Fact -->
            <div class="col-md-4 wow fadeInRight" data-wow-duration=".2s" data-wow-delay=".6s">
                <div class="fact">
                    <span class="timer">300</span>
                    <h4>Встреч проведено</h4>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ==============================================
TESTIMONIALS
=============================================== -->
<section id="testimonials" class="mb-5 shadow-lg">
    <div class="container-fluid">
        <div class="row">
            <!-- Testimonials Img -->
            <div class="col-lg-6 testi-img"></div>
            <div class="col-lg-6 testi-content">
                <!-- Title -->
                <h5 class="sans-serif">Что говорят клиенты</h5>
                <h2>Отзывы</h2>
                <p>Посмотреть отзывы можно <a href="https://www.instagram.com/p/CKRSxe-sTsk/" target="_blank">кликнув на меня</a>.</p>
            </div>
        </div>
    </div>
</section>
<!-- ==============================================
CALL TO ACTION
=============================================== -->
<section id="cta">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-offset-2 text-center mx-auto wow fadeInUp" data-wow-duration=".2s" data-wow-delay=".4s">
                <h2>Преодолей языковой барьер вместе с нами</h2>
                <p class="lead"></p>
                <a href="#contact" class="btn btn-white page-scroll">Записаться</a>
            </div>
        </div>
    </div>
</section>
<!-- ==============================================
PRICING TABLES
=============================================== -->
<section id="pricing">
    <div class="container">
        <!-- Title -->
        <h2 class="title">Наши цены</h2>
        <div class="row justify-content-center align-items-center">
            <!-- Pricing Tables -->
            <div class="col-lg-4 wow fadeInRight" data-wow-duration=".2s" data-wow-delay=".4s">
                <!-- Basic Price -->
                <div id="highlight" class="price-table">
                    <div class="type">
                        <h5>Офлайн</h5>
                    </div>
                    <div class="value">
                        <h2>
                            <span class="dollar">$</span>30</h2>
                        <span class="per">/ Месяц</span>
                    </div>
                    <div class="features">
                        <ul>
                            <li>10 занятий</li>
                            <li>Занятия в удобное время</li>
                            <li>Индивидуальные ДЗ</li>
                            <li>Результат после 1 встречи</li>
                            <li>Живые встречи</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow fadeInUp" data-wow-duration=".2s" data-wow-delay=".2s">
                <!-- Standard Price -->
                <div class="price-table">
                    <div class="type">
                        <h5>Онлайн</h5>
                    </div>
                    <div class="value">
                        <h2>
                            <span class="dollar">$</span>20</h2>
                        <span class="per">/ Месяц</span>
                    </div>
                    <div class="features">
                        <ul>
                            <li>10 занятий</li>
                            <li>Занятия в удобное время</li>
                            <li>Индивидуальные ДЗ</li>
                            <li>Результат после 1 встречи</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ==============================================
CONTACT
=============================================== -->
<section id="contact">
    <div class="container-fluid">
        <div class="row">
            <!-- Order -->
            <div class="col-lg-6 contact-content">
                <h5 class="sans-serif">Запись на встречу</h5>
                <!-- Forms Start Here -->
                <form method="post" action="{{ route('signin') }}" autocomplete="on">
                    @csrf
                    <!-- Form Input -->
                    <div class="form-group wow fadeInLeft" data-wow-duration=".2s" data-wow-delay=".2s">
                        <input type="email" class="form-control" placeholder="Электронная почта:" required name="email">
                    </div>
                    <!-- Form Subject -->
                    <div class="form-group wow fadeInLeft" data-wow-duration=".2s" data-wow-delay=".4s">
                        <input type="text" class="form-control" placeholder="Имя:" required name="name">
                    </div>
                    <!-- Form Subject -->
                    <div class="form-group wow fadeInLeft" data-wow-duration=".2s" data-wow-delay=".4s">
                        <input type="tel" class="form-control" placeholder="Телефон:" required name="phone">
                    </div>
                    <div class="d-flex flex-column justify-content-center align-items-center mb-5">
                        <!-- Meeting type -->
                        <div id="meet-type" class="mb-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="meet-type" value="offline" id="OfflineCheck">
                                <label class="form-check-label" for="OfflineCheck">
                                    Оффлайн занятие
                                </label>
                            </div>
                        </div>
                        <!-- Meeting time -->
                        <div id="meet-time">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="meet-time" value="1" id="MeetTime">
                                <label class="form-check-label" for="MeetTime">
                                    19.20.2022 в 21:00
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="meet-time" value="2" id="MeetTime2" checked>
                                <label class="form-check-label" for="MeetTime2">
                                    19.20.2022 в 22:00
                                </label>
                            </div>
                        </div>
                    </div>
                    <!-- Submit button -->
                    <button type="submit" name="submit" value="singin" class="btn btn-primary">Записаться</button>
                </form>
            </div>
            <div class="col-lg-6 banners-img"></div>
        </div>
    </div>
</section>
@endsection
