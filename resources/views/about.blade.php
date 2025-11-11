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
          <div class="col-span-12">
            <h2>About Me</h2>
          </div>
        </div>
      </div>
    </section>
    <!-- // END SINGLE PAGE DESIGN AREA -->
    <!-- START RESUME EXPERIENCE DESIGN AREA -->
    <div class="resume-area no-padding" id="resume">
      <div class="container">
        <div class="grid grid-cols-12 gap-6">
          <div class="col-span-12 md:col-span-6">
            <div class="resume-wrapper wow fadeInUp delay-0-2s">
              <!-- START SINGLE EXPERIENCE DESIGN AREA -->
              <div class="resume-box">
                <span class="resume-date">2020 - Present</span>
                <h2>Freelance Logo , Motion Designer , Flyer designer</h2>
                <span>@tinum.avi</span>
                <p>
                  - Building Brand Identity Concepts tailored to specific client needs and core values.
- Designing and Producing Professional DJ Press Kits (or Media Kits).
- Creating Event Flyers and Promotional Materials with dynamic and attention-grabbing designs.
- Providing Creative and Visually Appealing Design Solutions for various industry sectors.
- Communicating Directly with Clients to ensure final results perfectly align with expectations and brand values.
                </p>
              </div>
              <!-- / END SINGLE EXPERIENCE DESIGN AREA -->
              <!-- START SINGLE EXPERIENCE DESIGN AREA -->
              <div class="resume-box">
                <span class="resume-date">2024 - 2025</span>
                <h2>Cafe Manager</h2>
                <span>Wakey Wakey</span>
                <p>
                  - Recruitment and Staffing Excellence: Successfully managed a high-volume recruitment drive, handling and evaluating over 3,000 CVs from a single job posting, and personally conducted interviews to select high-performing team members.
- Menu and Visual Branding: Designed and created professional menus and logos, contributing to a cohesive and appealing brand identity.
- Immediate Profit Generation: Achieved direct profitability in the first month of operation, primarily driven by high-quality, clear visual content (photos) implemented across key delivery platforms (Grab and Gojek).
- Team Leadership and Management: Actively managed and mentored restaurant staff, focusing on operational efficiency, team cohesion, and high standards of service.
- Strategic Operations: Implemented strategic visual and operational improvements that resulted in immediate and measurable financial success.
                </p>
              </div>
              <!-- / END SINGLE EXPERIENCE DESIGN AREA -->
              
            </div>
          </div>
          <div class="col-span-12 md:col-span-6">
            <div class="resume-wrapper wow fadeInUp delay-0-4s">
              
              <!-- START SINGLE EDUCATION DESIGN AREA -->
              <div class="resume-box">
                <span class="resume-date">2021 - 2023</span>
                <h2>MContent Creator (AR Filter & Social Media)</h2>
                <span>@la_sellang</span>
                <p>
                  - Developing and managing Augmented Reality (AR) filters using Spark AR and Effect House.
- Increasing user engagement by 15% and bringing in over 10,000 new followers within 6 months.
- Collaborating with clients to create 3 custom AR filters aligned with their brand vision.
- Conducting routine updates to existing filters to maintain relevance and performance.
- Creating engaging content strategies and actively managing community interactions.
                </p>
              </div>
              <!-- / END SINGLE EDUCATION DESIGN AREA -->
              <!-- START SINGLE EDUCATION DESIGN AREA -->
              <div class="resume-box">
                <span class="resume-date">2018 - 2023</span>
                <h2>Fanpage Administrator & Video Editor</h2>
                <span>@glitchi.avi</span>
                <p>
                  - Managing and developing an Instagram fan page with a responsive approach that increased followers by 20% within a year.
- Creating video content using Adobe After Effects which boosted the average watch time by 15%.
- Implementing data-driven strategies to increase post engagement by 30%.
- Responsible for the entire creative process, from planning to content execution.
                </p>
              </div>
              <!-- / END SINGLE EDUCATION DESIGN AREA -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- / END RESUME EXPERIENCE DESIGN AREA -->
    <!-- START SKILL DESIGN AREA -->
    <section id="skills" class="skill-area">
      <div class="container">
        <div class="container-inner">
          <div class="grid grid-cols-12 gap-6">
            <div class="lg:col-span-12 xl:col-span-12">
              <div
                class="section-title section-black-title wow fadeInUp delay-0-2s mb-10"
              >
                <h2>Professional Skills</h2>
              </div>
            </div>
          </div>
          <div class="grid grid-cols-12 gap-6">
            <div class="col-span-12">
              <div class="skill-items-wrap">
                <div class="grid grid-cols-12 gap-6">
                  <div
                    class="col-span-6 sm:col-span-4 md:col-span-3 lg:col-span-4 xl:col-span-3"
                  >
                    <div class="skill-item wow fadeInUp delay-0-2s">
                      <img src="assets/images/skills/skill1.png" alt="Skill" />
                      <h5>Figma</h5>
                    </div>
                  </div>
                  <div
                    class="col-span-6 sm:col-span-4 md:col-span-3 lg:col-span-4 xl:col-span-3"
                  >
                    <div class="skill-item wow fadeInUp delay-0-3s">
                      <img src="assets/images/skills/skill2.png" alt="Skill" />
                      <h5>Illustrator</h5>
                    </div>
                  </div>
                  <div
                    class="col-span-6 sm:col-span-4 md:col-span-3 lg:col-span-4 xl:col-span-3"
                  >
                    <div class="skill-item wow fadeInUp delay-0-4s">
                      <img src="assets/images/skills/skill3.png" alt="Skill" />
                      <h5>Photoshop</h5>
                    </div>
                  </div>
                  <div
                    class="col-span-6 sm:col-span-4 md:col-span-3 lg:col-span-4 xl:col-span-3"
                  >
                    <div class="skill-item wow fadeInUp delay-0-5s">
                      <img src="assets/images/skills/skill4.png" alt="Skill" />
                      <h5>Fl Studio</h5>
                    </div>
                  </div>
                  <div
                    class="col-span-6 sm:col-span-4 md:col-span-3 lg:col-span-4 xl:col-span-3"
                  >
                    <div class="skill-item wow fadeInUp delay-0-2s">
                      <img src="assets/images/skills/skill5.png" alt="Skill" />
                      <h5>After Effect</h5>
                    </div>
                  </div>
                  <div
                    class="col-span-6 sm:col-span-4 md:col-span-3 lg:col-span-4 xl:col-span-3"
                  >
                    <div class="skill-item wow fadeInUp delay-0-3s">
                      <img src="assets/images/skills/skill6.png" alt="Skill" />
                      <h5>C#</h5>
                    </div>
                  </div>
                  <div
                    class="col-span-6 sm:col-span-4 md:col-span-3 lg:col-span-4 xl:col-span-3"
                  >
                    <div class="skill-item wow fadeInUp delay-0-4s">
                      <img src="assets/images/skills/skill7.png" alt="Skill" />
                      <h5>My Sql</h5>
                    </div>
                  </div>
                  <div
                    class="col-span-6 sm:col-span-4 md:col-span-3 lg:col-span-4 xl:col-span-3"
                  >
                    <div class="skill-item wow fadeInUp delay-0-5s">
                      <img src="assets/images/skills/skill8.png" alt="Skill" />
                      <h5>Blender</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- / END SKILL DESIGN AREA -->
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
