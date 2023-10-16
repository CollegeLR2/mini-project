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
            <input name="email" type="text" placeholder="Your email">
            <button type="submit">Submit</button>
        </form>

        <?php include_once 'carousel.php' ?>

    </div>
  </div>

    <!-- Bootstrap links -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script> -->
</body>

</html>
