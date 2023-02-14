<?php
$title = "Success";
require_once 'includes/header.php'
?>

<h1 class="text-center text-success">You Have been registered</h1>
<div style="display:grid; justify-items:center;">
   <div class="card" style="width: 18rem;">
      <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
      <div class="card-body">
         <h5 class="card-title"><?php echo $_POST['firstName'] . " " . $_POST['lastName'] ?></h5>
         <h6 class="card-subtitle mb-2 text-muted"><?php echo $_POST['speciality'] ?></h6>
         <p class="card-text">DOB: <?php echo $_POST['dob'] ?></p>
         <p class="card-text">Email: <?php echo $_POST['email'] ?></p>
         <p class="card-text">Phone No:<?php echo $_POST['phone'] ?></p>
         <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
   </div>
</div>


<?php
require_once 'includes/footer.php'
?>