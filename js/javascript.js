document.addEventListener('DOMContentLoaded', function() {
    // 1. Set Current Year in Footer
    const currentYearSpan = document.getElementById('current-year');
    if (currentYearSpan) {
        currentYearSpan.textContent = new Date().getFullYear();
    }

    // 2. Simple Form Submission Handler
    const form = document.getElementById('enrollment-form');
    const messageDiv = document.getElementById('form-message');

    if (form && messageDiv) {
        form.addEventListener('submit', function(e) {
            e.preventDefault(); 
            form.style.display = 'none';
            messageDiv.classList.remove('hidden');

            setTimeout(() => {
                messageDiv.classList.add('hidden');
                form.style.display = 'flex';
                form.reset();
            }, 5000); 
        });
    }

    // --- 3. Image Slideshow/Animation Logic ---
    const slides = document.querySelectorAll('#slideshow .slide');
    const slideInterval = 5000; // 5 seconds interval
    let currentSlide = 0;

    function showSlides() {
        // Stop if there are no images
        if (slides.length === 0) {
            console.warn("Slideshow failed: No elements found with class 'slide' inside '#slideshow'.");
            return;
        }

        // Remove 'active' class from all slides
        slides.forEach(slide => {
            slide.classList.remove('active');
        });

        // Calculate the next slide index
        currentSlide++;
        if (currentSlide >= slides.length) {
            currentSlide = 0;
        }

        // Add 'active' class to the new current slide
        slides[currentSlide].classList.add('active');
    }

    // Start the slideshow
    if (slides.length > 0) {
        // Ensure the first slide is visible immediately
        slides[currentSlide].classList.add('active');
        
        // Start the rotation after the first image has been displayed for one interval
        setInterval(showSlides, slideInterval);
    }
});
document.addEventListener('DOMContentLoaded', function () {
    const toggleButton = document.getElementById('mobile-menu-toggle');
    const navMenu = document.getElementById('main-menu');

    if (toggleButton && navMenu) {
        toggleButton.addEventListener('click', function () {
            // This line toggles the 'active' class that shows/hides the menu in CSS
            navMenu.classList.toggle('active'); 
            
            // Optional: Changes the icon from bars to X
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