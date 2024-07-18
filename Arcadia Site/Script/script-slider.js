document.addEventListener('DOMContentLoaded', function() {
    const slides = document.querySelector('.slides');
    const prevButton = document.querySelector('.prev');
    const nextButton = document.querySelector('.next');
    let index = 0;

    function showSlide(n) {
        const slidesCount = slides.children.length;
        if (n >= slidesCount) {
            index = 0;
        } else if (n < 0) {
            index = slidesCount - 1;
        } else {
            index = n;
        }
        const offset = -index * 100;
        slides.style.transform = 'translateX(' + offset + '%)';
    }

    prevButton.addEventListener('click', function() {
        showSlide(index - 1);
    });

    nextButton.addEventListener('click', function() {
        showSlide(index + 1);
    });

    setInterval(function() {
        showSlide(index + 1);
    }, 5000);
});
