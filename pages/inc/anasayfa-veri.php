<?php
/*
 * Ana sayfa bölümlerinin içeriği.
 *
 * Buradaki bilgiler sitenin diğer sayfalarından alınmıştır. Fiyat değişince
 * ilgili paket sayfasıyla birlikte burayı da güncelleyin.
 *
 * Boş bırakılan listeler (ek rakamlar, güven logoları, müşteri yorumları)
 * doldurulana kadar ana sayfada HİÇ görünmez. Gerçek olmayan bilgi yazmayın.
 */

// Hizmet kartları: "…'den başlayan" fiyatlar
$tbPaketler = [
    [
        'baslik'   => 'Web Hosting',
        'aciklama' => 'Bireysel siteler ve işletmeler için LiteSpeed altyapılı paylaşımlı hosting.',
        'fiyat'    => '40',
        'donem'    => 'aylık',
        'ozellikler' => ['LiteSpeed web sunucusu', 'cPanel veya DirectAdmin', 'Let’s Encrypt SSL'],
        'ikon'     => 'hosting',
        'link'     => 'https://turkbil.net.tr/bireysel-hosting',
        'ekLinkler' => [
            ['metin' => 'Bireysel', 'link' => 'https://turkbil.net.tr/bireysel-hosting'],
            ['metin' => 'Kurumsal', 'link' => 'https://turkbil.net.tr/kurumsal-hosting'],
        ],
    ],
    [
        'baslik'   => 'Bulut Sunucu',
        'aciklama' => 'Donanım yedeklemeli, performans odaklı sanal sunucular.',
        'fiyat'    => '110',
        'donem'    => 'aylık',
        'ozellikler' => ['ECC RAM', '1000 Mbit/s bağlantı', 'SSD disk'],
        'ikon'     => 'bulut',
        'link'     => 'https://turkbil.net.tr/bulut-sunucu',
        'ekLinkler' => [],
    ],
    [
        'baslik'   => 'Fiziksel Sunucu',
        'aciklama' => 'Tamamen size ayrılmış Dell sunucular ve Co-Location hizmeti.',
        'fiyat'    => '4.450',
        'donem'    => '',
        'ozellikler' => ['Dell PowerEdge sunucular', 'IPMI erişimi', '1000 Mbit/s (5 TB)'],
        'ikon'     => 'fiziksel',
        'link'     => 'https://turkbil.net.tr/fiziksel-sunucu',
        'ekLinkler' => [],
    ],
];

// "Rakamlarla Türkbil" şeridi (sitede zaten yazan bilgiler)
$tbRakamlar = [
    ['deger' => (date('Y') - 2014) . ' yıl', 'etiket' => '2014’ten beri hizmet'],
    ['deger' => 'Bursa',                    'etiket' => 'Türkiye’deki veri merkezi'],
    ['deger' => '1 Gbit/s',                 'etiket' => 'Sunucu bağlantı hızı'],
    ['deger' => 'Co-Location',              'etiket' => 'Kabin ve sunucu barındırma'],
];

// Ek rakamlar: doğrulanmış bilgi olduğunda doldurun, yukarıdaki listeye eklenir.
// Örnek: ['deger' => '%99,9', 'etiket' => 'Son 12 ay uptime'],
$tbEkRakamlar = [
];

// Güven şeridi: sertifika / kayıt / iş ortağı logoları.
// 'gorsel' asset/resimler altındaki dosya yolu, 'metin' alternatif metindir.
// Örnek: ['gorsel' => '../asset/resimler/guven/iso27001.png', 'metin' => 'ISO 27001'],
$tbGuven = [
];

// Müşteri yorumları: izin alınmış gerçek yorumlar.
// Örnek: ['yorum' => '…', 'isim' => 'Ad Soyad', 'unvan' => 'Firma / Görev'],
$tbYorumlar = [
];

// Ana sayfa SSS (paket sayfalarındaki cevaplardan derlendi)
$tbSss = [
    [
        'soru'  => 'Sunucularınız nerede barınıyor?',
        'cevap' => 'Sunucularımız Türkiye’nin Bursa ilinde konumlandırılmıştır.',
    ],
    [
        'soru'  => 'Hangi kontrol panelini kullanıyorsunuz?',
        'cevap' => 'cPanel veya DirectAdmin olmak üzere, kullanıcı talebine yönelik kontrol paneli sunulur.',
    ],
    [
        'soru'  => 'Paketimi daha sonradan değiştirebilir miyim?',
        'cevap' => 'Evet. İhtiyaçlarınız doğrultusunda paket yükseltme işlemi yapabilirsiniz; yükseltme esnasında sistem kesintiye uğramaz.',
    ],
    [
        'soru'  => 'Yedekleme hizmetiniz var mı?',
        'cevap' => 'Kullanıcı talebi üzerine istenen periyotlarda tarafımızca yedek kaydı tutulabilir.',
    ],
    [
        'soru'  => 'Sunucu barındırma (Co-Location) hizmetiniz var mı?',
        'cevap' => 'Evet, Co-Location hizmetimiz mevcuttur. Kabin hizmetleri veya adetli Co-Location hizmeti için destek bildirimi ya da e-posta ile bize ulaşabilirsiniz.',
    ],
    [
        'soru'  => 'Uzman yardımı alabilir miyim?',
        'cevap' => 'Teknik olarak aşamadığınız konuları Türkbil uzman ekibine sorabilir, geliştirici önerilerle çözüme kolayca ulaşabilirsiniz.',
    ],
];
