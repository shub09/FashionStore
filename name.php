<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$link =mysql_connect("localhost","root","") or die ("cannot connect with database"); //connect with database
 $nbsp;
 
mysql_select_db("library",$link)or die("database did not select"); //select database
 
echo"database ok";
if(isset($_POST['Name'])==true){
		$Name=$_POST['Name'];
		
		if($Name==""){
			echo '<p>Please Enter all the fields and try again</p>';
		}else{
	
      $query = "SELECT * FROM booklist where Name='$Name'";
	  $result= mysql_query($query,$link);

echo "<table border='5'>" ;
while($row = mysqli_fetch_array($result))
  {
   echo "<tr>";
  echo "<td>" . $row['Name'] . "</td>"; 
echo "&nbsp;" ;
  echo "<td>" . $row['Bookid'] . "</td>";
echo "&nbsp;" ;
echo "<td>" . $row['Subject'] . "</td>"; 
echo "&nbsp;" ;
echo "<td>" . $row['Author'] . "</td>";
echo "&nbsp;" ;
echo "<td>" . $row['Branch'] . "</td>";
echo "&nbsp;" ;
echo "</tr>";
 echo "<br>";
  }
echo "</table>";
		}
}
mysqli_close($con);
?>
</body>
</html>