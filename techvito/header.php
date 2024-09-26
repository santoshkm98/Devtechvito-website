<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php wp_title(); ?></title>

    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/style.css"/>
    <!-- <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/new-style.css"/> -->

    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/bootstrap.min.css"/>

    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/slick.css"/>

    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/slick-theme.css"/>

    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/aos.css"/>

    <script src="<?php bloginfo('template_directory') ?>/js/jquery-1.9.1.js"></script>

    <script src="<?php bloginfo('template_directory') ?>/js/script.js"></script>

    <script src="<?php bloginfo('template_directory') ?>/js/bootstrap.min.js"></script>

    <script src="<?php bloginfo('template_directory') ?>/js/slick.js"></script>

    <script src="<?php bloginfo('template_directory') ?>/js/aos.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <?php wp_head(); ?> 



</head>

<body>
<header>
    <div class="fix-layouts">
        <nav>
            <!-- Logo added -->
            <a href="/" class="logo">
                <img src="<?php bloginfo('template_directory') ?>/images/techvito-white-logo.webp" alt="Logo" />
            </a>
            <a href="javascript:void(0);" class="mobile-menu-trigger">
                <span class="hamburger-icon"><img src="<?php bloginfo('template_directory') ?>/images/hamburger-menu.png"/></span> <!-- Hamburger Icon -->
            </a>
            <ul class="menu menu-bar">
            <li class="mobile-close">
                    <a href="javascript:void(0);" class="close-icon"><img src="<?php bloginfo('template_directory') ?>/images/close-icon.png"/></a> <!-- Close Icon -->
                </li>
                <li><a href="#hero-banner" class="menu-link">Home</a></li>
                <li><a href="#about" class="menu-link">About Us</a></li>
             
                <li>
                    <a href="javascript:void(0);" class="menu-link" aria-haspopup="true">Services</a>
                    <ul class="mega-menu mega-menu--multiLevel">
                        <li>
                            <a href="javascript:void(0);" class="menu-link mega-menu-link" aria-haspopup="true">Expertise</a>
                            <ul class="menu menu-list">
                                <li><a href="/submenu1-1" class="menu-link menu-list-link">App Development</a></li>
                                <li>
                                    <a  class="menu-link menu-list-link" >Product Development</a>
                                </li>
                                <li>
                                    <a  class="menu-link menu-list-link" >Web Application</a>
                                </li>
                                <li>
                                    <a  class="menu-link menu-list-link" >SDE</a>
                                </li>
                                <li>
                                    <a  class="menu-link menu-list-link" >Quality Enginnering</a>
                                </li>
                                <li>
                                    <a  class="menu-link menu-list-link" >Observability</a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="/submenu1-3" class="menu-link mega-menu-link" aria-haspopup="true">Cloud & DevOps</a>
                            <ul class="menu menu-list">
                                <li><a href="/submenu1-1" class="menu-link menu-list-link">Mega </a></li>
                                <li><a  class="menu-link menu-list-link" >DevOps</a></li>
                                <li><a  class="menu-link menu-list-link" >DevSecOps</a></li>
                            </ul>
                        </li>
                        <li><a href="/submenu1-3" class="menu-link mega-menu-link" aria-haspopup="true">Quality</a>
                            <ul class="menu menu-list">
                                <li><a href="/submenu1-1" class="menu-link menu-list-link">Automation Testing</a></li>
                                <li><a  class="menu-link menu-list-link" >Load Testing</a></li>
                                <li><a  class="menu-link menu-list-link" >Penetration Testing</a></li>
                            </ul>
                        </li>
                        <li><a href="/submenu1-3" class="menu-link mega-menu-link" aria-haspopup="true">Consultaion</a>
                            <ul class="menu menu-list">
                                <li><a href="/submenu1-1" class="menu-link menu-list-link">Consulting</a></li>
                           
                            </ul>
                        </li>
                        
                    </ul>
                </li>
                <li><a href="" class="menu-link">How We Do It</a></li>
                <li><a href="" class="menu-link">Blogs</a></li>
                <li><a href="" class="menu-link">Contact Us</a></li>
                <!-- <li><a href="#contactus" class="menu-link">Contact Us</a>
                    <ul class="mega-menu mega-menu--multiLevel">
                        <li><a href="javascript:void(0);" class="menu-link mega-menu-link">1.1 Flyout link</a></li>
                    </ul>
                </li> -->
            </ul>
        </nav>
    </div>
</header>




<style>
 
</style>
    <script type="text/javascript">

$(document).ready(function(){



  $('.menu-tab').click(function(){



    $('.menu-hide').toggleClass('show');



    $('.menu-tab').toggleClass('active');



  }); 



  $('.menuopen.active').click(function(){



    $('.menu-hide').removeClass('show');



    $('.menu-tab').removeClass('active');



  });



  



  $('.menuholder > ul > li:has( > ul)').addClass('menu-dropdown-iconh');



  $(".menuholder > ul > li").click(function(){ 



  if($(window).width()<=991){



    if($($(this).children("ul")).hasClass("exp-dwnrr")){  



      $($(this).children("ul.exp-dwnrr")).removeClass("exp-dwnrr").slideUp(150); 



      $(this).removeClass("of-dwn");



    }



      else{

          

         $('.sidemenu li ul').not( $(this).siblings() ).removeClass("exp-dwnrr").slideUp(150);    

        $($(this).children("ul")).addClass("exp-dwnrr").slideDown(150);



        $(this).addClass("of-dwn");

         $("ul.sidemenu li").not($(this)).removeClass("of-dwn");                      



        }



    }



});        

});   
$(window).scroll(function() {    
    var scroll = $(window).scrollTop();

     //>=, not <=
    if (scroll >= 80) {
        //clearHeader, not clearheader - caps H
        $(".headmenu-cover").addClass("darkHeader");
    }
    else {
      $(".headmenu-cover").removeClass("darkHeader");
    }
}); 


</script> 


<script>
document.querySelector('.mobile-menu-trigger').addEventListener('click', function() {
    document.querySelector('.menu-bar').classList.toggle('open');
});

// Close menu when close icon is clicked
document.querySelector('.close-icon').addEventListener('click', function() {
    document.querySelector('.menu-bar').classList.remove('open');
});
</script>




    

