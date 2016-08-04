<?php
switch ($_REQUEST['action']) {
	case 'sample1':
	echo "simple ajax is runned and sent data to you:";
		# code...
		break;
	case 'sample2':
	echo "post method applied and name=". $_POST['name'];
	break;
	default:
		# code...
		break;
}


?>