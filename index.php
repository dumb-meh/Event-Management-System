<?php
 include_once 'header.php';
?>

    <section class="section-one">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/bg5.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h1>Convocation</h1>
              <p>Make it even more memorable!</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/bg2.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h1>Marrige Ceromony </h1>
              <p>Some representative placeholder content for the second slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/bg3.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h1>Haldi Program</h1>
              <p>Some representative placeholder content for the third slide.</p>
            </div>
          </div>

          <div class="carousel-item">
            <img src="img/bg1.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h1>Birthday Program</h1>
              <p>Some representative placeholder content for the third slide.</p>
            </div>
          </div>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>-
    <!--Section 1 End-->

    <!--Section 2 start-->
    <section class="section-two">
      <div class="container">
        <div class="row" class="row-up">
          <div class="sec2-uCon">
            <h1>About Us</h1>
            <p> A new company that is alwasys looking to improve with our customes feedback</p>
          </div>
          <div class="col-md-6 sectiontwo-pic">
            <img src="img/bg3.png" class="img-fluid event-main">

          </div>
          <div class="col-md-6 sectiontwo-content">
            <h2>হলুদ সন্ধ্যা</h2>
            <span></span>
            <p>Make your হলুদ সন্ধ্যা even more special</p>

            <button type="button" class="btn-two">READ MORE</button>



          </div>


        </div>

      </div>

    </section>
    <!--Section 2 End-->
    <!--Section 3 start-->
    <section class="section-three">
      <div class="container">
        <div class="row" class="row-up">

          <div class="col-md-6 sectionthree-content">
            <h2>Convocation</h2>
            <span></span>
            <p> Make your convocation stressfree and memorable. We will provide the best convocation that one can have</p>

            <button type="button" class="btn-two">READ MORE</button>



          </div>
          <div class="col-md-6 sectionthree-pic">
            <img src="img/bg5.png" class="img-fluid car2-main">

          </div>


        </div>

      </div>

    </section>
    <!--Section 3 End-->
    <!--Section 4 start-->
    <section class="section-four">
      <div class="container">
        <div class="row" class="row-up">
          <div class="col-md-6 sectionthree-pic">
            <img src="img/bg6.png" class="img-fluid car2-main">

          </div>
          <div class="col-md-6 sectionthree-content">
            <h2>Corporate Event</h2>
            <span></span>
            <p>Managing  corporate events can be real stressful. For a relaxing event contact us </p>

            <button type="button" class="btn-two">READ MORE</button>



          </div>



        </div>

      </div>

    </section>
    <!--Section 4 End-->
    <!--newsletter Section start-->
    <section class="Sec-newsletter">
  <div class="newsletter">
    <h4>Sign up to get the FREE updates about new events</h4>
    <input type="text" id="name" placeholder="Enter Name">
    <input type="email" id="email" placeholder="Enter Email">
    <input type="submit" id="submit-btn" value="Submit">
  </div>
</section>

<script>
  // Get references to the input fields and submit button
  const nameInput = document.getElementById('name');
  const emailInput = document.getElementById('email');
  const submitBtn = document.getElementById('submit-btn');

  // Attach a click event listener to the submit button
  submitBtn.addEventListener('click', function(event) {
    // Prevent the default form submission behavior
    event.preventDefault();

    // Get the values of the name and email input fields
    const name = nameInput.value;
    const email = emailInput.value;

    // Create a new XMLHttpRequest object
    const xhr = new XMLHttpRequest();

    // Set up the HTTP request
    xhr.open('POST', 'newsletter.php');
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    // Set up the callback function to handle the HTTP response
    xhr.onreadystatechange = function() {
      if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
        // Do something with the response
        console.log(xhr.responseText);
        alert('Subscription Successfull');
      }
    };

    // Send the HTTP request with the user's input as the request body
    xhr.send(`name=${name}&email=${email}`);
  });
</script>


    <!--newsletter section End-->
    <?php
     include_once 'footer.php';
    ?>
