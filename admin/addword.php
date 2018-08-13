<?php include_once("session.php"); ?>
<?php include_once("include/header.php"); ?>
<?php include_once("include/aside.php"); ?>
<?php
error_reporting(1);
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

if(isset($_POST['addword'])){
         $select = mysqli_query($conect,"SELECT * FROM dic WHERE english = '$english' AND active = '2'");
         $select = mysqli_query($conect,"SELECT * FROM dic WHERE english = '$english'");
         if (mysqli_num_rows($select) > 0) {
           $msg4 = '<div class="alert alert-danger" role="alert" style="text-align:center;">پێشتر ئەم وشەیە زیاد کراوە بۆ ئەم فەرهەنگە</div>';
         }else {

           if (empty($english)) {
            $msg4 = '<div class="alert alert-danger" role="alert" style="text-align:center;">بەیارمەتیت وەشەی ئینگلیزی زایاد بکە</div>';
          }elseif (empty($kurdish)) {
            $msg4 = '<div class="alert alert-danger" role="alert" style="text-align:center;">بەیار مەتیت وشەی کوردی زیاد بکە</div>';

                     }
                     else {
                       $insert = mysqli_query($conect,"INSERT INTO dic (english,kurdish,active,d_date) VALUES ('$english','$kurdish','$active','$d_date')");

                       if (isset($insert)) {
                         $msg4 = '<div class="alert alert-success" role="alert" style="text-align:center;">وشەکە بەسەرکەوتویی زیادکرا</div>';
                        nwekrdnwa(3,'addword.php');
                      //  header("Location: index.php");
                       }
                     }

         }

            }

 ?>

 <div class="col-md-9 rght">
   <?php echo @$msg4;?>
   <div class="panel panel-default">
      <div class="panel-heading">زیادکردنی وشەی نوێ</div>
        <div class="panel-body">

        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">

                      <div class="form-group">
                        <label for="u_name" class="col-sm-3 control-label"><span style="color:red">*</span> ئینگلیزی :</label>
                        <div class="col-sm-8">
                          <input type="text" name="english" class="form-control" id="inputPassword3" value="<?php echo $english;?>" placeholder="وشەی ئینگلیزی بنووسە ">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="u_name" class="col-sm-3 control-label"><span style="color:red">*</span> کوردی :</label>
                        <div class="col-sm-8">
                          <input type="text" name="kurdish" class="form-control" id="inputPassword3" value="<?php echo $kurdish;?>" placeholder="وشەی کوردی بنووسە  ">
                        </div>
                      </div>



                      <div class="form-group">
                        <div class="col-sm-3 col-sm-offset-3">
                          <button  type="update" name="addword" class="btn btn-info btn-block"> زیادکردن</button>
                        </div>
                      </div>
                      </form>
                      </form>

       </div>
   </div>
 </div>
 <?php include_once("include/footer.php"); ?>
