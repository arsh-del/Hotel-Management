<!DOCTYPE html>
<html>
<head>
    <title>Hotel Project</title>
<center><h1>Hotel Project</h1></center>

</head>

<body bgcolor="powderblue">
<form id="register" action="" method="POST">

<fieldset>

<legend><center>Register</center></legend>

<label for="name" >Customer"s Full Name*: </label>
<input type="text" name="name" id="name" required /></br></br>

<label for="phonenumber" >Phone Number*: </label>
<input type="number" name="phonenumber" id="phonenumber" required /></br></br>

<label for="email" >ID Proof*:</label>
<input type="email" name="email" id="email"/></br></br>

<label for="parking" >Parking Slot alloted:</label>
<input type="number" name="parkingslot" id="parkingslot" required /></br></br>

<label for="checkin" >Check-in*:</label>
<input type="date" name="checkin" id="checkin" required /></br></br>

<label for="checkout" >Check-out*:</label>
<input type="date" name="checkout" id="checkout" required /></br></br>

<label for="bill" >Total Bill:</label>
<input type="number" name="totalbill" id="totalbill" required /></br></br>

<input type="submit" name="submit" value="Register(insert action)"/>


</fieldset>
</form>

<?php
    
    include'connection.php';

    if(isset($_POST["submit"]))
    {
        $name = $_POST['name'];
        $PhoneNumber = $_POST['phonenumber'];
        $IDProof= $_POST['email'];
        $ParkingSlotAlloted = $_POST['parkingslot'];
        $CheckIn = $_POST['checkin'];
        $CheckOut = $_POST['checkout'];
        $TotalBill = $_POST['totalbill'];
       

   $sql = "insert into signup2(Name,PhoneNumber,IDProof,ParkingSlotAlloted,CheckIn,CheckOut,TotalBill)
           values('$name','$PhoneNumber','$IDProof','$ParkingSlotAlloted','$CheckIn','$CheckOut','$TotalBill')" ;

    $query = mysqli_query($con , $sql);

    if ($query)
    {
        echo '<script type="text/javascript">
                alert("sucessfully registered");
location="register.php";
</script>';
       

    }
    else
    {
        echo mysqli_error($con);
    }
}  




    ?>


</body>
</html>
