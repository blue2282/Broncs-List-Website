<?php foreach ($query as $row) {
  // print_r($row); 
} 
  ?>
  <h2 class="sub-header">Your Posts</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Title</th>
                  <th>Text</th>
                  
                </tr>
              </thead>
              <tbody>

              
                
                  <?php foreach ($query as $row) {
                  echo "<tr>";
                  echo "<td>";    
                  // since we have an array of objects we need to use reference operator  
                        
                  echo $row->title;
                  echo "</td>";

                   echo "<td>";                  
                  echo $row->text;
                  echo "</td>";

                  echo "<td>";                  
                  ?>
                  <a href="<?php echo base_url() . "site/deletePost/" . $row->id; ?>">
                  <button>x</button></a>
                  <?php
                  echo "</td>";
                  
                 echo "</tr>";

                  } ?>                
              </tbody>
            </table>
          </div>
</div>