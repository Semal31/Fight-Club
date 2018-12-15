<?php
require "../Employee/includese/dbh.inc.php";



if(isset($_POST['submit'])) {
  
  require "../Employee/includese/dbh.inc.php";
  
  $name = $_POST['full'];
  $item = $_POST['item'];
  $color = $_POST['color'];
  $quantity = $_POST['quantity'];
  $address = $_POST['address'];
  $number = $_POST['number'];
  $email = $_POST['email'];
  $shipping = $_POST['shipping-type'];

  if (empty($name) || empty($item) || empty($color) || empty($quantity) || empty($address) || empty($number) || empty($email) || empty($shipping)) {
    header("Location: ../Order/form.php?error=emptyfields");
    exit();
  }
  
  $sql = "INSERT INTO Orders (item, color, quantity, customer, address, number, email, shipping) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
  $stmt = mysqli_stmt_init($conn);
 
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("Location: ../index.php?error=sqlerror");
    exit();
  }
 
  else {
    mysqli_stmt_bind_param($stmt, "ssssssss", $item, $color, $quantity, $name, $address, $number, $email, $shipping);
    mysqli_stmt_execute($stmt);
    header("Location: ../index.php?success=checkoutSuccess");
    exit();
  }
 
}
else {
    header("Location: ../index.php");
    exit();
}

?>
