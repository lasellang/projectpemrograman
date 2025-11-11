<!doctype html>
<html lang="en">
  <head>
    <!-- META -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="SLAXM - Portfolio" />
    <meta
      name="keywords"
      content="personal, portfolio new, html, one page, tailwind, new html template, design, creative, onepage, clean, modern"
    />
    <meta name="author" content="Tanvir Hossain" />
    <!-- PAGE TITLE -->
    <title>SLAXM - Portfolio</title>
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.png" />

    <!-- FONT AWESOME CSS -->
    <link rel="stylesheet" href="assets/css/font-awesome-pro.css" />
    <!-- FONT AWESOME CSS -->
    <link rel="stylesheet" href="assets/fonts/remixicon.css" />
    <!-- MAGNIFIC CSS -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css" />
    <!-- NICE SELECT CSS -->
    <link rel="stylesheet" href="assets/css/nice-select.min.css" />
    <!-- ANIMATE CSS -->
    <link rel="stylesheet" href="assets/css/animate.min.css" />
    <!-- MOBILE MENU CSS -->
    <link rel="stylesheet" href="assets/css/mobilemenu.css" />
    <!-- SLICK CSS -->
    <link rel="stylesheet" href="assets/css/slick.min.css" />
    <!-- SPACING CSS -->
    <link rel="stylesheet" href="assets/css/spacing.css" />
    <!-- MAIN STYLE CSS -->
    <link rel="stylesheet" href="assets/css/style.css" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="{{ asset('style.css') }}">


  <body class="overflow-x-hidden bg-bodyBackground font-normal text-greyBg">
    <!-- START PRELOADER AREA-->

    <div
      class="preloader fixed left-0 top-0 z-[99999999999999] flex h-[100vh] w-full items-center justify-center overflow-hidden bg-transparent"
    >
      <svg
        class="absolute top-0 h-[110vh] w-[100vw] fill-bodyBackground"
        viewbox="0 0 1000 1000"
        preserveaspectratio="none"
      >
        <path
          id="preloaderSvg"
          d="M0,1005S175,995,500,995s500,5,500,5V0H0Z"
        ></path>
      </svg>
      <div class="preloader-heading">
        <div
          class="load-text z-20 text-xl font-extralight uppercase tracking-[15px]"
        >
          <span>L</span>
          <span>o</span>
          <span>a</span>
          <span>d</span>
          <span>i</span>
          <span>n</span>
          <span>g</span>
        </div>
      </div>
    </div>

    <!-- END PRELOADER AREA -->
    <!-- START SCROOL UP DESIGN AREA -->
    <div
      class="progress-wrap fixed bottom-[30px] right-[30px] z-50 block size-11 cursor-pointer rounded-[50px]"
    >
      <i
        class="ri-arrow-up-s-line absolute left-[10px] top-2 text-center text-[25px]"
      ></i>
      <svg
        class="progress-circle svg-content"
        width="100%"
        height="100%"
        viewBox="-1 -1 102 102"
      >
        <path
          d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
          class="fill-none stroke-[#ddd] stroke-[4] duration-500"
        />
      </svg>
    </div>
    <!-- / END SCROOL UP DESIGN AREA -->
    <!-- START MAGIC CURSOR AND BALL AREA-->
    <div
      id="magic-cursor"
      class="pointer-events-none absolute left-0 top-0 z-[10000] h-[30px] w-[30px] delay-500 duration-200 ease-in-out"
    >
      <div
        id="ball"
        class="pointer-events-none fixed -my-5 flex h-10 w-10 flex-col justify-center rounded-full border-2 border-gray-600 opacity-0"
      ></div>
    </div>
    <!-- / END MAGIC CURSOR AND BALL AREA-->
    <!-- START MENU DESIGN AREA-->
    @include('partials.header')
 <div class="container">
 @yield('content')
 </div>

    <!-- // END MENU DESIGN AREA-->
    <!-- START MOBILE MENU DESIGN AREA-->
    <div class="sidebar__area">
      <div class="sidebar__wrapper">
        <div class="sidebar__close">
          <button class="sidebar__close-btn" id="sidebar__close-btn">
            <i class="fal fa-times"></i>
          </button>
        </div>
        <div class="sidebar__content mb-[20px] mt-[50px]">
          <div class="mobile-menu fix"></div>
        </div>
      </div>
    </div>
    <div class="body-overlay"></div>
    <!-- // END MOBILE MENU DESIGN AREA-->
    <!-- START SINGLE PAGE DESIGN AREA -->
    <section class="single-page-hero-area">
      <div class="container">
        <div class="grid grid-cols-12 items-center gap-6">
          <div class="lg:col-span-12">
            <h2 class="!leading-[120%]">3d logo design</h2>
            <p>
              Fill out the form below to get in touch with me. I'm always
              excited to hear about new opportunities and I'll do my best to
              respond to your inquiry within 24 hours.
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- // END SINGLE PAGE DESIGN AREA -->
    <!-- START SINGLE PAGE DETAILS DESIGN AREA -->
    <div class="single-project-page-design bg-blackColor">
      <div class="single-project-image">
        <img src="assets/images/projects/work2.jpg" alt="image" />
      </div>
      <div class="container pb-10 pt-14">
        <div class="grid grid-cols-12 gap-6">
          <div class="col-span-12 lg:col-span-4">
            <!-- START SINGLE LEFT DESIGN AREA -->
            <div
              class="single-project-page-left wow fadeInUp delay-0-2s text-white"
            >
              <div class="single-info">
                <p>Year</p>
                <h3>2025</h3>
              </div>
              <div class="single-info">
                <p>Client</p>
                <h3>Adis</h3>
              </div>
              <div class="single-info">
                <p>Services</p>
                <h3>3d Logo</h3>
              </div>
              <div class="single-info">
                <p>Project</p>
                <h3>Creative</h3>
              </div>
            </div>
            <!-- / END SINGLE LEFT DESIGN AREA -->
          </div>
          <!-- START SINGLE RIGHT DESIGN AREA -->
          <div class="col-span-12 lg:col-span-8">
            <div class="single-project-page-right wow fadeInUp delay-0-4s">
              <h2>Description</h2>
              <p class="pt-2 text-white">
                I'm offering exclusive 3D logo design services for DJs looking to elevate their branding and professional appearance. Here's why a 3D logo can significantly benefit you : Enhanced Branding , Versatile Media Use , Exclusive & Custom Design , Professional Visual Quality , Increased Engagement
              </p>
              <p class="pt-6 text-white">
                I'm currently opening limited slots for custom 3D logo creation. If you're interested, please reply to this message to view my portfolio and discuss further.

