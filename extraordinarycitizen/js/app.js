window.answers = {};
$(window).load(function(){
	//quiz.init(1);
	//resultpage.init();
	intropage.init();
});

//Tweening params
var ani_t = {y:-700, opacity:0, ease: Expo.easeOut};
var ani_l = {x:-2000, opacity:0, ease: Expo.easeOut};
var ani_r = {x:2000, opacity:0, ease: Expo.easeOut};
var ani_b = {y:750, opacity:0, ease: Expo.easeOut};
var ani_zoom = {scale:0, ease: Back.easeOut.config(2)};
var ani_fade = {opacity:0};
var speed = 0.5;

var intropage = {
	init: function() {
		$(".applayer").hide();
		$("#intro_screen").show();		
		this.intro_next();		
	},
	intro_next: function() {
		var ani_intro_in = new TimelineMax();
		ani_intro_in.to("#intro_part1", 0, {display:"inherit"})
					.from("#intro_finger", 0.7, {ease: Back.easeOut.config(4), scale:0})
					.from("#intro_title", 0.7, {transform: "skew(140deg,-4deg)"}, "-=0.5")
					.from("#intro_title", 1, {ease: Elastic.easeOut.config(2, 0.5), x:-300, opacity:0}, "-=0.3")
					.from("#intro_next", 0.7, {ease: Elastic.easeOut.config(1, 0.75), x:-300, opacity:0}, "-=0.75");
		
		var ani_intro_out = new TimelineMax({paused: true, onComplete:this.intro_read});			
		var $intro_next = $("#intro_next");
		$intro_next.click(function() {			
			ani_intro_out.to("#intro_finger", 0.7, {ease: Elastic.easeIn.config(1.75, 0.75), scale:0, opacity:0}, "-=0.3")
						.to("#intro_title", 0.5, {ease: Elastic.easeIn.config(1.75, 0.75), transform: "skew(-110deg,0) scaleY(0.7) translate(-300px,0)"}, "-=0.3")		
						.to("#intro_title", 0.5, {ease: Elastic.easeIn.config(1.75, 0.75), transform: "skew(140deg,-4deg) translate(2000px,0)", opacity:0}, "-=0.3")
						.to("#intro_next", 0.5, {ease: Elastic.easeIn.config(1, 0.75), x:1000, opacity:0}, "-=0.3");
			ani_intro_out.play();
			$intro_next.unbind();
		});		
	},
	intro_read: function() {
		var ani_about_in = new TimelineMax();
		ani_about_in.to("#intro_part2", 0, {display:"inherit"})
					.from("#intro_about", 0.7, {ease: Back.easeOut.config(4), scale:0, opacity:0})
					.from("#intro_start", 0.7, {ease: Elastic.easeOut.config(1, 0.75), x:-1000, opacity:0});
		
		var ani_about_out = new TimelineMax({paused: true, onComplete:quiz.init, onCompleteParams: [1] });
		var $intro_start = $("#intro_start");
		$intro_start.click(function() {
			ani_about_out.to("#intro_about", 0.6, {ease: Back.easeIn.config(7), scale:0, opacity:0})
						.to("#intro_start", 0.6, {ease: Elastic.easeIn.config(1, 0.75), x:1000, opacity:0}, "-=0.3");
			ani_about_out.play();
			$intro_start.unbind();
		});
	},
}
var resultpage = {
	init: function(){
		$(".applayer").hide();
		$("#result_screen").show();
		
		var ans_var = "";
		var ans_left = 0;
		var ans_center =0;
		var ans_right =0;
		for (var i=0; i<15; i++)
		{
			if (window.answers[i] == 1)
			{
				ans_left += 1;
			}
			else if (window.answers[i] == 2)
			{
				ans_center += 1;
			}
			else if (window.answers[i] == 3)
			{
				ans_right += 1;
			}
		}
		
		var results = new TimelineMax({paused: true});
		var results_speed = 0.75;
		var results_param = {ease: Back.easeOut.config(4), scale:0};
		
		if (ans_right >= ans_left && ans_right >= ans_center)
		{
			$("#result_3").show();
			results.from("#result_desc_3", results_speed, results_param);
			
		}
		else if (ans_center >= ans_left && ans_center >= ans_right)
		{
			$("#result_2").show();
			results.from("#result_desc_2", results_speed, results_param);
		}
		else
		{	
			$("#result_1").show();
			results.from("#result_desc_1", results_speed, results_param);
		}
		results.from("#result_footer", 0.75, {y: 1200}, "-=0.5");
		results.play();
		
		var share_appid = 192134041198576;
		var share_title = 'UndiMsia! | Are You an Extraordinary Citizen?';
		var share_desc = 'Do you have what it takes to be a Malaysian role model citizen?';
		var share_url = 'http://campaigns.undimsia.com/extraordinarycitizen/';
		var share_img = 'http://campaigns.undimsia.com/extraordinarycitizen/images/fb_share_image.png';
		$("#share_fb").click(function() {				
			url = "https://www.facebook.com/dialog/feed?link=" + encodeURIComponent(""+share_url+"")+ 
				"&app_id=" + encodeURIComponent(share_appid) + 
				"&name=" + encodeURIComponent(share_title) + 
				"&caption=" + encodeURIComponent('Shared from UndiMsia') + 
				"&description=" + encodeURIComponent(share_desc) + 
				"&picture=" + encodeURIComponent(""+share_img+"") +
				"&redirect_uri=https://www.facebook.com";
			window.open(
				url,
				'facebook-share-dialog', 
				'width=626,height=436'); 
			return false;
		});
		$("#share_tw").click(function() {
			var sharerURL = "https://twitter.com/intent/tweet?text="+encodeURIComponent(share_title + " - " + share_desc)+"&url=" + encodeURI(share_url);
			window.open(
				sharerURL,
				'twitter-share-dialog', 
				'width=626,height=436'); 
				return false;
		});
	}
}

