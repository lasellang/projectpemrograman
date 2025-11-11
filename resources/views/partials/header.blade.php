<header class="main-header">
      <div class="header-upper">
        <div class="container">
          <div class="header-inner">
            <div class="grid grid-cols-12 items-center gap-6">
              <div class="col-span-6 sm:col-span-3 xl:col-span-2">
                <div class="logo-area">
                  <div class="logo">
                    <a href="index.html"
                      ><img src="./assets/images/logo.png" alt=""
                    /></a>
                  </div>
                </div>
              </div>
              <div class="col-span-6 sm:col-span-9 xl:col-span-10">
                <div class="main-menu">
                  <nav id="mobile-menu">
                    <ul>
                    <a href="{{ route('home') }}" class="linkstyle">Home</a>
  </li>
  <li>
    <a href="{{ route('about') }}" class="linkstyle">about</a>
  </li>

  <li class="has-dropdown group">
    <a href="{{ route('projects') }}" class="linkstyle">projects</a>
    <ul class="sub-menu">
      <li>
        <a href="{{ route('projects') }}">Projects List</a>
      </li>
      <li>
        <a href="{{ route('single-project') }}">Single Portfolio</a>
      </li>
    </ul>
  </li>

  <li>
    <a href="{{ route('contact') }}" class="linkstyle">Contact</a>
                      </li>
                    </ul>
                  </nav>
                </div>
                <div class="side-menu-icon text-end lg:hidden">
                  <a
                    href="javascript:void(0)"
                    class="info-toggle-btn sidebar-toggle-btn"
                    ><i class="fal fa-bars"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>