const images = ['../Images/backgrounds/dish-1.png', '../Images/backgrounds/dish-2.0.png', '../Images/backgrounds/dish-3.0.png', '../Images/backgrounds/dish-4.0.png'];
const slideshowImage = document.querySelector('.slideshow-image');
let currentIndex = 0;

function changeImage() {
  slideshowImage.style.opacity = '0';
  setTimeout(() => {
    slideshowImage.src = images[currentIndex];
    slideshowImage.style.opacity = '1';
    currentIndex = (currentIndex + 1) % images.length;
  }, 1000);
}

// Execute changeImage function immediately upon page load
changeImage();

// Set interval after the first execution to change images every 6 seconds
setInterval(changeImage, 6000); // Change image every 6 seconds (6000 milliseconds)
