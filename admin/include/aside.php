
      <div class="col-md-3 left">
        <div class="list-group">
            <a style="background:#0EB1F0; color:#fff;" href="index.php"  class="list-group-item"><i class="fa fa-list" aria-hidden="true"></i> بەرێوە بەرایەتی</a>
            <?php
            $shw = mysqli_query($conect, "SELECT count(id) FROM dic");
            $result = mysqli_fetch_assoc($shw);

             ?>
              <a href="addword.php" class="list-group-item"><i class="fa fa-sign-out" aria-hidden="true"></i> زیادکردنی وشە</a>
              <a href="active.php" class="list-group-item"><i class="fa fa-sign-out" aria-hidden="true"></i> وشە هاتووەکان</a>            
            <a href="#" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> هەموو وشەکان <span class="badge"> <?php echo  $result['count(id)'];?></span></a>
           <a href="loguot.php" class="list-group-item"><i class="fa fa-sign-out" aria-hidden="true"></i> دەرچوون</a>
       </div>

      </div>
