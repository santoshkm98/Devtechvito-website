<section id="footer">

     <div class="fix-layouts">

      <div class="row" id="footer-row">

       <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 col-12" id="col-divs">
       <a href="/" class="logo">
      <img src="<?php bloginfo('template_directory') ?>/images/techvito-white-logo.webp" class="footer-logo"/>
      </a>
       <div class="footer-main">
        <p>Transform your business digitally to survive completely digitalized</p>
       
       </div>
       <!-- <div class="footer-main"> 
        <h6>Product Development</h6>
        <ul>
          <li>Application Development</li>
          <li>Product Strategy</li>
          <li>Application Modernization</li>
          <li>QA Engineering</li>
          <li>Infrastructure as Code (IaC) </li>
          <li>UI/UX Engineering</li>

        </ul>
       </div> -->
      </div>
      <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 col-12" id="col-divs">
       <div class="footer-main">
       <h6>Resources</h6>
           <ul>
            <li>Blogs</li>
            <li>Case Studies</li> 

           </ul>
       </div>
       </div>
  
      
      
       <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 col-12">
      <div class="footer-main">
      <h6>Contact Us</h6>
      <div class="footer-cnt">
     <a href="tel:+91 6363327997"><img src="<?php bloginfo('template_directory') ?>/new-images/telephone_icon.png"/> +91 6363-32-7997</a>
      </div>
      <div class="footer-cnt">
      <a href="mailto:techvito@outlook.com"> <img src="<?php bloginfo('template_directory') ?>/new-images/email_icon.png"/> techvito@outlook.com</a>
      </div>
      <div class="footer-cnt">
        <a> <img src="<?php bloginfo('template_directory') ?>/new-images/location_pin_icon.png"/>Hanumantha Nagar, Bangalore</a>
      </div>
     
      </div>
      <div class="footer-main">
      <div class="mobile-social-media-lists">
        <h4>Follow Us</h4>
        <div class="socials-list">
        <a><img src="<?php bloginfo('template_directory') ?>/images/instagram-logo.png"/></a>
        <a><img src="<?php bloginfo('template_directory') ?>/images/linkedin-logo.png"/></a>
      </div>
      </div>
      </div>
       </div>
         </div>

      </div>

     </div>

     <hr class="line-clr"/>

     <div class="fix-layouts">

     <div class="row" id="copyrightrow">
     
      <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 col-12">
    
      
      <ul class="terms-policy">
        <li>Copyright © 2024 Techvito All Rights Reserved |</li>
        <li><a>Terms & Conditions</a> |</li>
        <li><a>Privacy Policy</a></li>
      </ul>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 col-12">
      <div class="social-media-lists">
        <div class="socials-list">
        <a><img src="<?php bloginfo('template_directory') ?>/images/instagram-logo.png"/></a>
        <a><img src="<?php bloginfo('template_directory') ?>/images/linkedin-logo.png"/></a>
      </div>
      </div>

     <!-- <div class="col-md-12 col-lg-12">

      <p style="text-align:center;">© Copyrights Techvito 2024 All Rights Reserved</p>
      <p style="text-align:center; font-size:12px; ">Images Designed by <a style="text-decoration:underline;" href="https://www.freepik.com/" target="_blank">Freepik</a></p>

     </div> -->

     <!-- <div class="col-md-12 col-lg-6">

      <div class="cfooter-right">

      <a>Terms & Conditions</a>

      <a class="ml-50">Privacy policy</a>

   </div>

     </div> -->

     </div>

   </div>

     </section>



   

<script>      



   AOS.init({

   

     duration: 1200,

   

   })

   

   </script>

   

   <!-- <script>

      $(window).scroll(function(){

    if ($(this).scrollTop() > 50) {

       $('.headmenu-cover').addClass('fixed-menu');

    } else {

       $('.headmenu-cover').removeClass('fixed-menu');

    }

});

   </script> -->

   <script>

      var lastId,

 topMenu = $(".sidemenu"),

 topMenuHeight = topMenu.outerHeight()+1,

 // All list items

 menuItems = topMenu.find("a"),

 // Anchors corresponding to menu items

 scrollItems = menuItems.map(function(){

   var item = $($(this).attr("href"));

    if (item.length) { return item; }

 });



// Bind click handler to menu items

// so we can get a fancy scroll animation

menuItems.click(function(e){

  var href = $(this).attr("href"),

      offsetTop = href === "#" ? 0 : $(href).offset().top-topMenuHeight+1;

  $('html, body').stop().animate({ 

      scrollTop: offsetTop

  }, 150);

  e.preventDefault();

});



// Bind to scroll

