<!DOCTYPE html>
<html>
<head>
  <title>Welcome</title>
</head>
<body>
  <h1>Welcome, <?php echo $_GET['first_name'] . ' ' . $_GET['last_name']; ?>!</h1>
  <p>Your Name: <?php echo $_GET['first_name'].' ' .$_GET['last_name']; ?></p>
  <p>Your email: <?php echo $_GET['email']; ?></p>
  <p>Your Phonenumber: <?php echo $_GET['phone_number']; ?></p>
  
</body>
</html>
