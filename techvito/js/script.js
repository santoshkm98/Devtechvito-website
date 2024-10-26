jQuery(document).ready(function(e) {

 

  jQuery('#loader-icons').hide();
  
    jQuery("#contactus-enquiry").on('submit',function(e){
  
      e.preventDefault();
  
      var valid;  
  
      valid= validationcontact();
  
      if(valid) {
  
            jQuery('#loader-icons').show();
  
            
  
            jQuery.ajax({
  
              url: "https://dev.techvito.in/wp-content/themes/techvito/mail/contact-form.php",
  
              type: "POST",
  
              data:  new FormData(this),
  
              contentType: false,
  
              cache: false,
  
              processData:false,
  
              success: function(data){
  
                  document.getElementById("contactus-enquiry").reset();  
              
                 jQuery('#loader-icons').hide();
                 toastalert();
                 setTimeout(function () {
                     location.reload();
                 }, 3000);
                
  
              },
  
              error: function(){}
  
          });
  
      }
  
  })
  
  });
  
  function validationcontact(){
  
  var valid = true;
  
  jQuery(".info").html('');
  
  if(!jQuery("#cnt_name").val()) {
  
    jQuery("#cnt_name_info").html("Please Enter a Name");  
  
    jQuery("#cnt_name").css('border-color','red');
  
   valid = false;  
  
  }
  
  else if(!jQuery("#cnt_name").val().match(/^[\s\S]{1,100}$/) || !jQuery("#cnt_name").val().match(/^[a-zA-Z\s]+$/))  {
    
    jQuery("#cnt_name_info").html("Please enter valid name");  
  
    jQuery("#cnt_name").css('border-color','red');
  
    valid = false;
  
  }
  else {
    jQuery("#cnt_name_info").html("");  
            jQuery("#cnt_name").css('border-color', '');
  }

  if(!jQuery("#cnt_phone").val()) {
  
    jQuery("#cnt_phone_info").html("Please enter mobile number");
  
    jQuery("#cnt_phone").css('border-color','red');
  
    valid = false;
  
  }
  
  else if(!jQuery("#cnt_phone").val().match(/^(\+\d{1,3}[- ]?)?\d{10}$/)){
    
    jQuery("#cnt_phone_info").html("Please enter valid mobile number");
  
    jQuery("#cnt_phone").css('border-color','red');
  
    valid = false;
  
  }
  else {
    jQuery("#cnt_phone_info").html(""); 
    jQuery("#cnt_phone").css('border-color', '');
  } 


  
   if(!jQuery("#cnt_email").val()) {
    
      jQuery("#cnt_email_info").html("Please enter email");
    
      jQuery("#cnt_email").css('border-color','red');
    
      valid = false;
    
    }
    
   else if(!jQuery("#cnt_email").val().trim().match(/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|.(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/)) {
    
      jQuery("#cnt_email_info").html("Please enter valid email");
    
      jQuery("#cnt_email").css('border-color','red');
    
      valid = false;
    
    }
    else {
      jQuery("#cnt_email_info").html("");
      jQuery("#cnt_email").css('border-color', '');
     
  }
  
  if(!jQuery("#information").val()) { 
    jQuery("#information-info").html("Please select your requirement");   
    jQuery("#information").css('border-color','red');
    valid = false;
  
  }
  else {
    jQuery("#information-info").html("");   
    jQuery("#information").css('border-color','');
  }

  if (!$('#terms_checkbox').is(':checked')) {
    $('#terms_info').html("Please accept the terms and conditions.").show();
    valid = false; // Set valid to false
} else {
    $('#terms_info').hide(); // Hide the error message
}
  return valid;
  
  }

// Case study PDF DOwnload

  jQuery(document).ready(function(e) {

 

    jQuery('#loaders-icons').hide();
    
      jQuery("#casestudydownloadform").on('submit',function(e){
    
        e.preventDefault();
    
        var valid;  
    
        valid= validationCasestudydownload();
    
        if(valid) {
    
              jQuery('#loaders-icons').show();
    
              
    
              jQuery.ajax({
    
                url: "https://dev.techvito.in/wp-content/themes/techvito/mail/case_study_download.php",
    
                type: "POST",
    
                data:  new FormData(this),
    
                contentType: false,
    
                cache: false,
    
                processData:false,
    
                success: function(data){
    
                    document.getElementById("casestudydownloadform").reset();  
                   jQuery('#loaders-icons').hide();
                   jQuery('#casestudy-popupForm').hide();
                   confirmationalert();
                   setTimeout(function () {
                       location.reload();
                   }, 3000);
    
                },
    
                error: function(){}
    
            });
    
        }
    
    })
    
    });
    
    function validationCasestudydownload(){
    
    var valid = true;
    
    jQuery(".info").html('');
    
    if(!jQuery("#cs_name").val()) {
    
      jQuery("#cs_name_info").html("Please Enter a Name");  
    
      jQuery("#cs_name").css('border-color','red');
    
     valid = false;  
    
    }
    
    else if(!jQuery("#cs_name").val().match(/^[\s\S]{1,100}$/) || !jQuery("#cs_name").val().match(/^[a-zA-Z\s]+$/))  {
      
      jQuery("#cs_name_info").html("Please enter valid Name");  
    
      jQuery("#cs_name").css('border-color','red');
    
      valid = false;
    
    }
    else {
      jQuery("#cs_name_info").html("");  
              jQuery("#cs_name").css('border-color', '');
    }
  
  
    
     if(!jQuery("#cs_email").val()) {
      
        jQuery("#cs_email_info").html("Please enter Email");
      
        jQuery("#cs_email").css('border-color','red');
      
        valid = false;
      
      }
      
     else if(!jQuery("#cs_email").val().trim().match(/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|.(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/)) {
      
        jQuery("#cs_email_info").html("Please enter valid Email");
      
        jQuery("#cs_email").css('border-color','red');
      
        valid = false;
      
      }
      else {
        jQuery("#cs_email_info").html("");
        jQuery("#cs_email").css('border-color', '');
       
    }
    
    if(!jQuery("#cs_companyname").val()) { 
      jQuery("#cs_companyname_info").html("Please enter your Company Name");   
      jQuery("#cs_companyname").css('border-color','red');
      valid = false;
    
    } else if (jQuery("#cs_companyname").val().length > 50){
      jQuery("#cs_companyname_info").html("Please enter the between 50 characters");
      jQuery("#cs_companyname").css('border-color', 'red');
      valid = false;
    }
    else {
      jQuery("#cs_companyname_info").html("");   
      jQuery("#cs_companyname").css('border-color','');
    }

    if (!$('#terms_checkbox_cs').is(':checked')) {
      $('#terms_info_cs').html("Please accept the terms and conditions.").show();
      valid = false; // Set valid to false
  } else {
      $('#terms_info_cs').hide(); // Hide the error message
  }

  // Prevent form submission if validation fails
  if (!valid) {
      event.preventDefault(); // Prevent form from submitting
  }
  

    return valid;
    
    }



    // subscription blog

    jQuery(document).ready(function(e) {

 

      jQuery('#loaders-icons').hide();
      
        jQuery("#subscriptionblog").on('submit',function(e){
      
          e.preventDefault();
      
          var valid;  
      
          valid= validationsubscriptionblog();
      
          if(valid) {
      
                jQuery('#loaders-icons').show();
      
                
      
                jQuery.ajax({
      
                  url: "https://dev.techvito.in/wp-content/themes/techvito/mail/subscription-blog.php",
      
                  type: "POST",
      
                  data:  new FormData(this),
      
                  contentType: false,
      
                  cache: false,
      
                  processData:false,
                  beforeSend: function() {

                    jQuery("#s_subscription").prop("disabled", true);
                },
             
                  success: function(data){
      
                      document.getElementById("subscriptionblog").reset();  

                     jQuery('#loaders-icons').hide();
                     jQuery('#insights-popupForm').hide();
                     confirmationalert();
                     setTimeout(function () {
                         location.reload();
                     }, 3000);
      
                  },
      
                  error: function(){
                    jQuery("#s_subscription").prop("disabled", false);
                  },
                  complete: function() {

                    jQuery("#s_subscription").prop("disabled", false);
                }
      
              });
      
          }
      
      })
      
      });
      
      function validationsubscriptionblog(){
      
      var valid = true;
      
      jQuery(".info").html('');
      
      if(!jQuery("#s_name").val()) {
      
        jQuery("#s_name_info").html("Please Enter a Name");  
      
        jQuery("#s_name").css('border-color','red');
      
       valid = false;  
      
      }
      
      else if(!jQuery("#s_name").val().match(/^[\s\S]{1,100}$/) || !jQuery("#s_name").val().match(/^[a-zA-Z\s]+$/))  {
        
        jQuery("#s_name_info").html("Please enter valid name");  
      
        jQuery("#s_name").css('border-color','red');
      
        valid = false;
      
      }
      else {
        jQuery("#s_name_info").html("");  
                jQuery("#s_name").css('border-color', '');
      }
    
    
      
       if(!jQuery("#s_email").val()) {
        
          jQuery("#s_email_info").html("Please enter email");
        
          jQuery("#s_email").css('border-color','red');
        
          valid = false;
        
        }
        
       else if(!jQuery("#s_email").val().match(/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|.(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/)) {
        
          jQuery("#s_email_info").html("Please enter valid email");
        
          jQuery("#s_email").css('border-color','red');
        
          valid = false;
        
        }
        else {
          jQuery("#s_email_info").html("");
          jQuery("#s_email").css('border-color', '');
         
      }
      
      if (!$('#terms_checkbox_cs').is(':checked')) {
        $('#terms_info_cs').html("Please accept the terms and conditions.").show();
        valid = false; // Set valid to false
    } else {
        $('#terms_info_cs').hide(); // Hide the error message
    }
      return valid;
      
      }

      // Home clients list
      jQuery(document).ready(function($) {
      $('.client-lists').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 0,
        speed: 6000,
        pauseOnHover: true,
        cssEase: 'linear',
        responsive: [
          {
            breakpoint: 1050,
            settings: {
              slidesToShow: 4,
              slidesToScroll: 1,
              arrows: false,
              autoplay: true,
              autoplaySpeed: 0,
              speed: 6000,
              pauseOnHover: true,
              cssEase: 'linear',
            }
          },
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 3,
              arrows: false,
              slidesToScroll: 1,
              autoplay: true,
              autoplaySpeed: 0,
              speed: 6000,
              pauseOnHover: true,
              cssEase: 'linear',
            }
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 2,
              arrows: false,
              slidesToScroll: 1,
              autoplay: true,
              autoplaySpeed: 0,
              speed: 6000,
              pauseOnHover: true,
              cssEase: 'linear',
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1,
              arrows: false,
              autoplay: true,
              autoplaySpeed: 0,
              speed: 6000,
              pauseOnHover: true,
              cssEase: 'linear',
            }
          },
        ]
      });
    });


    // Home page Tabs


    jQuery(document).ready(function($) {
    tabControl();


var resizeTimer;
$(window).on('resize', function(e) {
  clearTimeout(resizeTimer);
  resizeTimer = setTimeout(function() {
    tabControl();
  }, 250);
});


function tabControl() {
    var tabs = $('.tabbed-content').find('.tabs');
    
    tabs.find('a').on('click', function(event) {
        event.preventDefault();
        var target = $(this).attr('href'),
            buttons = tabs.find('a'),
            items = tabs.parents('.tabbed-content').find('.item');
        
        buttons.removeClass('active');
        items.removeClass('active');
        
        $(this).addClass('active');
        $(target).addClass('active');
    });
    
    $('.item').on('click', function() {
        var container = $(this).parents('.tabbed-content'),
            currId = $(this).attr('id'),
            items = container.find('.item');
        
        items.removeClass('active');
        $(this).addClass('active');
        container.find('.tabs a').removeClass('active').filter(`[href="#${currId}"]`).addClass('active');
    });
}

});


