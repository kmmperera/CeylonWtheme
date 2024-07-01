document.addEventListener('DOMContentLoaded', function () {

    //swiper slider 1

    const swiperPosts = new Swiper(".post-swiper", {
        grabCursor: true,
        slidesPerView: "auto",
        spaceBetween: 30,
        slidesPerView: 3,
        loop: true,
        autoplay: {
            delay: 7500,
            disableOnInteraction: true,
            reverseDirection:true,
          },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            567: {
                slidesPerView: 1,
            },
            996: {
                slidesPerView: 2,
            },
        },
    });
    
   



    var button = document.getElementById('call-us-btn');

    button.addEventListener('click', function () {
        showTooltip(this, 'Call/Whatsup : 39888888888');
    });

    function showTooltip(element, message) {
        // Remove existing tooltip if any
        var existingTooltip = document.querySelector('.ceymulticall-tooltip');
        if (existingTooltip) {
            existingTooltip.remove();
        }

        // Create a new tooltip element
        var tooltip = document.createElement('div');
        tooltip.className = 'ceymulticall-tooltip';
        tooltip.textContent = message;

        // Append tooltip to the button
        element.parentElement.appendChild(tooltip);

        // Position the tooltip
        var rect = element.getBoundingClientRect();
      //  tooltip.style.left = rect.left + (element.offsetWidth / 2) - (tooltip.offsetWidth / 2) + 'px';
       // tooltip.style.top = rect.top - tooltip.offsetHeight - 10 + 'px';
      

        // Automatically remove the tooltip after 3 seconds
        setTimeout(function () {
            tooltip.remove();
        }, 10000);
    }
});

