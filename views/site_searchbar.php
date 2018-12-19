
<div class="container">
<?php

//opens a form that sends to search wben submitted
//style form with array;
$searchbarAttr = array('class'=>'form-control','name'=>'searchbar', 'placeholder'=>'Search', 'input'=>'text');

	echo form_open('site/searchbar');

		echo "<h2 class='sub-header'>Search</h2>";

    echo '<div class=" row col-lg-8">';

    echo '<div class="input-group">';
      

		echo form_input($searchbarAttr);
?>
<?php
$options = array(
                  'book'  => 'Books',
                  'phone'    => 'Phones',
                  'equipment'   => 'Equipment',
                  
                );

    echo '<span class="input-group-btn">';
    echo "<button class= 'btn btn-lrg btn-primary' type='submit'>Go!</button>";
    echo '</span>';
  echo'</div>';
echo'</div>';
echo form_dropdown('searchSelection', $options, 'All');





?>




<?php

    	 // print_r($this->model_search->search($this->input->post()));
  ?>
</div>

	
 
