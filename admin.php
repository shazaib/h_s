<html>
<head>
	<title></title>
	<meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
   <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
   <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

	<?php include_once('includes/config.php'); ?>
<div class="container container-fluid">
	<div class="row">

		<div class="col-md-4">
			<div class="button"> 
				<a href="?pro"><button class="btn btn-sm btn-primary">Products Image Upload</button></a>
				<a href="?pro1"><button class="btn btn-sm btn-primary">Slider Image Upload</button></a>
				<button class="btn btn-sm btn-primary" data-toggle="collapse" data-target="#demo">Ads Image Upload</button>
				<button class="btn btn-sm btn-primary" data-toggle="collapse" data-target="#demo">Sub Categories Insert</button>
				<button class="btn btn-sm btn-primary">Under Construction</button>
				<button class="btn btn-sm btn-primary">Under Construction</button>
			</div>
		</div>


	<!--products image upload select/delete and insert code -->
<?php 

	if (isset($_GET['pro']))

	{?>

	<div>
			<form method="post" enctype="multipart/form-data" class="form-inline" >
		<div class"col-md-6">
				<table class="table table-striped table-hover table-condensed">
					<tbody>
				<tr>
					<td>
						<select class="form-control input-sm" name="categories">
							<option value="Categories" disabled>Categories</option>
							<option value="Sandals">Sandals</option>
							<option value="Shoes">Shoes</option>
							<option value="Sleepers">Sleepers</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>

						<select name="sub_categories" class="form-control input-sm" >
							<option value="Sub_Categories">Sub-Categories</option>
							<option value="Flats Sandals">Flats Sandals</option>
							<option value="Flats Sandals">Heels Sandals</option>
							<option value="Khusa & Kolapuri">Khusa & Kolapuri</option>
							<option value="Heel Pumps">Heel Pumps</option>

							<option value="Casual Shoes">Casual Shoes</option>
							<option value="Sports Shoes">Sports Shoes</option>
							
							<option value="Stylish Sleepers">Stylish Sleepers</option>
							<option value="Simple Sleepers">Simple Sleepers</option>
						</select>

					</td>
				</tr>
				<tr><td><input  class="form-control input-sm"  type="text" name="img_name" placeholder="Image Name"/></td></tr>
				<tr><td><input  class="form-control input-sm" type="text" name="price" placeholder="Image Price"/></td></tr>
				<tr><td style="color:white;"><input  class="form-control input-sm" type="File" name="img"/></td></tr>
				<tr><td align="right"><button  type="submit" class="btn btn-sm btn-primary" name="btn_img">Insert image</button></td></tr>
				</tbody>
			</table>
		</div>



		<div class="col-md-12">
			<table class="th1 table-striped table-hover table-condensed">
 				<tr><th>S.No</th><th>Category</th><th>Sub Category</th><th>Image Name</th><th>Image Price</th><th>Image Url</th><th><span class="glyphicon glyphicon-arrow-down"></span><span class="glyphicon glyphicon-trash"></span></th></tr>
	
		<?php 

				$sql="SELECT * FROM products_images";
				$obj=new config();
				$res=$obj->select($sql);

				while($row=$res->fetch_assoc())
				{ 
 					
 				echo "<tr><td>".$row['s_no']."</a></td><td>".$row['categories']."</td><td>".$row['sub_categories']."</td><td>".$row['img_name']."</td><td>".$row['Price']."</td><td>".$row['image']."</td>
				<td><button type='submit' class='btn btn-danger btn-xs' name='delete'><a href='?no=".$row['s_no']." & ?d=delete '>Delete</a></button></td></tr>";

				}?>
				</table>

			</div>

	   <?php 

			if (isset($_POST['btn_img'])) {

				$categories=$_POST['categories'];
				$sub_categories=$_POST['sub_categories'];
				$img_name=$_POST['img_name'];
				$price=$_POST['price'];
				$img_file='images/'.$_FILES['img']['name'];


				$sql="INSERT INTO products_images VALUES ('','$categories','$sub_categories','$img_name','$price','$img_file')";
				$obj=new config();
				$obj->dbconfig($sql);
				echo '<script> window.location.reload();</script>';
		
			}

				if (isset($_GET['no'])) {

					$num=$_GET['no'];
					$sql="DELETE FROM products_images WHERE s_no='$num' ";
					$obj=new config();
					$obj->dbconfig($sql);
			}

			 ?>

	<?php }?>

<!--END products image upload select delete and insert code -->	



<!--START SLider images upload select delete and insert code -->

<?php 

	if (isset($_GET['pro1'])) 
	
	{?>

	<div>
			<form method="post" enctype="multipart/form-data" class="form-inline" >
		<div class"col-md-6">
				<table class="table table-striped table-hover table-condensed">
					
				<tbody>
				<tr><td><input  class="form-control input-sm"  type="text" name="img_name" placeholder="Image Name"/></td></tr>
				<tr><td><input  class="form-control input-sm" type="file" name="img" placeholder="Image"/></td></tr>
				<tr><td align="right"><button  type="submit" class="btn btn-sm btn-primary" name="btn_slider_img">Insert image</button></td></tr>
				</tbody>
			</table>
		</div>

		
		<div class="col-md-12">
			<table class="th1 table-striped table-hover table-condensed">
 				<tr><th>Id</th><th>Image Name</th><th>Image Url</th><th><span class="glyphicon glyphicon-arrow-down"></span><span class="glyphicon glyphicon-trash"></span></th></tr>
			
	

			<?php 


				$sql="SELECT * FROM slider";
				$obj=new config();
				$res=$obj->select($sql);

				while($row=$res->fetch_assoc())
				{ 
 					
 				echo "<tr><td>".$row['id']."</td><td>".$row['name']."</td><td>".$row['image_url']."</td>
				<td><button type='submit' class='btn btn-danger btn-xs' name='delete'><a href='?no=".$row['id']." & ?d=delete '>Delete</a></button></td></tr>";

				} ?>
				</table>



			</div>
			</form>
		
	</div>

			<?php 

			if (isset($_POST['btn_slider_img'])) {



				$img_name=$_POST['img_name'];
				$img_file='images/'.$_FILES['img']['name'];


				$sql="INSERT INTO slider VALUES ('','$img_name','$img_file')";
				$obj=new config();
				$obj->dbconfig($sql);
					
				}


			if (isset($_GET['no'])) {

				$num=$_GET['no'];
				$sql="DELETE FROM slider WHERE id='$num' ";
				$obj=new config();
				$obj->dbconfig($sql);

				}

          ?>

<?php } ?>



<!--END SLider images upload select delete and insert code -->





  </div>
</div>
</body>
</html>
























































