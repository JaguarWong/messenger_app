<?php
if (empty($_POST)) {
    header("Location: index.php");
}

include 'connection.php';

echo "<pre>";

$val1 = "login";
$val2 = "password";

if ($query = $conn->prepare("SELECT ?, ? FROM users")){
  $query->bind_param("ss", $val1, $val2);
  $query->execute();
  $result = $query->get_result();
  $query->close();
};

print_r($result);

while ($iter = mysqli_fetch_array($result)) {
    echo "<p>";
    var_dump($iter[0]);
    echo " | Data";
    echo "</p>";
}

echo "</pre>";
?>