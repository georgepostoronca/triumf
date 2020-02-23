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

var tabSlid1Set = {
	slidesPerView: 3,
	spaceBetween: 30,
	// init: false,
	pagination: {
	  el: '.howwork-tab-one__pagination',
	  clickable: true,
	},
	navigation: {
		nextEl: '.howwork-tab-one__next',
		prevEl: '.howwork-tab-one__prev',
	},
	autoHeight: true,
	breakpoints: {
		0: {
			slidesPerView: 1,
			spaceBetween: 0,
		},
		640: {
			slidesPerView: 1,
			spaceBetween: 0,
		},
		768: {
			slidesPerView: 2,
			spaceBetween: 10,
		},
		1024: {
			slidesPerView: 3,
			spaceBetween: 30,
		},
	}
}
var tabSlid1 = new Swiper('.howwork-tab-one', tabSlid1Set);

var tabSlid2Set = {
	slidesPerView: 3,
	spaceBetween: 30,
	// init: false,
	pagination: {
		el: '.howwork-tab-two__pagination',
		clickable: true,
	},
	navigation: {
		nextEl: '.howwork-tab-two__next',
		prevEl: '.howwork-tab-two__prev',
	},
	autoHeight: true,
	breakpoints: {
		0: {
			slidesPerView: 1,
			spaceBetween: 0,
		},
		640: {
			slidesPerView: 1,
			spaceBetween: 0,
		},
		768: {
			slidesPerView: 2,
			spaceBetween: 10,
		},
		1024: {
			slidesPerView: 3,
			spaceBetween: 30,
		},
	}
}
var tabSlid2 = new Swiper('.howwork-tab-two', tabSlid2Set);

$(".js__tab-btn").click(function() {
	var index = $(this).index();
	$(this).addClass("active").siblings().removeClass("active");
	$(".howwork-slider-wrap").eq(index).fadeIn().siblings().hide();
	console.log(typeof index, index);
	
	if(index === 0) {
		tabSlid1.destroy();
		new Swiper('.howwork-tab-one', tabSlid1Set);
	} else {
		tabSlid2.destroy();
		new Swiper('.howwork-tab-two', tabSlid2Set);
	}
});

$(".js__input-focus").focus(function() {
	console.log("focus");
	
	$(this).closest(".input-block").addClass("focus");
});

$(".js__input-focus").blur(function() {
	if($(this).val() == "") {
		$(this).closest(".input-block").removeClass("focus");
	}
});