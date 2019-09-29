	apps={};
	apps.scroll=function(x){
        var size =$(window).scrollTop();
		if (size>=x) {
			$('.navig').css('position','fixed');
			$('.navig').css('top','O');

		} else {
			$('.navig').css('position','relative');
		}
	}

	apps.detect_opacity=function(x){
		var size =$(window).scrollTop();
		if (size>=100){
			$(x).css('opacity','1');
			$(x).addClass('isFade');
		} else {
			$(x).removeClass('isFade');
			$(x).css('opacity','0.4');
		}
	}

apps.init=function(){
		$(window).scroll(function(){
		apps.scroll(534);
		apps.detect_opacity('.border_body');
	})
	$('.hide_windows').click(function(){
		$('.bloc-gauche').css('opacity','1');
	})
}


