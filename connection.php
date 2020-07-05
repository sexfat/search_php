<?php
$dbhost = 'localhost:8889';  // mysql伺服器主機地址
$dbuser = 'root';            // mysql使用者名稱
$dbpass = 'root';
$database = 'db_73';         // mysql使用者名稱密碼
$conn = mysqli_connect($dbhost, $dbuser, $dbpass , $database);


if ($conn->connect_error){
  die("連接失敗" . $conn->connect_error);
}
mysqli_query($conn, "SET NAMES 'UTF-8'");

$sql =  "SELECT ID , name , sex FROM info";
$result = $conn -> query($sql);


if ($result->num_rows > 0) {
    // 输出数据
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["ID"]. " - Name: " . $row["name"].  "  性別 " . $row["sex"]. "<br>";
    }
} else {
    echo "0 结果";
}
$conn->close();

?>