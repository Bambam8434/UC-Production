<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Origin: http://uncodemy.online');
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
        $location = $_POST['location'];
     

        // $sql = "INSERT INTO uncodemyincontactform (name, email, mobile, location, course, mode) VALUES ('$name', '$email', '$mobile', '$location', '$course', '$mode')";
        $sql = "INSERT INTO uncodata (name, email, mobile, location) VALUES ('$name', '$email', '$mobile', '$location')";
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
