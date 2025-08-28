
<?php
// curriculum.php - Curriculum Page
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Curriculum | Rehan.Education Clone</title>
  <style>
    body {margin:0; font-family:Arial,sans-serif; background:#f9f9f9;}
    header {background:#2a5298; color:white; padding:20px; text-align:center;}
    nav a {margin:0 15px; color:#ffcc00; text-decoration:none; font-weight:bold;}
    nav a:hover {color:white;}
    .container {padding:50px;}
    h1 {text-align:center; color:#2a5298;}
    .grid {display:grid; grid-template-columns:repeat(auto-fit,minmax(250px,1fr)); gap:20px;}
    .card {background:white; padding:20px; border-radius:10px; box-shadow:0 4px 6px rgba(0,0,0,0.1);}
    footer {background:#1e3c72; color:white; padding:15px; text-align:center; margin-top:40px;}
  </style>
</head>
<body>
<header>
  <h2>Curriculum</h2>
  <nav>
    <a href="index.php">Home</a>
    <a href="about.php">About</a>
    <a href="curriculum.php">Curriculum</a>
    <a href="team.php">Team</a>
    <a href="contact.php">Contact</a>
  </nav>
</header>
 
<div class="container">
  <h1>Our Innovative Curriculum</h1>
  <div class="grid">
    <div class="card"><h3>Digital Skills</h3><p>Learn coding, AI tools, and web development.</p></div>
    <div class="card"><h3>Entrepreneurship</h3><p>Develop business skills and financial literacy.</p></div>
    <div class="card"><h3>Creativity</h3><p>Master content creation, design, and storytelling.</p></div>
    <div class="card"><h3>Community Impact</h3><p>Engage in projects that impact millions of lives.</p></div>
  </div>
</div>
 
<footer>
  <p>© 2025 Rehan.Education Clone | Curriculum</p>
</footer>
</body>
</html>
