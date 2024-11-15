// Show the specified slide for the specific slider
function showSlide(sliderId, index) {
    const slider = document.querySelector(`#${sliderId}`);
    const slides = slider.querySelectorAll('.slide');
    slides.forEach((slide, i) => {
        slide.classList.remove('active'); // Remove active class from all slides
        if (i === index) {
            slide.classList.add('active'); // Add active class to the current slide
        }
    });
}

// Go to the next slide in the specified slider
function nextSlide(sliderId) {
    const slider = document.querySelector(`#${sliderId}`);
    const slides = slider.querySelectorAll('.slide');
    const currentSlide = parseInt(slider.getAttribute('data-current-slide') || 0);
    const newSlide = (currentSlide + 1) % slides.length;
    slider.setAttribute('data-current-slide', newSlide); // Update current slide index
    showSlide(sliderId, newSlide);
}

// Go to the previous slide in the specified slider
function prevSlide(sliderId) {
    const slider = document.querySelector(`#${sliderId}`);
    const slides = slider.querySelectorAll('.slide');
    const currentSlide = parseInt(slider.getAttribute('data-current-slide') || 0);
    const newSlide = (currentSlide - 1 + slides.length) % slides.length;
    slider.setAttribute('data-current-slide', newSlide); // Update current slide index
    showSlide(sliderId, newSlide);
}

// Initialize each slider on page load
document.querySelectorAll('.slider').forEach(slider => {
    slider.setAttribute('data-current-slide', 0); // Set initial slide index
    const sliderId = slider.id;
    showSlide(sliderId, 0); // Show the first slide of each slider
});
