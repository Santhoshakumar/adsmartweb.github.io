<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ADSMART</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/style.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
</head>
<body class="bg-dark">
    <?php
      require('db.php');
      session_start();
      if (isset($_POST['username'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $username = stripslashes($username);
        $password = stripslashes($password);
        //$query = "SELECT * FROM users WHERE username='$username' and password= '$password' ";
        $query = "SELECT [ClientID],[ClientUserName],[Password] FROM [adCloud_Master].[dbo].[Clinet_DataList] WHERE ClientUserName='$username' and Password= '$password' ";
        $result = sqlsrv_query($conn, $query) or die( print_r( sqlsrv_errors(), true)) ;
        $rows = 0;
        while($row = sqlsrv_fetch_array($result)){
          $rows++;
        }
        if($rows==1){
          $_SESSION['username'] = $username;
          header("Location: index.php");
          
        }else{
          echo "<br/><br/>";
          echo "<div class='form' style='margin-top:5%;'> <h3 style='text-align:center;color:white;font-size:3em;'>Incorrect UserName or Password !</h3> <br/> </div>";
          echo "<div class='form' style='margin-left:40%;font-size:3em;'> <a href='login.php' style='font-weight:bold;text-align:center;color:blue;'>Login here</a> </div>";
        }
      }else{
    ?>
    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.html">
                        <img class="align-content" src="" alt="">
                    </a>
                </div>
                <div class="login-form" style="border-radius:10px;">
                  <span style="font-family: 'Cooper Black';color:royalblue;font-size: 5em;padding-left:5%;">AD</span><span style="font-family: 'Cooper Black';color:green;font-size: 5em;">SMART</span>
                    <form action="" method="post" name="login"style="border-radius: 5px;">
                        <div class="form-group">
                            <label>User Name</label>
                            <input type="username" name="username"class="form-control" placeholder="User Name">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password"class="form-control" placeholder="Password">
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Remember Me
                            </label>
                            <label class="pull-right">
                                <a href="#">Forgotten Password?</a>
                            </label>
                        </div>
                        <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30"name="submit" type="submit" value="Login" style="border-radius:10px;">Sign in</button>
                        <div class="register-link m-t-15 text-center">
                            <!--<p>Don't have account ? <a href="#"> Sign Up Here</a></p>-->
                        </div><br/><br/>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
    <?php
}
?>
</body>
</html>
