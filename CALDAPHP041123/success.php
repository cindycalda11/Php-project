<?php require_once 'include/header.php'?>

<h1 class="text-center">YOU HAVE BEEN REGISTERED</h1>
<br/>

<div class="card" style="width: 18rem;">
<div class="card-body">
<h5 class="card-title"><?php echo $_GET['firstname'].' '.$_GET['lastname'];?> </h5>
    <p class="card-text">
        Date of Birth:  <?php  echo $_GET['birthdate'];?>
    </p>
    <p class="card-text">
        Specialty:  <?php  echo $_GET['specialty'];?>
    </p>
    <p class="card-text">
        Email Address:  <?php  echo $_GET['emailad'];?>
    </p>
    <p class="card-text">
        Contact Number:  <?php  echo $_GET['contactnum'];?>
    </p>

    <a href="#" class="btn btn-primary">Successfully Registered</a>
</div>
</div>

<?php require_once 'include/footer.php'?>