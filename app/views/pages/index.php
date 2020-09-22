<?php require ROUTE_APP . '/views/includes/header.php'  ?>

<main role="main">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h1>CRUD USERS</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-12 mt-3">
        <div class="d-flex flex-row-reverse mb-1">
          <a class="btn btn-primary">Add</a>
        </div>
        <table class="table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($data['users'] as $user):  ?>
              <tr>
                <td><?php echo $user->id ?></td>
                <td><?php echo $user->name ?></td>
                <td><?php echo $user->email ?></td>
                <td><?php echo $user->phone ?></td>
                <td>
                  <a href="<?php echo ROUTE_URL; ?>/index/edit/<?php echo $user->id; ?>">Edit</a>
                  <a href="<?php echo ROUTE_URL; ?>/index/delete/<?php echo $user->id; ?>">Delete</a>
                </td>
              </tr>
            <?php endforeach; ?>

          </tbody>
        </table>
      </div>
    </div>
  </div>
</main>


<?php require ROUTE_APP . '/views/includes/footer.php'  ?>