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
                callback('<?php if($ipInfo = UserManager::ip_info()) echo $ipInfo["countryCode"]; else echo 'tr'; ?>');
            },
            autoPlaceholder: "on",
            formatOnDisplay: true,
            initialCountry: "auto",
            hiddenInput: "phone",
            nationalMode: false,
            placeholderNumberType: "MOBILE",
            preferredCountries: ['tr', 'us', 'gb'],
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
                                <i class="fas fa-phone-alt" style="font-size: 25px; color: #B1172A;"></i>
                            </div>
                            <div class="iletisimbilgi"> Telefon Numarası </div>
                            <div class="iletisimtel"> 0(212) 514 514 0</div>
                        </div>
                        <div class="iletisimim  wow swing"  data-wow-duration="1s">
                            <div class="iletisimico">
                                <i class="fab fa-whatsapp" style="font-size: 25px; color: #25D366;"></i>
                            </div>
                            <div class="iletisimbilgi"> WhatsApp Destek </div>
                            <div class="iletisimtel"> 0(212) 514 514 0</div>
                        </div>
                        <div class="iletisimim  wow swing"  data-wow-duration="1s">
                            <div class="iletisimico">
                                <i class="fas fa-envelope" style="font-size: 25px; color: #B1172A;"></i>
                            </div>
                            <div class="iletisimbilgi"> E-Posta Adresi </div>
                            <div class="iletisimtel"> bilgi@turkbil.net.tr </div>
                        </div>
                        <div class="iletisimborder"></div>
                        <div class="adres">
                            <div class="adressol  wow fadeInLeft"  data-wow-duration="1s">
                                <div class="adressolbaslik">
                                    <i class="fas fa-briefcase" style="font-size: 18px; color: #333;"></i>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
