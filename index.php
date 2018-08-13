<?php include_once("dbconn.php"); ?>
<meta charset="utf-8">
<?php
function output($data){
  return trim(strip_tags(htmlspecialchars(htmlentities($data, ENT_QUOTES))));
}

error_reporting(1);
if (isset($_POST['translate'])) {
$english = output($_POST['english']);
$search = mysqli_query($conect,"SELECT * FROM dic WHERE active = '2' AND english = '{$english}'");
if (mysqli_num_rows($search) !=0) {

  while ($row = mysqli_fetch_assoc($search)) {
  $result = output($row['kurdish']);
  }
}else {
  if ($english =="") {
    $msg = "تکایە وشەیەک بنووسە";
  }else {
    $msg = "نەدۆزرایەوە"." ( ".$_POST['english']." ) "."ببورە وشەی ";
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
                       <?php
                        $shw = mysqli_query($conect, "SELECT * FROM dic");
                        $anjam = mysqli_num_rows($shw);

                         ?>
                         <div class="page-header text-center">
                          <h4>فەرهەنگی ئینگلیزی بۆ کوردی </h4>
                          <p><span class="badge1"><?php echo $anjam;?></spanl> هەموو وشەکان</p>
                         </div>
                        <p class="text-center" style="color:red;">
                          <?php echo $msg;?>
                        </p>


                        <form action="" method="post">
                          <table class="">
                            <tr>

                              <td style="padding:5px;">
                                <textarea name="english" id="english" class="form-control dic" rows="3" cols="60" placeholder="write a word"><?php echo  $english?></textarea>
                              </td>
                              <td>
                                  <textarea name="result" readonly class="form-control dic" rows="3" cols="60" style="text-align: right;"><?php echo  $result;?></textarea>
                              </td>
                            </tr>
                            <tr>
                              <td>

                                <button type="submit" name="translate" class="btn btn-outline btn-sm">Translate</button>
                                  <a class="btn btn-outline btn-sm" href="addword.php">Word <i class="fa fa-plus" aria-hidden="true"></i></a>
                              </td>
                            </tr>
                          </table>
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
