let currentSlides = {};

function changeSlide(direction, sliderId) {
    const slider = document.getElementById(sliderId);
    const images = slider.getElementsByClassName('product-image');
    const totalSlides = images.length;
    
    if (!currentSlides[sliderId]) {
        currentSlides[sliderId] = 0;
    }

    // Hide all images
    for (let i = 0; i < totalSlides; i++) {
        images[i].style.display = 'none';
    }

    // Change the current slide
    currentSlides[sliderId] += direction;

    if (currentSlides[sliderId] >= totalSlides) {
        currentSlides[sliderId] = 0;
    } else if (currentSlides[sliderId] < 0) {
        currentSlides[sliderId] = totalSlides - 1;
    }

    // Display the new current image
    images[currentSlides[sliderId]].style.display = 'block';
}

// Initialize the sliders
function initializeSliders() {
    const sliders = document.getElementsByClassName('slider');
    for (let i = 0; i < sliders.length; i++) {
        const images = sliders[i].getElementsByClassName('product-image');
        for (let j = 1; j < images.length; j++) {
            images[j].style.display = 'none';  // Hide all but the first image
        }
    }
}

window.onload = initializeSliders;
