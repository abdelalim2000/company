<!DOCTYPE html>
<html lang="en">

<?php include "view/header.php" ?>
<?php include "process.php" ?>

<!-- View Employees -->

<div class="row container">
    <?php while ($row = $data->fetch_assoc()) : ?>
        <div class="col s12 m4">
            <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                    <span class="card-title"><?php echo "{$row['first_name']} {$row['last_name']}" ?></span>
                    <p><span class="orange-text">Mail: </span><?php echo "{$row['email']}" ?></p>
                    <p><span class="orange-text">Phone: </span><?php echo "{$row['phone']}" ?></p>
                    <p><span class="orange-text">Address: </span><?php echo "{$row['address']}" ?></p>
                    <p><span class="orange-text">JobTitle: </span><?php echo "{$row['job_title']}" ?></p>
                    <p><span class="orange-text">Salary: </span><?php echo "{$row['salary']}" ?></p>
                </div>
                <div class="card-action">
                    <a href="update.php?update=<?php echo $row['id'] ?>">Update</a>
                    <a href="process.php?delete=<?php echo $row['id'] ?>">Delete</a>
                </div>
            </div>
        </div>
    <?php endwhile ?>
</div>

<?php include "view/footer.php" ?>


</html>