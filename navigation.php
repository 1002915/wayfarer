<!-- MODAL BOX START -->
  <div id="modal" class="popupContainer" style="display:none;">
    <span class="title-span">Login or Register</span>
    <section class="popupBody">
<!-- LOGIN SECTION -->
      <div id="login-modal">
        <form action="checklogin.php" method="post">
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1"><i class="fa fa-envelope-open-o" aria-hidden="true"></i></span>
            <input type="text" name="email_post" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
          </div>
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1"><i class="fa fa-lock" aria-hidden="true"></i></span>
            <input type="password" name="password" class="form-control" placeholder="Password" aria-describedby="basic-addon1">
          </div>
                  <div class="header-nav">
          <a href="#" class="black-text register">Not a member? Register now!</a><br><BR>
          <a href="#" class="black-text">Forgot Password?</a><BR><BR>
        </div>
          <input class="btn register-login-submit" type="submit" value="login">
        </form>
      </div>
<!-- USER REGISTER FORM -->
      <div id="register-form">
        <form action="registeruser.php" method="post">
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user-o" aria-hidden="true"></i></span>
            <input type="text" placeholder="First Name" name="first_name" class="form-control" aria-describedby="basic-addon1">
          </div>
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1"><i class="fa fa-users" aria-hidden="true"></i></span>
            <input type="text" placeholder="Last Name" name="last_name" class="form-control" aria-describedby="basic-addon1">
          </div>
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1"><i class="fa fa-address-card" aria-hidden="true"></i></span>
            <input type="text" placeholder="User Name" name="user_name" class="form-control" aria-describedby="basic-addon1">
          </div>
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1"><i class="fa fa-mobile" aria-hidden="true"></i></span>
            <input type="text" placeholder="phone" name="phone_number" class="form-control" aria-describedby="basic-addon1">
          </div>
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1"><i class="fa fa-envelope-open-o" aria-hidden="true"></i></span>
            <input type="text" name="email" class="form-control" placeholder="email" aria-describedby="basic-addon1">
          </div>
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1"><i class="fa fa-lock" aria-hidden="true"></i></span>
            <input type="password" placeholder="Password" name="password" class="form-control" aria-describedby="basic-addon1">
          </div>
          <input class="btn register-login-submit" type="submit" value="Register!">
        </form>      
      </div>
    </section>
  </div> <!-- End of modal box popup -->
<!-- Put all 'logged in' content here. It is only available when the session has been set (user logged in) -->
<?php if (isset($_SESSION['email'])) { ?>
<div class="navigation-bar">
  <div class="search-container"></div>
    <nav class="nav-items">
      <ul>
        <a href="#modal" class="btn modal_trigger loginbutton"><li>Add Review</li></a>
        <a href="#modal" class="btn modal_trigger loginbutton"><li>Add Review</li></a>
        <a href="logout.php" class="btnregisterbutton"><li>Logout</li></a>

      </ul>
    </nav>
</div>

<?php } else echo''; ?>
<!-- End of user logged in content -->
<?php if (!isset($_SESSION['email'])) { ?>
<div class="navigation-bar">
<div class="logo-container">
      <img class="logo" src="images/logodark.svg">
      <span><h3>WAYFARER</h3></span>
    </div>
       <div class="search-container-active">
      <input type="text" name="search-page" placeholder="search" class="search-bar">
      <button type="submit" class="search-button" name="search" value="SEARCH"><i class="fa fa-search white" aria-hidden="true"></i></button></div>
    <nav class="nav-items">
      <ul>
        <a href="#modal" class="btn modal_trigger loginbutton"><li>Login</li></a>
<!--        <a href="#modal" class="btn modal_trigger registerbutton"><li>REGISTER</li></a> -->
      </ul>
    </nav>

<!-- MODAL BOX START -->
  <div id="modal" class="popupContainer" style="display:none;">
    <span class="title-span">Login or Register</span>
    <section class="popupBody">
<!-- LOGIN SECTION -->
      <div id="login-modal">
        <div class="header-nav">
          <a href="#" class="black-text register">Not a member? Register now!</a><br>
          <a href="#" class="black-text">Forgot Password?</a>
        </div>
        <form action="checklogin.php" method="post">
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">@</span>
            <input type="text" name="email_post" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
          </div>
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">>_<</span>
            <input type="password" name="password" class="form-control" placeholder="Password" aria-describedby="basic-addon1">
          </div>
          <input class="btn" type="submit" value="login">
        </form>
      </div>
<!-- USER REGISTER FORM -->
      <div id="register-form">
        <form action="registeruser.php" method="post">
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">First Name</span>
            <input type="text" name="first_name" class="form-control" aria-describedby="basic-addon1">
          </div>
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">Last Name</span>
            <input type="text" name="last_name" class="form-control" aria-describedby="basic-addon1">
          </div>
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">User name</span>
            <input type="text" name="user_name" class="form-control" aria-describedby="basic-addon1">
          </div>
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">Phone</span>
            <input type="text" name="phone_number" class="form-control" aria-describedby="basic-addon1">
          </div>
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">@</span>
            <input type="text" name="email" class="form-control" placeholder="email" aria-describedby="basic-addon1">
          </div>
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">Password</span>
            <input type="password" name="password" class="form-control" aria-describedby="basic-addon1">
          </div>
          <input class="btn" type="submit" value="Register!">
        </form>      
      </div>
    </section>
  </div> <!-- End of modal box popup -->
</div> <!-- END OF Navigation bar DIV -->
<?php }; ?>
<div class="page-container">