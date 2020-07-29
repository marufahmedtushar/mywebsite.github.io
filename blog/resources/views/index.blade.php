
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>My Web | Home</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->

    <link href="{{ asset('img/img8.ico')}} " rel="shortcut icon">

    <!-- Bootstrap CSS File -->
    <link href="{{ asset('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="{{ asset('lib/font-awesome/css/font-awesome.min.css ')}}" rel="stylesheet">
    <link href="{{ asset('lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{ asset('lib/ionicons/css/ionicons.min.css')}} " rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css ')}}" rel="stylesheet">
    <link href="{{ asset('lib/lightbox/css/lightbox.min.css')}} " rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="{{ asset('css/style.css')}}" rel="stylesheet">

    <!-- =======================================================
      Theme Name: DevFolio
      Theme URL: https://bootstrapmade.com/devfolio-bootstrap-portfolio-html-template/
      Author: BootstrapMade.com
      License: https://bootstrapmade.com/license/
    ======================================================= -->
</head>

<body id="page-top">

<!--/ Nav Star /-->
<nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll" href="#page-top">Mrf100</a>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
                aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link js-scroll active" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll" href="#projects">Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll" href="#skill">Skill</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll" href="#others">Others</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll" href="#contact">Contact</a>
                </li>

                <li class="nav-item">

                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="btn btn-primary" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="btn btn-primary" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest

                </li>

            </ul>
        </div>
    </div>
</nav>
<!--/ Nav End /-->

<!--/ Intro Skew Star /-->
<div id="home" class="intro route bg-image" style="background-image: url({{ asset('img/bg.jpg')}})">
    <div class="overlay-itro"></div>
    <div class="intro-content display-table">
        <div class="table-cell">
            <div class="container">
                <!--<p class="display-6 color-d">Hello, world!</p>-->
                <h1 class="intro-title mb-4">I am Maruf Ahmed Tushar</h1>
                <p class="intro-subtitle"><span class="text-slider-items">CEO Mrf100,Web Developer,Web Designer,Frontend Developer</span><strong class="text-slider"></strong></p>
                <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
            </div>
        </div>
    </div>
</div>
<!--/ Intro Skew End /-->

<section id="about" class="about-mf sect-pt4 route">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="box-shadow-full">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-sm-6 col-md-5  ">
                                    <div class="about-img mt-5">
                                        <img src="img/testimonial-3.jpg" class="img-fluid rounded b-shadow-a" alt="">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-7">
                                    <div class="about-info mt-5">
                                        <p><span class="title-s">Name: </span> <span>Maruf Ahmed Tushar</span></p>
                                        <p><span class="title-s">Profile: </span> <span>full stack developer</span></p>
                                        <p><span class="title-s">Email: </span> <span>ahmedmaruf471@gmail.com</span></p>
                                        <p><span class="title-s">Phone: </span> <span>8801931989411</span></p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="about-me  ">
                                <div class="title-2">
                                    <h5 class="title-left mt-2">
                                        About me
                                    </h5>
                                </div>
                                <div class="mt-3">
                                <h5> Studing B.Sc.Engg in CSE,</h5>
                                <h5> Department of Computer Science and Engineering </h5>
                                <h5> Bangladesh Army University of Science and Technology (BAUST)</h5>
                                <h5>Saidpur Cantonment, Saidpur, Nilphamari</h5>
                                <h5>Bangladesh</h5>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--/ Section Projects  /-->

<section id="projects" class="services-mf route">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="title-box text-center">
                    <h3 class="title-a">
                        Projects
                    </h3>
                    <div class="line-mf"></div>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach($project as $projects)


            <div class="col-md-4">
                <div class="service-box">
                    <div class="service-ico">
                        <img src='/storage/cover_images/{{$projects->image}}' class="card-img"  style="height: 150px;width: 150px;margin-left: 80px;" alt="...">
                    </div>
                    <div class="service-content">
                        <h2 class="s-title">{{$projects->project_language}}</h2>
                        <h6 class="title">Project Name :{{$projects->name}}</h6>
                        <p class="s-description text-left">
                            {{$projects->desc}}

                        </p>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
    </div>
</section>
<!--/ Section Services End /-->



<!--/ Section Skill Start /-->
<section id="skill" class="portfolio-mf sect-pt4 route">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="title-box text-center">
                    <h3 class="title-a">
                        SKILL
                    </h3>
                    <div class="line-mf"></div>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($skill as $skills)

            <div class="col-md-4">
                <div class="service-box" style="height:325px;">
                    <div class="service-ico">
                        <img src='/storage/cover_images/{{$skills->image}}' class="card-img-top"  style="height: 200px;width: 200px;margin-left: 50px;" alt="...">
                    </div>
                    <div class="service-content">
                        <h2 class="s-title text-center">{{$skills->name}}</h2>

                    </div>
                </div>
            </div>
            @endforeach


        </div>
    </div>
</section>
<!--/ Section Skill End /-->





