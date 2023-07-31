<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($username === 'admin' && $password === 'admin') {
      
        header("Location: user_list.php");
        exit();
    } else {
      
        $error = "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>User List</title>
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <h3 class="mt-5">User List</h3>
    <?php if (isset($error)): ?>
      <div class="alert alert-danger"><?php echo $error; ?></div>
    <?php endif; ?>

    <table class="table table-bordered table-striped mt-4">
      <thead>
        <tr>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Email</th>
      
        </tr>
      </thead>
      <tbody>
      
        <?php
      
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "registrations";
        $conn = new mysqli($servername, $username, $password, $dbname, 3307);

        
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

      
        $sql = "SELECT * FROM user";
        $result = $conn->query($sql);


        if ($result->num_rows > 0) {
          
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["first_name"] . "</td>";
                echo "<td>" . $row["last_name"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
              
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No users found.</td></tr>";
        }

        $conn->close();
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>
