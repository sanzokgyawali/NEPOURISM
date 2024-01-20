                     
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
          <h1 class="page-header">Donate List</h1>
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
                            
                            <th data-field="sem">Donate Name</th>
                            <th data-field="pro">Refrence Number</th>
                            <th data-field="sem">Email</th>
                            <th data-field="sem">Contact</th>
                            <th data-field="sem">Event Id </th>
                         
                         
          
            
          </tr></thead>
                     <tbody>
                            <?php
                            $sn=0;
                            foreach($this->output as $o) 
                            {
                                   $sn++;
                                   echo "<tr><td>$sn</td>";
                                   echo "<td>$o->donate_name</td>";
                                   echo "<td>$o->ref_code</td>";
                                   echo "<td>$o->email</td>";
                                   //echo "<td>$o->admin_type</td>";
                                   echo "<td>$o->event_id</td>";

                                   echo "<td>$o->contact</td>";
                                   
                                 
                            }
                            ?>
                     </tbody>
          
        </table>
       </div>
   