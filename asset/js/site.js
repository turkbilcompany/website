$(function () {
    // Tüm sekme içeriklerini gizle, sadece ikinci sekme açık
    $("div.tab_icerik").hide();
    $("div.tab_icerik:eq(1)").show();

    $("ul#tab li").click(function (e) {
        var index = $(this).index();
        $("ul#tab li").removeClass("aktif");
        $(this).addClass("aktif");
        $("div.tab_icerik").hide();
        $("div.tab_icerik:eq(" + index + ")").show(); // Tıklanan sekme açılır

        return false;
    });
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
          $(".yukari a").css("pointer-events", "auto");
        } else{
            $(".yukari").css({
              "opacity":"0"
          });
            $(".yukari a").css("pointer-events", "none");
        }
    });
});

function yukari(id){
    var hedef = $("#"+id);
    $('html,body').animate({scrollTop: hedef.length ? hedef.offset().top : 0},'slow');
}

// USD → TL fiyat dönüşümü (domain fiyatları)
(function(){
  var rate = window.EXCHANGE_RATE_TL_PER_USD || 42; // 1 USD kaç TL
  $(function(){
    $('.fiyatlar ul li span').each(function(){
      var usdAttr = $(this).attr('data-usd');
      var usd = usdAttr !== undefined ? parseFloat(String(usdAttr).replace(',', '.')) : NaN;
      if(isNaN(usd)){
        var txt = $(this).text().trim();
        var m = txt.match(/([0-9]+(?:[.,][0-9]+)?)\s*\$/);
        if(m){
          usd = parseFloat(m[1].replace(',', '.'));
        }
      }
      if(isNaN(usd)) return; // Geçerli USD yoksa atla
      var tl = usd * rate;
      var formatted = new Intl.NumberFormat('tr-TR', {minimumFractionDigits: 2, maximumFractionDigits: 2}).format(tl) + '₺';
      $(this).text(formatted);
    });
  });
})();