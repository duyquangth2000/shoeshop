$(document).ready(function(){var owl1=$('.gallery1.owl-carousel');owl1.owlCarousel({items:1,loop:true,margin:10,autoplay:true,autoplayTimeout:4000,autoplayHoverPause:false,});var owl2=$('.gallery2.owl-carousel');owl2.owlCarousel({items:1,loop:true,margin:10,autoplay:true,autoplayTimeout:4000,autoplayHoverPause:false,});$('.bxslider').bxSlider({auto:true,autoControls:true,stopAutoOnClick:true,pager:true,slideWidth:740});$("close-modal").click(function(e){$('.search-modal.sober-modal.show').css("display","none");})
$(window).scroll(function(e){var pos_body=$('html,body').scrollTop();var iScrollHeight=$(".product-summary.clearfix").prop("scrollHeight");var ScrollHeight=$(".summary.entry-summary").prop("scrollHeight");if(pos_body<=130){$('.summary.entry-summary').css("position","absolute");$('.summary.entry-summary').css("top",0);$('.summary.entry-summary').css("bottom","inherit");$('.summary.entry-summary').css("left","60%");$('.summary.entry-summary').css("width","40%");}
if(pos_body>130){$('.summary.entry-summary').css("position","fixed");$('.summary.entry-summary').css("top","inherit");$('.summary.entry-summary').css("bottom",10);$('.summary.entry-summary').css("left","calc(60% - 8px)");$('.summary.entry-summary').css("width","calc(40% - 32px)");}
if(pos_body>=50+iScrollHeight-ScrollHeight){$('.summary.entry-summary').css("position","absolute");$('.summary.entry-summary').css("bottom",10);$('.summary.entry-summary').css("top","inherit");$('.summary.entry-summary').css("left","60%");$('.summary.entry-summary').css("width","40%");}});var count1=2;var count2=2;$(".accordion_head.number1").click(function(){if(count1%2==0){$('.accordion_head.number1 + .accordion_body').css("display","block");$('.plusminus.number1').text('-');count1++;}else{$('.accordion_head.number1 + .accordion_body').css("display","none");$('.plusminus.number1').text('+');count1++;}})
$(".accordion_head.number2").click(function(){if(count2%2==0){$('.accordion_head.number2 + .accordion_body').css("display","block");$('.plusminus.number2').text('-');count2++;}else{$('.accordion_head.number2 + .accordion_body').css("display","none");$('.plusminus.number2').text('+');count2++;}})});