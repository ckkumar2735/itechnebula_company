<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="title" content="Transforming Ideas into Digital Realities | Expert Web Development Services For Business - Itechnebula  ">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:title" content="iTechNebula - Website Development Agency">
  <meta property="og:description" content="iTechNebula is a professional website development agency, offering expert solutions for web design and development. Visit us at iTechNebula.com for top-notch web services.">
  <meta property="og:image" content="URL_of_your_featured_image">
  <meta property="og:url" content="http://www.itechnebula.com/">

  <meta property="og:url" content="http://www.itechnebula.com/">
  <meta property="og:type" content="http://www.itechnebula.com/">
  <meta property="og:site_name" content="http://www.itechnebula.com/">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <!-- <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script> -->
  <!-- <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- <link rel="stylesheet" href="style.css" /> -->
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="Styles/ms_.css" />
  <link rel="stylesheet" href="Styles/ck_.css" />
  <link rel="stylesheet" href="Styles/rj_.css" />
  <link rel="stylesheet" href="Styles/responsive.css" />

  <title>Form</title>
  <style>
    .main-cl {
      padding: 50px;
      border-radius: 14px;
      border: 1px solid var(--iris-80, #7879f1);
      background: #fff;
      box-shadow: 0px 1px 100px 0px rgba(0, 0, 0, 0.04);
    }

    .img-emoji {
      text-align: center;
    }

    .btn-clim {
      color: #FFF;
      border: none;
      border-radius: 8px;
      background: #a5a6f6;
      height: 48px;
    }

    .h-text {
      color: #5d5fef;
      font-family: Montserrat;
      font-size: 24px;
      font-style: normal;
      font-weight: 600;
      line-height: normal;
    }

    .img-v {
      width: 181.069px;
      height: 123.321px;
    }

    .img-e {
      margin-left: -154px;
      margin-top: 8px;
      fill: var(--iris-60, #A5A6F6);
      position: absolute;
    }

    .hidden {
      display: none;
    }
  </style>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const nameInput = document.getElementById("exampleFormControlInput1");



      nameInput.addEventListener("input", updateEmojis);

      function updateEmojis() {
        const emojis = document.querySelectorAll(".img-e");
        emojis.forEach((emoji) => {
          emoji.classList.add("hidden");
        })

        const nameValue = nameInput.value.trim();

        if (nameValue.length >= 1) {
          document.querySelector(".emoji2").classList.remove("hidden");
        }

        if (nameValue.length >= 5) {
          document.querySelector(".emoji3").classList.remove("hidden");
        }
        if (nameValue.length >= 8) {
          document.querySelector(".emoji4").classList.remove("hidden");
        }

      }
    });
  </script>

  <script>
    document.addEventListener("DOMContentLoaded", function() {

      const emailInput = document.getElementById("exampleInputEmail1");

      emailInput.addEventListener("input", updateEmojis);

      function updateEmojis() {
        const emojis = document.querySelectorAll(".img-e");
        emojis.forEach((emoji) => {
          emoji.classList.add("hidden");
        })


        const emailValue = emailInput.value.trim();



        if (emailValue.length >= 1) {
          document.querySelector(".emoji2").classList.remove("hidden");
        }

        if (emailValue.length >= 5) {
          document.querySelector(".emoji3").classList.remove("hidden");
        }


        if (emailValue.includes("@")) {
          document.querySelector(".emoji4").classList.remove("hidden");
        }

        if (emailValue.endsWith(".com")) {
          document.querySelector(".emoji5").classList.remove("hidden");
        }


      }
    });
  </script>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const mobileInput = document.getElementById("exampleInputNumber1");

      mobileInput.addEventListener("input", updateEmojis);

      function updateEmojis() {
        const emojis = document.querySelectorAll(".img-e");
        emojis.forEach((emoji) => {
          emoji.classList.add("hidden");
        })


        const mobileValue = mobileInput.value.trim();



        if (mobileValue.length >= 0) {
          document.querySelector(".emoji7").classList.remove("hidden");
        }
      }
    });
  </script>








</head>

