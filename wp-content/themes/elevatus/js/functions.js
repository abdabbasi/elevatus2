// ******************//
//    All Sliders    //
// ******************//

// Our Team Slider
if (document.querySelector('.our-team-slider')) {
	new Splide('.our-team-slider', {
		type: 'loop',
		rewind: true,
		perPage: 3,
		perMove: 1,
		arrows: true,
		pagination: false,
		autoplay: true,
		speed: 900,
		breakpoints: {
			900: {
				perPage: 2,
				arrows: false,
				autoplay: true,
				speed: 1500,
			},
			480: {
				perPage: 1,
			},
		},
	}).mount();
}

// Testimonials Slider Slider
if (document.querySelector('.testimonials-slider')) {
	new Splide('.testimonials-slider', {
		type: 'loop',
		perPage: 1,
		arrows: true,
		pagination: false,
		autoplay: true,
		speed: 900,
	}).mount();
}
// Testimonials-2 Slider Slider
if (document.querySelector('.testimonials-slider-2')) {
	new Splide('.testimonials-slider-2', {
		type: 'loop',
		perPage: 2,
		perMove: 1,
		arrows: true,
		pagination: false,
		autoplay: true,
		speed: 900,
		breakpoints: {
			770: {
				perPage: 1,
			},
		},
	}).mount();
}

// Integrations Slider
if (document.querySelector('.integrations-slider')) {
	new Splide('.integrations-slider', {
		type: 'loop',
		rewind: true,
		perPage: 5,
		perMove: 1,
		arrows: false,
		pagination: false,
		autoplay: true,
		speed: 900,
		breakpoints: {
			1700: {
				perPage: 4,
			},
			770: {
				perPage: 3,
			},
			480: {
				perPage: 1,
			},
		},
	}).mount();
}

// Company Logos Slider
if (document.querySelector('.company-logos-slider')) {
	new Splide('.company-logos-slider', {
		type: 'loop',
		rewind: true,
		perPage: 5,
		perMove: 1,
		arrows: false,
		pagination: false,
		autoplay: true,
		speed: 900,
		breakpoints: {
			1100: {
				perPage: 4,
			},
			900: {
				perPage: 3,
			},
			480: {
				perPage: 2,
			},
		},
	}).mount();
}


// Side Menu Section
document.addEventListener("DOMContentLoaded", function () {
	if (document.querySelector('.has-side-menu .side-menu')) {
		var sideMenu = document.querySelectorAll('.has-side-menu .side-menu a')
		console.log(sideMenu)
		if (sideMenu.length != 0) {

			document.querySelector('.has-side-menu .side-menu a').classList.add('active')
			sideMenu.forEach(el => {
				el.addEventListener('click', function () {
					sideMenu.forEach(el => {
						el.classList.remove('active')
					})
					this.classList.add('active')
				})
			});
		}
	}

	// Filter links (Blog Page)
	if (document.querySelector('.filter-sec .links')) {
		document.querySelector('.filter-sec .links').addEventListener('change', function (e) {
			window.location.href = e.target.value + '#filter_sec';
		});

		// Set Select Option selected
		var url = window.location.href;
		document.querySelectorAll('.filter-sec .links option').forEach(el => {
			if (el.value == url || url.includes(el.value)) {
				el.setAttribute("selected", "selected");
			}
		});
	}

});



