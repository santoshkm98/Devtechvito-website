<?php /* Template Name:How we do it Page */ ?>
<?php get_header(); ?>
<!-- how we do it -->
<section id="howedo-it-section">
  <div class="fix-layouts">
    <h2>How We Do</h2>
    <div class="wizard-container">
      <div class="wizard-steps">
        <div class="wizard-line"></div>
        <section class="wizard-step" id="step-1">
          <div class="circle"></div>
          <div class="wizard-content">
            <img src="https://cdn.prod.website-files.com/6365117e0f7392f8f79f332d/6378fbc38c7bd87351cefbe0_Submit.png"
              alt="Step 1 image">
            <div class="text-content">
              <h4>Step 1 Heading</h4>
              <p>Step 1 content goes here...</p>
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo, odio animi provident reiciendis illo
                nobis earum. Ea, inventore magnam nesciunt minima fuga provident obcaecati recusandae excepturi, modi
                maiores, odit vel?</p>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam explicabo molestiae accusamus facere
                aliquam. Deleniti totam cumque harum magnam et laudantium fugit itaque in enim assumenda. Provident
                voluptatibus aut dolor.</p>
            </div>
          </div>
        </section>

        <section class="wizard-step" id="step-2">
          <div class="circle"></div>
          <div class="wizard-content">
            <img src="https://cdn.prod.website-files.com/6365117e0f7392f8f79f332d/6378fbc38c7bd87351cefbe0_Submit.png"
              alt="Step 2 image">
            <div class="text-content">
              <h4>Step 2 Heading</h4>
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo, odio animi provident reiciendis illo
                nobis earum. Ea, inventore magnam nesciunt minima fuga provident obcaecati recusandae excepturi, modi
                maiores, odit vel?</p>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam explicabo molestiae accusamus facere
                aliquam. Deleniti totam cumque harum magnam et laudantium fugit itaque in enim assumenda. Provident
                voluptatibus aut dolor.</p>
            </div>
          </div>
        </section>
        <section class="wizard-step" id="step-3">
          <div class="circle"></div>
          <div class="wizard-content">
            <img src="https://cdn.prod.website-files.com/6365117e0f7392f8f79f332d/6378fbc38c7bd87351cefbe0_Submit.png"
              alt="Step 2 image">
            <div class="text-content">
              <h4>Step 3 Heading</h4>
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo, odio animi provident reiciendis illo
                nobis earum. Ea, inventore magnam nesciunt minima fuga provident obcaecati recusandae excepturi, modi
                maiores, odit vel?</p>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam explicabo molestiae accusamus facere
                aliquam. Deleniti totam cumque harum magnam et laudantium fugit itaque in enim assumenda. Provident
                voluptatibus aut dolor.</p>
            </div>
          </div>
        </section>
        <section class="wizard-step" id="step-4">
          <div class="circle"></div>
          <div class="wizard-content">
            <img src="https://cdn.prod.website-files.com/6365117e0f7392f8f79f332d/6378fbc38c7bd87351cefbe0_Submit.png"
              alt="Step 2 image">
            <div class="text-content">
              <h4>Step 4 Heading</h4>
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo, odio animi provident reiciendis illo
                nobis earum. Ea, inventore magnam nesciunt minima fuga provident obcaecati recusandae excepturi, modi
                maiores, odit vel?</p>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam explicabo molestiae accusamus facere
                aliquam. Deleniti totam cumque harum magnam et laudantium fugit itaque in enim assumenda. Provident
                voluptatibus aut dolor.</p>
            </div>
          </div>
        </section>
        <!-- Add more steps here -->
      </div>
    </div>
  </div>
</section>

<!-- how we do it -->


<script>
  let currentStep = 0;

  const steps = document.querySelectorAll(".wizard-step");
  const circles = document.querySelectorAll(".circle");
  const line = document.querySelector(".wizard-line");

  // Create an observer to track when the steps come into view
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      const stepIndex = [...steps].indexOf(entry.target);

      // Trigger animation and activate step when entering
      if (entry.isIntersecting) {
        currentStep = stepIndex;
        activateStep(stepIndex);
      } else {
        // Reset content and step activation when scrolling out
        deactivateStep(stepIndex);
      }
    });
  }, { threshold: 0.7 }); // Adjust the threshold for when the section becomes visible

  // Observe each step
  steps.forEach(step => observer.observe(step));

  // Function to activate the current step and animate the line
  function activateStep(stepIndex) {
    // Ensure only the active step's content is visible
    steps[stepIndex].classList.add("active");

    // Animate the line to the current step's circle
    const circleOffsetTop = circles[stepIndex].offsetTop + (circles[stepIndex].offsetHeight / 2);
    line.style.height = `${circleOffsetTop}px`;

    // Set the circle to green when the line reaches it
    circles[stepIndex].classList.add("filled");

    // Show the content of the active step with fade-in animation
    const content = steps[stepIndex].querySelector(".wizard-content");
    content.classList.add("fade-in");
    content.classList.remove("fade-out");
  }

  // Function to deactivate the step when scrolled out
  function deactivateStep(stepIndex) {
    // Hide the content and reset the line and circle
    steps[stepIndex].classList.remove("active");

    const content = steps[stepIndex].querySelector(".wizard-content");
    content.classList.remove("fade-in");
    content.classList.add("fade-out");

    // Reset the circle to its default (non-green) state
    circles[stepIndex].classList.remove("filled");

    // Reset the line height when scrolling past this step in reverse
    if (stepIndex === currentStep) {
      line.style.height = `${circles[stepIndex - 1]?.offsetTop || 0}px`;
    }
  }
</script>


<?php get_footer(); ?>