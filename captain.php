<head>
<title>350 week 5</title>
</head>
<body>
<h1>350 Week 5</h1>
<?php
  include 'testData.php';
   $temp = [[]];
   $temp = get2dArray();
   $counter = 0;
 ?>
 <!-- OUTPUT  -->
 <?php
	foreach($temp as $key=>$val){
		if($val !== ""){ ?>
			<h3><?php
				echo $key . ':  ';
			?></h3>
			<ul>
			<?php	
				for( $i = 0; $i<sizeof($val); $i++ ) { 
				?>
					<li><?php echo $val[$i]; ?><li>
				<?php 
				}
			?>
			</ul>
			<?php
		}
	}
   echo "<br>";
?> 
</body>
