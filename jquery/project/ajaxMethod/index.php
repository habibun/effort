<!DOCTYPE html>
<html>
    <head>
        <title>Webcoachbd jQuery ajax method tutorials</title>
        <link rel="stylesheet" href="style.css"
        type="text/css" />
        <script src="jquery_latest.js" type="text/javascript"></script>
        <script src="script.js" type="text/javascript"></script>
    </head>
    
    <body>
		<div id="content">
		<?php
		$db = mysql_connect('localhost','root','');
		mysql_select_db('rating_db',$db);
		$query = 'SELECT * FROM product';
		$result = mysql_query($query);
		while($row = mysql_fetch_array($result)){?>
		<?php
			$count_query = 'SELECT * FROM ratings WHERE product_id ='.$row['product_id'];
			$count_result = mysql_query($count_query);
			$totalRating = mysql_num_rows($count_result);
			$sql = 'SELECT AVG(rating) FROM ratings WHERE product_id ='.$row['product_id'];
			$results = mysql_query($sql);
			
			while($rows = mysql_fetch_array($results)){?>
		<div class="header">
		   <h3 class="title"><?php echo $row['title'];?></h3>
		   <p class="p_id"><?php echo '[Product Id : '.$row['product_id'].']';?></p>
		</div>
		   <p><?php echo $row['product_details'];?></p>
		   <div class="ratings">
			 <a href="#">1</a>
			 <a href="#">2</a>
			 <a href="#">3</a>
			 <a href="#">4</a>
			 <a href="#">5</a>
		   </div>
		   <span class="h_id"><?php echo $row['product_id'];?></span>
		   <div class="avg_rate">
			<p>Average Rating : <?php echo floor($rows['AVG(rating)']).' (Total rating given '.$totalRating.')';?></p>
			
		   </div>
		   <?php }?>
		<?php }?>
		</div>
	</body>
</html>