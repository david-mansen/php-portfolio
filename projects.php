<!doctype html>
<html lang="en-us">

<head>
  <meta charset="UTF-8">
  <title>Portfolio | Your Name</title>
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>

  <div class="wrapper">

    <?php require './includes/header.php' ?>


    <main class="container">
      <section class="main-section">
        <h1>Portfolio</h1>

        <div class="work">
          <img src="assets/images/technics-q-c-640-480-1.jpg" alt="hangman">

          <h3>Hangman</h3>
        </div>
        <div class="work">
          <img src="assets/images/technics-q-c-640-480-2.jpg" alt="RPG Game">

          <h3>RPG Game</h3>
        </div>
        <div class="work">
          <img src="assets/images/technics-q-c-640-480-5.jpg" alt="Trivia Game">

          <h3>Trivia Game</h3>
        </div>
        <div class="work">
          <img src="assets/images/technics-q-c-640-480-7.jpg" alt="Info Widget">

          <h3>Info Widget</h3>
        </div>
        <div class="work">
          <img src="assets/images/technics-q-c-640-480-9.jpg" alt="Rock Paper Scissors">

          <h3>Rock Paper Scissors</h3>
        </div>

      </section>

      <section class="sidebar">
        <div id="connect">
          <h2>Connect with Me</h2>

          <ul>
            <li><a href="#"><img src="assets/images/github-128.png" alt="Github"></a></li>
            <li><a href="#"><img src="assets/images/linkedin-128.png" alt="LinkedIn"></a></li>
            <li><a href="#"><img src="assets/images/stackoverflow-128.png" alt="Stack Overflow"></a></li>
          </ul>
        </div>
      </section>
    </main>
    <div class="push"></div>
  </div>

  <?php require './includes/footer.php' ?>

</body>

</html>