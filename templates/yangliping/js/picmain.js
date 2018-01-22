$(document).ready(function(){ 
  if($("#imgs").width() > 700){ 
    $("#imgs").attr("width", 700); 
  } 
  if($('.right_con').find('img')){ 
    $('.right_con').find('img').each(function(index, element){ 
      if($(this).width() > 700){ 
        $(this).attr("width", 700); 
      } 
    }); 
  } 
}); 