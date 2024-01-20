			
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
 		<h3 id="forms-example" class="">Register New Place</h3>
 		<form method="post" action="<?php echo base_url().'addplacepost'?>" enctype="multipart/form-data">
 			 <div class="form-group">
    <label for="exampleInputEmail1">Place Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Place Name" name="place_name" required>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Address</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Address" name="address" required>
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Remarks</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Remarks" name="remarks" required>
  </div>
    
    <div class="form-group">
    <label for="exampleInputEmail1">Venue identity photo</label>
    <input type="file" class="form-control" id="exampleInputEmail1" placeholder="Photo" name="photo">
  </div>
  
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<!----->

      
    


