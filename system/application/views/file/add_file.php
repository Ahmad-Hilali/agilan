<?php
/*
needs: form validation, upload of photo
*/


echo heading("Add File Details", 2);
echo form_open('files/add_details');


echo form_hidden('id',$file_id);

echo form_label('Title', 'title');
$input = array('name' => 'title', 'id' => 'title', 'size'=> 40, 'class' => ':required :only_on_submit');
echo form_input($input);


echo form_label('Description', 'description');
$input = array('name' => 'description', 'id' => 'description', 'rows'=> 10, 'cols' => 35);
echo form_textarea($input);

echo form_label('Tags', 'tags');
$input = array('name' => 'tags', 'id' => 'tags', 'size'=> 40, 'class' => ':required :only_on_submit');
echo form_input($input);


echo br(2);
echo form_submit('add','add');

echo form_close();

?>