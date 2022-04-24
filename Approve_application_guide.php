<?php
    session_start();
    if(isset($_SESSION['username']) && !empty($_SESSION['username'])){

      if(isset($_GET['guide_id']) && !empty($_GET['guide_id'])){
            $p_id=$_GET['guide_id'];
            try{

              $conn=new PDO("mysql:host=localhost:3306;dbname=go_travel;", "root", "");
              $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

              $sqlquary="UPDATE guide SET Approve = 1
               WHERE guide_id = $guide_id";
              $conn->exec($sqlquary);

              ?>
              <script>location.assign("review_application_guide.php");</script>
              <?php
            }
            catch(PDOException $ex){
                ?>
                    <script>location.assign("review_application_guide.php");</script>
                <?php
            }


        }
        else{
          ?>
          <script>location.assign("review_application_guide.php");</script>
          <?php
        }
    }
    else{
      ?>
      <script>location.assign("login.php");</script>
      <?php
    }
?>
