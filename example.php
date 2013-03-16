<?php
include('pushalot_api.php');
$pushalot = new Pushalot('35b9832daffc4793aa477e44c0b0910f');
//$pushalot->setProxy('http://localhost:12345','user:pass');
$success = $pushalot->sendMessage(array(
	'Title'=>'Hello world!',
	'Body'=>"This is a test message!\n\nSent by Pushalot",
	'LinkTitle'=>'Pushalot.com',
	'Link'=>'http://www.pushalot.com',
	'IsImportant'=>true,
	'IsSilent'=>false
	'Image'=>'https://pushalot.com/Content/Images/logo.png',
));
echo $success?'The message was submitted.':$pushalot->getError();
?>