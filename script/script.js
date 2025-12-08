// Navbar scroll effect - transparent to green
(function() {
  function updateNavbar() {
    const header = document.getElementById('header-container');
    if (!header) return;
    
    const scrollPos = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop || 0;
    
    if (scrollPos > 100) {
      header.classList.add('scrolled');
    } else {
      header.classList.remove('scrolled');
    }
  }
  
  // Check scroll position every 50ms
  setInterval(updateNavbar, 50);
  
  // Also listen for scroll events (as backup)
  window.addEventListener('scroll', updateNavbar, { passive: true });
  
  // Run immediately on load
  updateNavbar();
})();