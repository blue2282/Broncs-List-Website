<?php foreach ($query as $row) {
} 
  ?>
  <h2 class="sub-header">Search Results</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                   <th>Email</th>          
                  <th>Title of adPost</th>
                  <th>Text</th>
                  
                </tr>
              </thead>
              <tbody>

              
                
                  <?php foreach ($query as $row) {
                  echo "<tr>";
                   echo "<td>";    
                           
                  echo $row->email;
                  echo "</td>";
                  echo "<td>";                         
                  echo $row->title;
                  echo "</td>";

                   echo "<td>";                  
                  echo $row->text;
                  echo "</td>";
                  
                 echo "</tr>";

                  } ?>                
              </tbody>
            </table>
          </div>
</div>