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
        <i class="fa-regular fa-envelope"> contact@kernowmusic.com</i>
        <br />
        <i class="fa-solid fa-phone"> 0123456789</i>
        <br />
        <i class="fa-brands fa-facebook"> Kernow Music Festival</i>
        <br />
        <i class="fa-brands fa-instagram"> @KernowMusicFestival</i>
    </div>
    <!-- form for the user's email to be added to an early bird ticket list -->
    <div class="col section">
        Get notified when tickets go on sale!
        <form action="display.php" method="POST">
            <input name="email" type="text" placeholder="Your email">
            <button type="submit">Submit</button>
        </form>
    </div>
  </div>

    <!-- Bootstrap links -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>
