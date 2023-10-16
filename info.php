<!DOCTYPE html>
<html lang="en">

<!-- adds the information in <head> and changes the title of the page  -->
<?php
$pageTitle = "Event Info";
include_once 'head.php';
?>

<body>
    <!-- Includes the navbar  -->
    <?php include_once "navbar.php"; ?>

    <div>
        <h1 class="title">Event Info</h1>
    </div>

    <div class="row">
    <div class="col section">
        <h1 class="second-title">Dates</h1>
        <p>Tickets go on sale the 1st November 2023!</p>
        <p>Festival dates: 5th - 7th January 2024</p>
        <?php include_once 'countdown.php' ?>
    </div>
    <div class="col section">
        <h1 class="second-title">Where to Go</h1>
        <p>Address line 1</p>
        <p>Address line 2</p>
        <p>Cornwall</p>
    </div>
    <div class="col section">
        <h1 class="second-title">Where to Park</h1>
        <p>Parking is available on-site all weekend long for only £5 a day!</p>
    </div>
    <div class="col section">
        <h1 class="second-title">Where to Stay</h1>
        <p>There are camping spots available to pre-book now!</p>
        <p>If camping isn't your style, there are a range of affordable hotels close to the festival site</p>
    </div>
  </div>

    <!-- Bootstrap links -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script> -->
</body>

</html>
