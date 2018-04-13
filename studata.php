<?
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];

	    function GetImageExtension($imagetype)
	     {
	       if(empty($imagetype)) return false;
	       switch($imagetype)
	       {
	           case 'image/bmp': return '.bmp';
	           case 'image/gif': return '.gif';
	           case 'image/jpeg': return '.jpg';
	           case 'image/png': return '.png';
	           default: return false;
	       }
	     }    

	if (!empty($_FILES["myfile"]["name"])) {
	    $file_name=$_FILES["myfile"]["name"];
	    $temp_name=$_FILES["myfile"]["tmp_name"];
	    $imgtype=$_FILES["myfile"]["type"];
	    $ext= GetImageExtension($imgtype);
	    $imagename=date("d-m-Y")."-".time().$ext;
	    $target_path = "images/".$imagename; 
	 
	$uploadfile='images/'.$_FILES['myfile']['name'];
echo 'directory is '.$uploadfile.'<br />';
if(is_uploaded_file($_FILES['myfile']['tmp_name'])){
	if(!move_uploaded_file($_FILES['myfile']['tmp_name'], $uploadfile)){
		echo' could not move file from tmp to upload directory';
		exit;
	}
}else{
	echo' cannot save file under tmp';
	exit;
}
echo $_FILES['myfile']['name'].' uploaded successfully<br />';

}

$db=@mysqli_connect('localhost','root','')Or die("<p>The database server is not available.</p>");
echo "<p>Successfully connected to the database server.</p>";
// select a database 
@mysqli_select_db($db, "student_info") Or die("<p>The database is not available.</p>");
echo "<p>Successfully opened the database.</p>";
// create a query
$SQLstring = "INSERT INTO student(fname,lname,email,image) VALUES('$fname', '$lname', '$email','$uploadfile')";
// Execute the Query
$QueryResult = @mysqli_query($db, $SQLstring) Or die('<p>Unable to execute the query</p><p>Error code '. mysqli_errno($db).
 ': '. mysqli_error($db)) . '</p>';

echo "<p>Successfully added the records.</p>";
echo "<p>" . mysqli_info($db) . "</p>";
// Close the database connection
mysqli_close($db);
echo "View Students Records by clicking <a href='stuinfo.php' />here</a>";

?>