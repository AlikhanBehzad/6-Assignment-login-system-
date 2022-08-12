<?php
include'connect.php';
if(isset($_POST['submit'])){
    $Name=$_POST['Name'];
    $Last_name=$_POST['last_name'];
    $Email=$_POST['emailaddress'];
    $Address=$_POST['address'];
    $Position=$_POST['Position'];
    $sql="insert into 'Teachers'(Name, Last_name, Email,Address, Position) value('$Name','$Last_name','$Email','$Address','$Position')";
    $sql_query='INSERT INTO teachers (Name, Last_name, Email, Address, Position) value ("Ahmad","Mohammadi","Mohammadi@gmail.com","Barchi","Assist Professor")';
    $result=mysqli_query($db_connection,$db_connection);
    if($result){

        echo "Data Inserted successfully";
    }
    else{
        echo "something wrong happened";
    }

}


?>
//<!DOCTYPE html>
<html>
<head>
    <title>
CodeWeekend
    </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <nave>

    </nave>
    <aside>

    </aside>
 
    <section>
        <h4> Please write down your Information</h4>
        <div class="HR">

            <hr>
        </div>
        <div class="info">
     <form action=" connect.php" method="post">

    <label for="name"> First_Name</label><br>
    <input type="text" id="name" name="Name" placeholder="First name:"> <br>
    <Label for="Last_name">Last Name</Label><br>
    <input type="text" id="Last_name" name="last_name" placeholder="Last Name:"> <br>
    <Label for="email">Email</Label><br>
    <input type="email" id="Email" name="emailaddress" placeholder="Email Address:"> <br>
    <Label for="Address"> Adress</Label> <br>
    <input type="text" id="address" name="address" placeholder="Address:"> <br>
    <Label  for="position"> Position</Label> <br>
    <input type="text" id="Position" name="Position" placeholder="Position:"> <br>
    <button type="button " name="submit"> submit</button>
     </form>
    </div>
    </section>
    <footer>

    </footer>
</body>


</html>