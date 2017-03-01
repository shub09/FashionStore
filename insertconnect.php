<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<p>
<?php
 
/*$NAME=$_REQUEST['NAME'];
 $CONTACT=$_REQUEST['CONTACT'];
 $EMAIL=$_REQUEST['EMAIL'];
 $USERNAME=$_REQUEST['USERNAME'];
 $PASSWORD=$_REQUEST['PASSWORD'];*/
 $NAME = isset($_POST['book']) ? $_POST['book'] : '';
$ID = isset($_POST['id']) ? $_POST['id'] : '';
$SUBJECT = isset($_POST['sub']) ? $_POST['sub'] : '';
$AUTHOR = isset($_POST['author']) ? $_POST['author'] : '';
$BRANCH = isset($_POST['branch']) ? $_POST['branch'] : '';
$COPIES = isset($_POST['copies']) ? $_POST['copies'] : '';

$link =mysql_connect("localhost","root","") or die ("cannot connect with database"); //connect with database
 $nbsp;
 
mysql_select_db("library",$link)or die("database did not select"); //select database
 
echo"database ok";
 
$query= "insert into booklist  values('".$NAME."','".$ID."','".$SUBJECT."','".$AUTHOR."','".$BRANCH."','".$COPIES."')"; //query for inserting data

If(!mysql_query($query,$link))
 
{
 
die("an unexpected problem occur in saving data into the database, try again!!!");
 
}//error message if data not saved
 
else{
 
echo "Registered Successfully"; //if data save show this message

 
}
 
?>
</p>
</body>
</html>