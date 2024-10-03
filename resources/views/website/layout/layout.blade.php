<!DOCTYPE html>
<html lang="">
    <head>
        

            <meta charset="utf-8">
          
             
           
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <meta name="description" content="">
            <meta name="author" content="">
            <link href="https://fonts.googleapis.com/css?family=Open+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
        
            <title>EduWell - Education HTML5 Template</title>
        
            <!-- Bootstrap core CSS -->
           
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

            <link rel="stylesheet" href="{{asset('asset/assets/css/fontawesome.css')}}">

            <link rel="stylesheet" href="{{asset('asset/assets/css/templatemo-eduwell-style.css')}}">
            <link rel="stylesheet" href="{{asset('asset/assets/css/owl.css')}}">
            <link rel="stylesheet" href="{{asset('asset/assets/css/lightbox.css')}}">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
             <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">
        
        
    </head>
    <body>




       



          


  
<!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.html" class="logo">
                        <img src="{{asset('asset/assets/images/White roots logo.png')}}" alt="EduWell Template">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                     
   
                     





                          <!-- ***** Logout End ***** -->



                      <li class="scroll-to-section cairo"><a href="#contact-section">تواصل معنا</a></li> 
                      <li class="scroll-to-section"><a href="#testimonials">مراجعات</a></li> 
                      <li class="scroll-to-section"><a href="#courses">ماذا نقدم</a></li>
                      <li class="scroll-to-section"><a href="#services"> من نستهدف</a></li>
                      <li class="scroll-to-section"><a href="#top" class="active">الرئيسية</a></li>
                    </ul>        
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->

<!-- ***** Main Banner Area Start ***** -->
@yield('body')

<section class="contact-us" id="contact-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div id="map">
        
          <!-- You just need to go to Google Maps for your own map point, and copy the embed code from Share -> Embed a map section -->
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7151.84524236698!2d-122.19494600413192!3d47.56605883252286!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5490695e625f8965%3A0xf99b055e76477def!2sNewcastle%20Beach%20Park%20Playground%2C%20Bellevue%2C%20WA%2098006%2C%20USA!5e0!3m2!1sen!2sth!4v1644335269264!5m2!1sen!2sth" width="100%" height="420px" frameborder="0" style="border:0; border-radius: 15px; position: relative; z-index: 2;')" allowfullscreen=""></iframe>
          <div class="row">
            <div class="col-lg-4 offset-lg-1">
              <div class="contact-info">
                <div class="icon">
                  <i class="fa fa-phone"></i>
                </div>
                <h4>هاتف</h4>
                <span>010-020-0340</span>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="contact-info">
                <div class="icon">
                  <i class="fa fa-phone"></i>
                </div>
                <h4>رقم</h4>
                <span>090-080-0760</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <form id="contact" action="" method="post">
          <div class="row">
            <div class="col-lg-12">
              <div class="section-heading">
                <h6>تواضل معنا</h6>
                <h4>Say <em>Hello</em></h4>
                <p>اترك ملاحظتك او استفسارك</p>
              </div>
            </div>
            <div class="col-lg-12">
              <fieldset>
                <input type="name" name="name" id="name" placeholder="الاسم" autocomplete="on" required>
              </fieldset>
            </div>
            <div class="col-lg-12">
              <fieldset>
                <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="البريد الالكتروني" required="">
              </fieldset>
            </div>
            <div class="col-lg-12">
              <fieldset>
                <textarea name="message" id="message" placeholder="رسالتك"></textarea>
              </fieldset>
            </div>
            <div class="col-lg-12">
              <fieldset>
                <button type="submit" id="form-submit" class="main-gradient-button">ارسال</button>
              </fieldset>
            </div>
          </div>
        </form>
      </div>
      <div class="col-lg-12">
        <ul class="social-icons">
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
          <li><a href="#"><i class="fa fa-rss"></i></a></li>
          <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
        </ul>
      </div>
      <div class="col-lg-12">
        <p class="copyright">Copyright ©Joozor, Ltd. All Rights Reserved. 
        
        <br>Design: <a rel="sponsored" href="" target="_blank">@PalesinianCO</a>
        <br>Distribution: <a rel="sponsored" href="" target="_blank">Sa</a></p>
      </div>
    </div>
  </div>
</section>

<!-- Scripts -->
<!-- Bootstrap core JavaScript -->
  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="{{ asset('asset/vendor/jquery.min.js')}}"></script>

  <script src="{{asset('asset/assets/js/isotope.min.js')}}"></script>
  <script src="{{asset('asset/assets/js/owl-carousel.js')}}"></script>
  <script src="{{asset('asset/assets/js/lightbox.js')}}"></script>
  <script src="{{asset('asset/assets/js/tabs.js')}}"></script>
  <script src="{{asset('asset/assets/js/video.js')}}"></script>
  <script src="{{asset('asset/assets/js/slick-slider.js')}}"></script>
  <script src="{{asset('asset/assets/js/custom.js')}}"></script>
  <script>
      //according to loftblog tut
      $('.nav li:first').addClass('active');

      var showSection = function showSection(section, isAnimate) {
        var
        direction = section.replace(/#/, ''),
        reqSection = $('.section').filter('[data-section="' + direction + '"]'),
        reqSectionPos = reqSection.offset().top - 0;

        if (isAnimate) {
          $('body, html').animate({
            scrollTop: reqSectionPos },
          800);
        } else {
          $('body, html').scrollTop(reqSectionPos);
        }

      };

      var checkSection = function checkSection() {
        $('.section').each(function () {
          var
          $this = $(this),
          topEdge = $this.offset().top - 80,
          bottomEdge = topEdge + $this.height(),
          wScroll = $(window).scrollTop();
          if (topEdge < wScroll && bottomEdge > wScroll) {
            var
            currentId = $this.data('section'),
            reqLink = $('a').filter('[href*=\\#' + currentId + ']');
            reqLink.closest('li').addClass('active').
            siblings().removeClass('active');
          }
        });
      };

      $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function (e) {
        e.preventDefault();
        showSection($(this).attr('href'), true);
      });

      $(window).scroll(function () {
        checkSection();
      });
  </script>
</body>  
           
    
</html>
