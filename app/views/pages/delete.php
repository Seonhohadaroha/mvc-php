<?php require ROUTE_APP . '/views/includes/header.php'  ?>

<main role="">
  <div class="container">
    <div class="d-flex flex-row-reverse mt-1">
      <a href="<?php echo  ROUTE_URL; ?>/" class="btn btn-secondary"><i class="fa fa-backward"></i> Go back</a>
    </div>

  <div class="card card-body bg-light mt-3 col-8 mx-auto">
    <div class="col-6 mx-auto">
      <h2>Delete User</h2>
      <form action="<?php echo ROUTE_URL; ?>/index/delete/<?php echo $data['id']?>" method="POST">
        <div class="form-group">
          <label for="name">Name: <sup>*</sup></label>
          <input type="text" name="name" id="name" class="form-control form-control-lg" value="<?php echo $data['name']; ?>" require>
        </div>
        <div class="form-group">
          <label for="email">Email: <sup>*</sup></label>
          <input type="email" name="email" id="email" class="form-control form-control-lg" value="<?php echo $data['email']; ?>" require>
        </div>
        <div class="form-group">
          <label for="phone">Phone: <sup>*</sup></label>
          <input type="text" name="phone" id="phone" class="form-control form-control-lg" value="<?php echo $data['phone']; ?>" require>
        </div>
        <input type="submit" value="Delete User" class="btn btn-danger">
      </form>

    </div>
  </div>
  
</main>

<?php require ROUTE_APP . '/views/includes/footer.php'  ?>