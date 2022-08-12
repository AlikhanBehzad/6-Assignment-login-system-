<?php
//include 'Index1.php';
$db_connection = new mysqli('localhost','root','','department');



if(!$db_connection){
	//echo"Connected Successfully";
	echo "Something is wrong";
}
else{
echo " Connected Successfully";	
}

// Note: The CRUD SQL_Queries do not work, I don't know why?? I am sure the connection is write because I see the Message. When I write the SQL Quries i cann't see the Updates in database.
/*$sql_query ='INSERT INTO teachers (Name, Last_name, Email, Address, Position) values("Khan Mohammad", "Joya","Khan@kpu.edu.af", " Kabul city","Lecturer")' ;
$sql_query = 'INSERT INTO teachers (Name, Last_name, Email, Address, Position) values ("Arif Hussain", "Rahimi","Arif@kpu.edu.af", " Kabul city","Lecturer")';
$sql_query ='INSERT INTO teachers (Name, Last_name, Email, Address, Position) values ("Sakina","Mohammadi","Mohammadi@kpu.edu.af","Barchi","Assist Professor")';
$sql_query ='INSERT INTO teachers (Name, Last_name, Email, Address, Position) values ("Ahmad Shah","Mobariz","Mobariz@gmail.com","Barchi","Assist Professor")';
$sql_query ='INSERT INTO teachers (Name, Last_name, Email, Address, Position) values (" Shah","Mobariz","Shah@gmail.com","Barchi","Assist Professor")';
*/
//$sql_query='UPDATE teachers SET Last_name = "Paiman" WHERE Name = " Arif Hussain";
//$sql_query = 'DELETE FROM teachers WHERE Name="Arif Hussain"';
//$sql_query = 'UPDATE teachers SET Name ="Mohammad Khan" WHERE Name ="Khan Mohammad"';
$sql_query = 'SELECT * FROM teachers';

//$sql_query = 'SELECT * FROM teachers where Last_name="Rasa"';
$result = $db_connection->query($sql_query);
echo '<pre>';
//var_dump($result);
//$Data = $result->fetch_assoc();
$Data = $result->fetch_all(MYSQLI_ASSOC);
//var_dump($Data);
/*if($con){
   echo "Data Inserted Successfully";
}
else{
    die(mysqli_error($con));
}
*/



?>
<Table border ="1">
<tr>
<th>Name</th>
<th>Last_name</th>
<th>Email</th>
<th>Address</th>
<th>Position</th>
</tr>


<tbody>
<?php

foreach ($Data as $record) {
	echo '<tr>

			<td>' . $record ['Name'] .'</td>
			<td>' . $record['Last_name'] . '</td>
			<td>' . $record['Email'] . '</td>
			<td> ' . $record['Address'] .'</td>
			<td>' . $record['Position'] .'</td>

	</tr>';
}

?>


</tbody>
</Table>