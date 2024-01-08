<?php
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){
  $enteredEmail =$_POST["userEmail"];

  if(trim($enteredEmail)!== ""){
    $_SESSION["user_email"]= $enteredEmail;

    header("Location:Gs_4.php");
    exit();
  }
  else{
    echo "Please enter your email.";
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
  <link rel="stylesheet" href="Styles/Gs/Gs_3.css" />
  <link rel="stylesheet" href="style.css" />

  <title>Document</title>
</head>

<body>




<section class="py-5 text-center">
    <div class="container-fluid">
      <div class="row justify-content-center align-items-center">
        <div class="col-md-8">
          <?php
          // Check if the name is set in the session
          if (isset($_SESSION["user_name"]) && !empty($_SESSION["user_name"])) {
            // Display personalized greeting with the user's name
            echo '<h1 class="ck_gs_text3">Great! What\'s Your Email Address, ' . $_SESSION["user_name"] . '?</h1>';
          } else {
            // Fallback if the name is not set in the session
            echo '<h1 class="ck_gs_text3">Great! What\'s Your Email Address?</h1>';
          }
          ?>
        </div>
      </div>

      <form action="" method="post">
      <div class="row justify-content-center align-items-center">
        <div class="col-md-7 mt-5">
          <input type="text" placeholder="Enter your Email*" name="userEmail" alt="" class="ck_gs_3_input1 mx-2 text-center" />
        </div>
      </div>

      <div class="row">
        <div class="mt-5 ">
          <!-- <a href="Gs_4.html"><button type="submit" class="ck_gs_3_btn"> Get Started <img src="Assets/Images/gs_right_arrow.png" style="width: 75px; height: 25px;"> </button></a> -->
         <button type="submit" class="ck_gs_3_btn"> Get Started <img src="Assets/Images/gs_right_arrow.png" style="width: 75px; height: 25px;"> </button>

        </div>
      </div>
      </form>
    </div>
  </section>



 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>