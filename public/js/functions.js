/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 44);
/******/ })
/************************************************************************/
/******/ ({

/***/ 44:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(45);


/***/ }),

/***/ 45:
/***/ (function(module, exports) {

/* Scroll function  */
function addFixedHeader() {
    var header = '#header';
    var main = 'main';
    var fixed = 'fixed-header';

    var scroll = $(window).scrollTop();
    var header_height = $(header).height();

    if (scroll >= 500) {
        $(header).addClass(fixed);
        $(main).css('padding-top', header_height);
    } else {
        $(main).css('padding-top', '');
        $(header).removeClass(fixed);
    }
}

function scrollToTop() {
    var scroll = $(window).scrollTop();

    if (scroll >= 500) {
        $('.scroll-up-button').removeAttr('hidden');
    } else {
        $('.scroll-up-button').attr('hidden', 'hidden');
    }
}

function getScrolledPercentage() {
    var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
    var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;

    winScroll = winScroll - 600;
    height = height - 600;

    if (winScroll < 0) {
        winScroll = 0;
    }

    var scrolled = winScroll / height * 100;

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
    $("html, body").animate({ scrollTop: 0 }, "slow");
    return false;
});

/* Drop down menu */
function checkHoverMenuAndClose() {
    setTimeout(function () {
        var hoverDropContent = $('.drop-down-content:hover').length;
        var hoverExtraDiv = $('.extra-div:hover').length;
        var hoverDropBtn = $('.drop-btn:hover').length;
        var hoverUserName = $('.user-name:hover').length;
        if (hoverDropContent === 0 && hoverExtraDiv === 0 && hoverDropBtn === 0 && hoverUserName === 0) {
            $('.drop-down-content').hide();
        }
    }, 800);
}

$('.drop-down-content').mouseleave(function () {
    checkHoverMenuAndClose();
});
$('.drop-btn, .extra-div, .user-name').mouseleave(function () {
    checkHoverMenuAndClose();
});
$('.drop-btn, .extra-div, .user-name').mouseover(function () {
    setTimeout(function () {
        if ($(".drop-down-content").css('display') !== 'block') {
            $(".drop-down-content").fadeIn("fast", function () {});
        }
    }, 1);
});

$('.span-mob').on('click touchstart', function () {
    setTimeout(function () {
        $('.nav-mobile').show();
    }, 100);
});
$('.cross-mobile').on('click touchstart', function () {
    setTimeout(function () {
        $('.nav-mobile').hide();
    }, 100);
});

/***/ })

/******/ });