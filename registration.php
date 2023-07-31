<!DOCTYPE html>
<html>
<head>
  <title>Registration Form</title>
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>

    .form-control-sm {
      width: 500px; 
    }
      .custom-container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .custom-form {
      max-width: 400px; 
      width: 100%;
      padding: 20px;
      background-color: #f5f5f5;
      border-radius: 5px;
    }
  </style>
  <script>
    $(document).ready(function() {
      $('form').submit(function(event) {
        var firstName = $('#first_name').val();
        var lastName = $('#last_name').val();
        var email = $('#email').val();
        var phoneNumber = $('#phone_number').val();
        var password = $('#password').val();
        var profilePic = $('#profile_pic').val();
        if (firstName.length < 3 || lastName.length < 3) {
          alert('First name and last name should be at least 3 characters.');
          event.preventDefault();
          return false;
        }
        var emailRegex = /^[a-zA-Z0-9._%+-]+@gmail.com$/;
        if (!email.match(emailRegex)) {
          alert('Please enter a valid Gmail address.');
          event.preventDefault();
          return false;
        }
  
      
        var phoneNumberRegex = /^\+\d{1,3}\d{1,14}$/;
        if (!phoneNumber.match(phoneNumberRegex)) {
          alert('Please enter a valid phone number with country code.');
          event.preventDefault();
          return false;
        }
  
        var passwordRegex = /^(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/;
        if (!password.match(passwordRegex)) {
          alert('Password should be at least 8 characters with 1 capital letter, 1 special character, and 1 number.');
          event.preventDefault();
          return false;
        }
  
        
        var profilePicSize = $('#profile_pic')[0].files[0].size;
        var maxSize = 2 * 1024 * 1024; // 2MB
        if (profilePicSize > maxSize) {
          alert('Profile picture size should be less than 2MB.');
          event.preventDefault();
          return false;
        }
  
    
        return true;
      });
    });
  </script>
</head>
<body>
  <div class="custom-container">
    <div class="custom-form">
    <h1>Registration Form</h1>
    <form method="POST" action="register.php" enctype="multipart/form-data">
      <div class="form-group">
        <label for="first_name">First Name:</label>
        <input type="text" class="form-control form-control-sm" id="first_name" name="first_name" required>
      </div>
      <div class="form-group">
        <label for="last_name">Last Name:</label>
        <input type="text" class="form-control form-control-sm" id="last_name" name="last_name" required>
      </div>
      <div class="form-group">
        <label for="email">Email Address:</label>
        <input type="email" class="form-control form-control-sm" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="phone_number">Phone Number:</label>
        <input type="tel" class="form-control form-control-sm" id="phone_number" name="phone_number" required>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" class="form-control form-control-sm" id="password" name="password" required>
      </div>
      <div class="form-group">
        <label for="profile_pic">Profile Picture:</label>
        <input type="file" class="form-control form-control-sm" id="profile_pic" name="profile_pic" accept="image/*" required>
      </div>
      <button type="submit" class="btn btn-primary">Register</button>
    </form>
    </div>
  </div>
</body>
</html>


