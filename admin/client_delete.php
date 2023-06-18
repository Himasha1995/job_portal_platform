<?php
include "connection.php";
$id = $_GET["id"];
$sql = "DELETE FROM `users` WHERE id = $id";
$result = mysqli_query($conn, $sql);

if ($result) {
  header("Location:client_details.php?msg=Data deleted successfully");
} else {
  echo "Failed: " . mysqli_error($conn);
}