<?php 
$result=$conn->query("SELECT * FROM category"); 
while($row=$result->fetch()){	   
$cat=<<<CA
		<div class="col-md-4 col-xs-6">
			 <div class="shop">
			   <div class="shop-img">
			     <img src="./img/shop01.png" alt="">
			</div>
			   <div class="shop-body">
			     <h3>{$row['Cat_Name']}<br>Collection</h3>
			        <a href="Pro_Cat.php?id={$row['Cat_ID']}" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</div>
	</div>
CA;
echo $cat;
}

?>

