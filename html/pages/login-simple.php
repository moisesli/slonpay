<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Title -->
  <title>Slonpay | inicio Session</title>

  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Favicon -->
  <link rel="shortcut icon" href="https://htmlstream.com/preview/front-v1.3/favicon.ico">

  <!-- Google Fonts -->
  <link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">

  <!-- CSS Global Compulsory -->
  <link rel="stylesheet" href="../../assets/vendor/bootstrap/css/bootstrap.css">

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="../../assets/vendor/font-awesome/css/fontawesome-all.min.css">
  <link rel="stylesheet" href="../../assets/vendor/animate.css/animate.min.css">
  <link rel="stylesheet" href="../../assets/vendor/slick-carousel/slick/slick.css">

  <!-- CSS Front Template -->
  <link rel="stylesheet" href="../../assets/css/front.css">

  <!-- JS Vue -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

  <!-- Recaptcha -->
  <script src='https://www.google.com/recaptcha/api.js'></script>

</head>

<body>


  <!-- Skippy -->
  <a id="skippy" class="sr-only sr-only-focusable u-skippy" href="#content">
    <div class="container">
      <span class="u-skiplink-text">Skip to main content</span>
    </div>
  </a>
  <!-- End Skippy -->

  <!-- ========== MAIN ========== -->
  <main id="app" role="main">
    <!-- Form -->
    <div class="d-flex align-items-center position-relative min-height-100vh--lg">
      <!-- Navbar -->
      <header class="position-absolute-top-0 z-index-2">
        <nav class="d-flex justify-content-between align-items-center">
          <!-- Logo -->
          <div class="col-lg-5 col-xl-4 text-lg-center px-0">
            <a class="d-inline-block p-3 p-sm-5" href="../home/index.html" aria-label="Front">
              <img class="d-none d-lg-inline-block" src="/assets/svg/logos/logo-white.png" alt="Logo" style="width: 140px;">
              <img class="d-inline-block d-lg-none" src="https://htmlstream.com/preview/front-v1.3/assets/svg/logos/logo.svg" alt="Logo" style="width: 140px;">
            </a>
          </div>
          <!-- End Logo -->

          <!-- Button -->
          <div class="p-3 p-sm-5">
            <a class="btn btn-sm btn-primary u-btn-primary transition-3d-hover" href="/html/pages/signup-simple.php">Registrate</a>
          </div>
          <!-- End Button -->
        </nav>
      </header>
      <!-- End Navbar -->

      <div class="col-lg-5 col-xl-4 d-none d-lg-flex align-items-center u-gradient-half-primary-v1 min-height-100vh--lg px-0">
        <div class="w-100 p-5">
          <!-- SVG Quote -->
          <figure class="mb-5 mx-auto" style="width: 45px;">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
               viewBox="0 0 8 8" style="enable-background:new 0 0 8 8;" xml:space="preserve">
              <path class="u-fill-white" d="M3,1.3C2,1.7,1.2,2.7,1.2,3.6c0,0.2,0,0.4,0.1,0.5c0.2-0.2,0.5-0.3,0.9-0.3c0.8,0,1.5,0.6,1.5,1.5c0,0.9-0.7,1.5-1.5,1.5
                C1.4,6.9,1,6.6,0.7,6.1C0.4,5.6,0.3,4.9,0.3,4.5c0-1.6,0.8-2.9,2.5-3.7L3,1.3z M7.1,1.3c-1,0.4-1.8,1.4-1.8,2.3
                c0,0.2,0,0.4,0.1,0.5c0.2-0.2,0.5-0.3,0.9-0.3c0.8,0,1.5,0.6,1.5,1.5c0,0.9-0.7,1.5-1.5,1.5c-0.7,0-1.1-0.3-1.4-0.8
                C4.4,5.6,4.4,4.9,4.4,4.5c0-1.6,0.8-2.9,2.5-3.7L7.1,1.3z"/>
            </svg>
          </figure>
          <!-- End SVG Quote -->

          <!-- Testimonials Carousel Main -->
          <div id="testimonialsNavMain" class="js-slick-carousel u-slick mb-4"
               data-infinite="true"
               data-autoplay="true"
               data-speed="5000"
               data-fade="true"
               data-nav-for="#testimonialsNavPagination">
            <div class="js-slide">
              <!-- Testimonials -->
              <div class="w-md-80 w-lg-60 text-center mx-auto">
                <blockquote class="h5 text-white font-weight-normal mb-4">The template is really nice and offers quite a large set of options. Thank you!</blockquote>
                <h1 class="h6 u-text-light">Maria Muszynska, Google</h1>
              </div>
              <!-- End Testimonials -->
            </div>

            <div class="js-slide">
              <!-- Testimonials -->
              <div class="w-md-80 w-lg-60 text-center mx-auto">
                <blockquote class="h5 text-white font-weight-normal mb-4">It's beautiful and the coding is done quickly and seamlessly. Keep it up!</blockquote>
                <h2 class="h6 u-text-light">James Austin, Slack</h2>
              </div>
              <!-- End Testimonials -->
            </div>

            <div class="js-slide">
              <!-- Testimonials -->
              <div class="w-md-80 w-lg-60 text-center mx-auto">
                <blockquote class="h5 text-white font-weight-normal mb-4">I love Front! I love the ease of use, I love the fact that I have total creative freedom...</blockquote>
                <h3 class="h6 u-text-light">Charlotte Moore, Amazon</h3>
              </div>
              <!-- End Testimonials -->
            </div>
          </div>
          <!-- End Testimonials Carousel Main -->

          <!-- Testimonials Carousel Pagination -->
          <div id="testimonialsNavPagination" class="js-slick-carousel u-slick u-slick--transform-off u-slick--pagination-modern mx-auto"
               data-infinite="true"
               data-autoplay="true"
               data-speed="5000"
               data-center-mode="true"
               data-slides-show="3"
               data-is-thumbs="true"
               data-focus-on-select="true"
               data-nav-for="#testimonialsNavMain">
            <div class="js-slide">
              <img class="u-avatar rounded-circle mx-auto" src="../../assets/img/100x100/img1.jpg" alt="Image Description">
            </div>

            <div class="js-slide">
              <img class="u-avatar rounded-circle mx-auto" src="../../assets/img/100x100/img3.jpg" alt="Image Description">
            </div>

            <div class="js-slide">
              <img class="u-avatar rounded-circle mx-auto" src="../../assets/img/100x100/img2.jpg" alt="Image Description">
            </div>
          </div>
          <!-- End Testimonials Carousel Pagination -->

          <!-- Clients -->
          <div class="position-absolute-bottom-0 text-center p-5">
            <h4 class="h6 u-text-light mb-3">Front partners</h4>
            <div class="d-flex justify-content-center">
              <div class="mx-4">
                <img class="u-clients" src="https://htmlstream.com/preview/front-v1.3/assets/svg/clients-logo/slack-white.svg" alt="Image Description">
              </div>
              <div class="mx-4">
                <img class="u-clients" src="https://htmlstream.com/preview/front-v1.3/assets/svg/clients-logo/google-white.svg" alt="Image Description">
              </div>
              <div class="mx-4">
                <img class="u-clients" src="https://htmlstream.com/preview/front-v1.3/assets/svg/clients-logo/spotify-white.svg" alt="Image Description">
              </div>
            </div>
          </div>
          <!-- End Clients -->
        </div>
      </div>

      <div class="container">
        <div class="row no-gutters">
          <div class="col-md-8 col-lg-7 col-xl-6 offset-md-2 offset-lg-2 offset-xl-3 u-space-3 u-space-0--lg">
            <!-- Form -->
            <form class="js-validate mt-5" v-on:submit.prevent>
              <!-- Title -->
              <div class="mb-7">
                <h2 class="h3 text-primary font-weight-normal mb-0">Inicio <span class="font-weight-bold">Session</span></h2>
                <p>Iniciar session en tu cuenta.</p>
              </div>
              <!-- End Title -->
              <div class="alert alert-danger" v-show="alert">Sucedio un error en los datos</div>
              <!-- Input -->
              <div class="js-form-message mb-4">
                <label class="h6 small d-block text-uppercase">Correo Electronico</label>

                <div class="js-focus-state input-group u-form">
                  <input type="email" class="form-control u-form__input" name="email" required
                    v-model="login.email"
                    placeholder="jack@walley.com"
                    aria-label="jack@walley.com"
                    data-msg="Please enter a valid email address."
                    data-error-class="u-has-error"
                    data-success-class="u-has-success">
                </div>
              </div>
              <!-- End Input -->

              <!-- Input -->
              <div class="js-form-message mb-4">
                <div class="d-flex justify-content-between align-items-center">
                  <label class="h6 small d-block text-uppercase">Contraseña</label>

                  <div class="mb-2">
                    <a class="small u-link-muted" href="recover-account.html">Forgot Password?</a>
                  </div>
                </div>

                <div class="js-focus-state input-group u-form">
                  <input type="password" class="form-control u-form__input" name="password" required
                    v-model="login.password"
                    placeholder="********"
                    aria-label="********"
                    data-msg="Your password is invalid. Please try again."
                    data-error-class="u-has-error"
                    data-success-class="u-has-success">
                </div>                
              </div>
              <!-- End Input -->

              <!-- Recaptcha -->
              <div class="input-group u-form">
                <div class="g-recaptcha" data-sitekey="6LdnRG0UAAAAAFIDDkRYg9Kmiadm2-L00stwkgZ0"></div>                
              </div>


              <!-- Button -->
              <div class="row align-items-center mb-5">
                <div class="col-6">
                  <span class="small text-muted">no tienes una cuenta?</span>
                  <a class="small" href="signup-simple.php">Registro</a>
                </div>

                <div class="col-6 text-right ">
                  <br>
                  <button type="submit" class="btn btn-primary u-btn-primary transition-3d-hover" @click="send_login(login)">Iniciar Session</button>
                </div>
              </div>
              <!-- End Button -->
            </form>
            <!-- End Form -->
          </div>
        </div>
      </div>
    </div>
    <!-- End Form -->
  </main>
  <!-- ========== END MAIN ========== -->

  <!-- JS Global Compulsory -->
  <script src="../../assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../../assets/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
  <script src="../../assets/vendor/popper.js/dist/umd/popper.min.js"></script>
  <script src="../../assets/vendor/bootstrap/bootstrap.min.js"></script>

  <!-- JS Implementing Plugins -->
  <script src="../../assets/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
  <script src="../../assets/vendor/slick-carousel/slick/slick.js"></script>

  <!-- JS Front -->
  <script src="../../assets/js/hs.core.js"></script>
  <script src="../../assets/js/components/hs.validation.js"></script>
  <script src="../../assets/js/helpers/hs.focus-state.js"></script>
  <script src="../../assets/js/components/hs.slick-carousel.js"></script>

  <!-- JS Plugins Init. -->
  <script>
    $(document).on('ready', function () {
      // initialization of slick carousel
      $.HSCore.components.HSSlickCarousel.init('.js-slick-carousel');

      // initialization of forms
      $.HSCore.helpers.HSFocusState.init();
    });

    var app = new Vue({
      el: '#app',
      data: {
        message: 'moises',
        login: {},
        alert: false
      },
      methods: {
        send_login: function(login){
          axios.post('/apiphp/login.php',login).then((response)=>{
            if (response.data == 'ok') {
              window.location.href = '/html/account/my-tasks.php';
            }else{
              this.alert = true;
            }
            console.log(response.data);
          });
          //console.log(login);
        }
      }
    });
  </script>
</body>
</html>