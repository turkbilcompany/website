<?php defined('CORE_FOLDER') OR exit('You can not get in here!');
    $hoptions = [
        'page' => "contact",
        'intlTelInput',
    ];
?>
<script>
    $(document).ready(function(){

        var telInput = $("#phone");

        telInput.intlTelInput({
            geoIpLookup: function(callback) {
                callback('<?php if($ipInfo = UserManager::ip_info()) echo $ipInfo["countryCode"]; else echo 'us'; ?>');
            },
            autoPlaceholder: "on",
            formatOnDisplay: true,
            initialCountry: "auto",
            hiddenInput: "phone",
            nationalMode: false,
            placeholderNumberType: "MOBILE",
            preferredCountries: ['us', 'gb', 'ch', 'ca', 'de', 'it'],
            separateDialCode: true,
            utilsScript: "<?php echo $sadress;?>assets/plugins/phone-cc/js/utils.js"
        });
    });
</script>



<section>
    <div class="genel">
        <div class="paketler">
            <div class="paketlerduzenle">
                <div class="genelolaraksol">
                    <div class="iletisim">
                        <div class="iletisimim wow swing"  data-wow-duration="1s">
                            <div class="iletisimico">
                                <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <rect width="25" height="25" fill="url(#pattern0)"/>
                                    <defs>
                                        <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                            <use xlink:href="#image0_96_455" transform="scale(0.015625)"/>
                                        </pattern>
                                        <image id="image0_96_455" width="64" height="64" xlink:href="data:image/png;base64,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"/>
                                    </defs>
                                </svg>
                            </div>
                            <div class="iletisimbilgi"> Telefon Numarası </div>
                            <div class="iletisimtel"> 0(212) 514 514 0</div>
                        </div>
                        <div class="iletisimim  wow swing"  data-wow-duration="1s">
                            <div class="iletisimico">
                                <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <rect width="25" height="25" fill="url(#pattern0)"/>
                                    <defs>
                                        <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                            <use xlink:href="#image0_96_456" transform="scale(0.015625)"/>
                                        </pattern>
                                        <image id="image0_96_456" width="64" height="64" xlink:href="data:image/png;base64,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"/>
                                    </defs>
                                </svg>
                            </div>
                            <div class="iletisimbilgi"> WhatsApp Destek </div>
                            <div class="iletisimtel"> 0(212) 514 514 0</div>
                        </div>
                        <div class="iletisimim  wow swing"  data-wow-duration="1s">
                            <div class="iletisimico">
                                <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <rect width="25" height="25" fill="url(#pattern0)"/>
                                    <defs>
                                        <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                            <use xlink:href="#image0_96_457" transform="scale(0.015625)"/>
                                        </pattern>
                                        <image id="image0_96_457" width="64" height="64" xlink:href="data:image/png;base64,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"/>
                                    </defs>
                                </svg>
                            </div>
                            <div class="iletisimbilgi"> E-Posta Adresi </div>
                            <div class="iletisimtel"> bilgi@turkbil.net.tr </div>
                        </div>
                        <div class="iletisimborder"></div>
                        <div class="adres">
                            <div class="adressol  wow fadeInLeft"  data-wow-duration="1s">
                                <div class="adressolbaslik">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.25 3H13.425C13.2509 2.15356 12.7904 1.39301 12.1209 0.846539C11.4515 0.300068 10.6142 0.00109089 9.75 0L8.25 0C7.38585 0.00109089 6.54849 0.300068 5.87906 0.846539C5.20964 1.39301 4.74907 2.15356 4.575 3H3.75C2.7558 3.00119 1.80267 3.39666 1.09966 4.09966C0.396661 4.80267 0.00119089 5.7558 0 6.75L0 14.25C0.00119089 15.2442 0.396661 16.1973 1.09966 16.9003C1.80267 17.6033 2.7558 17.9988 3.75 18H14.25C15.2442 17.9988 16.1973 17.6033 16.9003 16.9003C17.6033 16.1973 17.9988 15.2442 18 14.25V6.75C17.9988 5.7558 17.6033 4.80267 16.9003 4.09966C16.1973 3.39666 15.2442 3.00119 14.25 3ZM8.25 1.5H9.75C10.2137 1.50192 10.6655 1.64706 11.0435 1.91557C11.4216 2.18407 11.7074 2.56282 11.862 3H6.138C6.29256 2.56282 6.57842 2.18407 6.95648 1.91557C7.33453 1.64706 7.7863 1.50192 8.25 1.5ZM3.75 4.5H14.25C14.8467 4.5 15.419 4.73705 15.841 5.15901C16.2629 5.58097 16.5 6.15326 16.5 6.75V9H1.5V6.75C1.5 6.15326 1.73705 5.58097 2.15901 5.15901C2.58097 4.73705 3.15326 4.5 3.75 4.5ZM14.25 16.5H3.75C3.15326 16.5 2.58097 16.2629 2.15901 15.841C1.73705 15.419 1.5 14.8467 1.5 14.25V10.5H8.25V11.25C8.25 11.4489 8.32902 11.6397 8.46967 11.7803C8.61032 11.921 8.80109 12 9 12C9.19891 12 9.38968 11.921 9.53033 11.7803C9.67098 11.6397 9.75 11.4489 9.75 11.25V10.5H16.5V14.25C16.5 14.8467 16.2629 15.419 15.841 15.841C15.419 16.2629 14.8467 16.5 14.25 16.5Z" fill="#333333"/>
                                    </svg>
                                    <span> Ticari Bilgiler </span>
                                </div>
                                <div class="adressolyazi">
                                    <p>	Ünvan: Türkbil Telekomünikasyon Limited Şirketi </p>
                                    <p>	Vergi Dairesi: Yenibosna  </p>									
                                    <p>	Vergi No: 8770487266  </p>		
                                    <p>	Sicil No: 352555-5 </p>
                                    <p>	Mersis No: 0877 0487 2660 0001  </p>									
                                </div>
                            </div>
                            <div class="adressol  wow fadeInRight"  data-wow-duration="1s">
                                <div class="adressolbaslik">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_96_474)">
                                            <path d="M9.00001 4.5C8.40666 4.5 7.82664 4.67595 7.33329 5.00559C6.83995 5.33524 6.45543 5.80377 6.22836 6.35195C6.0013 6.90013 5.94189 7.50333 6.05765 8.08527C6.1734 8.66721 6.45912 9.20176 6.87868 9.62132C7.29824 10.0409 7.83279 10.3266 8.41474 10.4424C8.99668 10.5581 9.59988 10.4987 10.1481 10.2716C10.6962 10.0446 11.1648 9.66006 11.4944 9.16671C11.8241 8.67336 12 8.09334 12 7.5C12 6.70435 11.6839 5.94129 11.1213 5.37868C10.5587 4.81607 9.79566 4.5 9.00001 4.5ZM9.00001 9C8.70334 9 8.41333 8.91203 8.16665 8.7472C7.91998 8.58238 7.72772 8.34811 7.61419 8.07403C7.50065 7.79994 7.47095 7.49834 7.52883 7.20736C7.58671 6.91639 7.72957 6.64912 7.93935 6.43934C8.14913 6.22956 8.4164 6.0867 8.70737 6.02882C8.99835 5.97094 9.29995 6.00065 9.57404 6.11418C9.84813 6.22771 10.0824 6.41997 10.2472 6.66665C10.412 6.91332 10.5 7.20333 10.5 7.5C10.5 7.89783 10.342 8.27936 10.0607 8.56066C9.77937 8.84196 9.39784 9 9.00001 9Z" fill="#333333"/>
                                            <path d="M9 18C8.36845 18.0033 7.74533 17.8551 7.18279 17.5681C6.62026 17.281 6.13469 16.8633 5.76674 16.35C2.90849 12.4073 1.45874 9.44328 1.45874 7.53978C1.45874 5.53972 2.25326 3.62157 3.66752 2.20732C5.08178 0.793057 6.99993 -0.00146484 9 -0.00146484C11.0001 -0.00146484 12.9182 0.793057 14.3325 2.20732C15.7467 3.62157 16.5413 5.53972 16.5413 7.53978C16.5413 9.44328 15.0915 12.4073 12.2332 16.35C11.8653 16.8633 11.3797 17.281 10.8172 17.5681C10.2547 17.8551 9.63154 18.0033 9 18V18ZM9 1.63578C7.43431 1.63757 5.93326 2.26033 4.82615 3.36744C3.71904 4.47455 3.09628 5.97559 3.09449 7.54128C3.09449 9.04878 4.51424 11.8365 7.09124 15.3908C7.31002 15.6921 7.59702 15.9374 7.92878 16.1065C8.26054 16.2756 8.62762 16.3638 9 16.3638C9.37237 16.3638 9.73945 16.2756 10.0712 16.1065C10.403 15.9374 10.69 15.6921 10.9087 15.3908C13.4858 11.8365 14.9055 9.04878 14.9055 7.54128C14.9037 5.97559 14.281 4.47455 13.1738 3.36744C12.0667 2.26033 10.5657 1.63757 9 1.63578V1.63578Z" fill="#333333"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_96_474">
                                                <rect width="18" height="18" fill="white"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <span> Şirket Adresi </span>
                                </div>
                                <div class="adressolyazi">
                                    <p>	36/A Çobançeşme Mah. Köprülü Sk <br> Bahçelievler, İstanbul <br> Türkiye </p>
                                </div>
								
                            </div>
							
		
							
                        </div>
                    </div>
                    <div class="iletisim" style="border-bottom: 3px solid #ccc;
	    border-image: linear-gradient(to right, #6BBFE4,#FFDD3F ,#EA4A92 ) 10;">
                        <div class="iletisimsol">
                            <div class="iletisimsolyazi">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_96_488)">
                                        <path d="M5.625 9.75C4.95749 9.75 4.30497 9.55206 3.74995 9.18121C3.19493 8.81036 2.76235 8.28326 2.50691 7.66656C2.25146 7.04986 2.18462 6.37126 2.31485 5.71657C2.44507 5.06189 2.76651 4.46052 3.23851 3.98852C3.71052 3.51651 4.31188 3.19508 4.96657 3.06485C5.62126 2.93463 6.29986 3.00146 6.91656 3.25691C7.53326 3.51235 8.06036 3.94494 8.43121 4.49995C8.80206 5.05497 9 5.70749 9 6.375C8.99901 7.2698 8.64311 8.12767 8.01039 8.76039C7.37767 9.39311 6.5198 9.74901 5.625 9.75ZM5.625 4.5C5.25416 4.5 4.89165 4.60997 4.58331 4.816C4.27496 5.02202 4.03464 5.31486 3.89273 5.65747C3.75081 6.00008 3.71368 6.37708 3.78603 6.7408C3.85837 7.10451 4.03695 7.4386 4.29917 7.70083C4.5614 7.96305 4.89549 8.14163 5.25921 8.21397C5.62292 8.28632 5.99992 8.24919 6.34253 8.10728C6.68514 7.96536 6.97798 7.72504 7.18401 7.4167C7.39003 7.10835 7.5 6.74584 7.5 6.375C7.5 5.87772 7.30246 5.40081 6.95083 5.04918C6.59919 4.69755 6.12228 4.5 5.625 4.5ZM11.25 17.25V16.875C11.25 15.3832 10.6574 13.9524 9.60248 12.8975C8.54758 11.8426 7.11684 11.25 5.625 11.25C4.13316 11.25 2.70242 11.8426 1.64752 12.8975C0.592632 13.9524 0 15.3832 0 16.875L0 17.25C0 17.4489 0.0790176 17.6397 0.21967 17.7803C0.360322 17.921 0.551088 18 0.75 18C0.948912 18 1.13968 17.921 1.28033 17.7803C1.42098 17.6397 1.5 17.4489 1.5 17.25V16.875C1.5 15.781 1.9346 14.7318 2.70818 13.9582C3.48177 13.1846 4.53098 12.75 5.625 12.75C6.71902 12.75 7.76823 13.1846 8.54182 13.9582C9.3154 14.7318 9.75 15.781 9.75 16.875V17.25C9.75 17.4489 9.82902 17.6397 9.96967 17.7803C10.1103 17.921 10.3011 18 10.5 18C10.6989 18 10.8897 17.921 11.0303 17.7803C11.171 17.6397 11.25 17.4489 11.25 17.25ZM18 13.5C18 12.4865 17.7066 11.4947 17.1553 10.6443C16.604 9.79385 15.8183 9.12119 14.8931 8.70748C13.9679 8.29376 12.9427 8.15669 11.9413 8.3128C10.9399 8.46892 10.0051 8.91154 9.24975 9.58725C9.17533 9.65265 9.1146 9.73215 9.07107 9.82115C9.02754 9.91016 9.00208 10.0069 8.99616 10.1058C8.99024 10.2047 9.00397 10.3038 9.03656 10.3974C9.06915 10.4909 9.11996 10.5771 9.18604 10.6509C9.25213 10.7247 9.33219 10.7847 9.42159 10.8274C9.51099 10.8701 9.60797 10.8947 9.70692 10.8997C9.80587 10.9047 9.90483 10.89 9.99809 10.8566C10.0913 10.8231 10.1771 10.7715 10.2502 10.7048C10.7898 10.2222 11.4576 9.90617 12.1728 9.79475C12.8881 9.68333 13.6203 9.7813 14.2811 10.0768C14.9419 10.3724 15.503 10.8529 15.8967 11.4603C16.2905 12.0677 16.5 12.7761 16.5 13.5C16.5 13.6989 16.579 13.8897 16.7197 14.0303C16.8603 14.171 17.0511 14.25 17.25 14.25C17.4489 14.25 17.6397 14.171 17.7803 14.0303C17.921 13.8897 18 13.6989 18 13.5ZM13.125 6.75C12.4575 6.75 11.805 6.55206 11.25 6.18121C10.6949 5.81036 10.2624 5.28326 10.0069 4.66656C9.75146 4.04986 9.68462 3.37126 9.81485 2.71657C9.94507 2.06189 10.2665 1.46052 10.7385 0.988516C11.2105 0.516514 11.8119 0.195076 12.4666 0.0648512C13.1213 -0.0653739 13.7999 0.00146234 14.4166 0.256908C15.0333 0.512354 15.5604 0.944936 15.9312 1.49995C16.3021 2.05497 16.5 2.70749 16.5 3.375C16.499 4.2698 16.1431 5.12767 15.5104 5.76039C14.8777 6.39311 14.0198 6.74901 13.125 6.75ZM13.125 1.5C12.7542 1.5 12.3916 1.60997 12.0833 1.816C11.775 2.02202 11.5346 2.31486 11.3927 2.65747C11.2508 3.00008 11.2137 3.37708 11.286 3.7408C11.3584 4.10451 11.537 4.4386 11.7992 4.70083C12.0614 4.96305 12.3955 5.14163 12.7592 5.21397C13.1229 5.28632 13.4999 5.24919 13.8425 5.10728C14.1851 4.96536 14.478 4.72504 14.684 4.4167C14.89 4.10835 15 3.74584 15 3.375C15 2.87772 14.8025 2.40081 14.4508 2.04918C14.0992 1.69755 13.6223 1.5 13.125 1.5Z" fill="#333333"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_96_488">
                                            <rect width="18" height="18" fill="white"/>
                                        </clipPath>
                                    </defs>
                                </svg>							
                                <span> İletişim Formu </span>
                            </div>
                        </div>
                        <div class="iletisimsag">
                            <div class="iletisimsagelipse">
                                <ul>
                                    <li> <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="5" cy="5" r="5" fill="#f2c14b"/>
                                        </svg>
                                    </li>
                                    <li> <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="5" cy="5" r="5" fill="#5e7bbd"/>
                                        </svg>
                                    </li>
                                    <li> <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="5" cy="5" r="5" fill="#57b265"/>
                                        </svg>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="iletisimduzborder"></div>
                        <form action="<?php echo $contact_link;?>" method="POST" id="ContactForm">
                            <?php echo Validation::get_csrf_token('contact'); ?>
                        <div class="iletisimform">

                                <div class="iletisimformyazi"> Adınız Soyadınız </div>
                                <div class="iletisimforminput">
                                    <input name="full_name" type="text" placeholder="Adınız Soyadınız">
                                </div>
                        </div>
                        <div class="iletisimform">
                            <div class="iletisimformyazi"> E-Posta </div>
                            <div class="iletisimforminput">
                                <input name="email" type="text" placeholder="E-Posta">
                            </div>
                        </div>
                        <div class="iletisimformuzun">
                            <div class="iletisimformyazi2"> Gsm Numaranız </div>
                            <div class="iletisimforminput2">
                                <input id="phone" type="text" placeholder="<?php echo __("website/contact/form-phone"); ?>" onkeypress="return event.charCode>= 48 &amp;&amp;event.charCode<= 57">

                            </div>
                        </div>
                        <div class="iletisimformmesaj">
                            <div class="iletisimformyazi3"> Mesajınız </div>
                            <div class="iletisimforminput3">
                                <input  name="message" type="text" placeholder="Mesajınızı buraya yazınız...">
                            </div>
                        </div>
                        <div class="iletisimbutonlar" style="background-color: white;">

                                <div class="iletisimasilbuton">
                                    <button class="mio-ajax-submit" mio-ajax-options='{"waiting_text":"<?php echo addslashes(__("website/others/button2-pending")); ?>","result":"contact_form_submit"}' style="float:right;"  onclick="location.href='javascript:void(0);'"> Gönder </button>
                                </div>

                            </div>
                        </form>





                        <script type="text/javascript">
                            function contact_form_submit(result){
                                <?php if(isset($captcha)) echo $captcha->submit_after_js(); ?>
                                if(result != ''){
                                    var solve = getJson(result);
                                    if(solve !== false){
                                        if(solve.status == "error"){
                                            if(solve.for != undefined && solve.for != ''){
                                                $("#ContactForm "+solve.for).focus();
                                                $("#ContactForm "+solve.for).attr("style","border-bottom:2px solid red; color:red;");
                                                $("#ContactForm "+solve.for).change(function(){
                                                    $(this).removeAttr("style");
                                                });
                                            }
                                            alert_error(solve.message,{timer:3000});
                                        }else if(solve.status == "successful"){
                                            $("#ContactForm").slideUp(500,function(){
                                                $("#ContactForm_Success").slideDown(500);
                                            })
                                        }
                                    }else
                                        console.log(result);
                                }
                            }
                        </script>

                        <div id="ContactForm_Success" style="display: none;">
                            <div style="margin-top:30px;margin-bottom:70px;text-align:center;">
                                <i style="font-size:80px;" class="fa-solid fa-check"></i>
                                <h4 style="font-weight:bold;"><?php echo __("website/contact/successful-title"); ?></h4>
                                <br>
                                <h5><?php echo __("website/contact/successful-content"); ?></h5>
                            </div>
                        </div>





                    </div>

                </div>
                <div class="iletisimsagbar">
                    <div class="iletisimsagbarmenu">
                        <ul>
                            <li class="wow flipInX"  data-wow-duration="1s"> <a href="https://my.turkbil.net.tr/hakkimizda" title=""> Hakkımızda </a> </li>													
                            <li class="wow flipInX"  data-wow-duration="1s"> <a href="https://my.turkbil.net.tr/hizmet-ve-kullanim-sozlesmesi" title=""> KVKK Aydınlatma Metni </a> </li>
							<li class="wow flipInX"  data-wow-duration="1s"> <a href="" title=""> Bilgi Güvenliği Sözleşmesi </a> </li>
                            <li class="wow flipInX"  data-wow-duration="1s"> <a href="https://my.turkbil.net.tr/kisisel-veriler-ve-genel-gizlilik-sozlesmesi" title=""> Hizmet Kullanım Sözleşmesi </a> </li>                        
                            <li class="wow flipInX"  data-wow-duration="1s"> <a href="" title=""> Banka Hesap Bilgileri </a> </li>							
                            <li class="wow flipInX"  data-wow-duration="1s"> <a href="" title=""> Kötüye Kullanım Bildirimi </a> </li>							
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>








<style>
    #requiredinput {width:130px;}
</style>


<div class="clear"></div>