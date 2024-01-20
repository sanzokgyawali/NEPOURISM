                     
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
                            
                            <th data-field="sem">Event Title</th>
                            <th data-field="pro">Start Date Time</th>
                            <th data-field="sem">End Date Time</th>
                            <th data-field="sem">Event Description</th>
                            <th data-field="sem">Action  </th>
                         
          
            
          </tr></thead>
                     <tbody>
                            <?php
                            $sn=0;
                            foreach($this->output as $o) 
                            {
                                   $sn++;
                                   echo "<tr><td>$sn</td>";
                                   echo "<td>$o->event_title</td>";
                                   echo "<td>$o->start_date_time</td>";
                                   echo "<td>$o->end_date_time</td>";
                                   //echo "<td>$o->admin_type</td>";

                                   echo "<td>$o->event_description</td>";
                                   echo "<td><a href='".base_url()."deletevent?id=".$o->event_id."' class='btn btn-danger'>Delete</a> </td>";
                                 
                                 
                            }
                            ?>
                     </tbody>
          
        </table>
       </div>
   