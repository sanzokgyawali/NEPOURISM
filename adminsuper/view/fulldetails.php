			
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

			
		</span>
 		<h3 id="forms-example" class="">Register New Place</h3>
 		Destination Name: <?php echo $this->output[0]->dest_name ?><br>	
 		Start Name: <?php echo $this->output[0]->start_name ?><br>	
 		Route Description: <?php echo $this->output[0]->route_desc	 ?><br>	
 		Route Advantage: <?php 	echo $this->output[0]->adv_routes ?><br>	
 		Route Disadvantage: <?php 	echo $this->output[0]->des_routes ?><br>	
 		Other Places: <?php echo $this->output[0]->other_places	 ?><br>	<br>	
 		Images: 
 		<?php
 		foreach($this->output1 as $o)
 		{?>
 			Title: <?php echo $o->title ?><br>	
 			Image: <?php echo "<img src='".base_url()."view/images/".$o->photo."' height='200px' width='200px'>" ?>

 		<?php } 	
 		 ?> 
</div>
<!----->

      
    


