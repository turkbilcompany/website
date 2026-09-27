$(function(){
	$("div.tab_icerik:not(:first)").hide();

	$("ul#tab li").click(function(e) {
		var index = $(this).index();
		$("ul#tab li").removeClass("aktif");
		$(this).addClass("aktif");
		$("div.tab_icerik").hide();
		$("div.tab_icerik:eq(" + index + ")").fadeIn();


		return false
	});;
});	
 

$(function(){
	$(".mobilbars").click(function(){
		$('.mobilmenu').show('slow');
	});
});


$(function(){
	$(".menukapat").click(function(){
		$(".mobilmenu").hide('slow');
	});
});

$(function(){
     $(window).scroll(function(){
        var height = $(this).scrollTop();
        if (height > 300){
          $(".yukari").css({
            "opacity":"1"
          });
        } else{
            $(".yukari").css({
              "opacity":"0"
          });
        }
    });
});

function yukari(id){$('html,body').animate({scrollTop: $("#"+id).offset().top},'slow');}

// USD fiyat formatlama (en-US) – iki ondalık ve $ simgesi
$(function(){
  var $badges = $('.fiyatlar ul li span');
  if ($badges.length === 0) return;
  var usdFormatter = new Intl.NumberFormat('en-US', {
    style: 'currency',
    currency: 'USD',
    minimumFractionDigits: 2,
    maximumFractionDigits: 2
  });

  $badges.each(function(){
    var $el = $(this);
    var txt = ($el.text() || '').trim();
    var mTxt = txt.match(/([0-9]+(?:[.,][0-9]+)?)/);
    var valueFromText = mTxt ? parseFloat(mTxt[1].replace(',', '.')) : NaN;

    var rawAttr = $el.attr('data-usd');
    var valueFromAttr = rawAttr != null && rawAttr !== '' ? parseFloat(String(rawAttr).replace(',', '.')) : NaN;

    // Önce mevcut metindeki sayıyı tercih et; yoksa data-usd kullan
    var usd = !isNaN(valueFromText) ? valueFromText : valueFromAttr;
    if (usd != null && !Number.isNaN(usd)) {
      $el.text(usdFormatter.format(usd));
    }
  });
});