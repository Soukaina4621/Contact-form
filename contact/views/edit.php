<?php include('../layouts/header.php') ?>
<?php include('../controller/UserController.php');

    $user=show($_GET['id']);

    if($_SERVER['REQUEST_METHOD']=='POST')
{
  if(!empty($_POST['name']) && !empty($_POST['email']) && $_POST['phone'])
  {
      update($_GET['id'],$_POST['name'],$_POST['email'],$_POST['phone']);

      header('location:index.php');
  }
}

 ?>

<div class="container">
    <div class="row">
        <form action="" method="post" class="form-group mt-5 col-md-6 offset-3">
            <h2 class="text-center text-secondary ">modifier un client</h2>
            <input type="text" name="name" class="form-control mt-2" placeholder="name" value="<?php echo $user['name'] ?>">
            <input type="email" name="email" class="form-control mt-2" placeholder="email" value="<?php echo $user['email'] ?>">
            <input type="phone" name="phone" class="form-control mt-2" placeholder="phone" value="<?php echo $user['phone'] ?>">
            <button class="btn btn-dark form-control mt-2">update</button>

        </form>
</div>









        <?php include('../layouts/footer.php') ?>