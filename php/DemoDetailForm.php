<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');

// $conn = mysqli_connect('localhost', 'uncodemylandingpage', 'OkWRwPEJY0sT', 'uncodemylandingpage');
$conn = mysqli_connect('ucdb.cbutm1vn3zay.eu-north-1.rds.amazonaws.com', 'admin', 'UCDatabase8434', 'ucdatabase');


if (mysqli_connect_error()) {
    echo mysqli_connect_error();
    exit();
} else {
   
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $course = $_POST['course'];
        $date = $_POST['date'];
        $fromTime = $_POST['fromTime'];
        $toTime = $_POST['toTime'];

        // $sql = "INSERT INTO Demoincontactform (name, email, mobile, course, date, fromTime, toTime) VALUES ('$name', '$email', '$mobile', '$course', '$date', '$fromTime', '$toTime')";
        $sql = "INSERT INTO demodetail (name, email, mobile, course, date, fromTime, toTime) VALUES ('$name', '$email', '$mobile', '$course', '$date', '$fromTime', '$toTime')";
        $res = mysqli_query($conn, $sql);

        if ($res) {
            echo true;
        } else {
            echo false;
        }
    }
}

$conn->close();
?>
