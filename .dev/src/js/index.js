$(".hero__slider").slick({
	infinite: true,
	slidesToShow: 4,
	slidesToScroll: 1,
	prevArrow: $(".prev-hero"),
	nextArrow: $(".next-hero"),
	responsive: [
		{
			breakpoint: 480,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
			},
		},
	],
})
