<!DOCTYPE html>
<!--[if lt IE 9 ]><html class="no-js oldie" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>RLG</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{ asset('css/base.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    <!-- script
    ================================================== -->
    <script src="{{ asset('js/modernizr.js') }}"></script>
    <script src="{{ asset('js/pace.min.js') }}"></script>

    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="{{ asset('fav.png') }}" type="images/x-icon">
    <link rel="icon" href="{{ asset('fav.png') }}" type="images/x-icon">

</head>

<body id="top">

    <!-- header
    ================================================== -->
    <header class="s-header">

        {{-- <div class="header-logo">
            <a class="site-logo" href="index.html">
                <img src="{{ asset('images/logo.png') }}" alt="Homepage">
            </a>
        </div> --}}

        <nav class="header-nav">

            <a href="#0" class="header-nav__close" title="close"><span>Close</span></a>

            <div class="header-nav__content">
                <h3>Navigation</h3>

                <ul class="header-nav__list">
                    <li class="current"><a class="smoothscroll" href="#home" title="home">Главная</a></li>
                    <li><a class="smoothscroll" href="#about" title="about">Описание</a></li>
                    {{-- <li><a class="smoothscroll" href="#services" title="services">Services</a></li>
                    <li><a class="smoothscroll" href="#works" title="works">Works</a></li>
                    <li><a class="smoothscroll" href="#clients" title="clients">Clients</a></li> --}}
                    <li><a class="smoothscroll" href="#contact" title="contact">Заявка</a></li>
                </ul>

                <p>Perspiciatis hic praesentium nesciunt. Et neque a dolorum <a href='#0'>voluptatem</a> porro iusto
                    sequi veritatis libero enim. Iusto id suscipit veritatis neque reprehenderit.</p>

                <ul class="header-nav__social">
                    <li>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-behance"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                    </li>
                </ul>

            </div> <!-- end header-nav__content -->

        </nav> <!-- end header-nav -->

        <a class="header-menu-toggle" href="#0">
            <span class="header-menu-text">Меню</span>
            <span class="header-menu-icon"></span>
        </a>

    </header> <!-- end s-header -->


    <!-- home
    ================================================== -->
    <section id="home" class="s-home target-section" data-parallax="scroll" {{-- data-image-src="{{ asset('images/hero-bg.jpg') }}" --}}
        data-image-src="{{ asset('images/stone_red.jpg') }}" data-natural-width=3000 data-natural-height=2000
        data-position-y=center>

        <div class="overlay"></div>
        <div class="shadow-overlay"></div>

        <div class="home-content">

            <div class="row home-content__main">

                <h3>Добро пожаловать в Калугу</h3>

                <h1>
                    Здесь происходит что-то странное... <br>
                    Повсюда случайным образом появлятся багровый туман, <br>
                    А люди поговаривают о неописуемых ночных тварях... <br>
                    Готовы ли вы раскрыть тайны этого города?

                </h1>

                {{-- <div class="home-content__buttons">
                    <a href="#contact" class="smoothscroll btn btn--stroke">
                        Start a Project
                    </a>
                    <a href="#about" class="smoothscroll btn btn--stroke">
                        More About Us
                    </a>
                </div> --}}

            </div>

            <div class="home-content__scroll">
                <a href="#about" class="scroll-link smoothscroll">
                    <span>Scroll Down</span>
                </a>
            </div>

            <div class="home-content__line"></div>

        </div> <!-- end home-content -->


        <ul class="home-social">
            <li>
                <a href="#0"><i class="fa fa-facebook" aria-hidden="true"></i><span>Facebook</span></a>
            </li>
            <li>
                <a href="#0"><i class="fa fa-twitter" aria-hidden="true"></i><span>Twiiter</span></a>
            </li>
            <li>
                <a href="#0"><i class="fa fa-instagram" aria-hidden="true"></i><span>Instagram</span></a>
            </li>
            <li>
                <a href="#0"><i class="fa fa-behance" aria-hidden="true"></i><span>Behance</span></a>
            </li>
            <li>
                <a href="#0"><i class="fa fa-dribbble" aria-hidden="true"></i><span>Dribbble</span></a>
            </li>
        </ul>
        <!-- end home-social -->

    </section> <!-- end s-home -->


    <!-- about
    ================================================== -->
    <section id='about' class="s-about">

        <div class="row section-header has-bottom-sep" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead subhead--red">Что же происходит?</h3>
                <h1 class="display-1 display-1--light">Вы ввязались в опасную игру...</h1>
            </div>
        </div> <!-- end section-header -->

        <div class="row about-desc" data-aos="fade-up">
            <div class="col-full">
                <p>
                    Приветствую, искатели приключений! В нашем городе происходит нечто странное. В вечернее время суток
                    на город оседает багровый туман и тем, кому посчастливилось оказаться на улице в это время, не
                    всегда везет вернуться домой… А те, кто все таки вернулись… Стали лишь тенями себя самих. В их
                    обезумевших взглядах отчетливо видно ужас пережитого… Вот только никто толком и не может рассказать,
                    что именно происходит в этом тумане. Поговаривают о том,что в тумане можно встретить страшных
                    тварей, которые не поддаются человеческому воображению… Но одной напастью это не могло обойтись,
                    странный орден обосновался в городе и проводит свои тайные ритуалы...
                    Если вы готовы разобраться что же все-таки происходит в этом провинциальном городке, то жми начать и
                    будь готов увидеть то, к чему твой разум еще не готов!

                </p>
            </div>
        </div> <!-- end about-desc -->

        {{-- <div class="row about-stats stats block-1-4 block-m-1-2 block-mob-full" data-aos="fade-up">

            <div class="col-block stats__col ">
                <div class="stats__count">127</div>
                <h5>Awards Received</h5>
            </div>
            <div class="col-block stats__col">
                <div class="stats__count">1505</div>
                <h5>Cups of Coffee</h5>
            </div>
            <div class="col-block stats__col">
                <div class="stats__count">109</div>
                <h5>Projects Completed</h5>
            </div>
            <div class="col-block stats__col">
                <div class="stats__count">102</div>
                <h5>Happy Clients</h5>
            </div>

        </div> <!-- end about-stats --> --}}

        <div class="about__line"></div>

    </section> <!-- end s-about -->


    {{-- <!-- services
    ================================================== -->
    <section id='services' class="s-services">

        <div class="row section-header has-bottom-sep" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead">What We Do</h3>
                <h1 class="display-2">We’ve got everything you need to launch and grow your business</h1>
            </div>
        </div> <!-- end section-header -->

        <div class="row services-list block-1-2 block-tab-full">

            <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon">
                    <i class="icon-paint-brush"></i>
                </div>
                <div class="service-text">
                    <h3 class="h2">Brand Identity</h3>
                    <p>Nemo cupiditate ab quibusdam quaerat impedit magni. Earum suscipit ipsum laudantium.
                        Quo delectus est. Maiores voluptas ab sit natus veritatis ut. Debitis nulla cumque veritatis.
                        Sunt suscipit voluptas ipsa in tempora esse soluta sint.
                    </p>
                </div>
            </div>

            <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon">
                    <i class="icon-group"></i>
                </div>
                <div class="service-text">
                    <h3 class="h2">Illustration</h3>
                    <p>Nemo cupiditate ab quibusdam quaerat impedit magni. Earum suscipit ipsum laudantium.
                        Quo delectus est. Maiores voluptas ab sit natus veritatis ut. Debitis nulla cumque veritatis.
                        Sunt suscipit voluptas ipsa in tempora esse soluta sint.
                    </p>
                </div>
            </div>

            <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon">
                    <i class="icon-megaphone"></i>
                </div>
                <div class="service-text">
                    <h3 class="h2">Marketing</h3>
                    <p>Nemo cupiditate ab quibusdam quaerat impedit magni. Earum suscipit ipsum laudantium.
                        Quo delectus est. Maiores voluptas ab sit natus veritatis ut. Debitis nulla cumque veritatis.
                        Sunt suscipit voluptas ipsa in tempora esse soluta sint.
                    </p>
                </div>
            </div>

            <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon">
                    <i class="icon-earth"></i>
                </div>
                <div class="service-text">
                    <h3 class="h2">Web Design</h3>
                    <p>Nemo cupiditate ab quibusdam quaerat impedit magni. Earum suscipit ipsum laudantium.
                        Quo delectus est. Maiores voluptas ab sit natus veritatis ut. Debitis nulla cumque veritatis.
                        Sunt suscipit voluptas ipsa in tempora esse soluta sint.
                    </p>
                </div>
            </div>

            <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon">
                    <i class="icon-cube"></i>
                </div>
                <div class="service-text">
                    <h3 class="h2">Packaging Design</h3>
                    <p>Nemo cupiditate ab quibusdam quaerat impedit magni. Earum suscipit ipsum laudantium.
                        Quo delectus est. Maiores voluptas ab sit natus veritatis ut. Debitis nulla cumque veritatis.
                        Sunt suscipit voluptas ipsa in tempora esse soluta sint.
                    </p>
                </div>
            </div>

            <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon"><i class="icon-lego-block"></i></div>
                <div class="service-text">
                    <h3 class="h2">Web Development</h3>
                    <p>Nemo cupiditate ab quibusdam quaerat impedit magni. Earum suscipit ipsum laudantium.
                        Quo delectus est. Maiores voluptas ab sit natus veritatis ut. Debitis nulla cumque veritatis.
                        Sunt suscipit voluptas ipsa in tempora esse soluta sint.
                    </p>
                </div>
            </div>

        </div> <!-- end services-list -->

    </section> <!-- end s-services -->


    <!-- works
    ================================================== -->
    <section id='works' class="s-works">

        <div class="intro-wrap">

            <div class="row section-header has-bottom-sep light-sep" data-aos="fade-up">
                <div class="col-full">
                    <h3 class="subhead">Recent Works</h3>
                    <h1 class="display-2 display-2--light">We love what we do, check out some of our latest works</h1>
                </div>
            </div> <!-- end section-header -->

        </div> <!-- end intro-wrap -->

        <div class="row works-content">
            <div class="col-full masonry-wrap">
                <div class="masonry">

                    <div class="masonry__brick" data-aos="fade-up">
                        <div class="item-folio">

                            <div class="item-folio__thumb">
                                <a href="{{ asset('images/portfolio/gallery/g-shutterbug.jpg') }}" class="thumb-link"
                                    title="Shutterbug" data-size="1050x700">
                                    <img src="{{ asset('images/portfolio/lady-shutterbug.jpg') }}"
                                        srcset="{{ asset('images/portfolio/lady-shutterbug.jpg') }} 1x, {{ asset('images/portfolio/lady-shutterbug@2x.jpg') }} 2x"
                                        alt="">
                                </a>
                            </div>

                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                                    Shutterbug
                                </h3>
                                <p class="item-folio__cat">
                                    Branding
                                </p>
                            </div>

                            <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                                <i class="icon-link"></i>
                            </a>

                            <div class="item-folio__caption">
                                <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde
                                    dolorem corrupti neque nisi.</p>
                            </div>

                        </div>
                    </div> <!-- end masonry__brick -->

                    <div class="masonry__brick" data-aos="fade-up">
                        <div class="item-folio">

                            <div class="item-folio__thumb">
                                <a href="{{ asset('images/portfolio/gallery/g-woodcraft.jpg') }}" class="thumb-link"
                                    title="Woodcraft" data-size="1050x700">
                                    <img src="{{ asset('images/portfolio/woodcraft.jpg') }}"
                                        srcset="{{ asset('images/portfolio/woodcraft.jpg') }} 1x, {{ asset('images/portfolio/woodcraft@2x.jpg') }} 2x"
                                        alt="">
                                </a>
                            </div>

                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                                    Woodcraft
                                </h3>
                                <p class="item-folio__cat">
                                    Web Design
                                </p>
                            </div>

                            <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                                <i class="icon-link"></i>
                            </a>

                            <div class="item-folio__caption">
                                <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde
                                    dolorem corrupti neque nisi.</p>
                            </div>

                        </div>
                    </div> <!-- end masonry__brick -->

                    <div class="masonry__brick" data-aos="fade-up">
                        <div class="item-folio">

                            <div class="item-folio__thumb">
                                <a href="{{ asset('images/portfolio/gallery/g-beetle.jpg') }}" class="thumb-link"
                                    title="The Beetle Car" data-size="1050x700">
                                    <img src="{{ asset('images/portfolio/the-beetle.jpg') }}"
                                        srcset="{{ asset('images/portfolio/the-beetle.jpg') }} 1x, {{ asset('images/portfolio/the-beetle@2x.jpg') }} 2x"
                                        alt="">
                                </a>
                            </div>

                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                                    The Beetle
                                </h3>
                                <p class="item-folio__cat">
                                    Web Development
                                </p>
                            </div>

                            <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                                <i class="icon-link"></i>
                            </a>

                            <div class="item-folio__caption">
                                <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde
                                    dolorem corrupti neque nisi.</p>
                            </div>

                        </div>
                    </div> <!-- end masonry__brick -->

                    <div class="masonry__brick" data-aos="fade-up">
                        <div class="item-folio">

                            <div class="item-folio__thumb">
                                <a href="{{ asset('images/portfolio/gallery/g-grow-green.jpg') }}" class="thumb-link"
                                    title="Grow Green" data-size="1050x700">
                                    <img src="{{ asset('images/portfolio/grow-green.jpg') }}"
                                        srcset="{{ asset('images/portfolio/grow-green.jpg') }} 1x, {{ asset('images/portfolio/grow-green@2x.jpg') }} 2x"
                                        alt="">
                                </a>
                            </div>

                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                                    Grow Green
                                </h3>
                                <p class="item-folio__cat">
                                    Branding
                                </p>
                            </div>

                            <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                                <i class="icon-link"></i>
                            </a>

                            <div class="item-folio__caption">
                                <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde
                                    dolorem corrupti neque nisi.</p>
                            </div>

                        </div>
                    </div> <!-- end masonry__brick -->

                    <div class="masonry__brick" data-aos="fade-up">
                        <div class="item-folio">

                            <div class="item-folio__thumb">
                                <a href="{{ asset('images/portfolio/gallery/g-guitarist.jpg') }}" class="thumb-link"
                                    title="Guitarist" data-size="1050x700">
                                    <img src="{{ asset('images/portfolio/guitarist.jpg') }}"
                                        srcset="{{ asset('images/portfolio/guitarist.jpg') }} 1x, {{ asset('images/portfolio/guitarist@2x.jpg') }} 2x"
                                        alt="">
                                </a>
                            </div>

                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                                    Guitarist
                                </h3>
                                <p class="item-folio__cat">
                                    Web Design
                                </p>
                            </div>

                            <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                                <i class="icon-link"></i>
                            </a>

                            <div class="item-folio__caption">
                                <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde
                                    dolorem corrupti neque nisi.</p>
                            </div>

                        </div>
                    </div> <!-- end masonry__brick -->

                    <div class="masonry__brick" data-aos="fade-up">
                        <div class="item-folio">

                            <div class="item-folio__thumb">
                                <a href="{{ asset('images/portfolio/gallery/g-palmeira.jpg') }}" class="thumb-link"
                                    title="Palmeira" data-size="1050x700">
                                    <img src="{{ asset('images/portfolio/palmeira.jpg') }}"
                                        srcset="{{ asset('images/portfolio/palmeira.jpg') }} 1x, {{ asset('images/portfolio/palmeira@2x.jpg') }} 2x"
                                        alt="">
                                </a>
                            </div>

                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                                    Palmeira
                                </h3>
                                <p class="item-folio__cat">
                                    Web Design
                                </p>
                            </div>

                            <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                                <i class="icon-link"></i>
                            </a>

                            <div class="item-folio__caption">
                                <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde
                                    dolorem corrupti neque nisi.</p>
                            </div>

                        </div>
                    </div> <!-- end masonry__brick -->

                </div> <!-- end masonry -->
            </div> <!-- end col-full -->
        </div> <!-- end works-content -->

    </section> <!-- end s-works -->


    <!-- clients
    ================================================== -->
    <section id="clients" class="s-clients">

        <div class="row section-header" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead">Our Clients</h3>
                <h1 class="display-2">Glint has been honored to
                    partner up with these clients</h1>
            </div>
        </div> <!-- end section-header -->

        <div class="row clients-outer" data-aos="fade-up">
            <div class="col-full">
                <div class="clients">

                    <a href="#0" title="" class="clients__slide"><img
                            src="{{ asset('images/clients/apple.png') }}" /></a>
                    <a href="#0" title="" class="clients__slide"><img
                            src="{{ asset('images/clients/atom.png') }}" /></a>
                    <a href="#0" title="" class="clients__slide"><img
                            src="{{ asset('images/clients/blackberry.png') }}" /></a>
                    <a href="#0" title="" class="clients__slide"><img
                            src="{{ asset('images/clients/dropbox.png') }}" /></a>
                    <a href="#0" title="" class="clients__slide"><img
                            src="{{ asset('images/clients/envato.png') }}" /></a>
                    <a href="#0" title="" class="clients__slide"><img
                            src="{{ asset('images/clients/firefox.png') }}" /></a>
                    <a href="#0" title="" class="clients__slide"><img
                            src="{{ asset('images/clients/joomla.png') }}" /></a>
                    <a href="#0" title="" class="clients__slide"><img
                            src="{{ asset('images/clients/magento.png') }}" /></a>

                </div> <!-- end clients -->
            </div> <!-- end col-full -->
        </div> <!-- end clients-outer -->

        <div class="row clients-testimonials" data-aos="fade-up">
            <div class="col-full">
                <div class="testimonials">

                    <div class="testimonials__slide">

                        <p>Qui ipsam temporibus quisquam vel. Maiores eos cumque distinctio nam accusantium ipsum.
                            Laudantium quia consequatur molestias delectus culpa facere hic dolores aperiam. Accusantium
                            quos qui praesentium corpori.
                            Excepturi nam cupiditate culpa doloremque deleniti repellat.</p>

                        <img src="{{ asset('images/avatars/user-01.jpg') }}" alt="Author image"
                            class="testimonials__avatar">
                        <div class="testimonials__info">
                            <span class="testimonials__name">Tim Cook</span>
                            <span class="testimonials__pos">CEO, Apple</span>
                        </div>

                    </div>

                    <div class="testimonials__slide">

                        <p>Excepturi nam cupiditate culpa doloremque deleniti repellat. Veniam quos repellat voluptas
                            animi adipisci.
                            Nisi eaque consequatur. Quasi voluptas eius distinctio. Atque eos maxime. Qui ipsam
                            temporibus quisquam vel.</p>

                        <img src="{{ asset('images/avatars/user-05.jpg') }}" alt="Author image"
                            class="testimonials__avatar">
                        <div class="testimonials__info">
                            <span class="testimonials__name">Sundar Pichai</span>
                            <span class="testimonials__pos">CEO, Google</span>
                        </div>

                    </div>

                    <div class="testimonials__slide">

                        <p>Repellat dignissimos libero. Qui sed at corrupti expedita voluptas odit. Nihil ea quia
                            nesciunt. Ducimus aut sed ipsam.
                            Autem eaque officia cum exercitationem sunt voluptatum accusamus. Quasi voluptas eius
                            distinctio.</p>

                        <img src="{{ asset('images/avatars/user-02.jpg') }}" alt="Author image"
                            class="testimonials__avatar">
                        <div class="testimonials__info">
                            <span class="testimonials__name">Satya Nadella</span>
                            <span class="testimonials__pos">CEO, Microsoft</span>
                        </div>

                    </div>

                </div><!-- end testimonials -->

            </div> <!-- end col-full -->
        </div> <!-- end client-testimonials -->

    </section> <!-- end s-clients --> --}}


    <!-- contact
    ================================================== -->
    <section id="contact" class="s-contact">

        <div class="overlay"></div>
        <div class="contact__line"></div>

        <div class="row section-header" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead">Оставить заявку</h3>
                <h1 class="display-2 display-2--light">Отправь запрос на участие или просто поздоровайся</h1>
            </div>
        </div>

        <div class="row contact-content" data-aos="fade-up">

            <div class="contact-primary">

                <h3 class="h6">Заявка</h3>

                <form name="contactForm" id="contactForm" method="post" action="" novalidate="novalidate">
                    <fieldset>

                        <div class="form-field">
                            <input name="contactName" type="text" id="contactName" placeholder="Ваше имя" value=""
                                minlength="2" required="" aria-required="true" class="full-width">
                        </div>
                        <div class="form-field">
                            <input name="contactEmail" type="email" id="contactEmail" placeholder="Email" value=""
                                required="" aria-required="true" class="full-width">
                        </div>
                        <div class="form-field">
                            <input name="contactSubject" type="text" id="contactSubject"
                                placeholder="Команда (Случайная или своя)" value="" class="full-width">
                        </div>
                        <div class="form-field">
                            <textarea name="contactMessage" id="contactMessage" placeholder="Ваши пожелания" rows="10"
                                cols="50" aria-required="true" class="full-width"></textarea>
                        </div>
                        <div class="form-field">
                            <button class="full-width btn--primary">Отправить</button>
                            <div class="submit-loader">
                                <div class="text-loader">Sending...</div>
                                <div class="s-loader">
                                    <div class="bounce1"></div>
                                    <div class="bounce2"></div>
                                    <div class="bounce3"></div>
                                </div>
                            </div>
                        </div>

                    </fieldset>
                </form>

                <!-- contact-warning -->
                <div class="message-warning">
                    Something went wrong. Please try again.
                </div>

                <!-- contact-success -->
                <div class="message-success">
                    Your message was sent, thank you!<br>
                </div>

            </div> <!-- end contact-primary -->

            <div class="contact-secondary">
                <div class="contact-info">

                    <h3 class="h6 hide-on-fullwidth">Полезная информация</h3>

                    <div class="cinfo">
                        <h5>Команда</h5>
                        <p>
                            Вы можете поиграть со случайной командой, <br>
                            А можете создать свою. <br>
                            Напишите об этом в поле "Команда"
                        </p>
                    </div>

                    <div class="cinfo">
                        <h5>Пожелания</h5>
                        <p>
                            Если вы собираетесь играть<br>
                            со своей командой, <br>
                            то опишите состав вашей команды </p>
                    </div>

                    <div class="cinfo">
                        <h5>Поддержка</h5>
                        <p>
                            Phone: (+63) 555 1212<br>
                            Mobile: (+63) 555 0100<br>
                            Fax: (+63) 555 0101
                        </p>
                    </div>

                    {{-- <ul class="contact-social">
                        <li>
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                        </li>
                    </ul> <!-- end contact-social --> --}}

                </div> <!-- end contact-info -->
            </div> <!-- end contact-secondary -->

        </div> <!-- end contact-content -->

    </section> <!-- end s-contact -->


    <!-- footer
    ================================================== -->
    <footer>

        <div class="row footer-main">

            <div class="col-six tab-full left footer-desc">

                {{-- <div class="footer-logo"></div> --}}
                <b>Никакая ощутимая, реальная прелесть не может сравниться с тем, что способен накопить человек в
                    глубинах
                    своей фантазии.</b> - Великий Гетсби.

            </div>

            {{-- <div class="col-six tab-full right footer-subscribe">

                <h4>Get Notified</h4>
                <p>Quia quo qui sed odit. Quaerat voluptas autem necessitatibus vitae aut non alias sed quia. Ut itaque
                    enim optio ut excepturi deserunt iusto porro.</p>

                <div class="subscribe-form">
                    <form id="mc-form" class="group" novalidate="true">
                        <input type="email" value="" name="EMAIL" class="email" id="mc-email"
                            placeholder="Email Address" required="">
                        <input type="submit" name="subscribe" value="Subscribe">
                        <label for="mc-email" class="subscribe-message"></label>
                    </form>
                </div>

            </div> --}}

        </div> <!-- end footer-main -->

        <div class="row footer-bottom">

            <div class="col-twelve">
                <div class="copyright">
                    <span>© Copyright Orijinx 2021</span>
                    {{-- <span>Site Template by <a href="https://www.colorlib.com/">Colorlib</a></span> --}}
                </div>

                <div class="go-top">
                    <a class="smoothscroll" title="Back to Top" href="#top"><i class="icon-arrow-up"
                            aria-hidden="true"></i></a>
                </div>
            </div>

        </div> <!-- end footer-bottom -->

    </footer> <!-- end footer -->


    <!-- photoswipe background
    ================================================== -->
    <div aria-hidden="true" class="pswp" role="dialog" tabindex="-1">

        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">

            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>

            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div><button class="pswp__button pswp__button--close"
                        title="Close (Esc)"></button> <button class="pswp__button pswp__button--share"
                        title="Share"></button> <button class="pswp__button pswp__button--fs"
                        title="Toggle fullscreen"></button> <button class="pswp__button pswp__button--zoom"
                        title="Zoom in/out"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div><button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
                <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>

        </div>

    </div> <!-- end photoSwipe background -->


    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader">
            <div class="line-scale-pulse-out">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>


    <!-- Java Script
    ================================================== -->
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>
