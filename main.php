 <!--MAIN CONTENT start -->
<div class="row">
	<div class="col-md-12">
		<?php include('sub_nav.php'); ?>
	</div>
</div>




<div class="row">
	<div class="col-md-12"> 

		
	<h1 class="labels text-center">New Products</h1>
		<div style="display:flex; text-align:center; flex-wrap:wrap;" width="1024px" >
		<?php 

			$sql="SELECT * FROM products_images  LIMIT 6";
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




 <!--MAIN CONTENT END -->