<!DOCTYPE html>
<html lang="en">
<!-- adds the information in <head> and changes the title of the page  -->
<?php
$pageTitle = "About";
include_once 'head.php';
?>

<body>
    <!-- Includes the navbar  -->
    <?php include_once "navbar.php"; ?>

    <div>
        <h1 class="title">About Us</h1>
    </div>

    <div class="row">
    <div class="col section">
        <h1 class="second-title">Our Passion for Music</h1>
        <p>At Cornwall's Premier Eco-Friendly Music Festival, we're fueled by a deep-seated passion for music that resonates with the soul. For years, we've been curating lineups that bring together a diverse array of artists, from seasoned performers to emerging talents, creating an experience that transcends the ordinary. We believe in the power of music to unite, inspire, and ignite the spirit. Join us in celebrating the raw energy and unapologetic spirit of live performances.</p>
    </div>
    <div class="col section">
        <h1 class="second-title">Championing Environmental Responsibility</h1>
        <p>We're not just a festival; we're a movement for change. Our commitment to the environment is woven into the very fabric of our event. From renewable energy sources to waste reduction initiatives, every decision we make is guided by our dedication to a sustainable future. By attending our festival, you're not only immersing yourself in incredible music, but also becoming a part of a community that's actively working towards a greener, more eco-conscious world.</p>
    </div>
    <div class="col section">
        <h1 class="second-title">Immersive Experiences in the Heart of Cornwall</h1>
        <p>Set against the breathtaking backdrop of Cornwall's rugged coastline, our festival offers an unrivaled experience for music enthusiasts. With multiple stages featuring diverse lineups, interactive workshops, and artisanal food vendors, there's something for everyone. Whether you're enjoying performances or exploring the stunning surroundings, this festival promises an unforgettable adventure that captures the essence of both music and nature.</p>
    </div>
  </div>

    <!-- Bootstrap links -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>
