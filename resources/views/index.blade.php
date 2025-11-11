
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
    <link rel="icon" type="image/x-icon" href="./assets/images/favicon.png" />

    <!-- FONT AWESOME CSS -->
    <link rel="stylesheet" href="/assets/css/font-awesome-pro.css" />
    <!-- FONT AWESOME CSS -->
    <link rel="stylesheet" href="/assets/fonts/remixicon.css" />
    <!-- MAGNIFIC CSS -->
    <link rel="stylesheet" href="/assets/css/magnific-popup.css" />
    <!-- NICE SELECT CSS -->
    <link rel="stylesheet" href="/assets/css/nice-select.min.css" />
    <!-- ANIMATE CSS -->
    <link rel="stylesheet" href="/assets/css/animate.min.css" />
    <!-- MOBILE MENU CSS -->
    <link rel="stylesheet" href="/assets/css/mobilemenu.css" />
    <!-- SLICK CSS -->
    <link rel="stylesheet" href="/assets/css/slick.min.css" />
    <!-- SPACING CSS -->
    <link rel="stylesheet" href="/assets/css/spacing.css" />

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
    <!-- START HEADER DESIGN AREA -->
    <section id="home" class="bg-primaryColor pt-[115px]">
      <div class="container">
        <div class="grid grid-cols-12">
          <div class="col-span-12">
            <!-- START HERO DESIGN AREA -->
            <div class="wow fadeInUp delay-0-2s p-0 text-center">
              <h2
                class="text-center text-[70px] font-medium uppercase text-mainColor md:text-[120px] lg:text-[170px] xl:text-[230px]"
              >
                Azlam Azhari
              </h2>
            </div>
            <!-- / END HERO DESIGN AREA -->
          </div>
        </div>
        <div class="grid grid-cols-12 max-lg:overflow-hidden lg:gap-6">
          <div class="col-span-12 pt-8 lg:col-span-3">
            <!-- START HERO DESIGN AREA -->
            
            <!-- / END HERO DESIGN AREA -->
          </div>
          <div class="col-span-12 lg:col-span-6">
            <div class="hero-image lg:-mt-[100px]">
              <img src="./assets/images/about/me.jpg" alt="" />
            </div>
            <!-- / END HERO DESIGN AREA -->
          </div>
          <div class="col-span-12 pt-8 lg:col-span-3">
            <div class="hero-content wow fadeInUp delay-0-4s">
              <p class="pb-4">
                I'm Azlam Azhari, a passionate web developer specializing in
                creating dynamic and user-friendly websites. With a keen eye for
                design and a commitment to coding excellence, I bring ideas to
                life on the web.
              </p>
              <a class="theme-btn" href="">Get In touch</a>
            </div>
            <!-- / END HERO DESIGN AREA -->
          </div>
        </div>
      </div>
    </section>
    <!-- / END HEADER DESIGN AREA -->

  

    <!-- START ABOUT DESIGN AREA -->
    <section id="about" class="about-area">
      <div class="container">
        <div class="grid grid-cols-12 gap-6">
          <!-- START ABOUT TEXT DESIGN AREA -->
          <div class="col-span-12 sm:col-span-3">
            <h2 class="about-pre-title">About Me</h2>
          </div>
          <div class="col-span-12 sm:col-span-9">
            <div class="about-content-part wow fadeInUp delay-0-2s max-md:px-0">
              <p>
                I'm Azlam Azhari, a passionate web developer specializing in
                creating dynamic and user-friendly websites. With a keen eye for
                design and a commitment to coding excellence, I bring ideas to
                life on the web.
              </p>
            </div>
            <!-- START COUNTER DESIGN AREA -->
            
            <!-- / END COUNTER DESIGN AREA -->
          </div>
          <!-- / END ABOUT TEXT DESIGN AREA -->
        </div>
      </div>
    </section>
    <!-- / END ABOUT DESIGN AREA -->
    <!-- START SERVICE DESIGN AREA -->
    
    <!-- / END SERVICE DESIGN AREA -->

    <!-- START PORTFOLIO DESIGN AREA -->
    <div class="projects-area" id="portfolio">
      <div class="custom-icon">
        <img src="assets/images/custom/work-scribble.svg" alt="custom" />
      </div>
      <div class="container-fluid">
        <div class="portfolio-grid grid grid-cols-12 gap-6">
          <!-- START SINGLE PORTFOLIO DESIGN AREA -->
          <div class="portfolio-item category-1 col-span-12 md:col-span-6">
            <a href="assets/images/projects/work1.jpg" class="work-popup">
              <div class="portfolio-box">
                <!-- Image -->
                <img
                  src="assets/images/projects/work1.jpg"
                  alt=""
                  data-rjs="2"
                />
                <!-- Category -->
                <span class="portfolio-category">Menu Design</span>
                <!-- Caption -->
                <div class="portfolio-caption">
                  <h1>Wakey Wakey</h1>
                </div>
              </div>
            </a>
          </div>
          <!-- // END SINGLE PORTFOLIO DESIGN AREA -->
          <!-- START SINGLE PORTFOLIO DESIGN AREA -->
          <div class="portfolio-item category-2 col-span-12 md:col-span-6">
            <a href="single-project.html">
              <div class="portfolio-box">
                <!-- Image -->
                <img
                  src="assets/images/projects/work2.jpg"
                  alt=""
                  data-rjs="2"
                />
                <!-- Category -->
                <span class="portfolio-category">Logo Design</span>
                <!-- Caption -->
                <div class="portfolio-caption">
                  <h1>ADIS</h1>
                </div>
              </div>
            </a>
          </div>
          <!-- // END SINGLE PORTFOLIO DESIGN AREA -->
          <!-- START SINGLE PORTFOLIO DESIGN AREA -->
          <div
            class="portfolio-item category-2 col-span-12 md:col-span-6 xl:col-span-4"
          >
            <a
              href="https://www.youtube.com/watch?v=qZEPs3vmYB4"
              class="popup-youtube"
            >
              <div class="portfolio-box">
                <!-- Image -->
                <img
                  src="assets/images/projects/work3.jpg"
                  alt=""
                  data-rjs="2"
                />
                <!-- Category -->
                <span class="portfolio-category">Augmented reality</span>
                <!-- Caption -->
                <div class="portfolio-caption">
                  <h1>Filter jedag jedug eaa</h1>
                </div>
              </div>
            </a>
          </div>
          <!-- // END SINGLE PORTFOLIO DESIGN AREA -->
          <!-- START SINGLE PORTFOLIO DESIGN AREA -->
          <div
            class="portfolio-item category-1 col-span-12 md:col-span-6 xl:col-span-4"
          >
            <a href="assets/images/projects/work4.jpg" class="work-popup">
              <div class="portfolio-box">
                <!-- Image -->
                <img
                  src="assets/images/projects/work4.jpg"
                  alt=""
                  data-rjs="2"
                />
                <!-- Category -->
                <span class="portfolio-category">Motion Designer</span>
                <!-- Caption -->
                <div class="portfolio-caption">
                  <h1>Fan edit</h1>
                </div>
              </div>
            </a>
          </div>
          <!-- // END SINGLE PORTFOLIO DESIGN AREA -->
          <!-- START SINGLE PORTFOLIO DESIGN AREA -->
          <div
            class="portfolio-item category-2 col-span-12 md:col-span-6 xl:col-span-4"
          >
            <a href="assets/images/projects/work5.jpg" class="work-popup">
              <div class="portfolio-box">
                <!-- Image -->
                <img
                  src="assets/images/projects/work5.jpg"
                  alt=""
                  data-rjs="2"
                />
                <!-- Category -->
                <span class="portfolio-category">Music Producer</span>
                <!-- Caption -->
                <div class="portfolio-caption">
                  <h1>Afro House Style</h1>
                </div>
              </div>
            </a>
          </div>
          <!-- // END SINGLE PORTFOLIO DESIGN AREA -->
        </div>
      </div>
    </div>
    <!-- // END PORTFOLIO DESIGN AREA -->

    <!-- START TESTIMONIALS DESIGN AREA -->
    
           
    
    <!-- / END TESTIMONIALS DESIGN AREA -->

   

    <!-- START CONTACT DESIGN AREA -->
    <section id="contact" class="contact-area">
      <div class="container">
        <div class="grid grid-cols-12 gap-6">
          <div class="col-span-12">
            <div
              class="section-title section-black-title wow fadeInUp delay-0-2s"
            >
              <h2>Contact Me</h2>
            </div>
          </div>
        </div>
        <div class="grid grid-cols-12 gap-6">
          <div class="col-span-12 lg:col-span-4">
            <div class="contact-content-part wow fadeInUp delay-0-2s">
              <!-- START CONTACT SINGLEDESIGN AREA -->
              <!-- / END CONTACT SINGLEDESIGN AREA -->
              <!-- START CONTACT SINGLEDESIGN AREA -->
              <div class="single-contact wow fadeInUp" data-wow-delay=".4s">
                <span class="circle-btn">
                  <i class="ri-headphone-line"></i>
                </span>
                <h2>contact number:</h2>
                <p>+6282115115081</p>
              </div>
              <!-- / END CONTACT SINGLEDESIGN AREA -->
              <!-- START CONTACT SINGLEDESIGN AREA -->
              <div class="single-contact wow fadeInUp" data-wow-delay=".6s">
                <span class="circle-btn">
                  <i class="ri-mail-line"></i>
                </span>
                <h2>Email us:</h2>
                <p>aslamaazhari46@gmail.com</p>
              </div>
              <!-- / END CONTACT SINGLEDESIGN AREA -->
              <!-- START CONTACT SINGLEDESIGN AREA -->
              <div class="single-contact wow fadeInUp" data-wow-delay=".6s">
                <h2>Socials</h2>
                <div class="about-social">
                  <ul>
                    <li>
                      <a href=""><i class="ri-facebook-circle-fill"></i></a>
                    </li>
                    <li>
                      <a href=""><i class="ri-twitter-x-line"></i></a>
                    </li>
                    <li>
                      <a href=""><i class="ri-linkedin-fill"></i></a>
                    </li>
                    <li>
                      <a href=""><i class="ri-github-line"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
              <!-- / END CONTACT SINGLEDESIGN AREA -->
            </div>
          </div>
          <!-- START CONTACT FORM DESIGN AREA -->
          <div class="col-span-12 lg:col-span-8">
            <div class="contact-form contact-form-area wow fadeInUp delay-0-4s">
              <form
                id="contactForm"
                class="contact-form"
                action="#"
                method="post"
              >
                <div class="grid grid-cols-12 !gap-6">
                  <div class="col-span-12 md:col-span-6">
                    <div class="form-group relative">
                      <label for="name">Full Name</label>
                      <input
                        type="text"
                        id="name"
                        class="form-control"
                        value=""
                        placeholder="Steve Milner"
                        required=""
                        data-error="Please enter your Name"
                      />
                      <label for="name" class="for-icon"
                        ><i class="far fa-user"></i
                      ></label>
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-span-12 md:col-span-6">
                    <div class="form-group">
                      <label for="email">Email Address</label>
                      <input
                        type="email"
                        id="email"
                        class="form-control"
                        value=""
                        placeholder="hello@websitename.com"
                        required=""
                        data-error="Please enter your Email"
                      />
                      <label for="email" class="for-icon"
                        ><i class="far fa-envelope"></i
                      ></label>
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-span-12 md:col-span-12">
                    <div class="form-group">
                      <label for="name">Subject</label>
                      <input
                        type="text"
                        id="subject"
                        class="form-control"
                        value=""
                        placeholder="Your Subject"
                        required=""
                        data-error="Please enter your Name"
                      />
                      <label for="name" class="for-icon"
                        ><i class="far fa-user"></i
                      ></label>
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-span-12 md:col-span-12">
                    <div class="form-group">
                      <label for="message">Your Message</label>
                      <textarea
                        name="message"
                        id="message"
                        class="form-control"
                        rows="4"
                        placeholder="Write Your message"
                        required=""
                        data-error="Please Write your Message"
                      ></textarea>
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-span-12 md:col-span-12">
                    <div class="form-group mb-0">
                      <button type="submit" class="theme-btn">
                        Send Me Message <i class="ri-mail-line"></i>
                      </button>
                      <div id="msgSubmit" class="hidden"></div>
                    </div>
                  </div>
                  <div class="col-span-12 text-center md:col-span-12">
                    <p class="input-success">
                      We have received your mail, We will get back to you soon!
                    </p>
                    <p class="input-error">
                      Sorry, Message could not send! Please try again.
                    </p>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <!-- / END CONTACT FORM DESIGN AREA -->
        </div>
      </div>
    </section>
    <!-- / END CONTACT DESIGN AREA -->
    <!-- START FOOTER DESIGN AREA -->
    @include('partials.footer')
    <!-- / END FOOTER DESIGN AREA -->

    <!-- JQUERY JS -->
    <script src="./assets/js/jquery-3.6.0.min.js"></script>

    <!-- APPEAR JS -->
    <script src="./assets/js/appear.min.js"></script>
    <!-- MAGNIFICANT JS -->
    <script src="./assets/js/jquery.magnific-popup.min.js"></script>
    <!-- MOBILE MENU JS-->
    <script src="./assets/js/mobilemenu.js"></script>
    <!-- GSAP AND LOCOMOTIV JS-->
    <script src="./assets/js/gsap.min.js"></script>
    <script src="./assets/js/ScrollTrigger.min.js"></script>
    <script src="./assets/js/lenis.js"></script>
    <!-- SWIPPER JS-->
    <script src="./assets/js/swiper-bundle.js"></script>
    <!-- NICE SELECT JS-->
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <!-- IMAGE LOADER JS-->
    <script src="./assets/js/imagesloaded.pkgd.min.js"></script>
    <!-- ISOTOPE JS-->
    <script src="./assets/js/isotope.pkgd.min.js"></script>
    <!--  WOW ANIMATION JS-->
    <script src="./assets/js/wow.min.js"></script>
    <!-- SCRIPT JS-->
    <script src="./assets/js/script.js"></script>
  <script defer src="index.js"></script></body>
</html>
