<?php
require_once "partials/header.php";
?>

<h3 class="text-primary d-flex justify-content-center"> Doctor's information</h3>


<form action="controllers/doctor.controllers.php" method="post">
    <div class="form-group my-3">
        <label for="name">Enter your name :</label>
        <input type="text" name="name" id="name" class="form-control" placeholder="Enter your name">
    </div>
    <div class="form-group my-3">
        <label for="day">Nomber of days to add :</label>
        <input type="number" name="day" id="day" class="form-control" placeholder="Day numbers to add">
    </div>

    <div class="form-group my-3">
        <button type="submit" class="btn btn-primary w-100">Register</button>
    </div>
</form>

<?php
require_once "partials/footer.php";
?>