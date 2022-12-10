<?php
    include "pages/back/connection.php";
    include "pages/back/functions.php";

    $sql = "SELECT *
            FROM community_info";
    $sql2 = "SELECT *
            FROM posts";
    $res = mysqli_query($conn, $sql);
    $res2 = mysqli_query($conn, $sql2);

    
if(isset($_COOKIE["user_info"]) && isset($_COOKIE["password"]) && isset($_COOKIE["user_id"])) {
    $_SESSION['login_status'] = "logged_in";
    $_SESSION['user_id'] = $_COOKIE["user_id"];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VNIT</title>
    <link rel="stylesheet" href="css/in_style.css">
    <link rel="stylesheet" href="css/navbar.css">
    
</head>
<body>
    <!-- Header Starts Here -->
    <div class="header">
        <div class="logo">
            <h1>VNIT</h1>
        </div>
        <div class="navbar">
            <nav>
                <ul>
                    <li><a class="current" href="index.php">Home</a></li>
                    <li><a href="pages/about.php">About</a></li>
                    <li><a href="pages/chat.php">Chat</a></li>
                </ul>
            </nav>
        </div>
        <div class="login">
            <?php 
                if (isset($_SESSION['login_status'])) {
            ?>
                <a href="pages/back/logout.php">Logout</a>
            <?php
                }else{
            ?>  
                <a href="pages/login-form.php">Login/Register</a>
            <?php
                }
            ?>
            
        </div>
    </div>

    <!-- header ends here -->
    <?php 
        if (isset($_SESSION['fresh_register'])) { 
    ?>
            <div class="msg"><p>Registered Successfully!</p></div>
    <?php 
            unset($_SESSION['fresh_register']); 
        }elseif (isset($_SESSION['fresh_login'])) { 
    ?>
            <div class="msg"><p>Logged In Successfully!</p></div>
    <?php 
            unset($_SESSION['fresh_login']);  } 
    ?>

    <div class="main">
        <div class="comm_bar">
            <div class="sub_comm_bar">
                <h3 class="head">Communities:</h3>
                <ul>
                    <?php
                        if (mysqli_num_rows($res) > 0) {
                            $i=0;
                            while($row = mysqli_fetch_assoc($res)){
                    ?>
                                <li>
                                    <a href="#">
                                        <h3><?php echo $row['community_name']; ?></h3>
                                        <p>Members : <?php echo $row['members']; ?></p>
                                    </a>
                                </li>
                            
                    <?php
                        $i++;
                        if ($i == 4) {
                            break;
                        }
                        }}
                    ?>
                </ul>
            </div>
            <div class="sub_comm_bar">
                <h3 class="head">Other Communities:</h3>
                    <ul>
                    <?php
                        if (mysqli_num_rows($res) > 0) {
                            $i=0;
                            while($row = mysqli_fetch_assoc($res)){
                    ?>
                                <li>
                                    <a href="#">
                                        <h3><?php echo $row['community_name']; ?></h3>
                                        <p>Members : <?php echo $row['members']; ?></p>
                                    </a>
                                </li>
                            
                    <?php
                        $i++;
                        if ($i == 4) {
                            break;
                        }
                        }}
                    ?>
                    </ul>
                    <a href="pages/create_comm.php" id="comm">
                        <div>Create a community</div>
                    </a>
            </div>
        </div>
        <div class="feed">
            <div class="tags">
                <a href="#">Latest</a>
                <a href="#">Official Notices</a>
                <a href="#">Achievements</a>
            </div>
            <div class="posts">
                <?php 
                    if (mysqli_num_rows($res2) > 0) {
                        while ($row2 = mysqli_fetch_assoc($res2)) {
                ?>
                            <div class="ind_post">
                                <h3><?php echo $row2['title']; ?></h3>
                                <p><?php echo $row2['content']; ?></p>
                            </div>
                <?php }} ?>
            </div>
        </div>

        <div class="right_side">
            <div class="profile">
                <div class="img">
                    <img src="images/profile_img/673537.jpg">
                </div>
                <div class="info">
                    <p>Name: Pratham Giri</p>
                    <p>Email: pra@gmail.com</p>
                    <p>posts: 1000</p>
                </div>
            </div>
            <div class="sub_comm_bar" id="recent">
                <h3 class="head">Recent Posts:</h3>
                <ul>
                    <li>
                        <a href="#">
                            <h3>This_Community</h3>
                            <p>Community Discription</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <h3>This_Community</h3>
                            <p>Community Discription</p>
                        </a>
                    </li>
                    <li>
                    <a href="#">
                            <h3>This_Community</h3>
                            <p>Community Discription</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    
        <!-- ...........FOOTER SECTION STARTS HERE................. -->

    <!-- <footer>
        <div class="footer">
            <div class="address">
                <p>VNIT COMMUNITY<br>Nagpur,<br>Dist. Nagpur</p>
            </div>
            <div class="navbar-footer">
                <p>Menu</p>
                <div><a href="../index.php">Home</a></div>
                <div><a href="#">FAQ's</a></div>
                <div><a href="about.php">About</a></div>
                <div><a href="contact.php">Blog</a></div>
            </div>
        </div>
        <div class="copyright">
            <p>copyright &copy 2020 All Right Reserved.</p>
        </div>
    </footer> -->

        <!-- ......................FOOTER ENDS HERE.......................... -->

</body>
</html>