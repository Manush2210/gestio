<!-- JS Implementing Plugins -->
<script src="{{ asset('gestio/landing/js/vendor.min.js') }}"></script>

<!-- JS Space -->
<script src="{{ asset('gestio/landing/js/js/theme.min.js') }}"></script>

<!-- JS Plugins Init. -->
<script>
  (function() {
    // INITIALIZATION OF MEGA MENU
    // =======================================================
    const megaMenu = new HSMegaMenu('.js-mega-menu', {
      desktop: {
        position: 'left'
      }
    })


    // INITIALIZATION OF SHOW ANIMATIONS
    // =======================================================
    new HSShowAnimation('.js-animation-link')


    // INITIALIZATION OF BOOTSTRAP VALIDATION
    // =======================================================
    HSBsValidation.init('.js-validate', {
      onSubmit: data => {
        data.event.preventDefault()
        alert('Submited')
      }
    })


    // INITIALIZATION OF GO TO
    // =======================================================
    new HSGoTo('.js-go-to')


    // INITIALIZATION OF NAV SCROLLER
    // =======================================================
    new HsNavScroller('.js-nav-scroller')


    // INITIALIZATION OF TEXT ANIMATION (TYPING)
    // =======================================================
    const typed = HSCore.components.HSTyped.init('.js-typedjs')
  })()
</script>