Thank you, and I look forward to working with you!
              </p>
            </div>
          </div>
          <!-- / END SINGLE RIGHT DESIGN AREA -->
        </div>
        <!-- START SINGLE PAGE GALLERY DESIGN AREA -->
        <div class="grid grid-cols-12 gap-6 pt-14">
          <div class="col-span-12 lg:col-span-6">
            <a href="assets/images/projects/work1.jpg" class="work-popup">
              <div class="single-image wow fadeInUp delay-0-2s">
                <img src="assets/images/projects/work1.jpg" alt="gallery" />
              </div>
            </a>
          </div>
          <div class="col-span-12 lg:col-span-6">
            <a href="assets/images/projects/work2.jpg" class="work-popup">
              <div class="single-image wow fadeInUp delay-0-4s">
                <img src="assets/images/projects/work2.jpg" alt="gallery" />
              </div>
            </a>
          </div>
          <div class="col-span-12 lg:col-span-6">
            <a href="assets/images/projects/work3.jpg" class="work-popup">
              <div class="single-image wow fadeInUp delay-0-6s">
                <img src="assets/images/projects/work3.jpg" alt="gallery" />
              </div>
            </a>
          </div>
          <div class="col-span-12 lg:col-span-6">
            <a href="assets/images/projects/work4.jpg" class="work-popup">
              <div class="single-image wow fadeInUp delay-0-8s">
                <img src="assets/images/projects/work4.jpg" alt="gallery" />
              </div>
            </a>
          </div>
        </div>
        <!--  / END SINGLE PAGE GALLERY DESIGN AREA -->
      </div>
    </div>
    <!-- / END SINGLE PAGE DETAILS DESIGN AREA -->

    <!-- START FOOTER DESIGN AREA -->
    @include('partials.footer')
    <!-- / END FOOTER DESIGN AREA -->

    <!-- JQUERY JS -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>

    <!-- APPEAR JS -->
    <script src="assets/js/appear.min.js"></script>
    <!-- MAGNIFICANT JS -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- MOBILE MENU JS-->
    <script src="assets/js/mobilemenu.js"></script>
    <!-- GSAP AND LOCOMOTIV JS-->
    <script src="assets/js/gsap.min.js"></script>
    <script src="assets/js/ScrollTrigger.min.js"></script>
    <script src="assets/js/lenis.js"></script>
    <!-- SWIPPER JS-->
    <script src="assets/js/swiper-bundle.js"></script>
    <!-- NICE SELECT JS-->
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <!-- IMAGE LOADER JS-->
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <!-- ISOTOPE JS-->
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <!--  WOW ANIMATION JS-->
    <script src="assets/js/wow.min.js"></script>
    <!-- SCRIPT JS-->
    <script src="assets/js/script.js"></script>
  <script defer src="index.js"></script></body>
</html>
