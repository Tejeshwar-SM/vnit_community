<?php
include 'connection.php';
include 'functions.php';

if (isset($_POST['submit'])) {
    $community_name = test_input($_POST['community_name']);
    $discription = test_input($_POST['discription']);
    $status = test_input($_POST['status']); 
    $img = test_input($_FILES['img']['name']);
    $owner = $_COOKIE['user_id'];

    mysqli_query($conn, "INSERT INTO `community_info` (`community_name`, `discription`, `status`,`img`, `owner`) 
                            VALUES ('$community_name', '$discription', '$status', '$img', '$owner')");

    move_uploaded_file($_FILES['img']['tmp_name'], $_SERVER['DOCUMENT_ROOT'].'/vnit_community/images/profile_img/'.$img);
    
    redirect('../../index.php');
}
?>