<?php
require ("class.token.php");
require ("dbconn.php");
require ("function.php");

function output($data){
  return trim(strip_tags(htmlspecialchars($data, ENT_QUOTES)));
}

error_reporting(1);
$english= output(@$_POST['english']);
$kurdish= output(@$_POST['kurdish']);
$english = mysqli_real_escape_string($conect,$english);
$kurdish = mysqli_real_escape_string($conect,$kurdish);

$d_date = date(" d / m / Y ");
$active =1;

if(Token::check($_POST['token'])){
  if(isset($_POST['translate'])){
            $select = mysqli_query($conect,"SELECT * FROM dic WHERE english = '$english' AND active = '2'");
            $select = mysqli_query($conect,"SELECT * FROM dic WHERE english = '$english'");
           if (mysqli_num_rows($select) > 0) {
             $msg4 = '<div class="alert alert-danger" role="alert" style="text-align:center;">پێشتر ئەم وشەیە زیاد کراوە بۆ ئەم فەرهەنگە</div>';
           }else {
             if ($english =="" and $kurdish =="") {
                 $msg2 = '<div class="alert alert-danger" role="alert" style="text-align:center;">تکایە خانەکان پر کەرەوە</div>';
             }else {
               if (empty($english)) {

                $msg2 = '<div class="alert alert-danger" role="alert" style="text-align:center;">بەیارمەتیت وەشەی ئینگلیزی زایاد بکە</div>';
              }
              elseif (empty(strlen($english)>2)) {
                $msg2 = '<div class="alert alert-danger" role="alert" style="text-align:center;"> وەشەکە زۆر بچووکە</div>';
              }
              elseif (empty(strlen($english)<75)){
                $msg2 = '<div class="alert alert-danger" role="alert" style="text-align:center;">وشەکە زۆر گەوریە</div>';
                }elseif (empty($kurdish)) {
                $msg2 = '<div class="alert alert-danger" role="alert" style="text-align:center;">بەیار مەتیت وشەی کوردی زیاد بکە</div>';
                     }
                         else {
                           $insert = mysqli_query($conect,"INSERT INTO dic (english,kurdish,active,d_date) VALUES ('$english','$kurdish','$active','$d_date')");
                           if (isset($insert)) {
                             $msg3 = '<div class="alert alert-success" role="alert" style="text-align:center;"> سوپاس، دوای پێداچوونەوە وشەکە زیاد دەکریت لەلایەن بەرێوەبەر</div>';
                            nwekrdnwa(3,'addword.php');
                            //header("Location: index.php");
                           }
                         }
             }

           }

              }

}

 ?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>GARMYAN</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- style css -->

  <link href='https://fonts.googleapis.com/css?family=Josefin+Sans:400,700,700italic' rel='stylesheet' type='text/css'>
  <link rel="shortcut icon" href="image/logo.png">
  <link href="css/style.css" rel="stylesheet">
   <!-- font owesome -->
   <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">

  <link href='https://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
          </head>
           <body>



             <div class="container">
                <div class="row">


                    <div class="col-md-6 col-md-offset-3" id="art">

                      <div class="main">
                        <div class="page-header text-center">  <h4>زیادکردنی وشەی نوێ بۆ ئەم فەرهەنگە </h4> </div>

                          <?php echo $msg2,$msg3,$msg4;?>


                          <form class="form-horizontal" action="" method="post">

                     <div class="form-group">

                       <div class="col-sm-12">
                         <input type="text" name="english" id="english" class="form-control" id="inputPassword3" value="<?php echo $english;?>" placeholder="وشەی ئینگلیزی بنووسە" style="text-align:right">
                       </div>
                     </div>

                     <div class="form-group">

                       <div class="col-sm-12">
                         <input type="text" name="kurdish" id="kurdish" class="form-control" id="inputPassword3" value="<?php echo $kurdish;?>" placeholder="وشەی کوردی بنووسە" style="text-align:right">
                       </div>
                     </div>


                     <div class="form-group">
                        <div class="col-sm-12">
                         <input type="hidden" name="token" value="<?php echo Token::create(); ?>">
                         <button type="submit" name="translate" class="btn btn-info btn-sm btn-block">زیادکردن <i class="fa fa-plus" aria-hidden="true"></i></button>
                          <a href="index.php" class="btn btn-info btn-sm btn-block">فەرهەنگ</a>
                       </div>
                     </div>
       </form>


                      </div>




                    </div>
                 </div>
                <footer>
                    <p class="text-center" style="margin-top:20px;">
                     Copyright <a href="https://www.facebook.com/profile.php?id=100002879981874" target="_blank">Garmyan Abdulla</a>  &copy; 2017
                   </p>
               </footer>
               </div>
	 <script type="text/javascript">

        $("#kurdish").on('keyup', function(e) {
            var str = $(this).val();
            var exp = /[^a-zA-Z1-9]+$/;
            if(str.search(exp) === -1){
                $(this).val("");
            }
        });

             $("#english").on('keyup', function(e) {
            var str = $(this).val();
			var exp = /[^a-zA-Z1-9 ]+$/;
            if(str.search(exp) !== -1){
                $(this).val("");
            }
        });
    </script>

                <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
                 <script src="js/jquery.min.js"></script>
                <!-- Include all compiled plugins (below), or include individual files as needed -->
                <script src="js/bootstrap.min.js"></script>
             </body>
            </html>