$(window).scroll(function(){

   // Get container scroll position

   var fromTop = $(this).scrollTop()+topMenuHeight;

   

   // Get id of current scroll item

   var cur = scrollItems.map(function(){

     if ($(this).offset().top < fromTop)

       return this;

   });

   // Get the id of the current element

   cur = cur[cur.length-1];

   var id = cur && cur.length ? cur[0].id : "";

   

   if (lastId !== id) {

       lastId = id;

       // Set/remove active class

       menuItems

         .parent().removeClass("active-header")

         .end().filter("[href=#"+id+"]").addClass("active-header");

   }                   

});



   </script>

   <script>

   $('.owl-carousel').slick({

  dots: true,

  arrows:true,

  infinite: false,

  speed: 300,

  slidesToShow: 3,

  slidesToScroll: 1,

  responsive: [

    {

      breakpoint: 1024,

      settings: {

        slidesToShow: 3,

        slidesToScroll: 3,

        infinite: true,

        dots: true

      }

    },

    {

      breakpoint: 800,

      settings: {

        slidesToShow: 2,

        slidesToScroll: 2

      }

    },

    {

      breakpoint: 600,

      settings: {

        slidesToShow: 1,

        slidesToScroll: 1,

        dots:true,

        arrows:true

      }

    }

    // You can unslick at a given breakpoint now by adding:

    // settings: "unslick"

    // instead of a settings object

  ]

});



   </script>

   <script>

     if ( $('.product__slider-main').length ) {

        var $slider = $('.product__slider-main')

            .on('init', function(slick) {

                $('.product__slider-main').fadeIn(1000);

            })

            .slick({

                slidesToShow: 1,

                slidesToScroll: 1,

                arrows: false,

                autoplay: false,

                lazyLoad: 'ondemand',

                infinite:true,

                autoplaySpeed: 3000,

                asNavFor: '.product__slider-thmb'

            });



    var $slider2 = $('.product__slider-thmb')

            .on('init', function(slick) {

                $('.product__slider-thmb').fadeIn(1000);

            })

            .slick({

                slidesToShow: 4,

                slidesToScroll: 1,

                lazyLoad: 'ondemand',

                asNavFor: '.product__slider-main',

                dots: false,

                infinite:true,

                centerMode: false,

                focusOnSelect: true

            });



 //remove active class from all thumbnail slides

 $('.product__slider-thmb .slick-slide').removeClass('slick-active');



 //set active class to first thumbnail slides

 $('.product__slider-thmb .slick-slide').eq(0).addClass('slick-active');



 // On before slide change match active thumbnail to current slide

 $('.product__slider-main').on('beforeChange', function (event, slick, currentSlide, nextSlide) {

 	var mySlideNumber = nextSlide;

 	$('.product__slider-thmb .slick-slide').removeClass('slick-active');

 	$('.product__slider-thmb .slick-slide').eq(mySlideNumber).addClass('slick-active');

});

  

  

  // init slider

require(['js-sliderWithProgressbar'], function(slider) {



    $('.product__slider-main').each(function() {



        me.slider = new slider($(this), options, sliderOptions, previewSliderOptions);



        // stop slider

        //me.slider.stop();



        // start slider

        //me.slider.start(index);



        // get reference to slick slider

        //me.slider.getSlick();



    });

});

  var options = {

    progressbarSelector    : '.bJS_progressbar'

    , slideSelector        : '.bJS_slider'

    , previewSlideSelector : '.bJS_previewSlider'

    , progressInterval     : ''

        // add your own progressbar animation function to sync it i.e. with a video

        // function will be called if the current preview slider item (".b_previewItem") has the data-customprogressbar="true" property set

    , onCustomProgressbar : function($slide, $progressbar) {}

}



    // slick slider options

    // see: https://kenwheeler.github.io/slick/

var sliderOptions = {

    slidesToShow   : 1,

    slidesToScroll : 1,

    arrows         : false,

    fade           : true,

    autoplay       : true

}



    // slick slider options

    // see: https://kenwheeler.github.io/slick/

var previewSliderOptions = {

    slidesToShow   : 3,

    slidesToScroll : 1,

    dots           : false,

    focusOnSelect  : true,

    centerMode     : true

}

}



   </script>

<script>
var cards = document.querySelectorAll('.expertise-card-inner');

cards.forEach(function (card) {
  card.addEventListener('click', function () {
     // Remove the class on all, except the clicked one
     cards.forEach(function (c) {
       if (c !== card) c.classList.remove('is-flipped');
       else c.classList.toggle('is-flipped');
     });
  });
});
</script>





<!-- <script src="https://smtpjs.com/v3/smtp.js"></script>
<script>
  function sendEmail(){
    Email.send({
    Host : "smtp.gmail.com",
    Username : "kmsantosh284@gmail.com",
    Password : "Primaryacc@121",
    To : 'ugramsantosh@gmail.com',
    From : "techvito@outlook.com",
    Subject : "This is the subject",
    Body : "And this is the body"
}).then(
  message => alert(message)
);
  }
</script> -->

</body>

</html>