<?php
// team.php - Team Page
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Team | Rehan.Education Clone</title>
  <style>
    body {margin:0; font-family:Arial,sans-serif; background:#eef2f3;}
    header {background:#1e3c72; color:white; padding:20px; text-align:center;}
    nav a {margin:0 15px; color:#ffcc00; text-decoration:none; font-weight:bold;}
    nav a:hover {color:white;}
    .container {padding:50px;}
    h1 {text-align:center; color:#2a5298;}
    .grid {display:grid; grid-template-columns:repeat(auto-fit,minmax(250px,1fr)); gap:20px; margin-top:30px;}
    .card {background:white; padding:20px; border-radius:15px; box-shadow:0 4px 8px rgba(0,0,0,0.1); text-align:center;}
    .card img {width:100px; border-radius:50%; margin-bottom:15px;}
    footer {background:#2a5298; color:white; padding:15px; text-align:center; margin-top:40px;}
  </style>
</head>
<body>
<header>
  <h2>Our Team</h2>
  <nav>
    <a href="index.php">Home</a>
    <a href="about.php">About</a>
    <a href="curriculum.php">Curriculum</a>
    <a href="team.php">Team</a>
    <a href="contact.php">Contact</a>
  </nav>
</header>
 
<div class="container">
  <h1>Meet Our Facilitators</h1>
  <div class="grid">
    <div class="card">
      <img src="https://via.placeholder.com/100" alt="Rehan">
      <h3>Rehan Allahwala</h3>
      <p>Founder & Mentor</p>
    </div>
    <div class="card">
      <img src="https://via.placeholder.com/100" alt="Mentor">
      <h3>Sara Khan</h3>
      <p>Curriculum Designer</p>
    </div>
    <div class="card">
      <img src="https://via.placeholder.com/100" alt="Facilitator">
      <h3>Ali Ahmed</h3>
      <p>Tech Instructor</p>
    </div>
  </div>
</div>
 
<footer>
  <p>© 2025 Rehan.Education Clone | Team</p>
</footer>
</body>
</html>
