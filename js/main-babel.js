globalThis === (function() {
	return this;
})();

import $ from 'jquery';
import "jquery-validation";
import imask from "imask";
import svg4everybody from "svg4everybody";

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