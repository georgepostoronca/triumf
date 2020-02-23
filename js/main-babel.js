import $ from 'jquery';
import "jquery-validation";
import imask from "imask";
import svg4everybody from "svg4everybody";
import Swiper from 'swiper';

// SVG Old IE
svg4everybody();

// Mask Phone
var element = document.querySelector('input[type="phone"');
var maskOptions = {
  mask: '+{7}(000)000-00-00'
};
var mask = IMask(element, maskOptions);


// Form Vlidation
$.validator.setDefaults({
	debug: false,
	success: 'valid',
	rules: {
		email: {
			required: true,
			email: true,
		}
	},
	errorPlacement: function(error, element) {
		$(this).removeClass('valid');
		$(this).addClass('error');
	},
	success: function(label, element) {
		$(this).removeClass('error');
		$(this).addClass('valid');
	},
});

$(".form-validation").each(function() {
    $(this).validate();
});

// tooltip
$(".js__open-tooltip").click(function() {
	$(".terinfo__item").removeClass("active");
	$(this).closest(".terinfo__item").addClass("active");
});

$(".terinfo__tooltip-close").click(function() {
	$(this).closest(".terinfo__item").removeClass("active");
});


// Slider
var swiper = new Swiper('.terrslid', {
	slidesPerView: 2,
	spaceBetween: 30,
	pagination: {
		el: '.terrslid__pagination',
	},
	navigation: {
		nextEl: '.terrslid__next',
		prevEl: '.terrslid__prev',
	},
	breakpoints: {
        580: {
          slidesPerView: 2,
          spaceBetween: 30,
        },
        0: {
          slidesPerView: 1,
          spaceBetween: 0,
        },
      }
});


// Scroll
