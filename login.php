 <?php include('includes/initialize.php'); ?>

 

<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Online Flood Alert System</title>

    <link rel="stylesheet" href="newlogin/css/reset.css">
    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
    <link rel='stylesheet prefetch' href='newlogin/css/font-awesom  e.min.css'>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/u_login.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="<?php echo WEB_ROOT; ?>images/newasilogo.ico" type="image/x-icon"/> 
  </head>

  <body>

<!-- Mixins-->
<!-- Pen Title-->
<div class="pen-title">
  
</div>
<body>
    <img src="images/logo1.png" alt="Logo" class="logo">

    <div class="overlay">
        <div class="container">
            <h2 style="font-size: 36px; font-weight: bold; color: #fff; position: fixed; 
            top: 0; left: 50%; transform: translateX(-50%); z-index: 999;
            margin-top: 50px;"
            >Barangay San Roque Castilla Sorsogon</h2>
            <h1 class="animate-welcome">Admin Login</h1>
            <a href="index1.php" class="animate-welcome home-icon"><i class="fa fa-home" aria-hidden="true"></i></a>

    <form action="#" method="post" class="registration-form" id="loginForm">
      <div class="form-group">
        <div class="password-container">
        <input AUTOFOCUS class="animate-welcome" type="text"   name="uname" placeholder="Username" required="required"/>
      </div>
      </div>

      <div class="form-group">
        <div class="password-container">
        <input class="animate-welcome" type="password" id="password"   name="upass" placeholder="Password" required="required"/>
        <button type="button" id="showPasswordBtn" onclick="togglePasswordVisibility()" class="animate">
        <i class="fa fa-eye" aria-hidden="true"></i>
        </button>
      </div>
      </div>
  <script>
    function togglePasswordVisibility() {
        var passwordInput = document.getElementById("password");
        var showPasswordBtn = document.getElementById("showPasswordBtn");
        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            showPasswordBtn.innerHTML = '<i class="fa fa-eye-slash" aria-hidden="true"></i>';
        } else {
            passwordInput.type = "password";
            showPasswordBtn.innerHTML = '<i class="fa fa-eye" aria-hidden="true"></i>';
        }
    }
  </script>
      
       <button class="animate-welcome" type="submit" name="btnlogin" class="btn">Login</button>
       
        
      </div>
      <form>
        
 
</form>
      <div class="footer" style="color:black; font-size:16px;"><strong><span style="color:red;"></span><br><justify><span style="color:#0a0;"></span></justify></strong></div>
    </form>
  </div>
 
    <script src='newlogin/js/jquery.min.js'></script>

        <script src="newlogin/js/index.js"></script>





<?php
if (isset($_POST['btnlogin'])) {


    $uname = trim($_POST['uname']);
    $upass = trim($_POST['upass']);
    $md5password = md5($upass);

    //it creates a new objects of user
    $user = new User();
    //make use of the static function, and we passed to parameters
    $res = $user::AuthenticateUser($uname, $md5password);
    //then it check if the function return to true
    if($res == true){
      ?>   <script type="text/javascript">
          //then it will be redirected to home.php
          window.location = "index.php";
          console.log('login')
        </script>
      <?php
    } else {?>
        <script type="text/javascript">
                alert("Invalid Username or Password, please try again.");
                </script>
        <?php
        }  
    }
?>



<!-- 










<?php

  include('db.php');

  if(isset($_POST['btnlogin'])) {
  $name = $_POST['uname'];
  $pass = $_POST['upass'];

  $statement = $conn->prepare("SELECT * FROM accounts WHERE username = :username AND password = :password");
  $statement->execute(array(':username' => $name, ':password' => md5($pass)));
  $row = $statement->fetchAll();


  if($row == 1){

    $_SESSION['acct_id'] = $name;
    $_SESSION['acct_id'] = $row['acct_id'];
    $_SESSION['oic_id'] = $row['oic_id'];
    $_SESSION['stud_id'] = $row['stud_id'];
    $_SESSION['type'] = $row['type'];
 
    header("location: index.php");//directing to main form index.php
    echo '<meta http-equiv="Refresh" content="0">';
  }
  else  {
    ?>
      <script type="text/javascript">
                alert("Invalid Username or Password!");
                //soundHandle.play();
                </script>

<!-- AUDIO PLAYER -->
<audio   style="display: none;"></audio>
<script>
 /* soundHandle = document.getElementById('soundHandle');
  soundHandle.src = '/sound/enterauthorizationcode.mp3';*/
</script>

<!-- END AUDIO PLAYER -->

        <?php
  }
}

  

?>

 -->


<!-- 

<?php require_once("includes/initialize.php");


 
if(isset($_POST['btnlogin'])) {
  $name = $_POST['uname'];
  $pass = $_POST['upass'];
  $sql = mysql_query("SELECT * FROM accounts WHERE username='$name' and password=md5('$pass')");
  $rs = mysql_fetch_array($sql);
  
  $confirm = mysql_num_rows($sql);
 
  if($confirm == 1) {
      
    $_SESSION['acct_id'] = $name;
    $_SESSION['acct_id'] = $rs['acct_id'];
    $_SESSION['oic_id'] = $rs['oic_id'];
    $_SESSION['stud_id'] = $rs['stud_id'];
    $_SESSION['type'] = $rs['type'];
 
    header("location: index.php");//directing to main form index.php
    echo '<meta http-equiv="Refresh" content="0">';
  }
  else  {
    ?>
      <script type="text/javascript">
                alert("Invalid Username or Password!");
                </script>
        <?php
  }
}
?>



 -->
    
    
    
  </body>
</html>





