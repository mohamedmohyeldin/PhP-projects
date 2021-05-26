<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> check positive/negative number</title>
        <link rel="stylesheet" href="css/animate.min.css"/>
        <link rel="stylesheet" href="css/bootstrap-4.5.3.min.css"/>
        <link rel="stylesheet" href="css/style.css"/>
    </head>
    <body>
        
                
        <?php
        $checkedNum ="";
        if ($_POST) {
            global $checkedNum ;
            $number = $_POST['num'];
            function posiOrNega($num){
                if($num >= 0){
                    return "Positive";
                }else{
                    return "Negative";
                }
            }
            $checkedNum = posiOrNega($number);
        }
        ?>
        
        
<h1 class="text-center">check positive/negative number</h1>    
        
        <div class="container">
            <div class="row">
                <form method="post" class="col-7 mx-auto my-5 text-center">
                  <div class="form-group">
                      <input type="number" required class="form-control" name="num" placeholder="Enter the number here ...">
                  </div>
                  <button type="submit" class="btn btn-primary text-capitalize col-4">check number</button>
                </form>
                <div class="alert alert-success col-7 mx-auto my-4 " role="alert">
                    <strong class="text-capitalize"> the number is : </strong> <?php echo $checkedNum; ?>
                </div>
            </div>
        </div>

        <!--java script links-->
        <script src="js/jquery-3.5.1.min.js"></script>
        <script src="js/bootstrap.bundle-4.5.3.min.js"></script>
    </body>
</html>