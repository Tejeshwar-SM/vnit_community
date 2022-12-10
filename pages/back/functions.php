<?php
session_start();

//create a function to redirect from one page to another
function redirect($link){
    //using javascript
    ?>
    <script>
        window.location.href='<?php echo $link ?>'
    </script>
    <?php
    //after redirection kill the script
    die();  
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  
function loggedinonly($location)
{
    if (!isset($_SESSION['login_status'])) {
        redirect($location);
    }
}

function loggedoutonly($location)
{
    if (isset($_SESSION['login_status'])) {
        redirect($location);
    }
}

?>

