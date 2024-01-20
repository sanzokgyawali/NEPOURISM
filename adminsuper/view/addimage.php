			
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
 		<h3 id="forms-example" class="">Add Image</h3>
 		<form method="post" action="<?php echo base_url().'addimagepost'?>" enctype="multipart/form-data">
 			 <div class="addmore">
 			 <div class="form-group">
 			 	<input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
 			 	
    <label for="exampleInputEmail1">Image Title</label>
    <input type="text" class="form-control" id="exampleInputEmail1"  name="title0" required>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Image</label>
    <input type="file" class="form-control" id="exampleInputEmail1" placeholder="Address" name="photo0" required>
  </div>
   </div>

   
    <div class="form-group">
   <button id="addmore">Add Image</button>
  </div>
  <div class="form-group">
   <button id="remove">Remove Image</button>
  </div>
  <input type="hidden" id="number" name="number" value="0">
  <script>
  	var i=1;
  	$("#addmore").click(function(){
  			$(".addmore").append('<div id="check'+i+'"><div class="form-group"> <label for="exampleInputEmail1">Image Title</label><input type="text" class="form-control" id="exampleInputEmail1" placeholder="Place Name" name="title'+i+'" required></div><div class="form-group"><label for="exampleInputEmail1">Image</label><input type="file" class="form-control" id="exampleInputEmail1" placeholder="Address" name="photo'+i+'" required></div></div></div>');
  			i++;
  			$("#number").val(i);
  	});
  	$("#remove").click(function(){
  				//alert("yes");
  			i--;
  			$("#check"+i).remove();
  			$("#number").val(i);
  	});
  </script>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<!----->

      
    


