(function($){

	var flash = $('.flash'),
		audio = $('audio'),
        slider = $('.slider'),
		played = $('.slider .played'),
        update = '0%',
		playing = 0,
        playpause = $('.playpause'),
        playpauseIcon = $('.playpause p'),
        languagesBtn = $('.languages button'),
        spanishBtn = $('.languages .spanish'),
        englishBtn = $('.languages .english'),
        poster = $('.poster img'),
        browser = $(window),
        browserWidth = browser.width(),
        margin = 0;

	flash.animate({
		opacity: 1
	}, 5000, function(){
		flash.animate({
			margin: 0,
			height: 0,
			padding: 0,
			opacity: 0
		},500, function(){
			flash.css('display', 'none');
		})
	});

	var update =
    {
        init: function()
        {
            var timeInterval = 1000;
 
            var max = 2;
 
            var i = 0;
 
            $('.time p').html(new Date().toLocaleTimeString() + " - " + new Date().toLocaleDateString());
 
            var infiniteLoop = setInterval(function(){
 
                $('.time p').html(new Date().toLocaleTimeString() + " - " + new Date().toLocaleDateString());

            }, timeInterval);
        }
    };

    var animateSlider = function(){

    	var max = audio[0].duration,
    		time = setInterval(function(){
    				
    			if(playing){
    				update = ((audio[0].currentTime)/max)*100 + '%';
    				played.css('width', update);
    			}
    			
    			if(update == '100%'){
    				clearInterval(time);
                    played.css('width', '0%');
                    playing = 0;
                    playpauseIcon.html('>');
    			}

    		}, 100);
    }
 
    update.init();

    playpause.click(function(){
    	if(playing){
    		audio[0].pause();
    		playing = 0;
            playpauseIcon.html('>');

    	}else{
    		audio[0].play();
    		playing = 1;
    		animateSlider();
            playpauseIcon.html('| |');
    	}
    });

    slider.mousemove(function(e){
        // slider.css('height', '10px');
        slider.click(function(){
            played.css('width', e.pageX);
            var now = (e.pageX/$(window).width())*audio[0].duration;
            audio[0].currentTime = now;
        });
    })

    languagesBtn.click(function(){
        if(this == languagesBtn[0]){
            languagesBtn.removeClass('active');
            englishBtn.addClass('active');
        }else{
            languagesBtn.removeClass('active');
            spanishBtn.addClass('active');
        }
    })

    var resizePoster = function(){
        if(browser.width() < 767){
            margin = (767-browser.width())/2;
            browserWidth = browser.width();
            poster.css('margin-left',-margin);
        }else{
            margin = 0;
            poster.css('margin-left',0);
        }
    }

    $(window).resize(function(){
        resizePoster();
    });

    resizePoster();
    

})(jQuery);