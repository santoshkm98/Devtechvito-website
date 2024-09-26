jQuery(document).ready(function(e) {

 

  jQuery('#loader-icons').hide();
  
    jQuery("#contact-form").on('submit',function(e){
  
      e.preventDefault();
  
      var valid;  
  
      valid= validationcontact();
  
      if(valid) {
  
            jQuery('#loader-icons').show();
  
            
  
            jQuery.ajax({
  
              url: "https://www.techvito.in/wp-content/themes/techvito/mail/contact-form.php",
  
              type: "POST",
  
              data:  new FormData(this),
  
              contentType: false,
  
              cache: false,
  
              processData:false,
  
              success: function(data){
  
                  document.getElementById("contact-form").reset();  
  
                    
  
                   window.location.href="https://www.techvito.in/";   
  
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
  
  if(!jQuery("#namecnt").val()) {
  
    jQuery("#nameinfo").html("Please Enter a Name");  
  
    jQuery("#namecnt").css('border-color','red');
  
   valid = false;  
  
  }
  
  if(!jQuery("#namecnt").val().match(/^[a-zA-Z\s]+$/)) {
  
    jQuery("#nameinfo").html("Please Enter Valid Name");  
  
    jQuery("#namecnt").css('border-color','red');
  
    valid = false;
  
  }
  

  if(!jQuery("#phonecnt").val()) {
  
    jQuery("#numberinfo").html("Please enter mobile number");
  
    jQuery("#phonecnt").css('border-color','red');
  
    valid = false;
  
  }
  
  if(!jQuery("#phonecnt").val().match(/^(\+\d{1,3}[- ]?)?\d{10}$/)){
  
    jQuery("#numberinfo").html("Please enter valid digits");
  
    jQuery("#phonecnt").css('border-color','red');
  
    valid = false;
  
  }
  
  if(!jQuery("#emailcnt").val()) {
  
    jQuery("#emailinfo").html("Please Enter Email");
  
    jQuery("#emailcnt").css('border-color','red');
  
    valid = false;
  
  }
  
  if(!jQuery("#emailcnt").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
  
    jQuery("#emailinfo").html("Please Enter Valid Email");
  
    jQuery("#emailcnt").css('border-color','red');
  
    valid = false;
  
  }
  
  if(!jQuery("#subjectcnt").val()) { 
    jQuery("#subjectinfo").html("Please Enter the requirement");   
    jQuery("#subjectcnt").css('border-color','red');
    valid = false;
  
  }

  if(jQuery("input[type='checkbox']:checked").length<=0){
    jQuery("#disclaimer-info").html("Please accept the Terms & Conditions");
    jQuery("input[name='disclaimer']:checked").css('border-color','red');
    valid = false;
}
  return valid;
  
  }