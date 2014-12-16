$(function () {

//Placeholder
if(!Modernizr.input.placeholder){

	$('[placeholder]').focus(function() {
	  var input = $(this);
	  if (input.val() == input.attr('placeholder')) {
		input.val('');
		input.removeClass('placeholder');
	  }
	}).blur(function() {
	  var input = $(this);
	  if (input.val() == '' || input.val() == input.attr('placeholder')) {
		input.addClass('placeholder');
		input.val(input.attr('placeholder'));
	  }
	}).blur();
	$('[placeholder]').parents('form').submit(function() {
	  $(this).find('[placeholder]').each(function() {
		var input = $(this);
		if (input.val() == input.attr('placeholder')) {
		  input.val('');
		}
	  })
	});

}


//Detecting of Desktop browsers

if (!$.browser.mobile) {
    $('.tel a').each(function() {
        $(this).attr('href',  $(this).attr('href').replace(/^tel:/, 'callto:'));
    });
}


//ARIA markup for slider

$('#main-slider .slide-descr').each(function(){
	$(this).attr('id', 'sl-desc-' + ($(this).parent().index() + 1) ).parent().attr('aria-describedby', $(this).attr('id'));
	$(this).parent().find('h3').attr('id', 'sl-header-' + ($(this).parent().index() + 1) ).parents('.swiper-slide').attr('aria-labelledby', $(this).parent().find('h3').attr('id'));
});
$('.price-box h2').each(function(){
	$(this).attr('id', 'pb-' + ($(this).parent().index() + 1) ).parent().attr('aria-describedby', $(this).attr('id'));
});


//Popup
$('.popup-link').on('click', function(e) {
	e.preventDefault();
	var a = $(this).attr('href');
	$(a).bPopup({
		contentContainer:'.popup',
		opacity:0.9,
		transition: 'slideUp'
	});
	$('.b-close').trigger('click');
	$('select, input:checkbox, input:radio').trigger('refresh');
});




//Slider on main page

  var mySwiper = $('#main-slider .swiper-container').swiper({
    mode:'horizontal',
	speed: 600,
    loop: false,
	pagination: '#main-pagination',
	paginationClickable: true,
	progress:true,
	onProgressChange: function(swiper){
	for (var i = 0; i < swiper.slides.length; i++){
	  var slide = swiper.slides[i];
	  var progress = slide.progress;
	  var translate = progress*swiper.width;
	  var opacity = 1 - Math.min(Math.abs(progress),1);
	  slide.style.opacity = opacity;
	  swiper.setTransform(slide,'translate3d('+translate+'px,0,0)');
	}
	},
	onTouchStart:function(swiper){
	for (var i = 0; i < swiper.slides.length; i++){
	  swiper.setTransition(swiper.slides[i], 0);
	}
	},
	onSetWrapperTransition: function(swiper, speed) {
	for (var i = 0; i < swiper.slides.length; i++){
	  swiper.setTransition(swiper.slides[i], speed);
	}
	},
	onSwiperCreated: function(swiper){
		$('#main-pagination span').each(function(){
			$(this).text($(this).index()+1);
		});
		$('.swiper-slide .round').each(function(){
			$(this).text($(this).parents('.swiper-slide').index()+1);
		});
	}
  });

  $('#main-slider .arrow-left').click(function(e){mySwiper.swipePrev()});
  $('#main-slider .arrow-right').click(function(e){mySwiper.swipeNext()});

  $("#navigation li a").each(function(){
		var height = $("#navigation li").height();
		$(this).css('height', height+'px');
	});

  

//Fancybox
if($("a").is(".fancybox")){
	$(function(){
		if($("a").is(".fancybox")){
			$(".fancybox").fancybox({
				helpers : {
					overlay : {
						locked : false // important!!
					}
				}
			});
		}
	});
 }
 
  
});