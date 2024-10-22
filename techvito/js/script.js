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
    
   else if(!jQuery("#cnt_email").val().match(/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|.(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/)) {
    
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

  if(jQuery("input[type='checkbox']:checked").length<=0){
    jQuery("#disclaimer-info").html("Please accept the Terms & Conditions");
    jQuery("input[name='disclaimer']:checked").css('border-color','red');
    valid = false;
}
  return valid;
  
  }