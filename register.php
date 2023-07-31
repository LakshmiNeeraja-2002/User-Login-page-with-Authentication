<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registrations";
$conn = new mysqli($servername, $username, $password, $dbname, 3307);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$firstName = $_POST['first_name'];
$lastName = $_POST['last_name'];
$email = $_POST['email'];
$phoneNumber = $_POST['phone_number'];
$password = $_POST['password'];
$profilePic = $_FILES['profile_pic']['name']; 


$sql = "INSERT INTO User (first_name, last_name, email, phone_number, password, profile_pic) VALUES ('$firstName', '$lastName', '$email', '$phoneNumber', '$password', '$profilePic')";
if ($conn->query($sql) === TRUE) {
    $successMessage = "Registration successful";
    header("Location: welcome.php?first_name=$firstName&last_name=$lastName&email=$email&phone_number=$phoneNumber");
    exit();
} else {
    $errorMessage = "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration Successful</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <style>
    body {
      background-color: #f5f5f5;
    }

    .container {
      background-color: #ffffff;
      padding: 20px;
      margin-top: 20px;
    }

    .success-message {
      color: #155724;
      background-color: #d4edda;
      border-color: #c3e6cb;
      padding: 15px;
      margin-bottom: 20px;
    }
  </style>
</head>
<body>
  <div class="container">
    <?php if (isset($successMessage)): ?>
      <div class="success-message"><?php echo $successMessage; ?></div>
    <?php endif; ?>
  </div>
</body>
</html>
