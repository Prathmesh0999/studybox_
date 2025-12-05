document.addEventListener('DOMContentLoaded', function () {
    const toggleButton = document.getElementById('mobile-menu-toggle');
    const navMenu = document.getElementById('main-menu');

    if (toggleButton && navMenu) {
        toggleButton.addEventListener('click', function () {
            // CRITICAL: This line adds the 'active' class on the first click and REMOVES it on the second click.
            navMenu.classList.toggle('active'); 
            
            // Optional: Icon change (fa-bars to fa-times and back)
            const icon = toggleButton.querySelector('i');
            if (navMenu.classList.contains('active')) {
                icon.classList.remove('fa-bars');
                icon.classList.add('fa-times');
            } else {
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
            }
        });
    }
});