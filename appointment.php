<html>
    <body bgcolor="aqua">
        
    </body>
    </html>


<?php
$name = $_POST['pname'];
$email = $_POST['pemail'];
$phone = $_POST['phone'];
$doctor = $_POST['pdoctor'];
$date = $_POST['date'];
$time = $_POST['time'];

// Create connection
$conn = new mysqli('localhost', 'root', '', 'hospital',3307);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    $stmt = $conn->prepare("INSERT INTO appointments (pname, pemail, phone, pdoctor, date, time) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssis", $name, $email, $phone, $doctor, $date, $time);
    $stmt->execute();
    echo "Appointment Successfully...";
    echo"<br>";
    echo"patients Name:",$name;
    echo"<br>";
    echo"Email:",$email;
    echo"<br>";
    echo"Phone:",$phone;
    echo"<br>";
    echo"Doctor:",$doctor;
    echo"<br>";
    echo"Appointment Date:",$date;
    echo"<br>";
    echo"Appointment time:",$time;
    echo"<br>";
    $stmt->close();
    $conn->close();
}
?>