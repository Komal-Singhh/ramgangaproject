<!DOCTYPE html>



<html lang="en">
    <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="favicon.png">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />

		
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
		<link href="css/tiny-slider.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<title>Project</title>
	
  
  
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="image-container">
          <img src="images/home.jpg" alt="Circular Image" class="circular-image">
        </div>
      </div>
      <div class="col-md-6">
        <div class="dropdown-container">
          <div class="text">
            सिंचाई एवं जल संसाधन <br>विभाग उत्तर प्रदेश
        </div>
        <input placeholder="EINC" readonly id="EINC">
        <input type="password" placeholder="Enter account password" id="password">
        <button type="submit" id="login-btn">Login</button>
        <div class="error-message" id="error-message"></div>
        </div>
      </div>
    </div>
  </div>










  <script>
  const loginBtn = document.getElementById('login-btn');
  const passwordInput = document.getElementById('password');
  const errorMessage = document.getElementById('error-message');

  loginBtn.addEventListener('click', (e) => {
    e.preventDefault();
    const password = passwordInput.value.trim();
    if (password === '123') { // Replace with the correct password
      // Login successful, redirect to next page
      window.location.href = 'celevel1';
    } else {
      errorMessage.textContent = 'Incorrect password';
    }
  });
</script>
</body>
</html> 