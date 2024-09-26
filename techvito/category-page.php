 <?php /* Template Name:category page */?>
<?php get_header(); ?>
<link rel="stylesheet" href="https:cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    .sub-menu {
        display: none;
    }

    .sub-menu.show {
        display: block;
    }

   

    .custom-dropdown {
        /* position: relative; */
        display: inline-block;
    }

    .custom-dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        z-index: 1;
        padding:10px;

    }
    /* .custom-dropdown-content label{
    margin-bottom:10px;
    } */

    .custom-checkbox {
        margin-right: 5px;
    }

#insights-category-lists{
    margin-top:100px;
}
.expertise-card {
    display: inline-block;
    width: 100%;
    height: 300px;
    perspective: 600px
}

@media(max-width:767px) {
    .expertise-card {
        height: 500px;
        margin: 15px 0
    }
}

.expertise-card h3 {
    color: #fff !important;
    font-size: 20px !important;
    position: absolute;
    left: 50%;
    top: 75%;
    width:100% ;
    transform: translate(-50%, -50%);
    font-family: 'Roboto Serif', serif;
}


.expertise-card-inner {
    position: relative;
    width: 90%;
    height: 100%
}
.expertise-card img{
    position: relative;
    width: 100%;
    height: 100%
}
.expertise-card-inner .read-more-btn {
    color: #fff !important;
    font-size: 16px !important;
    position: absolute;
    bottom: 26px;
    width: 40%;
    margin: 0 auto;
    left: 27%;
    font-family: 'Roboto Serif', serif;
    border: 1px solid #fff;
    background: 0 0;
    padding: 4px 16px
}

.banner-btn a:hover,
.expertise-card-inner .read-more-btn:hover {
    background-color: #02181e !important;
    color: #fff !important;
    border: 1px solid #fff !important
}
.expertise-card-inner {
    cursor: pointer;
    transform-style: preserve-3d;
    transform-origin: center right;
    transition: transform 1s
}

.card_face {
    position: absolute;
    width: 100%;
    height: 100%;
    color: #fff;
    text-align: center;
    font-weight: 700;
    font-size: 40px;
    backface-visibility: hidden;
    /* padding: 25px 10px; */
}

.is-flipped {
    transform: translateX(-100%) rotateY(-180deg)
}

.expertise-card-back {
    transform: rotateY(180deg);
    box-shadow: rgba(0, 0, 0, .24) 0 3px 8px;
    background: rgb(29,29,29);
background: linear-gradient(180deg, rgba(29,29,29,1) 1%, rgba(208,208,208,1) 100%);
    padding: 14px 15px
}

.expertise-card-back p {
    color: #fff;
    margin-bottom: 10px;
    font-family: 'Roboto Serif', serif;
    font-size: 16px;
    text-align: left;
    pointer-events: none
}
</style>


<section >
    <div class="expertise-box-layout">
    <div class="row">
         <!--  -->
    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 square-col">

<div class="expertise-card">
   <div class="expertise-card-inner">
    <div class="expertise-card-front card_face">
      <img  src="<?php bloginfo('template_directory') ?>/images/web-mobile-app.webp"/>
      <h3>Modern Web/Mobile Apps</h3>
      <div class="read-more-btn"> 
        <a>Know More</a>
      </div>
    </div>
    <div class="expertise-card-back card_face">
        <h4>Modern Web/Mobile Apps</h4>
      <p>Craft stunning and functional web and mobile apps that drive engagement and results. </p>
    </div>
   </div>
    </div>
</div>
<!--  -->
<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 square-col">

<div class="expertise-card" >
   <div class="expertise-card-inner">
    <div class="expertise-card-front card_face">
      <img  src="<?php bloginfo('template_directory') ?>/images/ai-data-analytics.webp"/>
      <h3>
AI and Data Analytics</h3>
      <div class="read-more-btn"> 
        <a>Know More</a>
      </div>
    </div>
    <div class="expertise-card-back card_face">
        <h4>
AI and Data Analytics</h4>
      <p>Gain actionable insights, optimize decision-making, and unlock new possibilities. </p>
    </div>
   </div>
    </div>
</div>
<!--  -->
<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 square-col">

<div class="expertise-card" >
   <div class="expertise-card-inner">
    <div class="expertise-card-front card_face">
      <img  src="<?php bloginfo('template_directory') ?>/images/cloud-enablement-solutions.webp"/>
      <h3>Cloud Enablement/Solutions</h3>
      <div class="read-more-btn"> 
        <a>Know More</a>
      </div>
    </div>
    <div class="expertise-card-back card_face">
        <h4>Cloud Enablement/Solutions</h4>
      <p>Unleash the power of the cloud with seamless DevOps, expert migrations, and optimized architectures for maximum scalability and performance. </p>
    </div>
   </div>
    </div>
</div>
<!--  -->
<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 square-col">

<div class="expertise-card" >
   <div class="expertise-card-inner">
    <div class="expertise-card-front card_face">
      <img  src="<?php bloginfo('template_directory') ?>/images/automation.webp"/>
      <h3>Automation</h3>
      <div class="read-more-btn"> 
        <a>Know More</a>
      </div>
    </div>
    <div class="expertise-card-back card_face">
        <h4>Automation</h4>
      <p>Streamline your operations and boost efficiency with intelligent robotic process automation and robust test automation solutions. </p>
    </div>
   </div>
    </div>
</div>
<!--  -->
<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 square-col">

<div class="expertise-card" >
   <div class="expertise-card-inner">
    <div class="expertise-card-front card_face">
      <img  src="<?php bloginfo('template_directory') ?>/images/ui-ux-design.webp"/>
      <h3>UI/UX Design</h3>
      <div class="read-more-btn"> 
        <a>Know More</a>
      </div>
    </div>
    <div class="expertise-card-back card_face">
        <h4>UI/UX Design</h4>
      <p>Design user interfaces that are intuitive, delightful, and drive brand loyalty. We craft experiences that convert. </p>
    </div>
   </div>
    </div>
</div>
<!--  -->
<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 square-col">

<div class="expertise-card" >
   <div class="expertise-card-inner">
    <div class="expertise-card-front card_face">
      <img  src="<?php bloginfo('template_directory') ?>/images/learning-development.webp"/>
      <h3>Learning and Development</h3>
      <div class="read-more-btn"> 
        <a>Know More</a>
      </div>
    </div>
    <div class="expertise-card-back card_face">
        <h4>Learning and Development</h4>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum omnis cupiditate ea? Cumque autem exercitationem voluptatibus </p>
    </div>
   </div>
    </div>
</div>
<!--  -->
<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 square-col">

<div class="expertise-card" >
   <div class="expertise-card-inner">
    <div class="expertise-card-front card_face">
      <img  src="<?php bloginfo('template_directory') ?>/images/aoe-image-1.png"/>
      <h3>Modern Web/Mobile Apps</h3>
      <div class="read-more-btn"> 
        <a>Know More</a>
      </div>
    </div>
    <div class="expertise-card-back card_face">
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum omnis cupiditate ea? Cumque autem exercitationem voluptatibus </p>
    </div>
   </div>
    </div>
</div>
<!--  -->
</div>

</div>
</div>
</section>

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


<?php get_footer(); ?> 