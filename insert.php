<?php
$dbhost = 'localhost:8889';  // mysql伺服器主機地址
$dbuser = 'root';            // mysql使用者名稱
$dbpass = 'root';
$database = 'db_73';         // mysql使用者名稱密碼
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $database);


if ($conn->connect_error) {
    die("連接失敗" . $conn->connect_error);
}
// mysqli_query($conn, "SET NAMES 'UTF-8'");

$name = $_POST['name'];
$sex = $_POST['sex'];
$birthday = $_POST['birthday'];
$address = $_POST['address'];
$city = $_POST['city'];
$location = $_POST['location'];
$zone = $_POST['zone'];
$phone = $_POST['phone'];

$sql = "INSERT INTO info VALUES ( NULL , '$name','$sex' ,'$birthday','$address','$city','$location','$zone' , '$phone')";

if ($conn->query($sql) === TRUE) {
    echo "data inserted";
} else {
    echo "failed";
    die('無法插入資料: ' . mysqli_error($conn));
}

?>






