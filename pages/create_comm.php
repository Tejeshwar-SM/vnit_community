<?php 
    include "back/connection.php";
    include "back/functions.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a community</title>
    <link rel="stylesheet" href="../css/create_comm_style.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <script src="../javascript/fun.js"></script>
</head>
<body>
    <?php include 'header.php'; ?>
    <?php
        if (isset($_SESSION['login_status'])) {
    ?>
            <div class="container">
                <div class="card">
                    <form action="back/create_c.php" method="post" enctype="multipart/form-data">
                        <div class="profile_container" id="profile" onclick="click_but()">
                            <img id="image" src="../images/User_icon.png">
                        </div>
                        <input type="file" id="filec" name="img" onchange="load_img()" required>
                        <input type="text" id="coname" placeholder="Community Name" name="community_name" required>
                        <textarea name="discription" id="codisc" placeholder="Discription" required></textarea>
                        <div class="radio_btn">
                            <input type="radio" id="anyone" name="status" value="0">
                            <label for="anyone">Anyone Can Join</label><br>
                        </div>
                        <div class="radio_btn">
                            <input type="radio" id="invite" name="status" value="1">
                            <label for="invite">Invite Only</label><br>
                        </div>
                        <button type="submit" class="registerbtn" name="submit">Create</button>
                    </form>
                </div>
            </div>
    <?php }else{ ?>
            <h1>Create an account or login to create a community</h1>
    <?php
     }
    ?>
</body>
</html>