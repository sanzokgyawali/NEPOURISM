			
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
 		<h3 id="forms-example" class="">Add Route</h3>
 		<form method="post" action="<?php echo base_url().'addroutepost'?>" enctype="multipart/form-data">
 			 <div class="form-group">
    <label for="exampleInputEmail1">Destination</label>
  <select id="dest"  class="form-control" name="dest_name">
<?php 	
foreach($this->output1 as $o)
{
	echo "<option>$o->place_name</option>";
}
 ?>
  </select>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Start Position</label>
   <select id="start"  class="form-control" name="start_name">
   <?php
   foreach($this->output as $o)
   {
   	echo "<option>$o->place_name</option>";
   }
   ?>
</select>
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Route Description</label>
   <textarea class="ckeditor" name="route_desc"></textarea>
               
  </div>
   <div class="form-group">
    <label for="exampleInputEmail1">Route Advantages</label>
   <textarea class="ckeditor" name="adv_routes"></textarea>
               
  </div>
   <div class="form-group">
    <label for="exampleInputEmail1">Route Disadvantages</label>
   <textarea class="ckeditor" name="des_route"></textarea>
               
  </div>
   <div class="form-group">
    <label for="exampleInputEmail1">Other Place to Visit</label>
   <textarea class="ckeditor" name="other_place"></textarea>
               
  </div>
    
   
  
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<!----->

      
    