var general = {
	item_select: function(elem, event_type, num) {		
		var newnum = num;
		if (num < 10) {
			newnum = "0"+num;
		}

		var value = $(elem).data("value");
		var circle_wrap = "#q"+num+"_answer_circle";
		var text_wrap = "#q"+num+"_answer_text";
		
		if (event_type == "click") {
			//Record answer
			answers[num-1] = value;
			//Remove class from elements and add to the hand that was clicked			
			$(".answer_hand_wrap img").removeClass("selected");
			$(elem).addClass("selected");
			//Clear any previous elements and append new ones
			$("#q"+num+"_answer_circle").empty();
			$("#q"+num+"_answer_text").empty();
			$(circle_wrap).append('<img src="images/circle0'+value+'-green.png" id="q'+num+'_circle'+value+'" class="selected circle_green'+value+'">');
			$(text_wrap).append('<img src="images/q'+num+'/Q'+newnum+'-answer0'+value+'.png" id="q'+num+'_ans'+value+'" class="selected">');
		}
		else
		{
			//If an answer has been selected, don't append the hover elements again
			if (answers[num-1] != value) {
				TweenMax.to(elem, 0.25, {bottom: "0"});
				
				$(circle_wrap).append('<img src="images/circle0'+value+'.png" id="q'+num+'_circle'+value+'" class="circle'+value+'">');
				$(text_wrap).append('<img src="images/q'+num+'/Q'+newnum+'-answer0'+value+'.png" id="q'+num+'_ans'+value+'">');
				TweenMax.from("#q"+num+"_circle"+value, 0.25, {opacity: 0});
				TweenMax.from("#q"+num+"_ans"+value, 0.25, {opacity: 0});
			}
		}
		
	},
	item_remove: function(elem, event_type, num) {
		TweenMax.to(elem, 0.2, {bottom: "-55px"});

		var value = $(elem).data("value");
		var circle_elem = "#q"+num+"_answer_circle" + ">" + "#q"+num+"_circle"+value;
		var text_elem = "#q"+num+"_answer_text" + ">" + "#q"+num+"_ans"+value;
		
		$(circle_elem).not(".selected").remove();
		$(text_elem).not(".selected").remove();
	}		
}

