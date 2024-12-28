( function( window, document ) {
  function business_accountant_keepFocusInMenu() {
    document.addEventListener( 'keydown', function( e ) {
      const business_accountant_nav = document.querySelector( '.sidenav' );
      if ( ! business_accountant_nav || ! business_accountant_nav.classList.contains( 'open' ) ) {
        return;
      }
      const elements = [...business_accountant_nav.querySelectorAll( 'input, a, button' )],
        business_accountant_lastEl = elements[ elements.length - 1 ],
        business_accountant_firstEl = elements[0],
        business_accountant_activeEl = document.activeElement,
        tabKey = e.keyCode === 9,
        shiftKey = e.shiftKey;
      if ( ! shiftKey && tabKey && business_accountant_lastEl === business_accountant_activeEl ) {
        e.preventDefault();
        business_accountant_firstEl.focus();
      }
      if ( shiftKey && tabKey && business_accountant_firstEl === business_accountant_activeEl ) {
        e.preventDefault();
        business_accountant_lastEl.focus();
      }
    } );
  }
  business_accountant_keepFocusInMenu();
} )( window, document );