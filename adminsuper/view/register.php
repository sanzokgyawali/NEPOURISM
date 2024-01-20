			
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
 		<h3 id="forms-example" class="">Register New Vendor</h3>
 		<form method="post" action="<?php echo base_url().'registerpost'?>" enctype="multipart/form-data">
 			 <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Name" name="name" required>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email address" name="email" required>
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Contact</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Contact" name="contact" required>
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Type</label>
   <select class="form-control" name="type" required>
   	<option>Please Choose</option>
   	<option value="2">Hotel</option>
   	<option value="3">Guider</option>
   	<option value="4">Travel</option>
	<option value="5">Local Item Vendor</option>
   </select>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" required>
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Photo</label>
    <input type="file" class="form-control" id="exampleInputEmail1" placeholder="Photo" name="photo">
  </div>
  
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<!----->

      
    


