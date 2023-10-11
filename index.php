<!DOCTYPE html>
<html lang="en">

<!-- adds the information in <head> and changes the title of the page  -->
<?php
$pageTitle = "Kernow Music Festival";
include_once 'head.php';
?>

<body>
    <!-- Includes the navbar  -->
    <?php include_once "navbar.php"; ?>

    <!-- change the video src up to the ? to change featured video -->
    <iframe width="100%" height="500" 
    src="https://www.youtube.com/embed/ANMYO6xW8P0?autoplay=1&mute=1&loop=1&controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen>
    </iframe>

    <!-- Bootstrap links -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

<footer>
    <h1>Welcome to Cornwall's Premier Eco-Friendly Festival!</h1>
    <p style="padding:30px">Embrace the power of music amidst the rugged beauty of Cornwall. Join us for an electrifying celebration of rock and metal, all while championing the cause of environmental sustainability. Get ready for an unforgettable experience that harmonises epic sounds with an eco-conscious spirit.</p>
</footer>

</html>
