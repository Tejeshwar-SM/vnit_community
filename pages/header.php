<!-- Header Starts Here -->
<div class="header">
        <div class="logo">
            <h1>VNIT</h1>
        </div>
        <div class="navbar">
            <nav>
                <ul>
                    <li><a class="current" href="../index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="chat.php">Chat</a></li>
                </ul>
            </nav>
        </div>
        <div class="login">
            <?php 
                if (isset($_SESSION['login_status'])) {
            ?>
                <a href="back/logout.php">Logout</a>
            <?php
                }else{
            ?>  
                <a href="login-form.php">Login/Register</a>
            <?php
                }
            ?>
            
        </div>
    </div>

    <!-- header ends here -->