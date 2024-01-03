(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();


    // Initiate the wowjs
    new WOW().init();


    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.sticky-top').addClass('shadow-sm').css('top', '0px');
        } else {
            $('.sticky-top').removeClass('shadow-sm').css('top', '-100px');
        }
    });


    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });


    // Facts counter
    $('[data-toggle="counter-up"]').counterUp({
        delay: 10,
        time: 2000
    });


    // Header carousel
    $(".header-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1500,
        items: 1,
        dots: true,
        loop: true,
        nav : true,
        navText : [
            '<i class="bi bi-chevron-left"></i>',
            '<i class="bi bi-chevron-right"></i>'
        ]
    });


    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        center: true,
        dots: false,
        loop: true,
        nav : true,
        navText : [
            '<i class="bi bi-arrow-left"></i>',
            '<i class="bi bi-arrow-right"></i>'
        ],
        responsive: {
            0:{
                items:1
            },
            768:{
                items:2
            }
        }
    });


    // Portfolio isotope and filter
    var portfolioIsotope = $('.portfolio-container').isotope({
        itemSelector: '.portfolio-item',
        layoutMode: 'fitRows'
    });
    $('#portfolio-flters li').on('click', function () {
        $("#portfolio-flters li").removeClass('active');
        $(this).addClass('active');

        portfolioIsotope.isotope({filter: $(this).data('filter')});
    });

})(jQuery);


//searching
const searchInput = document.getElementById('searchInput');
const searchResults = document.getElementById('searchResults');

searchInput.addEventListener('input', async () => {
    const searchTerm = searchInput.value.toLowerCase();

    try {
        const response = await fetch('/api/items');
        const data = await response.json();

        const filteredData = data.filter(item => item.namagame.toLowerCase().includes(searchTerm));
        displayResults(filteredData);
    } catch (error) {
        console.error('Error:', error);
    }
});


function displayResults(results) {
    searchResults.innerHTML = '';

    if (results.length > 0) {
        results.forEach(item => {
            const resultItem = document.createElement('div');


            if (item.foto_game) {
                const img = document.createElement('img');
                img.src = item.foto_game;
                img.alt = item.namagame;

                resultItem.appendChild(img);
            }


            const text = document.createElement('span');
            text.textContent = item.namagame;
            resultItem.appendChild(text);


            resultItem.addEventListener('click', () => {
                window.location.href = `${item.linkgame}`;
                // window.location.href = `{{ route('item.linkgame', [Topup_Controller::class, => item.linkgame]) }}`;
            });

            searchResults.appendChild(resultItem);
        });


        searchResults.style.display = 'block';
        searchResults.style.top = `${searchInput.offsetTop + searchInput.offsetHeight}px`;
    } else {
        searchResults.style.display = 'none';
    }
}

// Sembunyikan popup saat mengklik di luar elemen pencarian
document.addEventListener('click', (event) => {
    if (!event.target.matches('#searchInput')) {
        searchResults.style.display = 'none';
    }
});

//end searching




