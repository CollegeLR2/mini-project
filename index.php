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
    <!-- rel=0 is used to remove the "more videos" part that comes up when the video pauses -->
    <iframe width="100%" height="500" 
    src="https://www.youtube.com/embed/ANMYO6xW8P0?autoplay=1&mute=1&loop=1&controls=0&rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen>
    </iframe>

    <h1>Welcome to Cornwall's Premier Eco-Friendly Festival!</h1>
    <p style="padding:30px">Embrace the power of music amidst the rugged beauty of Cornwall. Join us for an electrifying celebration of rock and metal, all while championing the cause of environmental sustainability. Get ready for an unforgettable experience that harmonises epic sounds with an eco-conscious spirit.</p>
</body>

<footer>
    <?php include_once 'footer.php' ?>
</footer>
</html>
