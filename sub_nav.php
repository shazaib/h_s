	 

	 <div class="navs navbar-default bg-header">

			<div class="container-fluid">
				<span class="glyphicon glyphicon-shopping-cart"> Add To Cart </span>
   	 	&nbsp;
   	 	<span class="glyphicon glyphicon-star-empty"> Favourite Cart </span>
				<ul class="nav navbar-nav">
					<li><a href="#"><span class="fa fa-home"></span> Women's Shoes</a></li>
					 
					  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown"  href="#">Sandals<span class="caret"></span></a>
					  	 <ul class="dropdown-menu">
<?php   

	$sql="select sub_categories from products_menu where categories='Sandals'";				
	$obj=new config();
	$res=$obj->select($sql);

    	while($row=$res->fetch_assoc()){
 
  		 echo '<li><a href="'.$row['sub_categories'].'.php">'.$row['sub_categories'].'</a></li>';

    	}

 	 ?>			
	 	 			</ul>
						</li>


					  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown"  href="#">Shoes<span class="caret"></span></a>
					  	 <ul class="dropdown-menu">
<?php   

	$sql="select sub_categories from products_menu where categories='Shoes'";					  
	$obj=new config();
	$res=$obj->select($sql);

    	while($row=$res->fetch_assoc()){
 
  		 echo '<li><a href="'.$row['sub_categories'].'.php">'.$row['sub_categories'].'</a></li>';

    	}

 	 ?>							  	 	
						</ul>
					</li>

					 <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown"  href="#">Sleepers<span class="caret"></span></a>
					  	 <ul class="dropdown-menu">
<?php   

	$sql="select sub_categories from products_menu where categories='Sleepers'";					  	
	$obj=new config();
	$res=$obj->select($sql);

    	while($row=$res->fetch_assoc()){
 
  		 echo '<li><a href="'.$row['sub_categories'].'.php">'.$row['sub_categories'].'</a></li>';

    	}

 	 ?>							  	 	
						</ul>
					</li>

				</ul>
			</div>
		</div>