<body>


  <section>
    <div class="container-fluid">
      <div class="row nev-main">
        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container-fluid ms_mobilepading">
            <img src="Assets/Images/logoicon.png" alt="logo" class="img-fluid ms-logo" />
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto rjj-nev">
                <li class="nav-item mx-3">
                  <a class="nav-link active home" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item mx-3">
                  <a class="nav-link home" href="#">Case studies</a>
                </li>
                <li class="nav-item dropdown">
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li>
                      <a class="dropdown-item" href="#">Another action</a>
                    </li>
                    <li>
                      <hr class="dropdown-divider" />
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item mx-3">
                  <a class="nav-link home" href="#" tabindex="-1" aria-disabled="true">itechnebula Specialists</a>
                </li>
              </ul>
              <!-- <button class=" rounded-pill request ck_146" type="submit">
                  Request a quote
                </button>
                <button class=" rounded-pill clint" type="submit">
                  <img src="Assets/Images/Search.png" alt="" class="img-fluid" />
                  Client login
                </button> -->

              <div class="rjj-btn-mobile">
                <a class="rounded-pill request ck_146" href="form.html"> Request a quote</a>
                <a class="rounded-pill clint" href="https://codedelhiites.dev/team/authentication"> <img src="Assets/Images/Search.png" alt="" class="img-fluid" />
                  Client login</a>
              </div>

            </div>
          </div>
        </nav>
      </div>
    </div>
  </section>

  <section class="my-5">
    <!-- <form id="claimForm" onsubmit="return validateForm()" action="thanku.php" method="post"> -->

    <form id="claimForm" onsubmit="return validateForm()" method="post" action="emoji_submit.php" enctype="multipart/form-data">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5 mt-5 main-cl">
            <div class="img-emoji">
              <h1 class="h-text">Claim offer</h1>
              <img src="Assets/Images/Vector (3)_22.png" class="img-flude img-v" alt="..." />
              <!-- <img src="Assets/Images/Vector (3).png" class="img-flude img-v" alt="..." /> -->
              <img src="Assets/Images/emoji1.png" class="img-flude img-e emoji1" alt="..." />
              <img src="Assets/Images/emoji2.png" class="img-flude img-e emoji2 hidden" alt="..." />
              <img src="Assets/Images/emoji3.png" class="img-flude img-e emoji3 ck_544 hidden" alt="..." />
              <img src="Assets/Images/emoji4.png" class="img-flude img-e emoji4 hidden" alt="..." />
              <img src="Assets/Images/emoji5.png" class="img-flude img-e emoji5 hidden" alt="..." />
              <img src="Assets/Images/emoji6.png" class="img-flude img-e emoji6 hidden" alt="..." />
              <img src="Assets/Images/emoji7.png" class="img-flude img-e emoji7 hidden" alt="..." />
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Name</label>
              <div class="d-flex position-relative">
                <input type="text" class="form-control" name="name" id="exampleFormControlInput1" placeholder="Name" required />
                <i class="fa fa-user icon position-absolute" style="right: 10px; top: 50%; transform: translateY(-50%);"></i>
              </div>
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <div class="d-flex position-relative">
                <input type="text" class="form-control" name="email" id="exampleInputEmail1" placeholder="Enter your Email" aria-describedby="emailHelp" required />
                <i class='fa fa-envelope-open position-absolute' style="right: 10px; top: 50%; transform: translateY(-50%);"></i>
              </div>
            </div>
            <div class="mb-3">
              <label for="exampleInputNumber1" class="form-label">Mobile Number</label>
              <div class="d-flex position-relative">
                <input class="form-control" type="tel" id="exampleInputNumber1" name="phone" placeholder="Enter Mobile number" required />
                <i class='fa fa-eye position-absolute' style="right: 10px; top: 50%; transform: translateY(-50%);"></i>
                <i class="fa fa-eye-slash" aria-hidden="true" style="display: none; right: 10px; top: 50%; transform: translateY(-50%);"></i>
              </div>
            </div>
            <input type="hidden" id="selectedOption" name="selectedOption">

            <div class="d-grid">
              <!-- <button type="submit" name="submit2" class="btn-clim btn-primary ck_emoji_btn2">Claim Now</button> -->
              <button type="submit" name="submit2" id="claimButton" class="btn-primary btn btn-primary-claim btn-lg ck_santa_btn1" onclick="claimOffer()">Claim Offer</button>
            </div>
          </div>
        </div>
      </div>
    </form>
  </section>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const passwordInput = document.getElementById("exampleInputNumber1");
      const toggleIcon = document.querySelector(".fa-eye");
      const emoji6 = document.querySelector(".emoji6");
      const emoji7 = document.querySelector(".emoji7");

      toggleIcon.addEventListener("click", function() {
        if (passwordInput.type === "password") {
          passwordInput.type = "text";
          toggleIcon.classList.remove("fa-eye-slash");
          toggleIcon.classList.add("fa-eye");
          emoji7.classList.remove("hidden");
          emoji6.classList.add("hidden");
        } else {
          passwordInput.type = "password";
          toggleIcon.classList.remove("fa-eye");
          toggleIcon.classList.add("fa-eye-slash");
          emoji7.classList.add("hidden");
          emoji6.classList.remove("hidden");
        }
      });
    });
  </script>

  <script>
    function validateForm() {
      const nameInput = document.getElementById("name");
      const emailInput = document.getElementById("email");
      const mobileInput = document.getElementById("phone");
      const claimButton = document.querySelector(".btn-clim");

      // Name validation: Ensure name is not empty
      if (nameInput.value.trim() === "") {
        alert("Please enter your name.");
        return false;
      }

      // Email validation: Check for a valid email format
      const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!emailPattern.test(emailInput.value.trim())) {
        alert("Please enter a valid email address.");
        return false;
      }

      // Mobile number validation: Ensure it has exactly 10 digits
      const mobilePattern = /^\d{10}$/;
      if (!mobilePattern.test(mobileInput.value.trim())) {
        alert("Please enter a valid 10-digit mobile number.");
        return false;
      }

      // All fields are valid, change button color
      claimButton.style.backgroundColor = "#5D5FEF";

      // Delay the redirect to thanku.html by 1 second
      setTimeout(function() {
        window.location.href = "thanku.html";
      }, 500);

      // Prevent the default form submission
      return false;
    }
  </script>

  <!-- footer -->
  <section>
    <footer class=" text-lg-start" style="background: #A4D5DB;">
      <img style="position: absolute;" src="/Assets/Images/Vector 1.png" width="365px" height="177px" class="img-fluid">
      <div class="container p-5 ">
        <section class="accordion" id="accordionExample">
          <div class="row">
            <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
              <h5 class="text-uppercase">
                <img src="/Assets/Images/Rectangle 179.png" class="img-fluid">
              </h5>
              <p class="madil-h2">
                <!-- <p class="ck_345"> -->

                Empowering Your Digital Journey with
                <span class="spn-rj">itechnebula</span>
                <br> Navigating the Future with Confidence
              </p>
              <p class="ck_746">Copyright © CODEDELHIITES TECH PRIVATE LIMITED 2023. All Rights Reserved.</p>
            </div>
            <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
              <h5 class="">Work</h5>
              <ul class="list-unstyled mb-0">
                <li>
                  <div class=" text-w">

                    <a href="coming_soon.html" class="text-w"> Blog </a>
                    <!-- </div> -->
                    <!-- <div id="workAccordion" class="collapse">
                      Content for Work
                    </div> -->
                </li>
                <li>
                  <a href="coming_soon.html" class="text-w">Careers</a>
                </li>
                <li>
                  <div class="accordion-toggle text-w" data-bs-toggle="collapse" data-bs-target="#testimonialsAccordion">

                    <a href="coming_soon.html" class="text-w">Contact us </a>
                  </div>
                  <!-- <div id="testimonialsAccordion" class="collapse">
                      Content for Testimonials
                    </div> -->
                </li>
              </ul>
            </div>
            <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
              <h5 class="">Services</h5>
              <ul class="list-unstyled mb-0">
                <li>
                  <!-- <div class="accordion-toggle text-w" data-bs-toggle="collapse" data-bs-target="#servicesAccordion">
                      Web Development <i class="bi bi-plus"></i>
                    </div>
                    <div id="servicesAccordion" class="collapse">
                      Content for Services
                    </div> -->

                  <a href="web_devlopment.html" class="text-w"> Web Development </a>

                </li>
                <li>
                  <!-- <div class="accordion-toggle text-w " data-bs-toggle="collapse" data-bs-target="#seoAccordion">
                      SEO & CRO Optimization <i class="bi bi-plus"></i>
                    </div>
                    <div id="seoAccordion" class="collapse ">
                      Content for SEO & CRO Optimization
                    </div> -->
                  <a href="coming_soon.html" class="text-w">SEO & Performance Marketing </a>

                </li>
                <li>
                  <div class="accordion-toggle text-w" data-bs-toggle="collapse" data-bs-target="#redesignAccordion">

                    <a href="coming_soon.html" class="text-w">Website Redesign </a>
                  </div>
                  <!-- <div id="redesignAccordion" class="collapse">
                    
  
                      Content for Website Redesign
                    </div> -->
                  <a href="coming_soon.html" class="text-w">Mobile app Development </a>

                </li>
              </ul>
            </div>
            <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
              <h5 class=""> Solutions</h5>
              <ul class="list-unstyled mb-0">
                <li>
                  <a href="coming_soon.html" class="text-w">Courses</a>
                </li>
                <li>
                  <a href="coming_soon.html" class="text-w">Agency</a>
                </li>
                <li>
                  <a href="coming_soon.html" class="text-w">Partnership </a>
                </li>
              </ul>
            </div>
            <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
              <div class="dropdown" data-bs-theme="light">
                <button class="btn-rj btn-secondary-rj dropdown-toggle" type="button" id="dropdownMenuButtonLight" data-bs-toggle="dropdown" aria-expanded="false">
                  <img src="/Assets/Images/globe_with_meridians.png" class=""> Language
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButtonLight">
                  <li><a class="dropdown-item active" href="#">English</a></li>
                  <li><a class="dropdown-item" href="#">
                      বাংলা</a></li>
                  <li><a class="dropdown-item" href="#">हिंदी </a></li>
                  <li><a class="dropdown-item" href="#"> ગુજરાતી </a></li>
                  <li><a class="dropdown-item" href="#"> ಕನ್ನಡ</a></li>
                  <li><a class="dropdown-item" href="#"> മലയാളം</a></li>
                  <li><a class="dropdown-item" href="#">मराठी </a></li>
                  <li><a class="dropdown-item" href="#"> ਪੰਜਾਬੀ</a></li>
                  <li><a class="dropdown-item" href="#">தமிழ் </a></li>
                  <li><a class="dropdown-item" href="#"> తెలుగు</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="#"></a></li>
                </ul>
              </div>
            </div>
          </div>
        </section>
        <hr class="mb-4" />
        <div class="icon-rj row">
          <div class="col-lg-6">
            <!-- <h5 class="rj-foter-one ">It is protected by all possible laws.  You're gonna get your family in trouble if you try to copy. In the style of Liam Neeson. Term & Conditions |  Privacy & Policy Disclaimer | Enjoy the rest of  your day <span class="span-day">Current of the day</span> </h5> -->
            <h5 class="rj-foter-one">
              It is protected by all possible laws. You're gonna get your family in trouble if you try to copy.
              In the style of Liam Neeson.
              Term & Conditions | Privacy & Policy Disclaimer | Enjoy the rest of your day
              <span class="span-day" id="current-day"></span>
            </h5>

          </div>

          <div class="col-lg-6">
            <div class="icon-fa">
              <a href="https://www.facebook.com/itechnebula"><i class="bi bi-facebook "></i></a>
              <a href="https://www.instagram.com/itechnebula/"> <i class="bi bi-instagram"></i></a>
              <a href=" https://www.linkedin.com/showcase/itechnebula-agency/about/?viewAsMember=true"> <i class="bi bi-linkedin"></i></a>
            </div>

          </div>
          <!-- <div class="social-icons">
            <a href="#" class="icon-fb"><img src="Assets/Images/facebook-icon.png" alt="Facebook"></a>
            <a href="#" class="icon-twitter"><img src="Assets/Images/twitter-icon.png" alt="Twitter"></a>
            <a href="#" class="icon-instagram"><img src="Assets/Images/instagram-icon.png" alt="Instagram"></a>
          </div> -->
        </div>
      </div>
    </footer>
  </section>


  <script>
    const currentDayElement = document.getElementById("current-day");

    const days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];

    const currentDate = new Date();

    const currentDayIndex = currentDate.getDay();

    currentDayElement.textContent = days[currentDayIndex];
  </script>

  <!-- footer end -->


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>