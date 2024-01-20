			
		     <div class="banner">
		    	<h2>
				<a href="index.html">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Forms</span>
				</h2>
		    </div>
		<!--//banner-->
 	<!--grid-->
 	<div class="grid-form">
 		<div class="grid-form1">

			<?php
			@session_start();
			if(isset($_SESSION['success'])):
				?>
				<span class="alert alert-success">
					<?php 
			echo $_SESSION['success'];
			unset($_SESSION['success']);
			?>
			</span><?php 
		endif
			?>
		</span>
 		<h3 id="forms-example" class="">Register New Route</h3>
 		<form method="post" action="<?php echo base_url().'addroutepost'?>" enctype="multipart/form-data">
 			 <div class="form-group">
    <label for="exampleInputEmail1">Destination Name</label>
   <select id="select" name="dest_name" class="form-control">
   	<?php 
   	foreach($this->output as $o)
   	{
   		echo "<option>".$o->place_name."</option>";
   	}
   	 ?>
   	
   </select>

  </div>
 			
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<!----->

      
    


