function snow(id)
{
 var pos_x = Math.random()*(99 - 1)+1;
 pos_x = Math.floor(pos_x);
 if(pos_x >= 1 & pos_x <= 10){var q = -10;var png_sh = 1;}
 if(pos_x > 10 & pos_x <= 20){var q = 10;var png_sh = 3;}
 if(pos_x > 20 & pos_x <= 30){var q = -10;var png_sh = 0;}
 if(pos_x > 30 & pos_x <= 40){var q = 10;var png_sh = 2;}
 if(pos_x > 40 & pos_x <= 50){var q = -10;var png_sh = 1;}
 if(pos_x > 50 & pos_x <= 60){var q = 10;var png_sh = 3;}
 if(pos_x > 60 & pos_x <= 70){var q = -10;var png_sh = 0;}
 if(pos_x > 70 & pos_x <= 80){var q = 10;var png_sh = 2;}
 if(pos_x > 80 & pos_x <= 90){var q = -10;var png_sh = 1;}
 if(pos_x > 90 & pos_x <= 99){var q = 10;var png_sh = 3;}
 var end_x = pos_x+q;
 var img="<img id='snow_"+id+"' style='left:"+pos_x+"%; top:-10%; position:fixed;' src='http://113bar.ru/demo/wp-content/themes/twentythirteen/images/show_"+png_sh+".png'/>";
 jQuery("#snow").append(img);
 move_show(id,end_x);
 id++;
 setTimeout("snow("+id+");",300);
}
function move_show(id,end_x)
{
 jQuery("#snow_"+id).animate({top:"150%",left:""+end_x+"%"},20000,function()
 {
  jQuery("#snow_"+id).empty().remove();
 });
}