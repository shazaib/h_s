<!DOCTYPE html>
<html>
<head>
  <title>H & S</title>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
   <link rel="stylesheet" type="text/css" href="style.css">


</head>

<body>
<div class="container container-fluid">
<?php include('includes/config.php'); ?>
<?php include('sub_nav.php'); ?>

<div class="row">
  <div class="col-md-12"> 

    
  <h1 class="labels text-center">Khusa And Kolapuri</h1>
    <div style="display:flex; text-align:center; flex-wrap:wrap;" width="1024px" >
    <?php 

      $sql="SELECT img_name,Price,image FROM products_images WHERE categories='Sandals' && sub_categories='Khusa & Kolapuri'  LIMIT 9";
      $obj=new config();
      $res=$obj->select($sql);

      

        while($row=$res->fetch_assoc())
        { 
        
      echo '<div style="-webkit-flex:2" >';
      echo '<img src="'.$row['image'].'"></img>'; 
      echo '<p>'.$row["img_name"].'</p>';
      echo '<p>Rs: '.$row["Price"].'</p>';    
      echo '</div>';


    } ?>

    </div>

  </div>
</div>



<?php include ('footer.php'); ?>

</div> <!--Container End-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>
