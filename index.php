?php
// index.php - Homepage
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Rehan.Education Clone</title>
  <style>
    body {
      margin: 0; font-family: Arial, sans-serif;
      background: linear-gradient(to right, #1e3c72, #2a5298);
      color: white; text-align: center;
    }
    header {
      background: rgba(0,0,0,0.6);
      padding: 20px;
      position: sticky; top: 0;
    }
    nav a {
      margin: 0 15px;
      text-decoration: none;
      color: #ffcc00;
      font-weight: bold;
      transition: color 0.3s;
    }
    nav a:hover { color: #fff; }
    .hero {
      padding: 100px 20px;
    }
    .hero h1 {
      font-size: 3em; margin-bottom: 20px;
    }
    .hero p {
      font-size: 1.2em;
    }
    button {
      background: #ffcc00;
      border: none; padding: 12px 25px;
      font-size: 1em; border-radius: 25px;
      cursor: pointer;
      transition: transform 0.3s;
    }
    button:hover { transform: scale(1.1); }
    footer {
      background: rgba(0,0,0,0.7);
      padding: 15px; margin-top: 40px;
    }
  </style>
  <script>
    function goTo(page) {
      window.location.href = page;
    }
  </script>
</head>
<body>
  <header>
    <h2>Rehan.Education Clone</h2>
    <nav>
      <a href="index.php">Home</a>
      <a href="about.php">About</a>
      <a href="curriculum.php">Curriculum</a>
      <a href="team.php">Team</a>
      <a href="contact.php">Contact</a>
    </nav>
  </header>
 
  <div class="hero">
    <h1>Digital Mastery for a Connected World</h1>
    <p>Empowering teens to unleash their digital potential, impact 10 million lives & achieve financial independence.</p>
    <button onclick="goTo('curriculum.php')">Explore Curriculum</button>
  </div>
 
  <footer>
    <p>© 2025 Rehan.Education Clone | Built with ❤️ using HTML, CSS & JS</p>
  </footer>
</body>
</html>
 
