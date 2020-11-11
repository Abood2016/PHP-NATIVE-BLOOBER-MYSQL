<?php


// if (isset($_POST['name'])) { // مش شرط الأسم اي فيلد من الفوورم بس عشان اوصل للفورم بشكل صحيح

// $name =  $_POST['name'];
// $email = $_POST['email'];
// $pass =  $_POST['password'];

//start connection
// $host = "localhost";
// $username = "root";
// $password = "";
// $database = "profile";

// $connection = mysqli_connect($host, $username, $password, $database);

// if ($connection) {
//     echo 'Connect Success';
// } else {
//     echo 'Connect Failed';
// }

//Insert query
// $query = " INSERT INTO `users` (`name`,`email`,`password`) VALUES ('$name','$email',md5('$pass')) ";
// $result = mysqli_query($connection, $query);

// if ($result) {
//     echo 'Insert Success';
// } else {
//     echo 'Insert Failed';
// }
// }
//--------------------------------------

//delete by id 

// if (isset($_POST['id'])) {

//     $id = $_POST['id'];
//     $name = $_POST['name'];

$host = "localhost";
$username = "root";
$password = "";
$database = "profile";

$connection = mysqli_connect($host, $username, $password, $database);


//delete query
// $deleteQuery = "DELETE FROM `users` WHERE `id` = $id";

//Updated query
// $updatedQuery = "UPDATE `users` SET `name` = '$name' WHERE `id` = $id";

//select query
$selectQuery = "SELECT * FROM `users`";

$rows = [];
$q = mysqli_query($connection, $selectQuery);


while ($result = mysqli_fetch_assoc($q)) {
    $rows[] = $result;
}

// print_r($rows);

//return if the query exc successfully
$result =  mysqli_affected_rows($connection);

if ($result == 1) {
    echo 'Done';
} else {
    echo 'error';
}


?>

<!DOCTYPE html>
<html>

<body>
    <table border="1">
        <thead>
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <?php
        foreach ($rows as $key => $value) {
            echo "<tr>";
            echo "<td>" . $value['id'] . "</td>";
            echo "<td>" . $value['name'] . "</td>";
            echo "<td>" . $value['email'] . "</td>";
        }
        echo "</tr>";
        ?>
    </table>
</body>

</html>