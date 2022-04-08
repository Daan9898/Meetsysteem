<?php
$allowed_file_types = ['image/jpeg', 'image/png'];
$allowed_size_mb = 2; 

// validate upload error
switch($_FILES['file']['error']) {
	// no error
	case UPLOAD_ERR_OK:
		break;

	// no file
	case UPLOAD_ERR_NO_FILE:
		exit('Error : No file send as attachment');

	// php.ini file size exceeded 
	case UPLOAD_ERR_INI_SIZE:
		exit('Error : File size exceeded as set in php.ini');

	// other upload error
	default:
        exit('Error : File upload failed');
}
$img = $_POST['file'];
$img = str_replace('data:image/png;base64,', '', $img);
$img = str_replace(' ', '+', $img);
$data = base64_decode($img);
$file_extension = "png";
$file_unique_name=md5(date('Y-m-d H:i:s:u'));;
$file_name = $file_unique_name . '.' . $file_extension;

$destination = 'upload/' . $file_name;
$success = file_put_contents($destination, $data);
if($success)
	echo 'File uploaded successfully';
else
	echo 'Error: Uploaded file failed to be saved';
?>