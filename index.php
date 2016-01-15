<head>
</head>
<body>
  lol2

  <?php
  echo "Hello World!";

//Connect To Database
$hostname="localhost";

echo $hostname;
$username="yahia_dba";
$password="password";
$dbname="yahiabase";
$usertable="test_table";
$yourfield = "rr";


mysql_connect($hostname,$username, $password) or die ("<html><script language='JavaScript'>alert('Unable to connect to database! Please try again later.'),history.go(-1)</script></html>");
mysql_select_db($dbname);
$query = "SELECT * FROM $usertable";
$result = mysql_query($query);
if($result){  while($row = mysql_fetch_array($result))  {    $name = $row["$yourfield"];
  echo "Name: ".$name."<br>";  }}


echo "Bye World....";
?>
</body>
