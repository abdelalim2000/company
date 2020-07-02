<!DOCTYPE html>
<html lang="en">
<?php include "view/header.php" ?>

<?php include "process.php" ?>

<div class="row container">
    <form action="process.php" method="POST" class="col s12">
        <?php while ($row = $data->fetch_assoc()) : ?>
            <div class="row">
                <div class="input-field col s6">
                    <input id="first_name" type="text" class="validate" name="firstName" value="<?php echo $row['first_name'] ?>">
                    <label for="first_name">First Name</label>
                </div>
                <div class="input-field col s6">
                    <input id="last_name" type="text" class="validate" name="lastName" value="<?php echo $row['last_name'] ?>">
                    <label for="last_name">Last Name</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <input id="address" type="text" class="validate" name="address" value="<?php echo $row['address'] ?>">
                    <label for="address">Address</label>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input id="phone" type="text" class="validate" name="phone" value="<?php echo $row['phone'] ?>">
                        <label for="phone">Phone</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="email" type="email" class="validate" name="email" value="<?php echo $row['email'] ?>">
                    <label for="email">Email</label>
                </div>
            </div>
            <div class="row">
                <div class="col s6">
                    <div class="input-field inline">
                        <input id="salary" type="number" class="validate" name="salary" value="<?php echo $row['salary'] ?>">
                        <label for="salary">Salary</label>
                    </div>
                </div>
                <div class=" right col s6">
                    <div class="input-field inline">
                        <input id="job_title" type="text" class="validate" name="jobTitle" value="<?php echo $row['job_title'] ?>">
                        <label for="job_title">Job Title</label>
                    </div>
                </div>
            </div>
            <div class="row right">
                <input class="btn" type="submit" value="Edit" name="edit">
            </div>
        <?php endwhile ?>
    </form>
</div>

<?php include "view/footer.php" ?>

</html>