jQuery(function($){
var sHeader = $('div.header')
	var sMenu = $('ul#menu');
	var aItem = sMenu.find('>li>a');
	var sItem = sMenu.find('>li');
	var ssItem = sMenu.find('li');
	var sshhItem = sMenu.find('>li>div');
	var aaItem = sshhItem.find('a');
	var LastLi = sMenu.find('li').last();
	var lastEvent = null;
	var div_Height=sshhItem.outerHeight();
	var div_Height = div_Height + 60;
	function sMenuSlide(){
		
		var t = $(this);
		t.next().children().find('li').removeClass('highlight');
		sHeader.addClass('act_header');
		t.parent().parent().parent().animate({
			height: div_Height
		  }, 300 );
		
	}
	aItem.mouseover(sMenuSlide).focus(sMenuSlide);

	function fadeOut_menu(){
		sHeader.removeClass('act_header');
		$('div.gnb').stop(true,true).animate({
			height: "60"
		  }, 30 );
		}
	$('.gnb').mouseleave(fadeOut_menu);
	LastLi.focusout(fadeOut_menu);


//전체메뉴
	function TotalToggle(){
			
			if ($('.mm_mobile_menu').hasClass('none_mobile_menu')) { 
				$('.mm_mobile_menu').removeClass('none_mobile_menu');
				$('.fix_mobile').css('display','block');
				$('#scrollUp').css('display','none');
				$('.mm_mobile_menu').stop().animate({width: '300px'}, 200, 'swing');
			} else {
				$('.mm_mobile_menu').addClass('none_mobile_menu');
				$('.fix_mobile').css('display','none');
				$('#scrollUp').css('display','block');
				$('.mm_mobile_menu').stop().animate({width: '0'}, 200, 'swing');
			}
			return false;
		}
		$('.mobile_menu_act').click(TotalToggle);

		var gItem = $('li.mm-list-li');
		var lastEvent = null;
		function gMenuToggle(){
			var t = $(this);
			if (t.next('ul').is(':hidden') || t.next('ul').length == 0) {
				gItem.find('>ul').slideUp(200);
				gItem.find('button').removeClass('hover');
				t.next('ul').slideDown(200);
				t.addClass('hover');            
			} else {
				gItem.find('>ul').slideUp(200);
				gItem.find('button').removeClass('hover');
			
			}; 
		};
		gItem.find('>button').click(gMenuToggle);

	var lMenu = $('ul.locNav');
    var lItem = lMenu.find('>li');
    var llItem = lMenu.find('>li>ul>li');
    var lastEvent = null;
    function lMenuToggle(){
        var t = $(this);
        if (t.next('ul').is(':hidden') || t.next('ul').length == 0) {
            lItem.find('>ul').slideUp(200);
            lItem.find('button').removeClass('on');
            t.next('ul').slideDown(200);
            t.addClass('on');            
        } else {
        	lItem.find('>ul').slideUp(200);
            lItem.find('button').removeClass('on');
        
        }; 
		$('.lnb_All').addClass('none_act_lnb');
    };
    lItem.find('>button').click(lMenuToggle);
	
	if (!$('.foot_absolute').children('a').hasClass('ds_dw')) {
		$('.xe').css('display','none');

	}
// 빵조각
	$('ul.breadclumb').find('>li').last().addClass('last_breadclumb');
// Language Select
	$('.language .toggle').click(function(){
		$('.selectLang').toggle();
	});	 
	  
	// 모바일 fix 메뉴
		var flag = false;
		var $gnbOffsetTop = 400;
		var $gnbOffsetTopB = $gnbOffsetTop - 10;

		$(window).scroll(function(){
			if  ($(window).scrollTop() >= $gnbOffsetTop && flag == false){
				flag = true;
				$('.fix_header').addClass('act_fix_header');
				$('.first_item').removeClass('on');
				$('.sub_menu').removeClass('menuTab_on');
				}
			if  ($(window).scrollTop() <= $gnbOffsetTopB && flag == true){
				flag = false;
				$('.fix_header').removeClass('act_fix_header');
				}
		});

		$('.to_top').click(function(){
			$("html, body").animate({ scrollTop: 0 }, 200);
			return false;
	   });

	// 탭메뉴
		function tabMenuTogglem(){
    	  var thisBtnm = $(this);
    	  var targetBoxm = $('#' + thisBtnm.attr('name'));
		  var allBoxm = $('.sub_menu');
    	  var targetLim = $('.first_item');
		  var target_Lim = thisBtnm.parent('.first_item');
    	  if (!thisBtnm.parent('li').hasClass('on')) {
				targetLim.removeClass('on');
				allBoxm.removeClass('menuTab_on');
    	  	    targetBoxm.addClass('menuTab_on');
    	  	    target_Lim.addClass('on');
    	  };
			 if(thisBtnm.attr('href') === '#'){
			return false;
			};
		}
    
    $('.tab_first_a').click(tabMenuTogglem).focus(tabMenuTogglem);
	$('.act_search').click(function(){
			$('.in_select').toggle();
			var sItem = $('.wrap_in_select');
			var sTop = $('.wrap_in_select').scrollTop();
			var sHeight = $('.wrap_in_select>.in_select').outerHeight();
			sItem.removeClass('position_top');
			if (sItem.offset().top + sItem.outerHeight() + sHeight > $(window).scrollTop() + $(window).height()) {
				sItem.addClass('position_top');
			}

			return false;
		});
		$('.in_select').find('li').last().focusout(function(){
			$('.in_select').css('display','none');
		});	
});