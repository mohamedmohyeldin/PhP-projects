<!doctype html>
<html lang="en">
  <head>
    <title>odd&even</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      

    <div class="container">
        <div class="row">
            <div class="col-6">
                <form  method="get">
                    <div class="form-group">
                        <label for="min_number"></label>
                        <input type="number" name="min_number" id="min_number" class="form-control" placeholder="type start number">
                    </div>
                    <div class="form-group">
                        <label for="max_number"></label>
                        <input type="number" name="max_number" id="max_number" class="form-control" placeholder="type end number">
                    </div>
                    <div class="form-group">
                        <div class="btn-group" data-toggle="buttons">
                            <label class="btn btn-primary active">
                                even
                                <input type="radio" name="number_type" id="" autocomplete="off"  value="even">
                            </label>
                            <label class="btn btn-primary">
                                odd
                                <input type="radio" name="number_type" id="" autocomplete="off" value="odd">
                            </label>
                            <label class="btn btn-primary">
                                all
                                <input type="radio" name="number_type" id=" " autocomplete="off" value="all">
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-danger">Loop </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php

    if(isset($_GET) && !empty($_GET)){

        function get_count()
        {
            for($i=$_GET['min_number'];$i<=$_GET['max_number'];$i++){

                if($_GET['number_type'] == 'even'){
                    if($i % 2 == 0){
                        echo($i.'<br>');
                    }
                }elseif($_GET['number_type'] == 'odd'){
                    if($i % 2 != 0){
                        echo($i.'<br>');
                    }
                }else{
                        echo($i.'<br>');
                }

            }
        }
        get_count();

    }

    ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>