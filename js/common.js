$(document).mouseup(function (e){
	if($(window).width() <= 750){
		var container = $(".list-tab ul.mn-list");
		if (!container.is(e.target) && container.has(e.target).length === 0){
			container.hide();e.stopPropagation();
		}
	}
});

$(document).ready(function(){
	$('#vertical').lightSlider({
      	gallery:true,
      	item:1,
      	vertical:true,
      	verticalHeight:580,
      	vThumbWidth:125,
      	thumbItem:4,
      	thumbMargin: 25,
      	slideMargin:0,
      	responsive : [
            {
                breakpoint:1025,
                settings: {
                    verticalHeight:390,
			      	vThumbWidth:90,
			      	thumbItem:4,
			      	thumbMargin: 20,
                  }
            },
            {
                breakpoint:990,
                settings: {
                    verticalHeight: 580,
			      	vThumbWidth:125,
			      	thumbItem:4,
			      	thumbMargin: 20,
                  }
            },
            {
                breakpoint:680,
                settings: {
                    verticalHeight: 500,
			      	vThumbWidth:125,
			      	thumbItem:4,
			      	thumbMargin: 20,
                  }
            },
            {
                breakpoint:420,
                settings: {
                    verticalHeight: 300,
			      	vThumbWidth:80,
			      	thumbItem:4,
			      	thumbMargin: 20,
                  }
            }
        ]
    });

	$('.smobitrigger').smplmnu();

	$(".list-tab ul li a").click(function(){
		var activeTab = $(this).attr("href"); 
		$(".list-tab ul li a").removeClass("active"); 
		$(this).addClass("active"); 
		$(".tab-detail").hide(); 
		$(activeTab).fadeIn(); 
		return false;
	});

	$('a.tab-responsive').click(function(e) {
    	$('.list-tab ul.mn-list').show();
        e.stopPropagation();
        $('.list-tab ul.mn-list li a').click(function(){
            var text_ = $(this).text();
            $('a.tab-responsive').text(text_);
            $('.list-tab ul.mn-list').hide();
            e.stopPropagation();
        });
  	});

    $('.list-prj ul').slick({
		dots: false,
		infinite: true,
		arrows: true,
		swipe: false,
		speed: 1000,
		slidesToShow: 4,
		slidesToScroll: 1,
		responsive: [{
			breakpoint: 990,
			settings: {
				slidesToShow: 3
			}
		},
		{
			breakpoint: 760,
			settings: {
				slidesToShow: 2
			}
		},
		{
			breakpoint: 500,
			settings: {
				slidesToShow: 1
			}
		}]
	});

    $('ul.list-grp').slick({
		dots: false,
		infinite: true,
		arrows: true,
		swipe: false,
		speed: 1000,
		slidesToShow: 4,
		slidesToScroll: 1,
		responsive: [{
			breakpoint: 1200,
			settings: {
				slidesToShow: 3
			}
		},
		{
			breakpoint: 990,
			settings: {
				slidesToShow: 2
			}
		},
		{
			breakpoint: 420,
			settings: {
				slidesToShow: 1
			}
		}]
	});

    $('#slider-id').camera({
    	playPause: false,
    	navigation: true,
    	pagination: false,
    	hover: false,
    	time: 3000,
    	height: '45%'
    });
});

