<?php
include 'config.php';
include 'MysqlDB.php';
// header('Access-Control-Allow-Headers: Content-Type');
// header('Access-Control-Allow-Origin: http://localhost:8080');
// header('Content-Type: application/json');
// $user = $_POST['name'];
// var_dump ($_POST);
// echo ("Hello from server: $user");

// $host = "bgs2onkyc3eja1qtxjbe-mysql.services.clever-cloud.com";
// $user = "usoza3v9fqxjj54c";
// $password = "nrWfGYmJOGa4iNgmJUKZ";
// $dbname = "bgs2onkyc3eja1qtxjbe";
  
// $conn = new mysqli($host, $user, $password);
$conn = mysqli_connect($HOST, $USER, $PASSWORD, $DBNAME);
// if (!$conn) {
//   die("Connection failed: " . mysqli_connect_error());
// }
// echo "Connected successfully";

$sql = "SELECT * FROM Users";
$result = $conn->query($sql);
// var_dump ($result)


// for ($i=0 ; $i<mysqli_num_rows($result) ; $i++) {
//   echo ($i>0?',':'').json_encode(mysqli_fetch_object($result));
// }

$myDB = new MysqlDB($HOST, $USER, $PASSWORD, $DBNAME);
echo 'XXXXXXXX';
echo $myDB->getName();
// $con = mysqli($host, $user, $password,$dbname);
// $method = $_SERVER['REQUEST_METHOD'];
// $request = explode('/', trim($_SERVER['PATH_INFO'],'/'));
// if (!$con) {
//   die("Connection failed: " . mysqli_connect_error());
// }
// var_dump ($request)
// switch ($method) {
//     case 'GET':
//       $id = $_GET['id'];
//       $sql = "select * from users".($id?" where id=$id":''); 
//       break;
//     case 'POST':
//       $name = $_POST["name"];
//       $email = $_POST["email"];
//       $country = $_POST["country"];
//       $city = $_POST["city"];
//       $job = $_POST["job"];

//       $sql = "insert into contacts (name, email, city, country, job) values ('$name', '$email', '$city', '$country', '$job')"; 
//       break;
// }

// // run SQL statement
// $result = mysqli_query($con,$sql);

// // die if SQL statement failed
// if (!$result) {
//   http_response_code(404);
//   die(mysqli_error($con));
// }

// if ($method == 'GET') {
//     if (!$id) echo '[';
//     for ($i=0 ; $i<mysqli_num_rows($result) ; $i++) {
//       echo ($i>0?',':'').json_encode(mysqli_fetch_object($result));
//     }
//     if (!$id) echo ']';
//   } elseif ($method == 'POST') {
//     echo json_encode($result);
//   } else {
//     echo mysqli_affected_rows($con);
//   }

// $con->close();
// echo 'come!! fetch this value';
?>