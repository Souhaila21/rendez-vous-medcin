<?php
require_once "partials/header.php";
?>
<h4 class="text-primary d-flex justify-content-center">Make An Appointment With Your Doctor</h4>
<form action="controllers/patient.controllers.php" method="post">
    <div class="form-group my-3">
        <label for="patient">Patient Name:</label>
        <input type="text" id="patient" name="patient" placeholder="Patient name" required class="form-control">
    </div>
    <div class="form-group my-3">
        <label for="date">The Appointment Date: </label>
        <input type="datetime-local" name="date" id="date" class="form-control" placeholder="Appointment date">
    </div>

    <div class="form-group my-3">
        <button type="submit" class="btn btn-primary w-100">Submit</button>
    </div>
</form>
<?php
require_once "partials/footer.php";




?>