<!--/ Section others start /-->
<section id="others" class="services-mf route">

    <div class="container">

        <div class="row">
            <div class="col-sm-12">
                <div class="title-box text-center">
                    <h3 class="title-a">
                        Education
                    </h3>
                    <div class="line-mf"></div>
                </div>
            </div>
        </div>




        <div class="widget-sidebar">
            <h5 class="sidebar-title">Studing B.Sc. Engg. in CSE</h5>
            <div class="sidebar-content">
                <ul class="list-sidebar">
                    <li>
                        <h6>Dept. of CSE, Bangladesh Army University of Science and Technology (BAUST)</h6>
                    </li>
                    <li>
                        <h6>Saidpur,Nilphamari, Bangladesh</h6>
                    </li>
                </ul>
            </div>
        </div>


        <div class="widget-sidebar">
            <h5 class="sidebar-title">HSC</h5>
            <div class="sidebar-content">
                <ul class="list-sidebar">
                    <li>
                        <h6>Jessore Board</h6>
                    </li>
                    <li>
                        <h6>Cantonment Public School & College ,Jahanabad Cantonment,Khulna</h6>
                    </li>
                    <li>
                        <h6>Khulna, Bangladesh</h6>
                    </li>
                </ul>
            </div>
        </div>

        <div class="widget-sidebar">
            <h5 class="sidebar-title">SSC</h5>
            <div class="sidebar-content">
                <ul class="list-sidebar">
                    <li>
                        <h6>Jessore Board</h6>
                    </li>
                    <li>
                        <h6>Cantonment Public School & College ,Jahanabad Cantonment,Khulna</h6>
                    </li>
                    <li>
                        <h6>Khulna, Bangladesh</h6>
                    </li>
                </ul>
            </div>
        </div>





    </div>

    <!--/ Section others end /-->




    <!--/ Section Contact-Footer Start /-->

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="contact-mf">
                    <div id="contact" class="box-shadow-full">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="title-box-2">
                                    <h5 class="title-left">
                                        Send Message Us
                                    </h5>
                                </div>
                                <div>
                                    <form action="/contact"  method="post">
                                        {{ csrf_field() }}

                                        <div class="row">
                                            <div class="col-md-12 mb-3">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="name" name='name'  placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                                    <div class="validation"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <div class="form-group">
                                                    <input type="email" class="form-control"  id="email" name='email' placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                                    <div class="validation"></div>
                                                </div>
                                            </div>

                                            <div class="col-md-12 mb-3">
                                                <div class="form-group">
                                                    <textarea class="form-control" id="msg" name='msg' rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                                    <div class="validation"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <button type="submit" class="button button-a button-big button-rouded">Send Message</button>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="title-box-2 pt-4 pt-md-0">
                                    <h5 class="title-left">
                                        Get in Touch
                                    </h5>
                                </div>
                                <div class="more-info">

                                    <ul class="list-ico">
                                        <li><span class="ion-ios-location"></span> Tangail,Bangladesh</li>
                                        <li><span class="ion-ios-telephone"></span> +8801931989411,<br> +8801306092416</li>
                                        <li><span class="ion-email"></span> ahmedmaruf471@gmail.com,<br> ahmedtushar471@gmail.com</li>
                                    </ul>
                                </div>
                                <div class="socials">
                                    <ul>
                                        <li><a href="https://web.facebook.com/marufahmedtushar471"><span class="ico-circle"><i class="ion-social-facebook"></i></span></a></li>
                                        <li><a href="https://www.instagram.com/ahmedtushar471/?hl=en"><span class="ico-circle"><i class="ion-social-instagram"></i></span></a></li>
                                        <li><a href="https://twitter.com/maruf_tushar"><span class="ico-circle"><i class="ion-social-twitter"></i></span></a></li>
                                        <li><a href="https://www.linkedin.com/in/maruf-ahmed-bb3bbb18a/"><span class="ico-circle"><i class="ion-social-linkedin-outline"></i></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</section>

<section class="paralax-mf footer-paralax bg-image sect-mt4 route">
    <div class="overlay-mf"></div>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="copyright-box">
                        <p class="copyright">&copy; Copyright <strong>Mrf100</strong>. All Rights Reserved</p>
                        <div class="credits">
                            <!--
                              All the links in the footer should remain intact.
                              You can delete the links only if you purchased the pro version.
                              Licensing information: https://bootstrapmade.com/license/
                              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=DevFolio
                            -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</section>
<!--/ Section Contact-footer End /-->

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
<div id="preloader"></div>

<!-- JavaScript Libraries -->
<script src="{{ asset('lib/jquery/jquery.min.js')}}"></script>
<script src="{{ asset('lib/jquery/jquery-migrate.min.js')}}"></script>
<script src="{{ asset( 'lib/popper/popper.min.js')}}"></script>
<script src="{{ asset( 'lib/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{ asset( 'lib/easing/easing.min.js')}}"></script>
<script src="{{ asset( 'lib/counterup/jquery.waypoints.min.js')}}"></script>
<script src="{{ asset( 'lib/counterup/jquery.counterup.js')}}"></script>
<script src="{{ asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
<script src="{{ asset( 'lib/lightbox/js/lightbox.min.js')}}"></script>
<script src="{{ asset( 'lib/typed/typed.min.js')}}"></script>
<!-- Contact Form JavaScript File -->
<script src="{{ asset( 'contactform/contactform.js')}}"></script>

<!-- Template Main Javascript File -->
<script src="{{ asset( 'js/main.js')}}"></script>

</body>
</html>
