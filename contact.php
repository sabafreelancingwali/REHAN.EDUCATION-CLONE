<?php
// contact.php - Contact Page
include 'config.php';
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $sql = "INSERT INTO contacts (name,email,message) VALUES ('$name','$email','$message')";
  mysqli_query($conn,$sql);
  echo "<script>alert('Message sent successfully!');</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contact | Rehan.Education Clone</title>
  <style>
    body {margin:0; font-family:Arial,sans-serif; background:#f9f9f9;}
    header {background:#2a5298; color:white; padding:20px; text-align:center;}
    nav a {margin:0 15px; color:#ffcc00; text-decoration:none; font-weight:bold;}
    nav a:hover {color:white;}
    .container {padding:50px; max-width:600px; margin:auto;}
    h1 {text-align:center; color:#1e3c72;}
    form {display:flex; flex-direction:column;}
    input, textarea {margin:10px 0; padding:12px; border:1px solid #ccc; border-radius:8px;}
    button {background:#1e3c72; color:white; border:none; padding:12px; cursor:pointer; border-radius:8px;}
    button:hover {background:#16335f;}
    footer {background:#1e3c72; color:white; padding:15px; text-align:center; margin-top:40px;}
  </style>
</head>
<body>
<header>
  <h2>Contact Us</h2>
  <nav>
    <a href="index.php">Home</a>
    <a href="about.php">About</a>
    <a href="curriculum.php">Curriculum</a>
    <a href="team.php">Team</a>
    <a href="contact.php">Contact</a>
  </nav>
</header>
 
<div class="container">
  <h1>Get in Touch</h1>
  <form method="POST">
    <input type="text" name="name" placeholder="Your Name" required>
    <input type="email" name="email" placeholder="Your Email" required>
    <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
    <button type="submit">Send Message</button>
  </form>
</div>
 
<footer>
  <p>© 2025 Rehan.Education Clone | Contact</p>
</footer>
</body>
</html>
 
