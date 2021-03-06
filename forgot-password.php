<!DOCTYPE html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7 ]> <html class="ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html lang="en"> <!--<![endif]-->
  <head>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="googlebot" content="index,follow">

    <!-- Title -->
    <title>EARTH SAVIOR - Save Our Future and Be Savior</title>

    <link href="images/favicon/favicon.png" rel="shortcut icon">
    <link href="images/favicon/apple-touch-icon-57-precomposed.png" rel="apple-touch-icon">
    <link href="images/favicon/apple-touch-icon-72-precomposed.png" rel="apple-touch-icon" sizes="72x72">
    <link href="images/favicon/apple-touch-icon-144-precomposed.png" rel="apple-touch-icon" sizes="114x114">

    <!-- Templates core CSS -->
    <link href="stylesheets/application.css" rel="stylesheet">

    <!-- Favicons -->
    <link href="images/favicon/apple-touch-icon-57-precomposed.png" rel="apple-touch-icon">
    <link href="images/favicon/apple-touch-icon-72-precomposed.png" rel="apple-touch-icon" sizes="72x72">
    <link href="images/favicon/apple-touch-icon-144-precomposed.png" rel="apple-touch-icon" sizes="114x114">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- Modernizr Scripts -->
    <script src="javascript/vendor/modernizr-2.7.1.min.js"></script>
  </head>
  <body class="sign-in-up" id="to-top">

    <!-- Sign In/Sign Up section -->
    <section class="sign-in-up-section">

      <div class="container">

        <div class="row">

          <div class="col-md-12">

            <!-- Logo -->
            <figure class="text-center">
              <a href="http://www.codelabs.or.id">
			  <img class="img-logo" src="images/logo.png" alt="">
              </a>
            </figure> <!-- /.text-center -->
            
          </div> <!-- /.col-md-12 -->

        </div> <!-- /.row -->

	


        <section class="sign-in-up-content">

          <div class="row">

            <div class="col-md-12">

              <h4 class="text-center">Reset password</h4>

              <p>Please enter your email address. We will send you an email containing instructions to help you reset your password.</p>

              <form class="sign-in-up-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" role="form" method="post" >
                
                <!-- Input 1 -->
                <div class="form-group">
                  <input class="form-control" id="Email" name="Email" type="email" placeholder="Enter email address">
                </div> <!-- /.form-group -->

                <!-- Button -->
                <button class="btn btn-success btn-block" name="submit" type="submit">Submit</button>
                
              </form> <!-- /.sign-in-up-form -->
              
            </div> <!-- /.col-md-12 -->

          </div> <!-- /.row -->
          
        </section> <!-- /.sign-in-up-content -->
<?php	
if(isset($_POST['submit'])) 
{
	if($_POST['Email']!="") 
	{
	$karakter='ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
	$string='';
	for($i=0;$i<5;$i++){
		$pos=rand(0,36-1);
		$string.=$karakter{$pos};
		
	}
	include('koneksi.php');
    $con = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
    // selecting database
    mysql_select_db(DB_DATABASE);	
    
	$email=$_POST['Email'];
	       $sql="update user set password='$string' where email='$email' ";
       $res=mysql_query($sql);

      if($res){ 
      mail($email,"Ganti Password Earth Savior","Penguna yang terhormat. Password sementara anda adalah '$string' "); 
	  echo '<script type="text/javascript">alert("Password telah dikirim di email");</script>';
		}else{
	  echo '<script type="text/javascript">alert("Password gagal dikirim");</script>';			
		}	
	}else{
	  echo '<script type="text/javascript">alert("Email harus di isi");</script>';
	}
}
	?>



        <div class="row">

          <div class="col-md-12">

            <section class="footer-copyright text-center">

              <p>Made with <i class="fa fa-heart"></i> by Codelabs.</p>
              
            </section> <!-- /.footer-section -->
            
          </div> <!-- /.col-md-12 -->

        </div> <!-- /.row -->
        
      </div> <!-- /.container -->

    </section> <!-- /.sign-in-up-section -->
    
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="javascript/vendor/jquery-2.1.0.min.js"></script>
    <script src="javascript/bootstrap.min.js"></script>
    <script src="javascript/assets/application.js"></script>

  </body>

</html>