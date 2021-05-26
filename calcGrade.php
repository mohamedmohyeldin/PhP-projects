<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> calgrade</title>
        <link rel="stylesheet" href="css/animate.min.css"/>
        <link rel="stylesheet" href="css/bootstrap-4.5.3.min.css"/>
        <link rel="stylesheet" href="css/style.css"/>
    </head>
    <body>
        
                
        <?php
        $result ="";
        if ($_POST) {
            global $result ;
            $phys = $_POST['phys'];
            $chem = $_POST['chem'];
            $bio  = $_POST['bio'];
            $math = $_POST['math'];
            $comp = $_POST['comp'];
            function calGrade($phy=0,$che=0,$bio=0,$math=0,$com=0){  
                $avgRes =($phy + $che + $bio + $math + $com)/5;
                if ($avgRes >= 90) {
                    $mark =  "Percentage >= 90% : Grade A";
                } elseif ($avgRes >= 80) {
                    $mark =  "Percentage >= 80% : Grade B";
                } elseif ($avgRes >= 70) {
                    $mark =  "Percentage >= 70% : Grade C";
                } elseif ($avgRes >= 60) {
                    $mark =  "Percentage >= 60% : Grade D";
                } elseif ($avgRes >= 40) {
                    $mark =  "Percentage >= 40% : Grade E";
                } else {
                    $mark =  "Percentage < 40% : Grade F";    
                }
                return $mark;
            }
            $result = calGrade($phys,$chem,$bio,$math,$comp);
        }
        ?>
        
        
 
        <h1 class="text-center">calgrade</h1>
        <div class="container">
            <div class="row">
                <form method="post" class="col-7 mx-auto my-5 text-center">
                  <div class="form-group">
                      <input type="number" required class="form-control" name="phys" placeholder="Enter the mark of physics">
                  </div>
                  <div class="form-group">
                      <input type="number" required class="form-control" name="chem" placeholder="Enter the mark of chemistry">
                  </div>
                  <div class="form-group">
                      <input type="number" required class="form-control" name="bio" placeholder="Enter the mark of biology">
                  </div>
                  <div class="form-group">
                      <input type="number" required class="form-control" name="math" placeholder="Enter the mark of mathmatics">
                  </div>
                  <div class="form-group">
                      <input type="number" required class="form-control" name="comp" placeholder="Enter the mark of computer">
                  </div>
                  <button type="submit" class="btn btn-primary text-capitalize col-4">calc</button>
                </form>
                <div class="alert alert-success col-7 mx-auto my-4 " role="alert">
                    <strong class="text-capitalize">the result is : </strong> <?php echo $result; ?>
                </div>
            </div>
        </div>
        
        <!--java script links-->
        <script src="js/jquery-3.5.1.min.js"></script>
        <script src="js/bootstrap.bundle-4.5.3.min.js"></script>
    </body>
</html>


<!--start the section of navbar-->