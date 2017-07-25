<!doctype html>
<html lang="en-us">

<head>
  <meta charset="UTF-8">
  <title>Contact | Your Name</title>
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>

  <div class="wrapper">

    <?php require './includes/header.php' ?>


    <main class="container">
      <section class="main-section">
        <h1>Contact</h1>

        <form id="contact-form">
          <ul>
            <li>
              <label for="name">Name</label>
              <input type="text" id="name" name="name" placeholder="John Smith" required="required">
            </li>
            <li>
              <label for="email">Email</label>
              <input type="email" id="email" name="email" placeholder="example@gmail.com" required="required">
            </li>
            <li>
              <label for="message">Message</label>
              <textarea id="message" name="message" required="required"></textarea>
            </li>
          </ul>
          <input type="submit">
        </form>

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