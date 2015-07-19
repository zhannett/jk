$(document).ready(function () {
    activateMenus();
    detectBadgeBox();
    initializeSlider();
    mnav();
    //newsFeeds(); 
    //validateForms();
});


/* MENU ACTIVATION */

function activateMenus() {
    $('.navigation > ul > li').mouseenter(function () {
        $(this).find('.submenu').show();
    });
    $('.navigation > ul > li').mouseleave(function () {
        $(this).find('.submenu').hide();
    });
}


/* BADGE BOX RESIZING */

function detectBadgeBox() {

    $('.badgebox').each(function () {
        var inner = $(this).children('ul');
        var numElements = inner.children('li').length;
        inner.css({ 'width': (numElements * 160) + "px" });
    });

}


/* HOMEPAGE VIDEO SLIDER */

function initializeSlider(){
    $('.slider').each(function(){
        var sl = $(this);
        //slider -> slidercontent --> sliderelement
        var slideWidth = sl.find('.slidercontent > .sliderelement').width(); 
        var currentElement = 0; 
        var numElements = sl.find('.slidercontent > .sliderelement').length; 
        var btn_left = sl.find('.controls_l');
        var btn_right = sl.find('.controls_r'); 
        var userInterrupt = false; 
        var tweenPeriod = 1000;
        var delayTime = 5000;
        var indexOffset = 0; 

        /* console.log("Slider detected with "+numElements+" elements."); */
        
        //Setup
        for (var i = 0; i < numElements; i++){
            $('.controls_abs_inner').append('<div class="abs_element_inactive"></div>');
        }
        $('.controls_abs_inner').css({'width': (20*numElements)+'px'}); 


        $(btn_left).click(function(){
		$('.slidercontent').show();
		if (!jwplayer()) {
			userInterrupt = true; 
            		goLeft();
		} else {
			jwplayer().remove();
			userInterrupt = false; 
            		goLeft();		}
                    });
        $(btn_right).click(function(){
		$('.slidercontent').show();
		if (!jwplayer()) {
			userInterrupt = true; 
           	        goRight();
		} else {
			jwplayer().remove();
			userInterrupt = false; 
            		goRight();	
		}
        }); 
        $('.controls_abs_inner').children().click(function(){
		var index;
		$('.slidercontent').show();
		if (!jwplayer()) {
			userInterrupt = true; 
            		index = $('.controls_abs_inner').children().index(this);
            		goTo(index); 
		} else {
			jwplayer().remove();
			userInterrupt = false; 
            		index = $('.controls_abs_inner').children().index(this);
            		goTo(index); 		
		}
        });


        var goLeft = function(){
            if (currentElement !== 0){
                sl.children('.slidercontent').animate({left:"+="+slideWidth},tweenPeriod);
                currentElement -= 1; 
            }else{
                sl.children('.slidercontent').prepend(sl.find('.slidercontent > .sliderelement').last()); 
                sl.children('.slidercontent').css({'left':'-='+slideWidth});
                sl.children('.slidercontent').animate({left:"+="+slideWidth},tweenPeriod,function(){resetRight()});


                currentElement = numElements -1; 
            }
            updateCircles(); 
        };

        var goRight = function(){
            if (currentElement < numElements -1){
                sl.children('.slidercontent').animate({left:"-="+slideWidth},tweenPeriod); 
                currentElement += 1;
            }else{
                sl.children('.slidercontent').append(sl.find('.slidercontent > .sliderelement').first()); 
                sl.children('.slidercontent').css({'left':'+='+slideWidth});
                sl.children('.slidercontent').animate({left:"-="+slideWidth},tweenPeriod,function(){resetLeft()});


                currentElement = 0; 
            }
            updateCircles(); 
        };

        var goAuto = function(){
	    if (!jwplayer()) {
		$('.slidercontent').show();
		if (currentElement !== numElements -1){
                	sl.children('.slidercontent').animate({left:"-="+slideWidth},tweenPeriod); 
                	currentElement++; 
           	}else{
               		 //sl.children('.slidercontent').animate({left:"0"},tweenPeriod);
                
                	sl.children('.slidercontent').append(sl.find('.slidercontent > .sliderelement').first()); 
               		sl.children('.slidercontent').css({'left':'+='+slideWidth});
                	sl.children('.slidercontent').animate({left:"-="+slideWidth},tweenPeriod,function(){resetLeft()});
                	currentElement = 0; 
            	}
            	updateCircles(); 

	    }                      
        };

        var resetLeft = function(){
            sl.children('.slidercontent').prepend(sl.find('.slidercontent > .sliderelement').last());
            sl.children('.slidercontent').css({'left':'0px'}); 
        };
        var resetRight = function(){
            sl.children('.slidercontent').append(sl.find('.slidercontent > .sliderelement').first());
            sl.children('.slidercontent').css({'left':(-(numElements-1)*slideWidth)+'px'}); 
        };
        var goTo = function(whichOne){
                sl.children('.slidercontent').animate({left:(-slideWidth*whichOne)},tweenPeriod); 
                currentElement = whichOne; 
                updateCircles(); 
        };

        var updateCircles = function(){
            $('.controls_abs_inner').children().removeClass(); 
            $('.controls_abs_inner').children().addClass("abs_element_inactive"); 
            $('.controls_abs_inner').children().eq(currentElement).removeClass("abs_element_inactive"); 
            $('.controls_abs_inner').children().eq(currentElement).addClass("abs_element_active"); 
        };
        var autoSlide = function (){
            if (!userInterrupt){
                goAuto();
                setTimeout(autoSlide, delayTime);
            } else {
		return;
	    }
        };

        updateCircles(); 
        setTimeout(autoSlide, delayTime);


	$('#slide0').click(function(){
		$('.slidercontent').hide();
		jwplayer('video').setup({
			flashplayer: "/player.swf&autostart=true",
			image: "http://pia-addfdfd6.s3.amazonaws.com/rotator/video/Slide1.jpg",
			width: 470,
			height: 264,
			events: {
				onComplete: function() {
					this.remove(); 
					$('.slidercontent').show();
					userInterrupt = false;
					goAuto();
				},
				onReady: function() {
					this.play();
				}
			},
			modes: [
				{type: "html5"},
				{type: "flash", src: "/player.swf"},
				{type: "download"}
			],
			levels: [
				{file: "http://pia-addfdfd6.s3.amazonaws.com/videos/PIA_anita_rev.mp4"},
				{file: "http://pia-addfdfd6.s3.amazonaws.com/videos/PIA_anita_rev-PIA_Website.webm"}
			],
			plugins: 'gapro2,captions',
			gapro2.accountid: 'UA-28932409-10',
			captions.file: '/Content/Captions/slide0.srt'	
		});
		return false;
	});

	$('#slide1').click(function(){
		$('.slidercontent').hide();
		jwplayer('video').setup({
			flashplayer: "/player.swf&autostart=true",
			image: "http://pia-addfdfd6.s3.amazonaws.com/rotator/video/Slide2.jpg",
			width: 470,
			height: 264,
			events: {
				onComplete: function() {
					this.remove();
					$('.slidercontent').show();
					userInterrupt = false;
					goAuto();
				},
				onReady: function() {this.play();}
			},
			modes: [
				{type: "html5"},
				{type: "flash", src: "/player.swf"},
				{type: "download"}
			],
			levels: [
				{file: "http://pia-addfdfd6.s3.amazonaws.com/videos/PIA_bill_rev.mp4"},
				{file: "http://pia-addfdfd6.s3.amazonaws.com/videos/PIA_bill_rev-PIA_Website.webm"}
			],
			plugins: 'gapro2,captions',
			gapro2.accountid: 'UA-28932409-10',
			captions.file: '/Content/Captions/slide1.srt'	
		});
		return false;
	});
	$('#slide2').click(function(){
		$('.slidercontent').hide();
		jwplayer('video').setup({
			flashplayer: "/player.swf&autostart=true",
			image: "http://pia-addfdfd6.s3.amazonaws.com/rotator/video/Slide3.jpg",
			width: 470,
			height: 264,
			events: {
				onComplete: function() {
					this.remove();
					$('.slidercontent').show();
					userInterrupt = false;
					goAuto();
				},
				onReady: function() {this.play();}
			},
			modes: [
				{type: "html5"},
				{type: "flash", src: "/player.swf"},
				{type: "download"}
			],
			levels: [
				{file: "http://pia-addfdfd6.s3.amazonaws.com/videos/PIA_taylor_rev.mp4"},
				{file: "http://pia-addfdfd6.s3.amazonaws.com/videos/PIA_taylor_rev-PIA_Website.webm"}
			],
			plugins: 'gapro2,captions',
			gapro2.accountid: 'UA-28932409-10',
			captions.file: '/Content/Captions/slide2.srt'	
		});
		return false;
	});
	$('#slide3').click(function(){
		$('.slidercontent').hide();
		jwplayer('video').setup({
			flashplayer: "/player.swf&autostart=true",
			image: "http://pia-addfdfd6.s3.amazonaws.com/rotator/video/Slide4.jpg",
			width: 470,
			height: 264,
			events: {
				onComplete: function() {
					this.remove();
					$('.slidercontent').show();
					userInterrupt = false;	
					goAuto();
				},
				onReady: function() {this.play();}
			},
			modes: [
				{type: "html5"},
				{type: "flash", src: "/player.swf"},
				{type: "download"}
			],
			levels: [
				{file: "http://pia-addfdfd6.s3.amazonaws.com/videos/PIA_Video_470X264.mp4"},
				{file: "http://pia-addfdfd6.s3.amazonaws.com/videos/PIA_Video_470X264.webm"}
			],
			plugins: 'gapro2,captions',
			gapro2.accountid: 'UA-28932409-10',
			captions.file: '/Content/Captions/slide3.srt'
		});
		return false;
	});
    }); 
}

