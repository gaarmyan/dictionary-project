
<?php include_once("dbconn.php"); ?>
   <?php
    session_start();
    error_reporting(0);

    function output($data){
      return trim(strip_tags(htmlspecialchars($data, ENT_QUOTES)));
    }

    $d_name= output(@$_POST['d_name']);
    $d_pass= output(@$_POST['d_pass']);

    $d_name = mysqli_real_escape_string($conect, $d_name);
    $d_pass = mysqli_real_escape_string($conect, $d_pass);

    //$d_pass = password_hash($d_pass, PASSWORD_DEFAULT);

     if (isset($_POST['login'])) {
         if (empty($d_name)) {
             $msg = '<div class="alert-addmin alert alert-danger" role="alert">ناوی بەکار هێنەر بنووسە</div>';
         }elseif (empty($d_pass)) {
            $msg =   '<div class="alert-addmin alert alert-danger" role="alert">وشەی نهێنی بەکار هێنەر بنووسە</div>';
         }
         else {
           $select = mysqli_query($conect,"SELECT * FROM admin WHERE d_name='$d_name' AND d_pass='$d_pass'");
           if (mysqli_num_rows($select) == 1) {
             $row = mysqli_fetch_assoc($select);
               $d_rule = $row['d_rule'];

             $_SESSION['rule'] = $d_rule;
             $_SESSION['user'] = $d_name;
             header("Location:  welcome.php");
               //$fetch = mysqli_fetch_assoc($select);
              // $user = $fetch['d_name'];

            //   setcookie("admincookie",$user,time()+60*60*24);
            //   setcookie("adminlogin",1,time()+60*60*24);
            //   header("Location: index.php");

           }
           else {
             $msg = '<div class="alert-addmin alert alert-danger" role="alert">ناوی بەکار هێنەر و وشەی نهێنیت هەلەیە</div>';
            //  echo  '<div class="alert alert-danger" role="alert">ناوی بەکار هێنەر و وشەی نهێنیت هەلەیە</div>';

           }
         }
     }


   ?>

<!DOCTYPE html>
<html lang="ar">
  <head>
    <meta charset="utf-8">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-rtl.min.css" rel="stylesheet">
    <link href="css/min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
    <link href="http://services.webchin.org/web-fonts/web-font?font=droidkufiregular" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Ubuntu:300,700,300italic|Roboto+Slab:400,300,700" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>addminpabel</title>
  </head>

<!--content-->

<section id="main" style="margin-top:50px;">


  <div class="container">
    <div class="row">

      <div class="col-md-4 col-md-offset-4">

        <form method="post" id="login" action="" class="well">
          <?php echo  @$msg; ?>
              <div class="form-group">
                  <input type="text" name="d_name" class="form-control" id="inputPassword3" placeholder="ناوی بەکار هێنەر">
              </div>
              <div class="form-group">
                    <input type="password" name="d_pass" class="form-control" id="inputPassword3" placeholder="وشەی نهێنی">
              </div>
                <button type="submit" name="login" class="btn btn-info btn-block">چوونە ژوورەوە</button>
          </form>
      </div>
    </div>
  </div>
</section>


<!-- end content-->
    <script src="../js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>
