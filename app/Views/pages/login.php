<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdeliver.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"></link>
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/style.css" />
    <title>Sistem Pakar</title>
  </head>
  <body>
    <div class="container" id="container">
      <div class="form-container sign-up-container">
        <form action="<?= base_url('/register') ?>" method="post">
          <h1>Create Account</h1>
          <?php if(session()->getFlashdata('pesan')): ?>
            <div class="alert alert-danger">
                <?= session()->getFlashdata('pesan'); ?>
            </div>
          <?php endif; ?>
          <input type="text" name="username" id="username" placeholder="Username" />
          <input type="password" name="password" id="password" placeholder="Password" />
          <button type="submit">Sign Up</button>
        </form>
      </div>
      <div class="form-container sign-in-container">
        <form action="<?= base_url('/login') ?>" method="post">
          <h1>Sign in</h1>
          <?php if(session()->getFlashdata('pesan')): ?>
            <div class="alert alert-danger">
                <?= session()->getFlashdata('pesan'); ?>
            </div>
          <?php endif; ?>
          <input type="text" name="username" id="username" placeholder="Username" />
          <input type="password" name="password" id="password" placeholder="Password" />
          <button type="submit">Sign In</button>
        </form>
      </div>
      <div class="overlay-container">
        <div class="overlay">
          <div class="overlay-panel overlay-left">
            <h1>Welcome Back!</h1>
            <p>
              To keep connected with us please login with your personal info
            </p>
            <button class="ghost" id="signIn">Sign In</button>
          </div>
          <div class="overlay-panel overlay-right">
            <h1>Hello, Friend!</h1>
            <p>Enter your personal details and start journey with us</p>
            <button class="ghost" id="signUp">Sign Up</button>
          </div>
        </div>
      </div>
    </div>

    <script>
      const signUpButton = document.getElementById("signUp");
      const signInButton = document.getElementById("signIn");
      const container = document.getElementById("container");

      signUpButton.addEventListener("click", () => {
        container.classList.add("right-panel-active");
      });

      signInButton.addEventListener("click", () => {
        container.classList.remove("right-panel-active");
      });
    </script>
  </body>
</html>
