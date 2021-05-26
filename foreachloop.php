<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

       <?php
$data = [
    [
    'id'=>1,
    'name'=>'mohamed',
        'gender'=>'m',
        'type'=>'user',
        'age'=>30,
        'birth day'=>'19/11/1990'
        
        ],[
        
         'id'=>2,
        'name'=>'ahmed',
        'gender'=>'m',
        'type'=>'admin',
        'age'=>32,
        'birth day'=>'1/3/1993'
    ],[
         'id'=>3,
        'name'=>'mona',
        'gender'=>'f',
        'type'=>'admin',
        'age'=>31,
        'birth day'=>'2/11/1990'
    ],[
         'id'=>4,
        'name'=>'doaa',
        'gender'=>'f',
        'type'=>'user',
        'age'=>33,
        'birth day'=>'19/11/1985'
    ]
    ,[
         'id'=>7,
        'name'=>'mahmoud',
        'gender'=>'m',
        'type'=>'user',
        'age'=>37,
        'birth day'=>'1/7/1998'
    ]
     ,[
         'id'=>7,
        'name'=>'hisham',
        'gender'=>'m',
        'type'=>'user',
        'age'=>37,
        'birth day'=>'8/9/1992'
    ],[
         'id'=>7,
        'name'=>'zyiad',
        'gender'=>'m',
        'type'=>'user',
        'age'=>37,
        'birth day'=>'8/9/2005'
    ]
];



$table = '<table class="table">
  <thead class="thead-dark">
    <tr>';
    foreach($data[0] AS $key=>$value){
    $table .= '<th scope="col">'.$key.'</th>';
        
    }
      
 
    $table .= '</tr>
  </thead>
  <tbody>';
  foreach($data AS $key=>$value){
      $table .= '<tr>';
      foreach($value AS $key1=>$value1 ){
          if($value[$key1] == 'm' &&$key1 == 'gender'){
              $value1 = 'male';
        }elseif($value[$key1] == 'm' &&$key1 == 'gender'){
              $value1 = 'female';
          }
          $table .='<th>'.$value1.'</th>';
      }
      
 
   $table.= '</tr>';   
  }
  

$table .= '</tbody>
</table>';

//echo ($table);
?>

<table class="table">
  
  <thead class="thead-dark">
    <tr>
        <?php
        foreach($data[0] AS $key=>$value)
        {
        
       echo '<th scope="col"> ' .$key .' </th>';
        
        }
        ?>
      
 
    </tr>
  </thead>
  <tbody>
      <?php
      foreach($data AS $key=>$value){
          ?>
      <tr>
          <?php
          foreach($value AS $key5=>$value5 ){
              if($key == 'gender' && $value['gender'] == 'm')
                  $value5 = 'male';
              elseif($key5 == 'gender' && $value['gender'] =='f')
                  $value5 = 'female';
                   
              ?>
              <td><?php echo $value5 ?></td>
               <?php   
             }
          ?>
      </tr>
      <?php

      }
      ?>
    
<!--
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    
-->

  </tbody>
</table>
  