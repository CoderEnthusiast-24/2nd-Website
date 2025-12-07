window.addEventListener('scroll', function() {
  const header = document.getElementById('header');
  const scrollThreshold = 100; // Change after 100px scroll
  
  if (window.scrollY > scrollThreshold) {
    header.classList.add('scrolled');
  } else {
    header.classList.remove('scrolled');
  }
});