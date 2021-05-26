<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> check positive/negative number</title>
   
    </head>
    <body>

               
        <?php
        $result ="";
        if ($_POST) {
            global $result ;
            $number = $_POST['num'];
            $sqrt = 1/$_POST['sqrt'];
            function specRoot($num,$sqrt){
                return  pow($num, $sqrt);
            }
            $result = specRoot($number,$sqrt);
        }
        ?>
      
        <h1 class="text-center">root</h1>
        <div class="container">
            <div class="row">
                <form method="post" class="col-7 mx-auto my-5 text-center">
                  <div class="form-group">
                      <input type="number" required class="form-control" name="num" placeholder="Enter the number here ...">
                  </div>
                  <div class="form-group">
                      <input type="number" required class="form-control" name="sqrt" placeholder="Enter the sqrt here ...">
                  </div>
                  <button type="submit" class="btn btn-primary text-capitalize col-4">calc</button>
                </form>
                <div class="alert alert-success col-7 mx-auto my-4 " role="alert">
                    <strong class="text-capitalize"> the result is : </strong> <?php echo $result; ?>
                </div>
            </div>
        </div>
        
        <!--java script links-->
        <script src="js/jquery-3.5.1.min.js"></script>
        <script src="js/bootstrap.bundle-4.5.3.min.js"></script>
    </body>
</html>


<!--start the section of navbar-->