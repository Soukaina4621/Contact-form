<?php include('../layouts/header.php') ?>
<?php include('../controller/UserController.php');

  $users=getData();
  // the getdata function in the UC is to fetch on all the users
  // from the database :D

  if(isset($_POST['id']))
  {
      delete($_POST['id']);
      header('location:index.php');
  }

  if(isset($_POST['name']))
  {
      $users=search($_POST['name']);
  }

 ?>

<div class="container mt-5">
    <form action="" class="form-group" method="POST">
        <input type="text" class="form-control shadow active" name="name" placeholder="search...">
        <button class="btn btn-secondary my-2">search</button>
    </form>
    <div class="row">
  <!-- the foreach loop is for keep bringing the fetched data and show it on cards -->
    <?php foreach($users as $user) : ?>
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">name : <?php echo $user['name'] ?></h5>
            <a href="#" class="card-link">view more</a>
            <div class="content">
                <h6 class="card-subtitle mb-2 text-muted">email : <?php echo $user['email'] ?></h6>
                <p class="card-text">phone : <?php echo $user['phone'] ?>.</p>

                <form action="" method="post" class="">
                    <input type="hidden" name="id" value="<?php echo $user['id'] ?>">
                      <button class="btn btn-danger "><i class="fa fa-trash"></i></button> 
                    
                      <a href="details.php?id=<?php echo $user['id'] ?>" class="btn btn-primary "><i class="fa fa-eye"></i></a>
                     <a href="edit.php?id=<?php echo $user['id'] ?>" class="btn btn-warning "><i class="fa fa-edit"></i></a>
                </form>
            </div>
          </div>
        </div>
 <?php endforeach ?>

    </div>
</div>

<?php include('../layouts/footer.php') ?>