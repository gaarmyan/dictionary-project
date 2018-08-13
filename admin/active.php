<?php include_once("session.php"); ?>
<?php include_once("include/header.php"); ?>
<?php include_once("include/aside.php"); ?>
    <?php
    error_reporting(0);
    function output($data){
      return trim(strip_tags(htmlspecialchars($data, ENT_QUOTES)));
     }


    if(isset($_GET['delete'])){

    if(isset($_SESSION['rule'])) {

    if($_SESSION['rule'] == 'admin') {

      $the_user_id = output($_GET['delete']);

      $query = "DELETE FROM dic WHERE id = {$the_user_id} ";
      $delete_user_query = mysqli_query($conect, $query);
      header("Location: active.php");

       }
   }
  }

    // am querya ba kar det bo srinaway babat

    // am marja bo wargtny xwendkaran
    if (isset($_GET['active'])) {
    $the_user_id = output($_GET['active']);

    $editecomment = mysqli_query($conect,"UPDATE dic SET active = '2' WHERE id = '".$the_user_id."'");
    if (isset($editecomment)) {
    header("Location: active.php");
    }

  }
// am marja bo wargtny xwendkaran
     ?>

         <section id="main" style="margin-bottom:20px;">
           <div class="container">
             <div class="row">

               <div class="col-md-9">

                   <div class="panel panel-default">
                     <div class="panel-heading">
                       <h3 class="panel-title">وشە هاتووەکان</h3>
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
                           // tibat ba page
                $per_page = 5;

               if (isset($_GET['page'])) {
               $page = $_GET['page'];

               }
               else {
                 $page = 1;

               }


               $start_from = ($page- 1) * $per_page;

                     // tibat ba page

                           $selectpost = mysqli_query($conect, "SELECT * FROM dic WHERE active = '1' ORDER BY id DESC LIMIT  $start_from,$per_page");

                           $num = 1;
                           while ($rowpost = mysqli_fetch_assoc($selectpost)) {
                             echo '
                             <tr>
                             <td style="color:#777;text-align:center;">'.$num.'</td>
                             <td style="color:#777;text-align:center;">'.$rowpost['english'].'</td>
                             <td style="color:#777;text-align:center;">'.$rowpost['kurdish'].'</td>
                             <td style="color:#777;text-align:center;">'.$rowpost['d_date'].'</td>
                             <td style="color:#777;text-align:center;">
                               <button class="btn btn-danger "><a href="active.php?delete='.$rowpost['id'].'">سرینەوە </a></button>
                               <button class="btn btn-info"><a href="active.php?active='.$rowpost['id'].'">وەرگرتن</a></button>
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
                   <?php
// TAIB BAT BA PAGANTION
 $query =  "SELECT * FROM dic";
  $result = mysqli_query($conect,$query);

  $total_records = mysqli_num_rows($result);

  $total_page = ceil($total_records / $per_page);



 echo '<ul style="margin: 10px 0;" class="pagination">';

for ($i=1; $i <=$total_page ; $i++) {

   echo "<li> <a href='active.php?page=".$i."'>".$i."</a></li>";
 }

echo '</ul>';

// count the totla recordes
 ?>
               </div>
             </div>
         </section>
