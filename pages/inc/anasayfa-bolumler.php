<?php
require __DIR__ . '/anasayfa-veri.php';

if (!function_exists('tb_e')) {
    function tb_e($metin) {
        return htmlspecialchars($metin, ENT_QUOTES, 'UTF-8');
    }
}

$tbIkonlar = [
    'hosting'  => '<path d="M3 5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><path d="M3 15a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><path d="M7 7h.01M7 17h.01"/>',
    'bulut'    => '<path d="M17.5 19a4.5 4.5 0 1 0-1.4-8.78A6 6 0 0 0 4.5 12.5 3.5 3.5 0 0 0 6 19z"/>',
    'fiziksel' => '<rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M3 15h18M7 6h.01M7 12h.01M7 18h.01"/>',
];

$tbTumRakamlar = array_merge($tbRakamlar, $tbEkRakamlar);
?>

    <!-- Hizmetler: başlangıç fiyatları -->
    <section class="tb-bolum">
        <div class="tb-kap">
            <div class="tb-bolum-baslik">
                <span class="tb-ust">Hizmetlerimiz</span>
                <h2>İhtiyacınıza uygun altyapıyı seçin</h2>
                <p>Web sitenizden kurumsal sunucularınıza kadar tüm altyapı Türkiye’deki veri merkezimizde.</p>
            </div>
            <div class="tb-paketler">
                <?php foreach ($tbPaketler as $paket) { ?>
                <div class="tb-paket wow">
                    <div class="tb-paket-ikon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><?php echo $tbIkonlar[$paket['ikon']]; ?></svg>
                    </div>
                    <h3><?php echo tb_e($paket['baslik']); ?></h3>
                    <p class="tb-paket-aciklama"><?php echo tb_e($paket['aciklama']); ?></p>
                    <div class="tb-paket-fiyat">
                        <span class="tb-paket-fiyat-ust">başlayan fiyatlarla</span>
                        <strong>₺<?php echo tb_e($paket['fiyat']); ?></strong><?php if ($paket['donem']) { ?><span> / <?php echo tb_e($paket['donem']); ?></span><?php } ?>
                    </div>
                    <ul class="tb-paket-ozellik">
                        <?php foreach ($paket['ozellikler'] as $ozellik) { ?>
                        <li><?php echo tb_e($ozellik); ?></li>
                        <?php } ?>
                    </ul>
                    <a class="tb-buton" href="<?php echo tb_e($paket['link']); ?>">Paketleri İncele</a>
                    <div class="tb-paket-eklink">
                        <?php foreach ($paket['ekLinkler'] as $i => $ek) { ?><?php if ($i) { ?> · <?php } ?><a href="<?php echo tb_e($ek['link']); ?>"><?php echo tb_e($ek['metin']); ?></a><?php } ?>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <!-- Rakamlarla Türkbil -->
    <section class="tb-bolum tb-rakamlar-bolum">
        <div class="tb-kap">
            <h2 class="tb-gizli">Rakamlarla Türkbil</h2>
            <div class="tb-rakamlar">
                <?php foreach ($tbTumRakamlar as $rakam) { ?>
                <div class="tb-rakam">
                    <strong><?php echo tb_e($rakam['deger']); ?></strong>
                    <span><?php echo tb_e($rakam['etiket']); ?></span>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <?php if ($tbGuven) { ?>
    <!-- Güven şeridi -->
    <section class="tb-bolum tb-guven-bolum">
        <div class="tb-kap">
            <h2 class="tb-guven-baslik">Sertifikalar ve iş ortaklarımız</h2>
            <div class="tb-guven">
                <?php foreach ($tbGuven as $logo) { ?>
                <img src="<?php echo tb_e($logo['gorsel']); ?>" alt="<?php echo tb_e($logo['metin']); ?>" loading="lazy" decoding="async">
                <?php } ?>
            </div>
        </div>
    </section>
    <?php } ?>

    <?php if ($tbYorumlar) { ?>
    <!-- Müşteri yorumları -->
    <section class="tb-bolum">
        <div class="tb-kap">
            <div class="tb-bolum-baslik">
                <span class="tb-ust">Müşterilerimiz</span>
                <h2>Türkbil’i tercih edenler anlatıyor</h2>
            </div>
            <div class="tb-yorumlar">
                <?php foreach ($tbYorumlar as $yorum) { ?>
                <figure class="tb-yorum wow">
                    <blockquote><?php echo tb_e($yorum['yorum']); ?></blockquote>
                    <figcaption>
                        <strong><?php echo tb_e($yorum['isim']); ?></strong>
                        <?php if (!empty($yorum['unvan'])) { ?><span><?php echo tb_e($yorum['unvan']); ?></span><?php } ?>
                    </figcaption>
                </figure>
                <?php } ?>
            </div>
        </div>
    </section>
    <?php } ?>
