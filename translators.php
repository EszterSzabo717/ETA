 <?php include('include/config.php');?>
  <?php include('include/head.php');?>
  <?php include('include/footer.php');?>	
	<?php include('include/js.php');?>

<div class="page-header">
				<h1 class="reqtoptitel bg-dark bg-light fixed-top">
					 <small>OUR TRANSLATORS</small> 
				</h1>
			
			</div>
<div class="mainbody">
<div class="container-fluid">

	
	<?php foreach($profile as $val):?>
			<div class="row">		<img style="width:250 ; height: 200px" src="<?php echo $val['photo'];?>"> <br><?php echo $val['translator'];?><br><?php echo $val['greeting'];?></div>
					<?php endforeach;?>
	
	</div>
	</div>
	
	
		
		

