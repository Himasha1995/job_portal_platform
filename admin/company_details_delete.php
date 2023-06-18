<?php
include "connection.php";
$id = $_GET["id"];
$sql = "DELETE FROM `add_company` WHERE id = $id";
$result = mysqli_query($conn, $sql);

if ($result) {
  header("Location: company_detals.php?msg=Data deleted successfully");
} else {
  echo "Failed: " . mysqli_error($conn);
}