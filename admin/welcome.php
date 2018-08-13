<?php include_once("session.php"); ?>
<!DOCTYPE html>
<html lang="ar">
  <head>
    <meta charset="utf-8">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/bootstrap-rtl.min.css" rel="stylesheet">
    <link href="../css/min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/font-awesome/css/font-awesome.min.css">
    <link href="http://services.webchin.org/web-fonts/web-font?font=droidkufiregular" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Ubuntu:300,700,300italic|Roboto+Slab:400,300,700" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="refresh" content="3; url='index.php'">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>addminpabel</title>
  </head>
     <body>

<!--content-->
    <section class="container">

        <div style="margin:100px auto;" class="col-md-12">
          <div class="alert alert-success welcome" role="alert">
           چەند چرکەیەک چاوەرانبە <?php  echo $_SESSION['user'];?><strong>: بە خێر بێت!</strong>
          </div>

        </div>

    </section>

<!-- end content-->
    <script src="../js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>
