<?php
/*-------------------------------------------------------+
| PHP-Fusion İçerik Yönetim Sistemi
| PHP-Fusion v9 Türkçe Dil Dosyası
| https://www.php-fusion.co.uk/
+--------------------------------------------------------+
| Filename: blacklist.php
| Author: Ali SAKA
| Web: http://www.fusiontr.com  
+--------------------------------------------------------*/
$locale['BLS_000'] = "Kara Liste"; //406
//Blacklist message
$locale['BLS_010'] = "Geçersiz E-posta veya IP adresi.";
$locale['BLS_011'] = "Kullanıcı Kara Listeye Eklendi.";
$locale['BLS_012'] = "Kullanıcı Kara Listede Güncellendi";
$locale['BLS_013'] = "Kullanıcı Kara Listeden Silindi"; //401
$locale['BLS_014'] = "Bu girişi silmek istediğinizden emin misiniz?";
$locale['BLS_015'] = "Kara Liste şu anda boş."; //465
$locale['BLS_016'] = "Girdiğiniz E-Posta adresi geçerli değil."; //405

$locale['BLS_020'] = "Kara Listedeki Üyeler"; //420
$locale['BLS_021'] = "Kara listeye eklenmiş üyeyi düzenle"; //421
$locale['BLS_022'] = "Kara Listeye Kullanıcı Ekle";
$locale['BLS_023'] = "Şu anda Toplam %d Karaliste Girişlerinin %d Tanesi Gösteriliyor.";

$locale['BLS_030'] = "Kara Liste Bilgisi"; //461
$locale['BLS_031'] = "Yönetici"; //467
$locale['BLS_032'] = "Tarih";  //468
$locale['BLS_033'] = "Seçenekler"; //462
$locale['BLS_034'] = "Kara Listeye Eklenecek IP Adresi: [STRONG]yada[/STRONG]"; //441
$locale['BLS_035'] = "Kara Listeye Eklenecek E-mail Adresi"; //442
$locale['BLS_036'] = "Kara Listeye Eklenme Sebebi"; //443
$locale['BLS_037'] = "Kara Listeye Ekle";  //444
$locale['BLS_038'] = "Güncelle";

$locale['BLS_MS'] = "Bu siteye girişini engellemek istediğiniz kullanıcının IP adresini yada mail adresini yazarak kullanıcıyı 
yasaklı kullanıcılar listesine ekleyebilirsiniz. İsterseniz kullanıcı siteye geldiğinde bir sebep gösterebilirsiniz.
Lütfen unutmayın: IPv6 adresleri sitemizde tam uzunluklarına dönüştürülmektedirler, 
Örneğin, <em>ABCD:1234:5:6:7:8:9:FF</em> şu şekilde gözükecektir: <em>ABCD:1234:0005:0006:0007:0008:0009:00FF</em>.
Bu işlemi yapmak için IP adresini tam olarak örn: <em>123.123.123.123</em>, ya da <em>123.123.123 , 123.123</em> gibi bir bölümünü girerek yapabilirsiniz. Karışık IP adresleri (Hem IPv6 hem IPv4 kısımları içerenler) kara listede kısmi eşleşme için kontrol edilmeyeceklerdir.<br /><br />
<br /><br />
Aynı şekilde e-posta adresi kullanarak da kullanıcıyı yasaklılar listesine dahil edebilirsiniz.
örn: <em>isim@adres.com</em>, ya da tüm domain ismini de yasaklayabilirsiniz. örn: <em>adres.com</em>

% - Herhangi bir dize ile eşleşir.<br /><br />

%.%.%.%@domain.tld En az 3 nokta içeren herhangi bir adresi yasaklar.<br />
%+%@domain.tld En az bir artı işareti içeren herhangi bir adresi yasaklar.<br />
%@domain.tld Domain.tld'den herhangi bir adresi yasaklar.<br />
%.domain.tld Domain.tld'nin tüm alt alanlarını yasaklar<br />
%payday% Sitelerde sıkça bulunan \"payday\" kelimesini içeren herhangi bir adresi yasaklar.<br />
domain.tld V7'de tanımlanan kurallarla uyumlu hale getirmek için %@domain.tld'nin bir takma adıdır.<br />"; //440
