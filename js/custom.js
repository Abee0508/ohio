



$(function(){
  $('.attrib .option').click(function(){
    $(this).siblings().removeClass('activ');
    $(this).addClass('activ');
  })
  $('.zoomControl').click(function(){
    $(this).parents('.productCard').addClass('morph');
    $('body').addClass('noScroll');
  })
  $('.closePreview').click(function(){
    $(this).parents('.productCard').removeClass('morph');
    $('body').removeClass('noScroll');
  })
  $('.movControl').click(function(){
    let imgActiv = $(this).parents('.preview').find('.imgs img.activ');
    if ($(this).hasClass('left')) {
      imgActiv.index() == 0 ? $('.imgs img').last().addClass('activ') : $('.imgs img.activ').prev().addClass('activ');
    } else {
      imgActiv.index() == ($('.imgs img').length - 1) ? $('.imgs img').first().addClass('activ') : $('.imgs img.activ').next().addClass('activ');
    }
    imgActiv.removeClass('activ');
  })
})



document.addEventListener('DOMContentLoaded', function() {
    const buttons = document.querySelectorAll('.login-form-selector button');
    const forms = document.querySelectorAll('.login-form-content');

    buttons.forEach(button => {
        button.addEventListener('click', () => {
            // Remove the active class from all forms
            forms.forEach(form => {
                form.classList.remove('active');
            });

            // Add the active class to the selected form
            const targetForm = document.getElementById(button.getAttribute('data-target'));
            if (targetForm) {
                targetForm.classList.add('active');
            }
        });
    });

    // Initially show the first form
    if (forms.length > 0) {
        forms[0].classList.add('active');
    }
});

var swiper = new Swiper(".partner", {
    slidesPerView: 4,
    spaceBetween: 30,
    grabCursor: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
});

var swiperTwo = new Swiper(".companies-slider", {
    slidesPerView: 3,
    spaceBetween: 30,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

var swiperThree = new Swiper(".testimonial-slider", {
    slidesPerView: 3,
    spaceBetween: 150,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

AOS.init();

window.onload = function() {
    const wideImg = document.querySelector('.wide-img img');
    const upcomingImgs = document.querySelectorAll('.upcoming-img .imgg img');
    let currentIndex = 0;

    function changeImages() {
        wideImg.style.opacity = 0; // Fade out current wide image
        setTimeout(() => {
            wideImg.src = upcomingImgs[currentIndex].src; // Change wide image source
            wideImg.style.opacity = 1; // Fade in new wide image
        }, 500); // Adjust timing for your transition

        currentIndex = (currentIndex + 1) % upcomingImgs.length; // Move to next upcoming image
    }

    // Call changeImages function every 3 seconds (adjust timing as needed)
    setInterval(changeImages, 3000);
};




