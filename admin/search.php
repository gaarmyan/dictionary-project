<?php include_once("session.php"); ?>
<?php include_once("include/header.php"); ?>
<?php include_once("include/aside.php"); ?>

  <?php

   $garan = @$_POST['garan'];

    $sql = "SELECT * FROM dic WHERE english LIKE '%$garan%' OR kurdish LIKE '%$garan%'";
    $run_sql = mysqli_query($conect, $sql);
    if (mysqli_num_rows($run_sql) ==0) {
      $msg = '<div class="alert alert-danger" role="alert">ببورە ئەم ناوە تۆمار نەکراوە</div>';
    }
   ?>
         <section id="main" style="margin-bottom:20px;">
           <div class="container">
             <div class="row">

               <div class="col-md-9">
                    <?php echo @$msg;?>

                   <div class="panel panel-default">
                     <div class="panel-heading">
                       <h3 class="panel-title">بەرێوە بەرایەتی</h3>
                     </div>
                     <br>
                     <div class="col-md-12">

                       <form class="" action="search.php" method="post">
                           <input class="form-control" type="text" name="garan" placeholder="گەران ...">

                       </form>

                    </div>
                    <br>
                     <div class="panel-body">

                       <table class="table table-striped table-hover">
                         <thead>
                           <tr>
                             <th style="text-align: center;">#</th>
                             <th style="text-align: center;">ئینگلیزی</th>
                             <th style="text-align: center;">کوردی</th>
                               <th style="text-align: center;">بەروار</th>
                             <th style="text-align: center;">دەستکاری</th>

                           </tr>

                         </thead>
                         <tbody>
                           <?php

                           $selectpost = mysqli_query($conect, "SELECT * FROM dic");
                           $num = 1;
                           while ($rowpost = mysqli_fetch_assoc($run_sql)) {
                             echo '
                             <tr>
                             <td style="color:#777;text-align:center;">'.$num.'</td>
                             <td style="color:#777;text-align:center;">'.$rowpost['english'].'</td>
                             <td style="color:#777;text-align:center;">'.$rowpost['kurdish'].'</td>
                             <td style="color:#777;text-align:center;">'.$rowpost['d_date'].'</td>
                             <td style="color:#777;text-align:center;">
                               <button class="btn btn-danger "><a href="index.php?delete=word&id='.$rowpost['id'].'">سرینەوە </a></button>
                               <button class="btn btn-info"><a href="editeword.php?id='.$rowpost['id'].'"> گۆرین </a></button>
                             </td>
                             </tr>

                             ';
                             $num++;
                           }



                            ?>

                         </tbody>

                         </table>
                     </div>
                   </div>
               </div>
             </div>
         </section>
