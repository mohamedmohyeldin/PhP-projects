<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> calcElectricity</title>
        <link rel="stylesheet" href="css/animate.min.css"/>
        <link rel="stylesheet" href="css/bootstrap-4.5.3.min.css"/>
        <link rel="stylesheet" href="css/style.css"/>
    </head>
    <body>
        
        <h1 class="text-center">calcElectricity</h1>
                
        <?php
        $result ="";
        if ($_POST) {
            global $result ;
            $number = $_POST['num'];
            function calElect($num){
                if($num <= 50){
                    $elecBill = .5 *$num;
                }elseif ($num > 50 && $num <= 150) {
                    $elecBill = .75 *$num;
                }elseif ($num > 150 && $num <= 250) {
                    $elecBill = 1.2 *$num;
                } else{
                    $elecBill = 1.5 *$num;    
                }
                return $elecBill + (0.2*$elecBill);
            }
            $result = calElect($number);
        }
        ?>
        
        

        
        <div class="container">
            <div class="row">
                <form method="post" class="col-7 mx-auto my-5 text-center">
                  <div class="form-group">
                      <input type="number" required class="form-control" name="num" placeholder="Enter the number of units">
                  </div>
                  
                  <button type="submit" class="btn btn-primary text-capitalize col-4">calc</button>
                </form>
                <div class="alert alert-success col-7 mx-auto my-4 " role="alert">
                    <strong class="text-capitalize"> the total electricity bill is : </strong> <?php echo $result; ?>
                </div>
            </div>
        </div>
        
        <!--java script links-->
        <script src="js/jquery-3.5.1.min.js"></script>
        <script src="js/bootstrap.bundle-4.5.3.min.js"></script>
    </body>
</html>


<!--start the section of navbar-->