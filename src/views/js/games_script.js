let currentIndex = 0; 
      const slides = document.querySelectorAll('#carousel .min-w-full');
      const totalSlides = slides.length;

      const carousel = document.getElementById('carousel');

      const goToNextSlide = () => {
        if (currentIndex < totalSlides - 1) {
          currentIndex++;
        } else {
          currentIndex = 0; 
        }
        updateCarousel();
      };

      const goToPrevSlide = () => {
        if (currentIndex > 0) {
          currentIndex--;
        } else {
          currentIndex = totalSlides - 1;
        }
        updateCarousel();
      };

      const updateCarousel = () => {
        carousel.style.transform = `translateX(-${currentIndex * 100}%)`;
      };

      document.getElementById('next').addEventListener('click', goToNextSlide);
      document.getElementById('prev').addEventListener('click', goToPrevSlide);