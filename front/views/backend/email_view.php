<?php
echo form_open('email/send');
echo form_input('name','','placeholder="Enter your name"');
echo form_input('email','','placeholder="Enter Email_id of sender"');
echo form_submit('submit','submit');
echo validation_errors();
echo form_close();

?>