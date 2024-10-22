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

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Manrope:wght@200..800&display=swap" rel="stylesheet">
    <?php wp_head(); ?> 



</head>

<body>
<header>
<div class="nav">
    <nav>
       
        <a href="/" class="logo">
                <img src="<?php bloginfo('template_directory') ?>/images/techvito-white-logo.webp" alt="Logo" />
            </a>
        
            <a href="javascript:void(0);" class="mobile-menu-trigger">
                <span class="hamburger-icon"><img src="<?php bloginfo('template_directory') ?>/images/hamburger-menu.png"/></span>
                </a>
              
        <ul class="menu menu-bar">
        <a href="javascript:void(0);" class="close-icon"><img src="<?php bloginfo('template_directory') ?>/images/close-icon.png"/></a> <!-- Close Icon -->
        
            <!-- <li><a class="menu-link menu-bar-link">Home</a></li> -->
            <li>
                <a href="javascript:void(0);" id="servicesLink" class="menu-link menu-bar-link" aria-haspopup="true">Services</a>
                <ul class="mega-menu mega-menu--multiLevel">
                    <li>
                        <a href="javascript:void(0);" class="menu-link mega-menu-link" aria-haspopup="true">Product Development</a>
                        <ul class="menu menu-list">
                            <li class="product-lists"> 
                                <a href="">
                                <div>
                                <img src="<?php bloginfo('template_directory') ?>/new-images/application_development_menu_icons.svg" class="menu-icons-container"/>
                                </div>
                                <div class="product-list-content">
                                <p  class="menu-link menu-list-link">Application Development <i class="fa-solid fa-arrow-right  menu-direction"></i></p>
                                <p>Delivering customized software that improves efficiency and meets specific user needs effectively.</p>
                                </div>
                                </a>
                            </li>
                            <li class="product-lists"> 
                                <a>
                                <div>
                                <img src="<?php bloginfo('template_directory') ?>/new-images/product_strategy_menu_icons.svg" class="menu-icons-container"/>
                                </div>
                                <div class="product-list-content">
                                <p class="menu-link menu-list-link">Product Strategy <i class="fa-solid fa-arrow-right  menu-direction"></i></p>
                                <p>Aligning product goals with market needs, ensuring successful launches and maximizing business impact.</p>
                                </div>
                                </a>
                            </li>
                            <li class="product-lists"> 
                                <a>
                                <div>
                                <img src="<?php bloginfo('template_directory') ?>/new-images/application_modernization_Menu-icons.svg" class="menu-icons-container"/>
                                </div>
                                <div class="product-list-content">
                                <p  class="menu-link menu-list-link">Application Modernization <i class="fa-solid fa-arrow-right  menu-direction"></i></p>
                                <p>Updating legacy systems, enhancing performance, scalability, and integration with modern technologies.</p>
                                </div>
                                </a>
                            </li>
                            <li class="product-lists"> 
                                <a>
                                <div>
                                <img src="<?php bloginfo('template_directory') ?>/new-images/qa_engineering_menu_icons.svg" class="menu-icons-container"/>
                                </div>
                                <div class="product-list-content">
                                <p  class="menu-link menu-list-link">QA Engineering <i class="fa-solid fa-arrow-right  menu-direction"></i></p>
                                <p>We ensure software quality through thorough testing, reducing bugs and enhancing user satisfaction.</p>
                                </div>
                                </a>
                            </li>
                         
                            
                            <li class="product-lists"> 
                                <a>
                                <div>
                                <img src="<?php bloginfo('template_directory') ?>/new-images/iac_menu_icons.svg" class="menu-icons-container"/>
                                </div>
                                <div class="product-list-content">
                                <p class="menu-link menu-list-link">Infrastructure as Code (IaC) <i class="fa-solid fa-arrow-right  menu-direction"></i></p>
                                <p>Automating infrastructure management, increasing consistency and speeding up deployment processes.</p>
                                </div>
                                </a>
                            </li>
                            <li class="product-lists"> 
                                <a>
                                <div>
                                <img src="<?php bloginfo('template_directory') ?>/new-images/ui_ux_menu_icons.svg" class="menu-icons-container"/>
                                </div>
                                <div class="product-list-content">
                                <p class="menu-link menu-list-link">UI/UX Engineering <i class="fa-solid fa-arrow-right  menu-direction"></i></p>
                                <p>Creating intuitive interfaces that enhance user engagement and satisfaction, driving customer loyalty.</p>
                                </div>
                                </a>
                            </li>
                      
                          
                           
                            
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-link mega-menu-link" aria-haspopup="true">Cloud & DevOps</a>
                        <ul class="menu menu-list">
                            <li class="product-lists">
                                <a>
                                <div>
                                <img src="<?php bloginfo('template_directory') ?>/new-images/cloud-expertise.svg" class="menu-icons-container"/>
                                </div>
                                <div class="product-list-content">
                                <p class="menu-link menu-list-link">Cloud Migration <i class="fa-solid fa-arrow-right  menu-direction"></i></p>
                                <p>Enhancing scalability and reduces costs by moving applications and data to the cloud.</p>
                                </div>
                                </a>
                            </li>
                            <li class="product-lists">
                                <a>
                                <div>
                                <img src="<?php bloginfo('template_directory') ?>/new-images/cloud-devops.svg" class="menu-icons-container"/>
                                </div>
                                <div class="product-list-content">
                                <p class="menu-link menu-list-link">Cloud DevOps & Automation <i class="fa-solid fa-arrow-right  menu-direction"></i></p>
                                <p>Improving efficiency and speed by integrating development and operations with automated workflows.</p>
                                </div>
                                </a>
                            </li>
                          
                            <li class="product-lists">
                                <a>
                                <div>
                                <img src="<?php bloginfo('template_directory') ?>/new-images/cloud-storage.svg" class="menu-icons-container"/>
                                </div>
                                <div class="product-list-content">
                                <p class="menu-link menu-list-link">Cloud Storage & Data Management <i class="fa-solid fa-arrow-right  menu-direction"></i></p>
                                <p>We provide secure, scalable solutions for easy access and management of data.</p>
                                </div>
                                </a>
                            </li>
                            
                            <li class="product-lists">
                                <a>
                                <div>
                                <img src="<?php bloginfo('template_directory') ?>/new-images/cloud-disaster.svg" class="menu-icons-container"/>
                                </div>
                                <div class="product-list-content">
                                <p class="menu-link menu-list-link">Cloud Disaster Recovery & High Availability <i class="fa-solid fa-arrow-right  menu-direction"></i></p>
                                <p>Ensuring business continuity by minimizing downtime and providing robust backup solutions.</p>
                                </div>
                                </a>
                            </li>
                            <li class="product-lists">
                                <a>
                                <div>
                                <img src="<?php bloginfo('template_directory') ?>/new-images/cloud-monitoring.svg" class="menu-icons-container"/>
                                </div>
                                <div class="product-list-content">
                                <p class="menu-link menu-list-link">Cloud Monitoring & Performance Optimization <i class="fa-solid fa-arrow-right  menu-direction"></i></p>
                                <p>Enhance user experience through real-time tracking and performance improvements.</p>
                                </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-link mega-menu-link" aria-haspopup="true">Quality</a>
                        <ul class="menu menu-list">
                        <li class="product-lists">
                                <a>
                                <div>
                                <img src="<?php bloginfo('template_directory') ?>/new-images/manual_testing_menuicons.svg" class="menu-icons-container"/>
                                </div>
                                <div class="product-list-content">
                                <p class="menu-link menu-list-link">Manual Testing <i class="fa-solid fa-arrow-right  menu-direction"></i></p>
                                <p>Capture real user experiences and identify subtle issues that automated tests might miss.</p>
                                </div>
                                </a>
                            </li>
                            <li class="product-lists">
                                <a>
                                <div>
                                <img src="<?php bloginfo('template_directory') ?>/new-images/automation_testing_menuicons.svg" class="menu-icons-container"/>
                                </div>
                                <div class="product-list-content">
                                <p class="menu-link menu-list-link">Automation Testing <i class="fa-solid fa-arrow-right  menu-direction"></i></p>
                                <p>Increase testing efficiency and accuracy by automating repetitive test cases, freeing up resources for more complex tasks.</p>
                                </div>
                                </a>
                            </li>
                            <li class="product-lists">
                                <a>
                                <div>
                                <img src="<?php bloginfo('template_directory') ?>/new-images/loadtesting_menuicons.svg" class="menu-icons-container"/>
                                </div>
                                <div class="product-list-content">
                                <p class="menu-link menu-list-link">Load Testing <i class="fa-solid fa-arrow-right  menu-direction"></i></p>
                                <p>Ensure your product can handle peak user traffic without compromising performance or reliability.</p>
                                </div>
                                </a>
                            </li>
                            <li class="product-lists">
                                <a>
                                <div>
                                <img src="<?php bloginfo('template_directory') ?>/new-images/penetration_testingmenuicons.svg" class="menu-icons-container"/>
                                </div>
                                <div class="product-list-content">
                                <p class="menu-link menu-list-link">Penetration Testing <i class="fa-solid fa-arrow-right  menu-direction"></i></p>
                                <p>Proactively discover and fix security vulnerabilities before malicious actors can exploit them.</p>
                                </div>
                                </a>
                            </li>
                            
                            <li class="product-lists">
                                <a>
                                <div>
                                <img src="<?php bloginfo('template_directory') ?>/new-images/securitytesting_menuicons.svg" class="menu-icons-container"/>
                                </div>
                                <div class="product-list-content">
                                <p class="menu-link menu-list-link">Security Testing <i class="fa-solid fa-arrow-right  menu-direction"></i></p>
                                <p>Safeguard your software against threats by identifying and addressing potential security flaws.</p>
                                </div>
                                </a>
                            </li>
                            <li class="product-lists">
                                <a>
                                <div>
                                <img src="<?php bloginfo('template_directory') ?>/new-images/datasecuritytesting_menuicons.svg" class="menu-icons-container"/>
                                </div>
                                <div class="product-list-content">
                                <p class="menu-link menu-list-link">Data Security Testing <i class="fa-solid fa-arrow-right  menu-direction"></i></p>
                                <p>Protect sensitive information by validating that data handling practices meet security standards.</p>
                                </div>
                                </a>
                            </li>
                           
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-link mega-menu-link" aria-haspopup="true">Security</a>
                        <ul class="menu menu-list">
                        <li class="product-lists">
                                <a>
                                <div>
                                <img src="<?php bloginfo('template_directory') ?>/new-images/security_coding_standards_menuicons.svg" class="menu-icons-container"/>
                                </div>
                                <div class="product-list-content">
                                <p class="menu-link menu-list-link">Secure Coding Standards <i class="fa-solid fa-arrow-right menu-direction"></i></p>
                                <p>Best coding practices that reduce vulnerabilities in applications.</p>
                                </div>
                                </a>
                            </li>   
                            <li class="product-lists">
                                <a>
                                <div>
                                <img src="<?php bloginfo('template_directory') ?>/new-images/sdlc_menuicons.svg" class="menu-icons-container"/>
                                </div>
                                <div class="product-list-content">
                                <p class="menu-link menu-list-link">Secure Development Lifecycle (SDLC) <i class="fa-solid fa-arrow-right menu-direction"></i></p>
                                <p>security at every stage of development to mitigate risks.</p>
                                </div>
                                </a>
                            </li> 
                            <li class="product-lists">
                                <a>
                                <div>
                                <img src="<?php bloginfo('template_directory') ?>/new-images/secure_api_development_menuicons.svg" class="menu-icons-container"/>
                                </div>
                                <div class="product-list-content">
                                <p class="menu-link menu-list-link">Secure API Development <i class="fa-solid fa-arrow-right menu-direction"></i></p>
                                <p>Robust authentication and validation in API design to prevent unauthorized access.</p>
                                </div>
                                </a>
                            </li> 
                            <li class="product-lists">
                                <a>
                                <div>
                                <img src="<?php bloginfo('template_directory') ?>/new-images/application_security_menuicons.svg" class="menu-icons-container"/>
                                </div>
                                <div class="product-list-content">
                                <p class="menu-link menu-list-link">Application Security <i class="fa-solid fa-arrow-right menu-direction"></i></p>
                                <p>Best security measures to protect applications from threats.</p>
                                </div>
                                </a>
                            </li> 
                            
                            <li class="product-lists">
                                <a>
                                <div>
                                <img src="<?php bloginfo('template_directory') ?>/new-images/data_security_menuicons.svg" class="menu-icons-container"/>
                                </div>
                                <div class="product-list-content">
                                <p class="menu-link menu-list-link">Data Security <i class="fa-solid fa-arrow-right menu-direction"></i></p>
                                <p>Encryption and access controls to safeguard sensitive information.</p>
                                </div>
                                </a>
                            </li> 
                            <li class="product-lists">
                                <a>
                                <div>
                                <img src="<?php bloginfo('template_directory') ?>/new-images/cloud_security_menuicons.svg" class="menu-icons-container"/>
                                </div>
                                <div class="product-list-content">
                                <p class="menu-link menu-list-link">Cloud  Security <i class="fa-solid fa-arrow-right menu-direction"></i></p>
                                <p>Protect data and applications in cloud environments from threats.</p>
                                </div>
                                </a>
                            </li>
                            <li class="product-lists">
                                <a>
                                <div>
                                <img src="<?php bloginfo('template_directory') ?>/new-images/incident_response_management_menuicons.svg" class="menu-icons-container"/>
                                </div>
                                <div class="product-list-content">
                                <p class="menu-link menu-list-link">Incident Response & Management <i class="fa-solid fa-arrow-right menu-direction"></i></p>
                                <p>Detect and respond to security incidents effectively.</p>
                                </div>
                                </a>
                            </li>
                           
                          
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-link mega-menu-link" aria-haspopup="true">Digital Transformation</a>
                        <ul class="menu menu-list">
                        <li class="product-lists">
                                <a>
                                <div>
                                <img src="<?php bloginfo('template_directory') ?>/new-images/cloudadoption_menuicons.svg" class="menu-icons-container"/>
                                </div>
                                <div class="product-list-content">
                                <p class="menu-link menu-list-link">Cloud Adoption & Migration <i class="fa-solid fa-arrow-right menu-direction"></i></p>
                                <p>Adopting cloud solutions significantly enhances application scalability and flexibility, enabling you to handle increased user demands seamlessly.</p>
                                </div>
                                </a>
                            </li>
                            <li class="product-lists">
                                <a>
                                <div>
                                <img src="<?php bloginfo('template_directory') ?>/new-images/agiledevops_menuicons.svg" class="menu-icons-container"/>
                                </div>
                                <div class="product-list-content">
                                <p class="menu-link menu-list-link">Agile & DevOps Transformation <i class="fa-solid fa-arrow-right menu-direction"></i></p>
                                <p>Embracing Agile and DevOps transforms your application development process by promoting collaboration and faster delivery cycles.</p>
                                </div>
                                </a>
                            </li>
                            <li class="product-lists">
                                <a>
                                <div>
                                <img src="<?php bloginfo('template_directory') ?>/new-images/cloud-devops.svg" class="menu-icons-container"/>
                                </div>
                                <div class="product-list-content">
                                <p class="menu-link menu-list-link">DevOps Automation & Tooling <i class="fa-solid fa-arrow-right menu-direction"></i></p>
                                <p>Implementing automation and tooling within DevOps streamlines your application development and deployment processes, significantly reducing time to market. </p>
                                </div>
                                </a>
                            </li>
                            <li class="product-lists">
                                <a>
                                <div>
                                <img src="<?php bloginfo('template_directory') ?>/new-images/ui_ux_menu_icons.svg" class="menu-icons-container"/>
                                </div>
                                <div class="product-list-content">
                                <p class="menu-link menu-list-link">UI/UX Design <i class="fa-solid fa-arrow-right  menu-direction"></i></p>
                                <p>UI/UX design dramatically improves user engagement and satisfaction by creating intuitive and appealing interfaces.  </p>
                                </div>
                                </a>
                            </li>
                         
                            
                           
                        </ul>
                    </li>
                    <!-- <li>
                        <a href="javascript:void(0);" class="menu-link mega-menu-link" aria-haspopup="true">1.2 Flyout
                            link</a>
                        <ul class="menu menu-list">
                            <li>
                                <a href="/page" class="menu-link menu-list-link">1.2.1 Page link</a>
                            </li>
                            <li>
                                <a href="/page" class="menu-link menu-list-link">1.2.2 Page link</a>
                            </li>
                        </ul>
                    </li> -->
                    <!-- <li>
                        <a href="javascript:void(0);" class="menu-link mega-menu-link" aria-haspopup="true">1.3 Flyout
                            link</a>
                        <ul class="menu menu-list">
                            <li>
                                <a href="/page" class="menu-link menu-list-link">1.3.1 Page link</a>
                            </li>
                            <li>
                                <a href="/page" class="menu-link menu-list-link">1.3.2 Page link</a>
                            </li>
                        </ul>
                    </li> -->
                    <!-- <li>
                        <a href="/page" class="menu-link mega-menu-link">1.4 Page link</a>
                    </li> -->
                    <li class="mobile-menu-back-item">
                        <a href="javascript:void(0);" class="menu-link mobile-menu-back-link">Back</a>
                    </li>
                </ul>
            </li>

          

           
            <li>
                <a href="/page" class="menu-link menu-bar-link">About Us</a>
            </li>
            <li>
                <a href="/page" class="menu-link menu-bar-link">How we do it</a>
            </li>
            <li>
                <a href="/page" class="menu-link menu-bar-link">Case Studies</a>
            </li>
            <li>
                <a href="/page" class="menu-link menu-bar-link">Insights</a>
            </li>
            <li>
                <a href="/page" class="menu-link menu-bar-link">Contact Us</a>
            </li>
           
        </ul>
    </nav>
