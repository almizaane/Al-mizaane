<?php
$conn  = new PDO('mysql:host=localhost;dbname=mizaane', 'root', '');
if(isset($_POST['submit']))
{	
	$contenu=$_FILES['file']['name'];
    $temps=$_FILES['file']['tmp_name'];
    move_uploaded_file($temps,"viideos/".$contenu);
}
$conn -> exec("insert into `miz_cdqs`(ID,CONTENU) values('','$contenu')");
echo "Enregistrement reussi";
?>
