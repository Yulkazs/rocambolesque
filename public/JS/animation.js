const images = ['../Images/backgrounds/dish-1.png', '../Images/backgrounds/dish-2.png', '../Images/backgrounds/dish-3.png', '../Images/backgrounds/dish-4.png'];
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

setInterval(changeImage, 6000); // Change image every 6 seconds (6000 milliseconds)
