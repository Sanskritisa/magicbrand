<?php include_once 'config.php'; ?>
  <body>

    <div class="page-wrapper">
      <header class="main-header">
        <nav class="main-menu">
          <div class="main-menu__wrapper">
            <div class="main-menu__wrapper-inner">
              <div class="main-menu__left">
                <div class="main-menu__logo">
                  <a href="home.php"
                    ><img src="assets/images/resources/brand-magic-logot.png" alt="" style="width:200px"
                  /></a>
                </div>
              </div>
              <div class="main-menu__right">
                <div class="main-menu__main-menu-box">
                  <a href="#" class="mobile-nav__toggler"
                    ><i class="fa fa-bars"></i
                  ></a>
                  <ul class="main-menu__list">
                    <li >
                      <a href="home.php">Home </a>                               
                    </li>
                    <li>
                      <a href="about">About</a>
                    </li>
                    
                    <li> <a href="services" class="service-dropdown">Services</a></li>
    
                    <li>
                      <a href="gallery">Gallery</a>
                    </li>
                    <li>
                      <a href="contact">Contact</a>
                    </li>
                  </ul>
                </div>
                <div class="main-menu__social-and-search-box">
                </div>
              </div>
            </div>
          </div>
        </nav>
      </header>

      <div class="stricky-header stricked-menu main-menu">
        <div class="sticky-header__content"></div>
        <nav class="main-menu">
          <div class="main-menu__wrapper">
            <div class="main-menu__wrapper-inner">
              <div class="main-menu__left">
                <div class="main-menu__logo">
                  <a href="<?php echo BASE_URL; ?>"
                    ><img src="assets/images/resources/brand-magic-logot.png" alt="" style="width:200px"
                  /></a>
                </div>

              </div>
              <div class="main-menu__right">
                <div class="main-menu__main-menu-box">
                  <a href="#" class="mobile-nav__toggler"
                    ><i class="fa fa-bars"></i
                  ></a>
                  <ul class="main-menu__list">
                    <li >
                      <a href="<?php echo BASE_URL; ?>">Home </a>                               
                    </li>
                    <li>
                      <a href="about">About</a>
                    </li>
                    
                    <li> <a href="services" class="service-dropdown">Services</a></li>
                    
                    <li>
                      <a href="gallery">Gallery</a>
                    </li>
                    <li>
                      <a href="contact">Contact</a>
                    </li>
                  </ul>
                </div>
                <div class="main-menu__social-and-search-box">
                 
                </div>
              </div>
            </div>
          </div>
        </nav>
      </div> 
      <!-- /.stricky-header -->
