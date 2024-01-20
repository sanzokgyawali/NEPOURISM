                     
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
                          <th data-field="Remove">Action</th>

                           
          
            
          </tr></thead>
                     <tbody>
                            <?php
                            $sn=0;

                            foreach($this->output1 as $ou) 
                            {
                              $o=$this->route->routedetail($ou->route_id);
                             // echo $ou->route_id;

                                   $sn++;
                                   echo "<tr><td>$sn</td>";
                                   echo "<td>".$o[0]->dest_name."</td>";
                                   echo "<td>".$o[0]->start_name."</td>";
                                   echo "<td>".$o[0]->route_desc."</td>";
                                   //echo "<td>$o->admin_type</td>";

                                   echo "<td>".$o[0]->adv_routes."</td>";
                                   echo "<td>".$o[0]->des_routes."</td>";
                                   echo "<td>".$o[0]->other_places."</td>";
                                  // echo "<td>$o->last_login</td>";
                                   echo "<td><a href='remove?id=".$o[0]->id."' class='btn btn-danger'>Remove</td>";
                                 
                                 
                            }
                            ?>
                     </tbody>
          
        </table>
       </div>
   