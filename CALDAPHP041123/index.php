<?php require_once 'include/header.php'?>

<body>
    <h1 style="text-align: center; margin: 20px">REGISTRATION FORM <br/> FOR IT SEMINAR</h1>
    
<form method="GET" action="success.php">
    <div class="mb-3">
        <label for="Fname" class="form-label">First Name</label>
        <input type="text" class="form-control" id="Fname" name="firstname">
    </div>

    <div class="mb-3">
        <label for="Lname" class="form-label">Last Name</label>
        <input type="text" class="form-control" id="Lname" name="lastname">
    </div>
    
    <div class="mb-3">
        <label for="Bdate" class="form-label">Date of Birth</label>
        <input type="text" id="datepicker" name="birthdate">
    </div>

    <div class="mb-3">
        <label for="Specialty" class="form-label">Specialty</label><br/>
        <select class="form-select" aria-label="Default select example" name="specialty">
            <option selected>Choose Specialty</option>
            <option value="1">Database Administrator</option>
            <option value="2">Software Developer</option>
            <option value="3">Wed Administrator</option>
        </select>
        </div>

    <div class="mb-3">
        <label for="EmailAd" class="form-label">Email Address</label>
        <input type="email" class="form-control" id="EmailAd" name="emailad">
    </div>

    <div class="mb-3">
        <label for="ContactNumber" class="form-label">Contact Number</label>
        <input type="number" class="form-control" id="ContactNumberl" name="contactnum">
    </div>

    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
        
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php require_once 'include/footer.php'?>