function mnav(){
    $('.newsmodule').each(function(){
        var sl = $(this);

        $(sl).find('.mnav').children().click(function(){
            var index = $('.mnav').children().index(this);
            goTo(index); 
        });

        var goTo = function(whichOne){

            $(sl).find('.modulecontent').removeClass("show").addClass("hide"); 
            $(sl).find('.modulecontent').eq(whichOne).removeClass("hide").addClass("show");
            $(sl).find('.mnav').children().removeClass("active_btn").addClass("inactive_btn"); 
            $(sl).find('.mnav').children().eq(whichOne).removeClass("inactive_btn").addClass("active_btn");

            
        }
    goTo(0);
    }); 
}


//function newsFeeds(){
//        $(document).ready(function () {
//            $('#blogDIV').rssfeed('http://pipes.yahoo.com/pipes/pipe.run?_id=0d852cbc821749c92bbb6fde9f8d540e&_render=rss', {
//                limit: 2
//            });
//            $('#facebookFeed').rssfeed('http://pipes.yahoo.com/pipes/pipe.run?_id=9b8613ee6b31b8c2bca694476325cc0a&_render=rss', {
//                limit: 2
//            });
//            jQuery(function($){
//                $("#twitterFeed").tweet({
//                  avatar_size: 32,
//                  count: 2,
//                  username: "PIA_feed",
//                  list: "members",
//                  loading_text: "Loading..."
//                });
//            });

//        });
//}


