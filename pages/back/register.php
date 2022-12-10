<?php
include 'connection.php';
include 'functions.php';

$sql = "SELECT email FROM staticcustomerinfo";

$res = mysqli_query($conn, $sql);

if (isset($_POST['register-btn'])) {
    $fname =mysqli_real_escape_string($conn, test_input( $_POST['fname']));
    $lname = mysqli_real_escape_string($conn, test_input($_POST['lname']));
    $name = base64_encode($fname.' '.$lname);
    $email = base64_encode(mysqli_real_escape_string($conn, test_input($_POST['email'])));
    $mobile = base64_encode(mysqli_real_escape_string($conn, test_input($_POST['mobile'])));
    $pass = mysqli_real_escape_string($conn, test_input($_POST['pass_reg']));
    $password = md5($pass);

    if (mysqli_num_rows($res) > 0) {
        while ($row = mysqli_fetch_assoc($res)) { 
            if ($row['email'] == $email) {
                redirect('login-form.php?type=emailalreadyexist');
            }     
    } }
    
    $insertsql = "INSERT INTO `staticcustomerinfo` (`user_name`, `mobile`, `email`, `password`) 
                    VALUES ('$name', '$mobile', '$email', '$password')";
    mysqli_query($conn, $insertsql);

    $newsql = "SELECT `user_id` FROM staticcustomerinfo WHERE email='$email'";
    $row2 = mysqli_fetch_assoc(mysqli_query($conn, $newsql));
    
    $userid = $row2['user_id'];

    $insertsql2 = "INSERT INTO `variablecustomerinfo` (`user_id`) 
                    VALUES ('$userid', 0, 0)";
    mysqli_query($conn, $insertsql2);

    $expireTime = strtotime('+1 years');
    setcookie("user_info", $email, $expireTime, "/");
    setcookie("user_id", $userid, $expireTime, "/");
    setcookie("password", $password, $expireTime, "/");
    $_SESSION['fresh_register'] = 'yes';

    redirect('../index.php');
};
?>