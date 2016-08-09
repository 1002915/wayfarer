<body>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">

      <div class="wayfarer-header mdl-layout__header mdl-layout__header--waterfall">
        <div class="mdl-layout__header-row">
          <span class="wayfarer-title mdl-layout-title">
            <img class="wayfarer-logo-image black" src="images/logo.png">
          </span>
          <!-- Add spacer, to align navigation to the right in desktop -->
          <div class="wayfarer-header-spacer mdl-layout-spacer"></div>
          <div class="wayfarer-search-box mdl-textfield mdl-js-textfield mdl-textfield--expandable mdl-textfield--floating-label mdl-textfield--align-right mdl-textfield--full-width">
            <label class="mdl-button mdl-js-button mdl-button--icon" for="search-field">
              <i class="material-icons">search</i>
            </label>
            <div class="mdl-textfield__expandable-holder">
              <input class="mdl-textfield__input" type="text" id="search-field">
            </div>
          </div>
          <!-- Navigation -->
          <div class="wayfarer-navigation-container">
            <nav class="wayfarer-navigation mdl-navigation">
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="">Colours</a>
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="">Fonts</a>
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="">Buttons</a>
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="">more</a>
            </nav>
          </div>
          <span class="wayfarer-mobile-title mdl-layout-title">
            <img class="wayfarer-logo-image" src="images/logo.png">
          </span>
          <button class="wayfarer-more-button mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect" id="more-button">
            <i class="material-icons">more_vert</i>
          </button>
          <ul class="mdl-menu mdl-js-menu mdl-menu--bottom-right mdl-js-ripple-effect" for="more-button">
            <li class="mdl-menu__item">Contact Us</li>
            <li class="mdl-menu__item">Share</li>
          </ul>
        </div>
      </div>

      <div class="wayfarer-drawer mdl-layout__drawer">
        <span class="mdl-layout-title">
          <img class="wayfarer-logo-image" src="images/logowhite.png">
        </span>
        <nav class="mdl-navigation">
          <a class="mdl-navigation__link" href="">Colours</a>
          <a class="mdl-navigation__link" href="">Fonts</a>
          <a class="mdl-navigation__link" href="">Buttons</a>
          <a class="mdl-navigation__link" href="">More</a>
          <a class="mdl-navigation__link" href="">Contact Us</a>
          <a class="mdl-navigation__link" href="">Share</a>
          <a class="mdl-navigation__link" href="">Search</a>
          <div class="wayfarer-drawer-separator"></div>
        </nav>
      </div>