			
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
 		<h3 id="forms-example" class="">Recieve Message</h3>
 		<form method="post" action="<?php echo base_url().'addroutepost'?>" enctype="multipart/form-data">
 			<?php
 			foreach($this->output as $o)
 			{


 			?>
 			 <div class="form-group">
    <label for="exampleInputEmail1">To:</label><?php echo $o->rec ?><br><br>
    <label for="exampleInputEmail1">Message:</label><?php echo $o->message ?><br><br>
     <label for="exampleInputEmail1">Status:</label><?php if($o->status==1)
      echo "seen";
      else 
      	echo "Unread"; 
      ?><br><br>
 <label for="exampleInputEmail1">Date And Time:</label><?php echo $o->message_datetime ?>
 <a class="btn btn-success" href="reply?id=<?php echo $o->id ?>">Reply</a>
   
  </div>
<?php } ?>
 			
 
</form>
</div>
<!----->

      
    


