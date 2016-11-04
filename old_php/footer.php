        <footer class="wayfarer-footer mdl-mega-footer">
          <div class="mdl-mega-footer--top-section">
            <div class="mdl-mega-footer--left-section">
              <button class="mdl-mega-footer--social-btn"><img class="social" src="images/facebook.svg"></button>
              &nbsp;
              <button class="mdl-mega-footer--social-btn"><img class="social" src="images/github.svg"></button>
              &nbsp;
              <button class="mdl-mega-footer--social-btn"><img class="social" src="images/linkedin.svg"></button>
            </div>
            <div class="mdl-mega-footer--right-section">
              <a class="mdl-typography--font-light" href="#top">
                Back to Top
                <i class="material-icons">expand_less</i>
              </a>
            </div>
          </div>

          <div class="mdl-mega-footer--middle-section">
            <p class="mdl-typography--font-light">All images copyright Wayfarer 2016</p>
            <p class="mdl-typography--font-light">Some features and devices may not be available in all areas</p>
          </div>

          <div class="mdl-mega-footer--bottom-section">
            <a class="wayfarer-link wayfarer-link-menu mdl-typography--font-light" id="version-dropdown">
              Contributors
              <i class="material-icons">arrow_drop_up</i>
            </a>
            <ul class="mdl-menu mdl-js-menu mdl-menu--top-left mdl-js-ripple-effect" for="version-dropdown">
              <li class="mdl-menu__item">Matt Neal</li>
              <li class="mdl-menu__item">Kim Hopper</li>
              <li class="mdl-menu__item">Debs Lim</li>
            </ul>
            <a class="wayfarer-link wayfarer-link-menu mdl-typography--font-light" id="developers-dropdown">
              For Developers
              <i class="material-icons">arrow_drop_up</i>
            </a>
            <ul class="mdl-menu mdl-js-menu mdl-menu--top-left mdl-js-ripple-effect" for="developers-dropdown">
              <li class="mdl-menu__item">Visit Github Page</li>
              <li class="mdl-menu__item">Ask us a question</li>
            </ul>
            <a class="wayfarer-link mdl-typography--font-light" href="">Blog</a>
            <a class="wayfarer-link mdl-typography--font-light" href="">Privacy Policy</a>
          </div>

        </footer>

      </div>
    </div>
    </div>

    <script src="https://code.getmdl.io/1.1.3/material.min.js"></script>
    <script>
      $(document).ready(function(e) {
        $('img[usemap]').rwdImageMaps();
      });

      $(document).ready(function() {
  $(".animsition").animsition({
    inClass: 'zoom-in',
    outClass: 'fade-out',
    inDuration: 1500,
    outDuration: 800,
    linkElement: '.animsition-link',
    // e.g. linkElement: 'a:not([target="_blank"]):not([href^="#"])'
    loading: true,
    loadingParentElement: 'body', //animsition wrapper element
    loadingClass: 'animsition-loading',
    loadingInner: '', // e.g '<img src="loading.svg" />'
    timeout: false,
    timeoutCountdown: 5000,
    onLoadEvent: true,
    browser: [ 'animation-duration', '-webkit-animation-duration'],
    // "browser" option allows you to disable the "animsition" in case the css property in the array is not supported by your browser.
    // The default setting is to disable the "animsition" in a browser that does not support "animation-duration".
    overlay : false,
    overlayClass : 'animsition-overlay-slide',
    overlayParentElement : 'body',
    transition: function(url){ window.location.href = url; }
  });
});
</script>
   <script>
    var dialog = document.querySelector('dialog');
    var showDialogButton = document.querySelector('#show-dialog');
    if (! dialog.showModal) {
      dialogPolyfill.registerDialog(dialog);
    }
    showDialogButton.addEventListener('click', function() {
      dialog.showModal();
    });
    dialog.querySelector('.close').addEventListener('click', function() {
      dialog.close();
    });
  </script>
  </body>
</html>