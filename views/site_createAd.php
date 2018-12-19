
<div class="row container">
<?php
echo $newTitle;
//opens a form that sends to search wben submitted
//style form with array;
//$formAttr = array('class'=>'sr-only', // something, something else);
$titlebox = array('class'=>'form-control','name'=>'title', 'placeholder'=>'Title', 'input'=>'text','value'=>$newTitle);
$postbox = array('class'=>'form-control','name'=>'postbox', 'placeholder'=>'Please provide information.', 'input'=>'text');
	
$titleSearch= array(

              'name' => 'titleSearch',
              'maxlength'=> '100',
              'size' => '50',
              'style'=> 'width:25%',
              'input'=>'text',
              'placeholder'=>'Search for title: ex Books ISBN num.'
            );

	echo form_open('site/addPost');

$options = array(
                  'book'  => 'Books',
                  'phone'    => 'Phones',
                  'equipment'   => 'Equipment',
                  
                );



echo form_dropdown('searchSelection', $options);
echo form_input($titleSearch);




?>

<?php


echo form_input($titlebox);


?>
<!-- The text box for posting. -->
<?php
     echo form_textarea($postbox);
  ?>

<!-- Submit button button -->


<?php
    	echo "<button class= 'btn btn-lg btn-primary btn-block' type='submit'>Add</button>";
    	 // print_r($this->model_search->search($this->input->post()));
  ?>
</div>