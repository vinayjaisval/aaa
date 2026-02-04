

  $(document).ready(function(){
    $('.news_content').owlCarousel({
        loop:true,
        margin: 50,
        nav: false,
        autoplay:true,
		autoplayTimeout:700,
		autoplaySpeed:700,
		autoplayHoverPause:true,
        responsive:{
            300: {
                items:1,
            },
            480: {
                items:1,
            },
            768: {
                items:1,
            },
            1170: {
                items:1,
            },
        }
    })
  })