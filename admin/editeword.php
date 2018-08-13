<?php include_once("session.php"); ?>
<?php include_once("include/header.php"); ?>
<?php include_once("include/aside.php"); ?>
    <?php
    $id = intval(@$_GET['id']);
    $selectpost = mysqli_query($conect, "SELECT * FROM dic WHERE id = '$id'");
    $fetchpost = mysqli_fetch_assoc($selectpost);

    $english = @$_POST['english'];
    $kurdish = @$_POST['kurdish'];

 if (isset($_POST['update'])) {
   if (empty($english) and empty($english)) {
       $msg = '<div class="alert-addmin alert alert-danger" style="width:100%;" role="alert">گۆران کارییەکان ئەنجام نەدرا</div>';
   }
   else {
     $updatepost = mysqli_query($conect, "UPDATE dic SET
     english ='$english',
     kurdish ='$kurdish'
    WHERE id ='$id'");
    if (isset($updatepost)) {
      header("Location: index.php");
    }
   }


 }
    ?>

 <div class="col-md-9 rght">
   <?php echo @$msg;?>
   <div class="panel panel-default">
      <div class="panel-heading">زیاد کردنی بابەت</div>
        <div class="panel-body">

        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">

                      <div class="form-group">
                        <label for="u_name" class="col-sm-3 control-label"><span style="color:red">*</span> ئینگلیزی :</label>
                        <div class="col-sm-8">
                          <input type="text" name="english" value="<?php echo $fetchpost['english'];?>" class="form-control" id="inputPassword3" placeholder="سەردێری بابەت ">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="u_name" class="col-sm-3 control-label"><span style="color:red">*</span> کوردی :</label>
                        <div class="col-sm-8">
                          <input type="text" name="kurdish" value="<?php echo $fetchpost['kurdish'];?>" class="form-control" id="inputPassword3" placeholder="سەردێری بابەت ">
                        </div>
                      </div>



                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-3">
                          <button  type="update" name="update" style="margin-right: 67px;" class="btn btn-info btn-block"  ><i class="fa fa-pencil" aria-hidden="true"> </i>  گۆرین </button>
                        </div>
                      </div>
                      </form>
                      </form>

       </div>
   </div>
 </div>
 <?php include_once("include/footer.php"); ?>
