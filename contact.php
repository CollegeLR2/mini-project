<!DOCTYPE html>
<html lang="en">

<!-- adds the information in <head> and changes the title of the page  -->
<?php
$pageTitle = "Contact";
include_once 'head.php';
?>

<body>
    <!-- Includes the navbar  -->
    <?php include_once "navbar.php"; ?>

    <div>
        <h1 class="title">Contact</h1>
    </div>

    <div class="row">
    <div class="col section">
        <i class="fa-regular fa-envelope"></i>
        <p class="second-title">contact@kernowmusic.com</p>
        <br />
        <i class="fa-solid fa-phone"></i>
        <p class="second-title">0123456789</p>
        <br />
        <i class="fa-brands fa-facebook"></i>
        <p class="second-title">Kernow Music Festival</p>
        <br />
        <i class="fa-brands fa-instagram"></i>
        <p class="second-title">@KernowMusicFestival</p>
    </div>
    <!-- form for the user's email to be added to an early bird ticket list -->
    <div class="col section">
        Get notified when tickets go on sale!
        <form action="database.php" method="POST" onSubmit="alert('Email submitted');">
            <!-- <input name="email" type="text" placeholder="Your email"> -->
            <input id="email" placeholder="Your email" title="We will store your email in accordance with our privacy policy." required>
            <button type="submit">Submit</button>
        </form>

        <?php include_once 'carousel.php' ?>

    </div>
  </div>
</body>
</html>