</div>
</header>




<style>
 
</style>





<script>
document.addEventListener('DOMContentLoaded', function () {
    const servicesLink = document.getElementById('servicesLink');
    const megaMenu = servicesLink.nextElementSibling; // The submenu

    // Function to hide all submenus
    function hideAllSubmenus() {
        const allSubmenus = megaMenu.querySelectorAll('.menu');
        allSubmenus.forEach(submenu => {
            submenu.style.display = 'none';
        });

        const allMegaMenuLinks = megaMenu.querySelectorAll('.mega-menu-link');
        allMegaMenuLinks.forEach(link => {
            link.classList.remove('active'); // Remove active class
        });
    }

    // Function to show Application Development submenu by default
    function showApplicationDevelopment() {
        hideAllSubmenus(); // Hide all other submenus
        const appDevLink = megaMenu.querySelector('.mega-menu-link'); // Application Development link
        const appDevSubMenu = appDevLink.nextElementSibling; // Submenu for Application Development
        appDevLink.classList.add('active'); // Add active class to Application Development link
        appDevSubMenu.style.display = window.innerWidth <= 992 ? '' : 'flex'; // Show the submenu
    }

    // Check window width before applying event listeners
    function initMegaMenu() {
        let hideTimeout;
        if (window.innerWidth > 992) {
            // Show mega menu on hover over services link
            servicesLink.addEventListener('mouseenter', function () {
                megaMenu.style.display = 'flex'; // Show the mega menu
                showApplicationDevelopment(); // Show Application Development by default
            });

            servicesLink.addEventListener('mouseleave', function () {
    hideTimeout = setTimeout(() => {
        if (!megaMenu.matches(':hover')) {
            megaMenu.style.display = 'none'; // Hide mega menu when mouse leaves
            hideAllSubmenus(); // Hide all submenus
        }
    }, 200); // Adjust the delay as needed (200 ms here)
});
            // Show mega menu on hover over the mega menu
            megaMenu.addEventListener('mouseenter', function () {
                megaMenu.style.display = 'flex'; // Keep the mega menu visible
            });

            megaMenu.addEventListener('mouseleave', function () {
                clearTimeout(hideTimeout); 
                megaMenu.style.display = 'none'; // Hide mega menu when mouse leaves
                hideAllSubmenus(); // Hide all submenus
            });

            // Add hover event listeners for mega menu links
            const megaMenuLinks = megaMenu.querySelectorAll('.mega-menu-link');

            megaMenuLinks.forEach(link => {
                link.addEventListener('mouseenter', function () {
                    hideAllSubmenus(); // Hide all submenus on hover
                    link.classList.add('active'); // Add active class to the hovered link
                    const subMenu = link.nextElementSibling; // Get the submenu for the hovered link
                    if (subMenu) {
                        subMenu.style.display = window.innerWidth <= 992 ? '' : 'flex'; // Show the relevant submenu
                    }
                });

                // Keep submenu open on mouse enter/leave for submenu
                const submenu = link.nextElementSibling; // Get the submenu
                if (submenu) {
                    submenu.addEventListener('mouseenter', function () {
                        link.classList.add('active'); // Keep active class when hovering over submenu
                        submenu.style.display = window.innerWidth <= 992 ? '' : 'flex'; // Ensure submenu stays open
                    });

                    submenu.addEventListener('mouseleave', function () {
                        link.classList.remove('active'); // Remove active class when leaving submenu
                        submenu.style.display = 'none'; // Hide submenu
                    });
                }

                link.addEventListener('mouseleave', function () {
                    // Do not remove active class here, to keep the current link active until another is hovered
                });
            });

            // Optional: Hide on click outside
            document.addEventListener('click', function (event) {
                if (!servicesLink.contains(event.target) && !megaMenu.contains(event.target)) {
                    megaMenu.style.display = 'none';
                    hideAllSubmenus();
                }
            });
        }
    }

    // Initialize the mega menu
    initMegaMenu();

    // Optional: Add resize event listener to re-initialize if the window is resized
    window.addEventListener('resize', function () {
        if (window.innerWidth <= 992) {
            megaMenu.style.display = 'none'; // Hide mega menu on smaller screens
            hideAllSubmenus(); // Hide all submenus
        } else {
            initMegaMenu(); // Reinitialize for larger screens
        }
    });

    // Adjust the submenu display style based on screen width
    const megaMenuLinks = megaMenu.querySelectorAll('.mega-menu-link');
    megaMenuLinks.forEach(link => {
        const submenu = link.nextElementSibling;
        if (submenu) {
            submenu.style.display = window.innerWidth <= 992 ? 'block' : 'flex'; // Set display based on screen size
        }
    });
});



</script>





    
<script>
    document.addEventListener('DOMContentLoaded', function() {
    const menuTrigger = document.querySelector('.mobile-menu-trigger');
    const closeIcon = document.querySelector('.close-icon');
    const menuBar = document.querySelector('.menu-bar');

    menuTrigger.addEventListener('click', function() {
        menuBar.style.display = 'block'; // Show the menu
    });

    closeIcon.addEventListener('click', function() {
        menuBar.style.display = 'none'; // Hide the menu
    });
});
</script>
