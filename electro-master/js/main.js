(function ($) {
	"use strict"

	// Mobile Nav toggle
	$('.menu-toggle > a').on('click', function (e) {
		e.preventDefault();
		$('#responsive-nav').toggleClass('active');
	})

	// Fix cart dropdown from closing
	$('.cart-dropdown').on('click', function (e) {
		e.stopPropagation();
	});
	//////////////////////////////////////////
	//submit checkout form

	

	/////////////////////////////////////////
	//  hot deal timer

	window.onload = function () {
		if (window.location.href.indexOf('http://localhost/electro-master/Index.php') !== -1) {
			var days = document.querySelector(".days");
			var hours = document.querySelector(".hours");
			var mins = document.querySelector(".mins");
			var secs = document.querySelector(".secs");

			var dcount = 7;
			var hcount = 24;
			var mcount = 60;
			var scount = 60;

			let interval = setInterval(function () {
				scount--;
				secs.textContent = scount;
				if (scount === 0) {
					scount = 59;
					console.log(scount)
					mins.textContent = --mcount;
				}
				if (mcount === 0) {
					mcount = 59;
					hours.textContent = --hcount;
				}
				if (hcount === 0) {
					hcount = 23;
					days.textContent = --dcount;
				}
				if (dcount === 0) {
					clearInterval(interval);
				}
			}, 1000);
		}
	};


	/////////////////////////////////////////
	// Add to cart
	// function cart() {
	// 	document.getElementById("addToCartBtn").addEventListener("click", function (event) {
	// 		event.preventDefault(); // prevent the form from submitting
	// 		var form = document.getElementById("addToCartForm");
	// 		var xhr = new XMLHttpRequest();
	// 		xhr.open("POST", "addToCart.php", true);
	// 		xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	// 		xhr.onreadystatechange = function () {
	// 			if (xhr.readyState === 4 && xhr.status === 200) {
	// 				console.log(xhr.responseText);
	// 			}
	// 		};
	// 		xhr.send(new FormData(form));
	// 	});
	// }
	/////////////////////////////////////////

	// Products Slick
	$('.products-slick').each(function () {
		var $this = $(this),
			$nav = $this.attr('data-nav');

		$this.slick({
			slidesToShow: 4,
			slidesToScroll: 1,
			autoplay: true,
			infinite: true,
			speed: 300,
			dots: false,
			arrows: true,
			appendArrows: $nav ? $nav : false,
			responsive: [{
				breakpoint: 991,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1,
				}
			},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
				}
			},
			]
		});
	});

	// Products Widget Slick
	$('.products-widget-slick').each(function () {
		var $this = $(this),
			$nav = $this.attr('data-nav');

		$this.slick({
			infinite: true,
			autoplay: true,
			speed: 300,
			dots: false,
			arrows: true,
			appendArrows: $nav ? $nav : false,
		});
	});

	/////////////////////////////////////////

	// Product Main img Slick
	$('#product-main-img').slick({
		infinite: true,
		speed: 300,
		dots: false,
		arrows: true,
		fade: true,
		asNavFor: '#product-imgs',
	});

	// Product imgs Slick
	$('#product-imgs').slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		arrows: true,
		centerMode: true,
		focusOnSelect: true,
		centerPadding: 0,
		vertical: true,
		asNavFor: '#product-main-img',
		responsive: [{
			breakpoint: 991,
			settings: {
				vertical: false,
				arrows: false,
				dots: true,
			}
		},
		]
	});

	// Product img zoom
	var zoomMainProduct = document.getElementById('product-main-img');
	if (zoomMainProduct) {
		$('#product-main-img .product-preview').zoom();
	}

	/////////////////////////////////////////

	// Input number
	$('.input-number').each(function () {
		var $this = $(this),
			$input = $this.find('input[type="number"]'),
			up = $this.find('.qty-up'),
			down = $this.find('.qty-down');

		down.on('click', function () {
			var value = parseInt($input.val()) - 1;
			value = value < 1 ? 1 : value;
			$input.val(value);
			$input.change();
			updatePriceSlider($this, value)
		})

		up.on('click', function () {
			var value = parseInt($input.val()) + 1;
			$input.val(value);
			$input.change();
			updatePriceSlider($this, value)
		})
	});

	var priceInputMax = document.getElementById('price-max'),
		priceInputMin = document.getElementById('price-min');


	$("#price-max").change(function () {
		updatePriceSlider($(this).parent(), $(this).val())
	});

	// priceInputMax.addEventListener('change', function(){
	// 	updatePriceSlider($(this).parent() , this.value)
	// });


	$("#price-min").change(function () {
		updatePriceSlider($(this).parent(), $(this).val())
	});

	function updatePriceSlider(elem, value) {
		if (elem.hasClass('price-min')) {
			console.log('min')
			priceSlider.noUiSlider.set([value, null]);
		} else if (elem.hasClass('price-max')) {
			console.log('max')
			priceSlider.noUiSlider.set([null, value]);
		}
	}

	// Price Slider
	var priceSlider = document.getElementById('price-slider');
	if (priceSlider) {
		noUiSlider.create(priceSlider, {
			start: [1, 999],
			connect: true,
			step: 1,
			range: {
				'min': 1,
				'max': 999
			}
		});

		priceSlider.noUiSlider.on('update', function (values, handle) {
			var value = values[handle];
			handle ? priceInputMax.value = value : priceInputMin.value = value
		});
	}

})(jQuery);
