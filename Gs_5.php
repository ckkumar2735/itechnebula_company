<?php
include('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $enteredCity = $_POST["city"];
  if (trim($enteredCity) !== "") {
  header("Location: Gs_6.php");
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
  <link
    href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100;0,9..40,200;0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;0,9..40,800;0,9..40,900;0,9..40,1000;1,9..40,200;1,9..40,300;1,9..40,400;1,9..40,500;1,9..40,600;1,9..40,700;1,9..40,800;1,9..40,900;1,9..40,1000&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans|Varela+Round">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&display=swap"
    rel="stylesheet">
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"> -->
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link
    href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Space+Grotesk:wght@300;400;500;600;700&display=swap"
    rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link rel="stylesheet" href="Styles/Gs/Gs_5.css" />
  <link rel="stylesheet" href="style.css" />


  <title>Document</title>


</head>

<body>

  <section class="py-5 text-center">
    <div class="container-fluid">
      <form method="post" action="" enctype="multipart/form-data">
        <div class="row justify-content-center align-items-center">
          <div class="col-md-8">
            <h1 class="ck_gs_5_text1">Which city is your business based in?</h1>
          </div>
        </div>

        <div class="row justify-content-center align-items-center">
          <div class="col-md-7 mt-5">
            <div class="location-container">
              <input type="text" placeholder="city" name="city" id="city" class="ck_gs_5_input1 mx-2 text-center" />
              <h5 onclick="getlocation()" class="location-icon">
                <i class='fas fa-map-marker-alt'></i>
              </h5>
            </div>
            <p></p>
          </div>
        </div>

        <div class="row">
          <div class="mt-5 ">
           <button type="submit" class="ck_gs_5_btn"> Continue <img src="Assets/Images/gs_right_arrow.png"
                  class="img-fluid" style="width: 75px; height: 25px;"> </button>
          </div>
        </div>
      </form>
    </div>
  </section>

  <script>
    const getlocation = () => {
      if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition((position) => {
          const {
            latitude,
            longitude
          } = position.coords;
          fetch(`https://nominatim.openstreetmap.org/reverse?format=json&lat=${latitude}&lon=${longitude}`)
            .then((response) => response.json())
            .then((data) => {

              console.log(data);
              // const location = data.display_name || "Unknown";
              const location = data.address.state_district || "Unknown";

              const inputField = document.getElementById("city");
              inputField.value = location;
              const des = document.querySelector("p");
              // des.innerHTML = `Location: ${location}`;
            })
            .catch((error) => {
              console.error("Error fetching location:", error);
            });
        });
      }
    };
  </script>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
    crossorigin="anonymous"></script>
</body>

</html>