<?php require ROUTE_APP . '/views/includes/header.php'  ?>

<main role="">
  <div class="container">
    <div class="d-flex flex-row-reverse mt-1">
      <a href="<?php echo  ROUTE_URL; ?>/" class="btn btn-secondary"><i class="fa fa-backward"></i> Go back</a>
    </div>

  <div class="card card-body bg-light mt-3 col-8 mx-auto">
    <div class="col-6 mx-auto">
      <h2>Add Users</h2>
      <form action="<?php echo ROUTE_URL; ?>/index/add" method="POST">
        <div class="form-group">
          <label for="name">Name: <sup>*</sup></label>
          <input type="text" name="name" id="name" class="form-control form-control-lg">
        </div>
        <div class="form-group">
          <label for="email">Email: <sup>*</sup></label>
          <input type="email" name="email" id="email" class="form-control form-control-lg">
        </div>
        <div class="form-group">
          <label for="phone">Phone: <sup>*</sup></label>
          <input type="text" name="phone" id="phone" class="form-control form-control-lg">
        </div>
        <input type="submit" value="Add User" class="btn btn-success">
      </form>

    </div>
  </div>
  
</main>



<?php require ROUTE_APP . '/views/includes/footer.php'  ?>