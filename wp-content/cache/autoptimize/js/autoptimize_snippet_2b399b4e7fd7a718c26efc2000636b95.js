$(document).ready(function(){$('.khach-hang.owl-carousel').owlCarousel({loop:true,margin:10,nav:true,responsive:{0:{items:1},1025:{items:3},}})
var counting=0;$(window).scroll(function(e){var pos_body=$('html,body').scrollTop();if(pos_body>=4361){counting++;}
if(counting==1){$(function($){$('.elementor-counter-number-wrapper').each(count);function count(options){var $this=$(this);options=$.extend({},options||{},$this.data('countToOptions')||{});$this.countTo(options);}});}})
$(function(){var temp="VN";$("#shipping_country").val(temp);});});