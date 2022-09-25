// ******************//
//    All Sliders    //
// ******************//

// Home Page Client Slider
if (document.querySelector('.client-slider')) {
	new Splide('.client-slider', {
		type: 'loop',
		rewind: true,
		perPage: 5,
		perMove: 5,
		arrows: false,
		pagination: false,
		autoplay: true,
		breakpoints: {
			770: {
				perPage: 2,
				perMove: 2,
			},
			480: {
				perPage: 1,
				perMove: 1,
			},
		},
	}).mount();
}


// Founders history Slider
if (document.querySelector('.founders-slider')) {
	new Splide('.founders-slider', {
		type: 'fade',
		rewind: true,
		perPage: 1,
		arrows: false,
		pagination: true,
		autoplay: true,
		speed: 900,
	}).mount();
}
// Awards history Slider
if (document.querySelector('.awards-slider')) {
	new Splide('.awards-slider', {
		type: 'loop',
		rewind: true,
		perPage: 4,
		arrows: false,
		pagination: false,
		autoplay: true,
		speed: 900,
		breakpoints: {
			770: {
				perPage: 2,
				perMove: 2,
			},
			480: {
				perPage: 1,
				perMove: 1,
			},
		},
	}).mount();
}

// Team Slider
if (document.querySelector('.team-slider')) {
	new Splide('.team-slider', {
		type: 'loop',
		rewind: true,
		perPage: 3,
		perMove: 1,
		arrows: true,
		pagination: false,
		autoplay: true,
		speed: 900,
		breakpoints: {
			770: {
				perPage: 2,
				perMove: 2,
			},
			480: {
				perPage: 1,
				perMove: 1,
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
		arrows: true,
		pagination: false,
		autoplay: true,
		speed: 900,
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
			770: {
				perPage: 3,
				perMove: 2,
			},
			480: {
				perPage: 1,
				perMove: 1,
			},
		},
	}).mount();
}
