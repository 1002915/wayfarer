<body>
<div class="animsition">
      <!-- Always shows a header, even in smaller screens. -->
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
  <header class="mdl-layout__header">
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <span class="mdl-layout-title"><a class="animsition-link" href="index.php"><img class="wayfarer-logo-image" src="images/logo.png"></a></span>
      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer"></div>
      <!-- Navigation. We hide it in small screens. -->
      <nav class="mdl-navigation mdl-layout--large-screen-only">
        <a class="mdl-navigation__link" href="">about</a>
        <button id="show-dialog" type="button" class="mdl-button">Login</button>
      </nav>
    </div>
  </header>
  <div class="mdl-layout__drawer">
    <span class="mdl-layout-title"><img class="wayfarer-logo-image" src="images/logo.png"></span>
    <nav class="mdl-navigation">
      <a class="mdl-navigation__link" href="">about</a>
      <a class="mdl-navigation__link" href="">login</a>
    </nav>
  </div>
  <main class="mdl-layout__content">
    <div class="page-content"><!-- Your content goes here --></div>
  </main>
</div>

  <dialog class="mdl-dialog">
    <h4 class="mdl-dialog__title">Login or Register</h4>
    <div class="mdl-dialog__content">
      <form>
        <div class="group">
          <input type="text"><span class="highlight"></span><span class="bar"></span>
          <label>Name</label>
        </div>
        <div class="group">
          <input type="email"><span class="highlight"></span><span class="bar"></span>
          <label>Email</label>
        </div>
        <button type="button" class="button buttonBlue">Login
          <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
        </button>
      </form>
    </div>
    <div class="mdl-dialog__actions">
      <button type="button" class="mdl-button">Register</button>
      <button type="button" class="mdl-button close">Cancel</button>
    </div>
  </dialog>

