<?php
if($_FILES['my_file']['error']>0){
	echo "There is a problem <br/>";
	switch($_FILES['my_file']['error']){
		case 1: echo 'file exceeded upload_max_size';break;
		case 2: echo 'file exceede dmax_file_size';break;
		case 3: echo 'file partially uploaded';break;
		case 4: echo 'no file uploaded';break;
		case 5: echo 'cannot upload file';break;
		case 6; echo 'upload failed, cannot write into disk';
	}
	exit;
}
/*echo 'directory name is '.$_FILES['my_file']['tmp_name'].'<br/>';
echo 'file name is '.$_FILES['my_file']['name'].'<br/>';
echo 'file size is '.$_FILES['my_file']['size'].'<br/>';
echo 'file type is '.$_FILES['my_file']['type'].'<br/>';*/

if($_FILES['my_file']['type']!='text/plain'){
	echo 
}
?>