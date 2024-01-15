<?php
session_start(); // Start the session
include('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $enteredUserName = trim($_POST["userName"]);

  if ($enteredUserName !== "") {
    $_SESSION["userName"] = $enteredUserName; // Store the user name in a session variable
    header("Location: Gs_3.php");
    exit();
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100;0,9..40,200;0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;0,9..40,800;0,9..40,900;0,9..40,1000;1,9..40,200;1,9..40,300;1,9..40,400;1,9..40,500;1,9..40,600;1,9..40,700;1,9..40,800;1,9..40,900;1,9..40,1000&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans|Varela+Round">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"> -->
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

  <link rel="stylesheet" href="Styles/Gs/Gs_2.css" />
  <link rel="stylesheet" href="style.css" />


  <title>Document</title>
</head>

<body>



  <section class="py-5 text-center">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-2 ck_Gs_hide">

          <!-- Vertical Stepper -->
          <ul class="stepper">
            <li class="stepper-item">
              <div class="stepper-circle stepper-active">1</div>
              <div class="stepper-line"></div>
            </li>
            <li class="stepper-item">
              <div class="stepper-circle">2</div>
              <div class="stepper-line"></div>
            </li>
            <li class="stepper-item">
              <div class="stepper-circle">3</div>
              <div class="stepper-line"></div>
            </li>
            <li class="stepper-item">
              <div class="stepper-circle">4</div>
            </li>
          </ul>
        </div>

        <div class="col-lg-10">
          <div class="row justify-content-center align-items-center">
            <div class="col-md-8">
              <h1 class="ck_gs_2_text1">Let's Keep It Snappy, Shall We? But First, Let's Be Polite <br> What's Your Name?</h1>
            </div>
          </div>

          <div class="row justify-content-center align-items-center">
            <div class="col-md-7 mt-5 text-center">
              <form method="post" action="" enctype="multipart/form-data">
                <input type="text" name="userName" placeholder="Enter your First name" class="ck_gs_2_input1 text-center" />
                <button type="submit" class="ck_gs_2_btn mt-5"> Continue <img src="Assets/Images/gs_right_arrow.png" class="img-fluid" style="width: 75px; height: 25px;"> </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>