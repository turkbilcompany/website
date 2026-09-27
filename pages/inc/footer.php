<style>
    .footersagmenu ul li a:hover {
        padding-left: 5px;
    }

</style>

<script>



$(document).ready(function() {
  //Alt menÃ¼ler gizleniyor
  $('#menuac ul').hide();

  //'ul' etiketine sahip 'li' etiketleri
  $('#menuac li').has('ul').on('click', function(e) {

    //TÃ¼m alt menÃ¼ler kapatÄ±lÄ±yor
    $('#menuac ul').stop().slideUp(300);

    //BasÄ±lan Ã¼st menÃ¼nÃ¼n alt menÃ¼leri aÃ§Ä±lÄ±yor
    $(this).children('ul').stop().slideToggle(300);
  });


});

 

</script>
 
<section>
    <div class="genel">
        <div class="footer">
            <div class="footerduzenle">
                <div class="foooter">
                    <div class="footersol">
                        <div class="footersollogo"> <a href="https://turkbil.net.tr" title=""> <img src="../asset/resimler/footerlogo.png" alt="Türkbil" style="
    width: 170px;
"> </a> </div>
                        <div class="footersolyazi"> <p>	36/A Çobançeşme Mah. Köprülü Sk.<br> Bahçelievler, İstanbul, TR <br> +90 (212) 514 514 0 </p> </div>
                        <div class="footersolmenu">
                            <ul>
                                <li>
                                    <a href="https://facebook.com/turkbilkurumsal" title="">
                                        <svg width="9" height="17" viewBox="0 0 9 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.35701 9.51767L8.81738 6.57137H5.93892V4.65942C5.93892 3.85337 6.34102 3.06767 7.63019 3.06767H8.93878V0.559217C8.93878 0.559217 7.75127 0.360168 6.61588 0.360168C4.24538 0.360168 2.69591 1.77131 2.69591 4.32587V6.57137H0.0609131V9.51767H2.69591V16.6402H5.93892V9.51767H8.35701Z" fill="currentColor"/>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/turkbilkurumsal" title="">
                                        <svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14.7666 4.18422C14.7769 4.32883 14.7769 4.47347 14.7769 4.61808C14.7769 9.02895 11.4197 14.1113 5.28369 14.1113C3.3933 14.1113 1.63722 13.5638 0.160034 12.6135C0.428622 12.6444 0.686845 12.6548 0.965767 12.6548C2.52556 12.6548 3.96145 12.128 5.10807 11.2293C3.64122 11.1983 2.41195 10.2376 1.98842 8.91534C2.19503 8.94631 2.40162 8.96697 2.61857 8.96697C2.91813 8.96697 3.21772 8.92564 3.49661 8.85336C1.96778 8.54344 0.821123 7.20056 0.821123 5.57876V5.53746C1.26529 5.78538 1.78183 5.94032 2.32928 5.96096C1.43057 5.36181 0.841791 4.33916 0.841791 3.1822C0.841791 2.56242 1.00704 1.99427 1.2963 1.49843C2.93876 3.52309 5.40763 4.8453 8.17603 4.98995C8.12439 4.74203 8.09339 4.48381 8.09339 4.22555C8.09339 2.3868 9.58091 0.888977 11.43 0.888977C12.3906 0.888977 13.2583 1.29184 13.8678 1.94263C14.6219 1.79802 15.345 1.5191 15.9855 1.1369C15.7375 1.91166 15.2107 2.56245 14.5186 2.97562C15.1901 2.90334 15.8409 2.71736 16.44 2.45914C15.9855 3.12023 15.4174 3.70901 14.7666 4.18422Z" fill="currentColor"/>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://wa.me/+902125145140" title="">
                                        <svg width="17" height="17" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" fill="currentColor"/>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://instagram.com/turkbilkurumsal" title="">
                                        <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.82557 3.84362C5.80329 3.84362 4.17211 5.4748 4.17211 7.49708C4.17211 9.51936 5.80329 11.1505 7.82557 11.1505C9.84786 11.1505 11.479 9.51936 11.479 7.49708C11.479 5.4748 9.84786 3.84362 7.82557 3.84362ZM7.82557 9.8723C6.51872 9.8723 5.45035 8.80711 5.45035 7.49708C5.45035 6.18705 6.51554 5.12185 7.82557 5.12185C9.13561 5.12185 10.2008 6.18705 10.2008 7.49708C10.2008 8.80711 9.13243 9.8723 7.82557 9.8723ZM12.4806 3.69417C12.4806 4.16794 12.0991 4.54633 11.6285 4.54633C11.1547 4.54633 10.7763 4.16476 10.7763 3.69417C10.7763 3.22358 11.1579 2.84201 11.6285 2.84201C12.0991 2.84201 12.4806 3.22358 12.4806 3.69417ZM14.9004 4.55905C14.8463 3.41754 14.5856 2.4064 13.7493 1.57332C12.9163 0.740241 11.9051 0.479507 10.7636 0.422272C9.58712 0.355499 6.06085 0.355499 4.88436 0.422272C3.74604 0.476327 2.73489 0.737062 1.89864 1.57014C1.06238 2.40322 0.804824 3.41436 0.74759 4.55587C0.680816 5.73235 0.680816 9.25862 0.74759 10.4351C0.801645 11.5766 1.06238 12.5878 1.89864 13.4208C2.73489 14.2539 3.74286 14.5146 4.88436 14.5719C6.06085 14.6387 9.58712 14.6387 10.7636 14.5719C11.9051 14.5178 12.9163 14.2571 13.7493 13.4208C14.5824 12.5878 14.8431 11.5766 14.9004 10.4351C14.9672 9.25862 14.9672 5.73553 14.9004 4.55905ZM13.3805 11.6974C13.1325 12.3207 12.6523 12.8008 12.0259 13.052C11.0879 13.424 8.86215 13.3382 7.82557 13.3382C6.789 13.3382 4.56004 13.4208 3.62521 13.052C3.00199 12.804 2.52186 12.3238 2.27066 11.6974C1.89864 10.7594 1.98449 8.53366 1.98449 7.49708C1.98449 6.4605 1.90182 4.23154 2.27066 3.29671C2.51868 2.67349 2.99881 2.19336 3.62521 1.94216C4.56322 1.57014 6.789 1.65599 7.82557 1.65599C8.86215 1.65599 11.0911 1.57332 12.0259 1.94216C12.6492 2.19018 13.1293 2.67031 13.3805 3.29671C13.7525 4.23472 13.6667 6.4605 13.6667 7.49708C13.6667 8.53366 13.7525 10.7626 13.3805 11.6974Z" fill="currentColor"/>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="footersag">
                        <div class="footersagmenu">
                            <ul>
                                <li> Sunucu </li>
                                <li> <a href="https://turkbil.net.tr/bulut-sunucu" title=""> Bulut Sunucu</a> </li>
                                <li> <a href="https://turkbil.net.tr/fiziksel-sunucu" title=""> Fiziksel Sunucu</a> </li>
                                <li> <a href="#" title=""> Bulut Sunucu Nedir?</a> </li>
                                <li> <a href="#" title=""> Fiziksel Sunucu Nedir?</a> </li>
                            </ul>
                        </div>
                    </div>
                    <div class="footersag">
                        <div class="footersagmenu">
                            <ul>
                                <li> Hosting </li>
                                <li> <a href="https://turkbil.net.tr/bireysel-hosting" title=""> Bireysel Hosting</a> </li>
                                <li> <a href="https://turkbil.net.tr/kurumsal-hosting" title=""> Kurumsal Hosting</a> </li>
                                <li> <a href="#" title=""> Bireysel Hosting Nedir?</a> </li>
                                <li> <a href="#" title=""> Kurumsal Hosting Nedir?</a> </li>
                            </ul>
                        </div>
                    </div>
                    <div class="footersag">
                        <div class="footersagmenu">
                            <ul>
                                <li> Kurumsal </li>
                                <li> <a href="#" title=""> Bizden Haberler </a> </li>
                                <li> <a href="https://my.turkbil.net.tr/iletisim" title=""> Hakkımızda </a> </li>								
                                <li> <a href="https://my.turkbil.net.tr/bg-sozlesmesi" title=""> Yasal Bilgiler </a> </li>
                                <li> <a href="#" title=""> Banka Hesap Bilgileri </a> </li>
                                <li> <a href="mailto:abuse@turkbil.net.tr" title=""> Kötüye Kullanım Bildirimi </a> </li>
                                <li> <a href="https://my.turkbil.net.tr/iletisim" title=""> İletişim </a> </li>																
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="footeryazim"> © Copyright 2014 - 2026 | Türkbil Telekomünikasyon Limited Şirketi </div>
                <div class="footerme">
                    <ul>
                        <li> <a href="https://my.turkbil.net.tr/hk-sozlesmesi" title=""> Muhtelif Sözleşmeler </a> </li>
                        <li> <a href="https://my.turkbil.net.tr/kvkk" title=""> KVKK Aydınlatma Metni </a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
	
	
	
</section>

<script src="../asset/dist/wow.js"></script>
<script>
    new WOW().init();
</script>  


</body>

</html>