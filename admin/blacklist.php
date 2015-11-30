<?php
// Delete blacklisted user
$locale['400'] = "Kullanıcıyı Kara Listeden Sil";
$locale['401'] = "Kullanıcı Kara Listeden Silindi";
$locale['402'] = "Kara Liste Yönetimine Geri Dön";
$locale['403'] = "Site Yönetimine Geri Dön";
$locale['404'] = "Kara Listeye eklenecek IP veya E-Posta adresini girin.";
$locale['405'] = "Girdiğiniz E-Posta adresi geçerli değil.";
$locale['406'] = "Kara Liste";
// Add/Edit Blacklist Titles
$locale['420'] = "Kara Listeye Ekle";
$locale['421'] = "Kara listeye eklenmiş üyeyi düzenle";
// Add/Edit blacklist form
$locale['440'] = "Bu siteye girisini engellemek istediğiniz kullanicinin IP adresini yada mail adresini yazarak kullanıcıyı 
yasaklı kullanıcılar listesine ekleyebilirsiniz. İsterseniz kullanıcı siteye geldiğinde bir sebep gösterebilirsiniz.
Lütfen unutmayın: IPv6 adresleri sitemizde tam uzunlıklarına dönüştürülmektedirler, 
Örneğin, <em>ABCD:1234:5:6:7:8:9:FF</em> şu şekilde gözükecektir: <em>ABCD:1234:0005:0006:0007:0008:0009:00FF</em>.
Bu islemi yapmak için IP adresini tam olarak örn: <em>123.123.123.123</em>, ya da <em>123.123.123 , 123.123</em> gibi bir bölümünü girerek yapabilirsiniz. Karışık IP adresleri (Hem IPv6 hem IPv4 kısımları içerenler) kara listede kısmi eşleşme için kontrol edilmeyeceklerdir.<br /><br />
<br /><br />
Aynı şekilde e-posta adresi kullanarak da kullanıcıyı yasaklılar listesine dahil edebilirsiniz.
örn: <em>isim@adres.com</em>, ya da tüm domain ismini de yasaklayabilirsiniz. örn: <em>adres.com</em>

% - matches any string.<br /><br />

%.%.%.%@domain.tld bans any address that contains at least 3 dots.<br />
%+%@domain.tld bans any address that contains at least one plus sign.<br />
%@domain.tld bans any address from domain.tld<br />
%.domain.tld bans all subdomains of domain.tld<br />
%payday% bans any address that contains the word \"payday\" which was very often on sites.<br />
domain.tld is an alias of %@domain.tld to make it compatible with rules defined in v7.<br />";

$locale['441'] = "Kara Listeye Eklenecek IP Adresi: <strong>ya da</strong>";
$locale['442'] = "Kara Listeye Eklenecek E-mail Adresi:";
$locale['443'] = "Kara Listeye Eklenme Sebebi";
$locale['444'] = "Kara Listeye Ekle";
// Current blacklisted users
$locale['460'] = "Kara Listedeki Üyeler";
$locale['461'] = "Kara Liste Bilgisi";
$locale['462'] = "Seçenekler";
$locale['463'] = "Düzenle";
$locale['464'] = "Sil";
$locale['465'] = "Kara Liste şu anda boş.";
$locale['466'] = "Yok";
$locale['467'] = "Yönetici";
$locale['468'] = "Tarih";
?>