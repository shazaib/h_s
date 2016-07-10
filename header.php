


<!--Header Start-->

   <div class="row bg-header">
   	<div class="col-md-12">
   	 	<span class="glyphicon glyphicon-earphone "> +92 34 36 04 95 32</span>
   	 	&nbsp;
   	 	<span class="glyphicon glyphicon-envelope "> HS@Online-Shop.com</span>
   	 <div class="nav">
   	  	<ul>
   	  	<li><a href="#" class="actives"><i class="fa fa-home  "></i><strong> Home </strong></a></li>
			<li><a href="#">About Us</a></li>
			<li><a href="#">Contact Us</a></li>
			<li><a href="">Wish List</a></li>
   	  		<li><a href="">Add to Cart</a></li>
   	  		<li><a href="#">Services</a></li>
   	  	</ul>	
     </div>
   </div>
</div>
	<div class="row " style="background-color: white">
			<div class="col-md-8"><img src="images/logo (1).png"></div>
			<div class="col-md-4"><img src="images/topimg.jpg" style="float: right;"></div>
	</div>




<!-- Start WOWSlider.com BODY section -->

<div class="row bg-slider">
	<div class="col-md-12">

<div id="wowslider-container1">
<div class="ws_images">


<?php

$sql="select * from slider";
$obj=new config();
$res=$obj->select($sql);
	
?>

<ul>	
<?php while ($row=$res->fetch_assoc()) {
		  echo '<li><img src="'.($row['image_url']).'" width="100px" height="300px" /></li>'; }?>
</ul>

	</div>
	<div class="ws_bullets"><div>
		<a href="#" title="  !-----    Ghanchi's Collection :)"><span><img src="data1/tooltips/slid11.jpg" alt="  !-----Ghanchi's Collection :)"/>1</span></a>
		<a href="#" title="  !-----    Oxygen Shirts Collection :)"><span><img src="data1/tooltips/slide11.jpg" alt="  !-----Oxygen Shirts Collection :)"/>2</span></a>
		<a href="#" title="  !-----    Choice Your own Collection :)"><span><img src="data1/tooltips/slider_1.jpg" alt="  !-----Choice Your own Collection :)"/>3</span></a>
		<a href="#" title="  !-----    Zero Condition's Products :)"><span><img src="data1/tooltips/slidermenbg2.jpg" alt="  !-----Zero Condition's Products :)"/>4</span></a>
		<a href="#" title="  !------   Boost Shoes  :)"><span><img src="data1/tooltips/weweqw.jpg" alt="  !------Boost Shoes  :)"/>5</span></a>
	</div></div>

	<div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net">jquery carousel</a> by WOWSlider.com v8.5</div>
<div class="ws_shadow"></div>
</div>  
<script type="text/javascript" src="engine1/wowslider.js"></script>
<script type="text/javascript" src="engine1/script.js"></script>


  </div>
</div>

<!-- End WOWSlider.com BODY section -->

<!--Header End-->