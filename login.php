<?php
  require './inc/header.php';
?>
  <main>
    <section class="row signin-row">
      <div class="col align-self-center">
        <h3>Signed In!</h3>
        <p>Log in below</p>
        <form method="post" action="./inc/validate.php">
          <p><input class="form-control" name="username" type="text" placeholder="Username" required /></p>
          <p><input class="form-control" name="password" type="password" placeholder="Password" required /></p>
          <input class="btn btn-primary" type="submit" value="Login" />
        </form>
      </div>
    </section>
  </main>
<?php
  require './inc/footer.php';
?>
