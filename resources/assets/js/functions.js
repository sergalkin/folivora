/* Scroll function  */
function addFixedHeader() {
    let header = '#header';
    let main = 'main';
    let fixed = 'fixed-header';

    let scroll = $(window).scrollTop();
    let header_height = $(header).height();


    if (scroll >= 500) {
        $(header).addClass(fixed);
        $(main).css('padding-top', header_height);
    } else {
        $(main).css('padding-top', '');
        $(header).removeClass(fixed);
    }
}

function scrollToTop() {
    let scroll = $(window).scrollTop();

    if (scroll >= 500) {
        $('.scroll-up-button').removeAttr('hidden');
    } else {
        $('.scroll-up-button').attr('hidden', 'hidden');
    }

}

function getScrolledPercentage() {
    let winScroll = document.body.scrollTop || document.documentElement.scrollTop;
    let height = document.documentElement.scrollHeight - document.documentElement.clientHeight;

    winScroll = winScroll-600;
    height = height - 600;

    if (winScroll < 0) {
        winScroll = 0;
    }

    let scrolled = (winScroll / height) * 100;

    document.getElementById("how-much-read").style.width = scrolled + "%";
}

$(window).scroll(function () {
    getScrolledPercentage();
    if ($(window).width() >= 900) {
        addFixedHeader();
        scrollToTop();
    }
});
$('.scroll-up-button').click(function () {
    $("html, body").animate({scrollTop: 0}, "slow");
    return false;
});


/* Drop down menu */
function checkHoverMenuAndClose() {
    setTimeout(function () {
        let hoverDropContent = $('.drop-down-content:hover').length;
        let hoverExtraDiv = $('.extra-div:hover').length;
        let hoverDropBtn = $('.drop-btn:hover').length;
        let hoverUserName = $('.user-name:hover').length;
        if (hoverDropContent === 0 && hoverExtraDiv === 0 && hoverDropBtn === 0 && hoverUserName === 0) {
            $('.drop-down-content').hide();
        }
    }, 800);

}

$('.drop-down-content').mouseleave(function () {
    checkHoverMenuAndClose()
});
$('.drop-btn, .extra-div, .user-name').mouseleave(function () {
    checkHoverMenuAndClose()
});
$('.drop-btn, .extra-div, .user-name').mouseover(function () {
    setTimeout(function () {
        if ($(".drop-down-content").css('display') !== 'block') {
            $(".drop-down-content").fadeIn("fast", function () {
            });
        }
    }, 1);
});

$('.span-mob').on('click touchstart', function() {
    setTimeout(function () {
        $('.nav-mobile').show();
    },100);
});
$('.cross-mobile').on('click touchstart', function() {
    setTimeout(function () {
        $('.nav-mobile').hide();
    },100);
});


