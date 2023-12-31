<?php
include('db.php'); // Include your database connection file

$email_error = $password_error = ''; // Define variables to avoid "Undefined variable" warnings

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    $query = "SELECT * FROM login_dashboard WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($con, $query);

    if ($result) {
        $row_count = mysqli_num_rows($result);

        if ($row_count > 0) {
            // Email and password match, redirect to the next page
            header('Location: dashboard.php');
            exit();
        } else {
            // Check which field is incorrect and set the error message accordingly
            $user_query = "SELECT * FROM login_dashboard WHERE email = '$email'";
            $user_result = mysqli_query($con, $user_query);

            if (mysqli_num_rows($user_result) > 0) {
                $password_error = 'Wrong password';
            } else {
                $email_error = 'Wrong email';
            }
        }
    } else {
        echo "Error: " . mysqli_error($con);
    }

    mysqli_close($con);
}
?>
