			
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
 		<h3 id="forms-example" class="">Register New Event</h3>
 		<form method="post" action="<?php echo base_url().'addeventpost'?>" enctype="multipart/form-data">
 			 <div class="form-group">
    <label for="exampleInputEmail1">Event Title</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Place Name" name="event_title" required>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Event Description</label>
   <textarea class="ckeditor" name="event_description"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Destination For Event</label>
	<select name="AddDestination">
<?php
var_dump($this->output);
foreach($this->output1 as $o)
{
	echo "<option value='$o->place_name'>$o->place_name</option>";
}

?>
			</select>
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Start Date Time</label>
    <input type="datetime-local" class="form-control"  name="start_date_time" required>
  </div>
    
    <div class="form-group">
    <label for="exampleInputEmail1">End Date Time</label>
    <input type="datetime-local" class="form-control" id="exampleInputEmail1" placeholder="Photo" name="end_date_time">
  </div>
  
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<!----->

      
    


