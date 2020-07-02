<!DOCTYPE html>
<html lang="en">

<?php include "view/header.php" ?>
<?php include "process.php" ?>

<!-- View Employees -->

<div class="row container">
    <?php while($row)?>
    <div class="col s12 m3">
        <div class="card blue-grey darken-1">
            <div class="card-content white-text">
                <span class="card-title">Card Title</span>
                <p>I am a very simple card. I am good at containing small bits of information.
                    I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
                <a href="#">Update</a>
                <a href="#">Delete</a>
            </div>
        </div>
    </div>
</div>

<?php include "view/footer.php" ?>


</html>