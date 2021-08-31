<?php include('../layouts/header.php') ?>

<?php include('../controller/UserController.php');

//  with the method 'post' we get the values/data
//  from the inputs to be stored with'store'
//  function in the UC,
//  which works on inserting them in the 'users' array!

if($_SERVER['REQUEST_METHOD']=='POST')
{
  if(!empty($_POST['name']) && !empty($_POST['email']) && $_POST['phone'])
  {
      store($_POST['name'],$_POST['email'],$_POST['phone']);

      header('location:index.php');
  }
}
echo date("Y-m-d H:i:s");
?>

<div class="container">
    <div class="row">
        <form action="" method="post" class="form-group mt-5 col-md-6 offset-3">
            <h2 class="text-center text-secondary ">Saisir un nouveau client</h2>
            <input type="text" name="name" class="form-control mt-2" placeholder="name">
            <input type="email" name="email" class="form-control mt-2" placeholder="email">
            <input type="phone" name="phone" class="form-control mt-2" placeholder="phone">
            <button class="btn btn-dark form-control mt-2">save</button>

        </form>
</div>

        <?php include('../layouts/footer.php') ?>

        <!-- here on top we check if the method and 
values are present
and then call them through the store function
directly to the index file to fill the card form -->

<!-- sooooo the steps are :
 1: settle the inputs on page  
 2: set the " storage function" to save the data got from them 
 $query= "INSERT IN THE ARRAY (placeholders) values (:placeholders,)"
 $statement-> execute([':placeholders' => $placeholders,]); 
 3: set the if to check the existence of REQUEST_METHOD/ storage function ($_POST['placeholders'])/ 
 and the location where they will be called in -->
