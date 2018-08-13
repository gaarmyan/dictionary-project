<?php include_once("session.php"); ?>
<?php include_once("include/header.php"); ?>
<?php include_once("include/aside.php"); ?>
    <?php
    function output($data){
      return trim(strip_tags(htmlspecialchars($data, ENT_QUOTES)));
     }


    if(isset($_GET['delete'])){

    if(isset($_SESSION['rule'])) {

    if($_SESSION['rule'] == 'admin') {

      $the_user_id = output($_GET['delete']);

      $query = "DELETE FROM dic WHERE id = {$the_user_id} ";
      $delete_user_query = mysqli_query($conect, $query);
      header("Location: index.php");

       }
   }
  }
    // am querya ba kar det bo srinaway babat
     ?>

         <section id="main" style="margin-bottom:20px;">
           <div class="container">
             <div class="row">

               <div class="col-md-9">

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
                           // tibat ba page
$per_page = 3;
if(isset($_GET['page'])) {
$page = $_GET['page'];

} else {


  $page = "";
}

if($page == "" || $page == 1) {
  $page_1 = 0;

} else {

  $page_1 = ($page * $per_page) - $per_page;

}
$post_query_count = "SELECT * FROM dic";
$find_count = mysqli_query($conect,$post_query_count);
$count = mysqli_num_rows($find_count);
$count  = ceil($count /$per_page);

                     // tibat ba page
                        //  $selectuser = mysqli_query($con, "SELECT * FROM users WHERE u_active = '2' ORDER BY u_id DESC LIMIT  $start_from,$per_page");

                           $selectpost = mysqli_query($conect, "SELECT * FROM dic WHERE active = '2' ORDER BY id DESC LIMIT  $page_1, $per_page");
                           $num = 1;
                           while ($rowpost = mysqli_fetch_assoc($selectpost)) {
                             echo '
                             <tr>
                             <td style="color:#777;text-align:center;">'.$num.'</td>
                             <td style="color:#777;text-align:center;">'.$rowpost['english'].'</td>
                             <td style="color:#777;text-align:center;">'.$rowpost['kurdish'].'</td>
                             <td style="color:#777;text-align:center;">'.$rowpost['d_date'].'</td>
                             <td style="color:#777;text-align:center;">
                               <button class="btn btn-danger "><a href="index.php?delete='.$rowpost['id'].'">سرینەوە </a></button>
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

<ul class="pagination">

    <?php
// TAIB BAT BA PAGANTION
    $number_list = array();


    for($i =1; $i <= $count; $i++) {


    if($i == $page) {

         echo "<li '><a class='active_link' href='index.php?page={$i}'>{$i}</a></li>";


    }  else {

        echo "<li '><a href='index.php?page={$i}'>{$i}</a></li>";

    }

    }

   // count the totla recordes
     ?>

    </ul>


               </div>
             </div>
         </section>
