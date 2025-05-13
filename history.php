 <?php include('includes/initialize.php'); ?>

 

<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Flood Monitoring System</title>

    
    
    <link rel="stylesheet" href="newlogin/css/reset.css">

    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='newlogin/css/font-awesom  e.min.css'>

        <link rel="stylesheet" href="newlogin/css/style.css">

        
<link rel="shortcut icon" href="<?php echo WEB_ROOT; ?>images/newasilogo.ico" type="image/x-icon"/>

    
    
    
  </head>

  <body style="background-image: url('images/mm.jpg');">
">


    
 
<!-- Mixins-->
<!-- Pen Title-->
<div class="pen-title">
  
  <h1 style="color:#0fff;">Flood Monitoring System</h1> 
  
</div>
 
<div class="container">
  <div class="card"></div>
  <div class="card">
 
      <div class="footer" style="color:black; font-size:16px;"><strong><span style="color:red;"></span><br><justify><span style="color:#0a0;"></span></justify></strong></div>
    </form>
  </div>
 <!--  <div class="card alt">
    <div class="toggle"></div>  
    <h1 class="title">Register
      <div class="close"></div>
    </h1>
    <form>
      <div class="input-container">
        <input type="text" id="Username" required="required"/>
        <label for="Username">Username</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" id="Password" required="required"/>
        <label for="Password">Password</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" id="Repeat Password" required="required"/>
        <label for="Repeat Password">Repeat Password</label>
        <div class="bar"></div>
      </div>
      <div class="button-container">
        <button><span>Next</span></button>
      </div>
    </form>
  </div>
</div> -->
 
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





