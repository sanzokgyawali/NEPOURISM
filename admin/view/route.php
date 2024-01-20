                     
                   <div class="banner">
                     <h2>
                            <a href="index.html">Home</a>
                            <i class="fa fa-angle-right"></i>
                            <span>Forms</span>
                            </h2>
                  </div>
              <!--//banner-->
       <!--grid-->
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header">Destination List</h1>
        </div>
      </div>

        <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <!-- <div class="panel-heading">Basic Table</div> -->
          <div class="panel-body"> 
            <form method="post" action="<?php echo base_url().'addroutepostagain'?>" enctype="multipart/form-data">
              <input type="submit" name="submit" value="Submit" class="btn btn-primary"><br><br>
            <table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" border="2">
                     <thead>
          <tr>

            <th data-field="sn">S.N</th>
                            
                            <th data-field="sem">Destination Name</th>
                            <th data-field="pro">Start Name</th>
                            <th data-field="sem"> Route Description</th>
                            <th data-field="sem">Route Advantages</th>
                          <th data-field="Faculty Name">Route Disadvantages</th>
                          <th data-field="Faculty Name">Other Places</th>
                          <th data-field="">Choose This Place</th>

          
            
          </tr></thead>
                     <tbody>
                            <?php
                            $sn=0;
                            foreach($this->output as $o) 
                            {
                                   $sn++;
                                   echo "<tr><td>$sn</td>";
                                   echo "<td>$o->dest_name</td>";
                                   echo "<td>$o->start_name</td>";
                                   echo "<td>$o->route_desc</td>";
                                   //echo "<td>$o->admin_type</td>";

                                   echo "<td>$o->adv_routes</td>";
                                   echo "<td>$o->des_routes</td>";
                                   echo "<td>$o->other_places</td>";
                                  // echo "<td>$o->last_login</td>";
                                   echo "<td><input type='checkbox' name='cb".$sn."' value='".$o->id."'> </td>";
                                   
                                 
                            }
                            ?>
                            <input type="hidden" name="id" value="<?php echo $sn ?>">
                     </tbody>

          
        </table>
        </form>
       </div>
   