var quiz = {	
	init: function(num) {
		$(".applayer").hide();
		$("#q"+num+"_screen").show();
		//Animate elements
		tweens[num-1].init(num);
		//Set up buttons
		buttons.init($("#q"+num+"_answer_hand>img"), $("#q"+num+"_answer_next"), num);	
	}
}
var buttons = {
	init: function(btn_select, btn_next, num) {
		var next_num = num+1;
		var vars = {y: -1300, opacity: 0, onCompleteParams: [next_num] }
		
		//Checks for end of quiz
		if (num < 15) {
			vars.onComplete = quiz.init;
		} else {
			vars.onComplete = resultpage.init;
		}
		
		btn_select.click(function() {
			general.item_select(this,"click", num);
			$("#q"+num+"_bar").hide();
			$("#q"+num+"_answer_next").show();
		});
		btn_select.mouseenter(function() {
			general.item_select(this,"mouseenter", num);
		});
		btn_select.mouseleave(function() {
			general.item_remove(this,"mouseleave", num);
		});		
		btn_next.click(function() {
			btn_select.unbind();
			btn_next.unbind();
			TweenMax.to("#q"+num+"_screen", speed, vars);
		});
	}
}
var tweens = [
	{	// Question 1 tweens
		init: function(num) {
			var ani = new TimelineMax();
			ani.from("#q"+num+"_top1", speed, ani_t)
				.from("#q"+num+"_top2", speed, ani_l, "-=0.4")
				.from("#q"+num+"_top3", speed, ani_zoom)
				.from("#q"+num+"_hand1", speed, ani_b, "-=0.4")
				.from("#q"+num+"_hand2", speed, ani_b, "-=0.4")
				.from("#q"+num+"_hand3", speed, ani_b, "-=0.4")
				.from(".question_progress_wrap", speed, ani_b, "-=0.4"); }		
	},
	{	// Question 2 tweens
		init: function(num) {
			var ani = new TimelineMax();
			ani.from("#q"+num+"_top1", speed, ani_r)
				.from("#q"+num+"_top2", speed, ani_l, "-=0.4")
				.from("#q"+num+"_top3", speed, ani_zoom)
				.from("#q"+num+"_hand1", speed, ani_b, "-=0.4")
				.from("#q"+num+"_hand2", speed, ani_b, "-=0.4")
				.from("#q"+num+"_hand3", speed, ani_b, "-=0.4")
				.from(".question_progress_wrap", speed, ani_b, "-=0.4"); }
	},
	{	// Question 3 tweens
		init: function(num) {
			var ani = new TimelineMax();
			ani.from("#q"+num+"_top1", speed, ani_t)
				.from("#q"+num+"_top2", speed, ani_l, "-=0.4")
				.from("#q"+num+"_top3", speed, ani_zoom)
				.from("#q"+num+"_hand1", speed, ani_b, "-=0.4")
				.from("#q"+num+"_hand2", speed, ani_b, "-=0.4")
				.from("#q"+num+"_hand3", speed, ani_b, "-=0.4")
				.from(".question_progress_wrap", speed, ani_b, "-=0.4"); }
	},
	{	// Question 4 tweens
		init: function(num) {
			var ani = new TimelineMax();
			ani.from("#q"+num+"_top1", speed, ani_l)
				.from("#q"+num+"_top2", speed, ani_r, "-=0.2")
				.from("#q"+num+"_top3", speed, ani_t, "-=0.2")
				.from("#q"+num+"_top4", speed, ani_zoom)
				.from("#q"+num+"_hand1", speed, ani_b, "-=0.4")
				.from("#q"+num+"_hand2", speed, ani_b, "-=0.4")
				.from("#q"+num+"_hand3", speed, ani_b, "-=0.4")
				.from(".question_progress_wrap", speed, ani_b, "-=0.4"); }
	},
	{	// Question 5 tweens
		init: function(num) {
			var ani = new TimelineMax();
			ani.from("#q"+num+"_top1", speed, ani_r)
				.from("#q"+num+"_top2", speed, ani_l, "-=0.2")
				.from("#q"+num+"_top3", speed, ani_zoom)
				.from("#q"+num+"_hand1", speed, ani_b, "-=0.4")
				.from("#q"+num+"_hand2", speed, ani_b, "-=0.4")
				.from("#q"+num+"_hand3", speed, ani_b, "-=0.4")
				.from(".question_progress_wrap", speed, ani_b, "-=0.4"); }
	},
	{	// Question 6 tweens
		init: function(num) {
			var ani = new TimelineMax();
			ani.from("#q"+num+"_top1", speed, ani_r)
				.from("#q"+num+"_top2", speed, ani_t, "-=0.4")
				.from("#q"+num+"_top3", speed, ani_zoom)
				.from("#q"+num+"_top4", speed, ani_zoom)
				.from("#q"+num+"_hand1", speed, ani_b, "-=0.4")
				.from("#q"+num+"_hand2", speed, ani_b, "-=0.4")
				.from("#q"+num+"_hand3", speed, ani_b, "-=0.4")
				.from(".question_progress_wrap", speed, ani_b, "-=0.4"); }
	},
	{	// Question 7 tweens
		init: function(num) {
			var ani = new TimelineMax();
			ani.from("#q"+num+"_top1", speed, ani_r)
				.from("#q"+num+"_top2", speed, ani_t, "-=0.2")
				.from("#q"+num+"_top3", speed, ani_zoom)
				.from("#q"+num+"_hand1", speed, ani_b, "-=0.4")
				.from("#q"+num+"_hand2", speed, ani_b, "-=0.4")
				.from("#q"+num+"_hand3", speed, ani_b, "-=0.4")
				.from(".question_progress_wrap", speed, ani_b, "-=0.4"); }
	},
	{	// Question 8 tweens
		init: function(num) {
			var ani = new TimelineMax();
			ani.from("#q"+num+"_top1", speed, ani_r)
				.from("#q"+num+"_top2", speed, ani_l, "-=0.2")
				.from("#q"+num+"_hand1", speed, ani_b, "-=0.4")
				.from("#q"+num+"_hand2", speed, ani_b, "-=0.4")
				.from("#q"+num+"_hand3", speed, ani_b, "-=0.4")
				.from(".question_progress_wrap", speed, ani_b, "-=0.4"); }
	},
	{	// Question 9 tweens
		init: function(num) {
			var ani = new TimelineMax();
			ani.from("#q"+num+"_top1", speed, ani_r)
				.from("#q"+num+"_top2", speed, ani_l, "-=0.2")
				.from("#q"+num+"_top3", speed, ani_zoom)
				.from("#q"+num+"_hand1", speed, ani_b, "-=0.4")
				.from("#q"+num+"_hand2", speed, ani_b, "-=0.4")
				.from("#q"+num+"_hand3", speed, ani_b, "-=0.4")
				.from(".question_progress_wrap", speed, ani_b, "-=0.4"); }	
	},
	{	// Question 10 tweens
		init: function(num) {
			var ani = new TimelineMax();
			ani.from("#q"+num+"_top1", speed, ani_r)
				.from("#q"+num+"_top2", speed, ani_t, "-=0.2")
				.from("#q"+num+"_top3", speed, ani_zoom)
				.from("#q"+num+"_hand1", speed, ani_b, "-=0.4")
				.from("#q"+num+"_hand2", speed, ani_b, "-=0.4")
				.from("#q"+num+"_hand3", speed, ani_b, "-=0.4")
				.from(".question_progress_wrap", speed, ani_b, "-=0.4"); }
	},
	{	// Question 11 tweens
		init: function(num) {
			var ani = new TimelineMax();
			ani.from("#q"+num+"_top1", speed, ani_r)
				.from("#q"+num+"_top2", speed, ani_l, "-=0.2")
				.from("#q"+num+"_top3", speed, ani_zoom)
				.from("#q"+num+"_hand1", speed, ani_b, "-=0.4")
				.from("#q"+num+"_hand2", speed, ani_b, "-=0.4")
				.from("#q"+num+"_hand3", speed, ani_b, "-=0.4")
				.from(".question_progress_wrap", speed, ani_b, "-=0.4"); }	
	},
	{	// Question 12 tweens
		init: function(num) {
			var ani = new TimelineMax();
			ani.from("#q"+num+"_top1", speed, ani_r)
				.from("#q"+num+"_top2", speed, ani_l, "-=0.2")
				.from("#q"+num+"_hand1", speed, ani_b, "-=0.4")
				.from("#q"+num+"_hand2", speed, ani_b, "-=0.4")
				.from("#q"+num+"_hand3", speed, ani_b, "-=0.4")
				.from(".question_progress_wrap", speed, ani_b, "-=0.4"); }
	},
	{	// Question 13 tweens
		init: function(num) {
			var ani = new TimelineMax();
			ani.from("#q"+num+"_top1", speed, ani_t)
				.from("#q"+num+"_top2", speed, ani_l, "-=0.2")
				.from("#q"+num+"_top3", speed, ani_zoom)
				.from("#q"+num+"_hand1", speed, ani_b, "-=0.4")
				.from("#q"+num+"_hand2", speed, ani_b, "-=0.4")
				.from("#q"+num+"_hand3", speed, ani_b, "-=0.4")
				.from(".question_progress_wrap", speed, ani_b, "-=0.4"); }
	},
	{	// Question 14 tweens
		init: function(num) {
			var ani = new TimelineMax();
			ani.from("#q"+num+"_top1", speed, ani_r)
				.from("#q"+num+"_top2", speed, ani_zoom, "-=0.2")
				.from("#q"+num+"_top3", speed, ani_l)
				.from("#q"+num+"_top4", speed, ani_zoom)
				.from("#q"+num+"_hand1", speed, ani_b, "-=0.4")
				.from("#q"+num+"_hand2", speed, ani_b, "-=0.4")
				.from("#q"+num+"_hand3", speed, ani_b, "-=0.4")
				.from(".question_progress_wrap", speed, ani_b, "-=0.4"); }
	},
	{	// Question 15 tweens
		init: function(num) {
			var ani = new TimelineMax();
			ani.from("#q"+num+"_top1", speed, ani_l)
				.from("#q"+num+"_top2", speed, ani_t, "-=0.2")
				.from("#q"+num+"_top3", speed, ani_zoom)
				.from("#q"+num+"_hand1", speed, ani_b, "-=0.4")
				.from("#q"+num+"_hand2", speed, ani_b, "-=0.4")
				.from("#q"+num+"_hand3", speed, ani_b, "-=0.4")
				.from(".question_progress_wrap", speed, ani_b, "-=0.4");
		}	
	}
]