// service page offerings
jQuery(document).ready(function($) {
$('.offerings-layout').slick({
  centerPadding: '40%',
  infinite: true,
  slidesToShow: 4,
  prevArrow: $('.previous-icon'),
  nextArrow: $('.next-icon'),
  responsive: [
      {
          breakpoint: 1200,
          settings: {
              slidesToShow: 3,
              slidesToScroll: 1,
              prevArrow: $('.previous-icon'),
              nextArrow: $('.next-icon'),
          }
      },
      {
          breakpoint: 1050,
          settings: {
              slidesToShow: 2,
              slidesToScroll: 1,
              prevArrow: $('.previous-icon'),
              nextArrow: $('.next-icon'),
          }
      },
      {
          breakpoint: 768,
          settings: {
              slidesToShow: 2,
              slidesToScroll: 1,
              prevArrow: $('.previous-icon'),
              nextArrow: $('.next-icon'),
          }
      },
      {
          breakpoint: 600,
          settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              prevArrow: $('.previous-icon'),
              nextArrow: $('.next-icon'),

          }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
  ]
});
});


// service process list
jQuery(document).ready(function($) {
$('.services-process-lists').slick({
  centerPadding: '40%',
  infinite: true,
  slidesToShow: 1,
  prevArrow: $('.prev'),
  nextArrow: $('.next'),
  responsive: [
      {
          breakpoint: 1200,
          settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              prevArrow: $('.prev'),
              nextArrow: $('.next'),
          }
      },
      {
          breakpoint: 1050,
          settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              prevArrow: $('.prev'),
              nextArrow: $('.next'),
          }
      },
      {
          breakpoint: 768,
          settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              prevArrow: $('.prev'),
              nextArrow: $('.next'),
          }
      },
      {
          breakpoint: 600,
          settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              prevArrow: $('.prev'),
              nextArrow: $('.next'),

          }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
  ]
});
});


function toastalert() {
  var x = document.getElementById("snackbar");
  x.className = "pop";
  setTimeout(function(){ x.className = x.className.replace("pop", ""); }, 5000);
}

function confirmationalert() {
  var x = document.getElementById("confirmation");
  x.className = "pop";
  setTimeout(function(){ x.className = x.className.replace("pop", ""); }, 5000);
}