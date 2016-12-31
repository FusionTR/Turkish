<?php  
/*-------------------------------------------------------+
| PHP-Fusion İçerik Yönetim Sistemi
| PHP-Fusion v9.02 RC5 Türkçe Dil Dosyası
| https://www.php-fusion.co.uk/
+--------------------------------------------------------+
| Filename: global.php
| Author: Ali SAKA
| Web: http://www.fusiontr.com
+--------------------------------------------------------*/
// Locale Settings
setlocale(LC_TIME, "tr_TR.utf8"); // Linux Server (Windows may differ)
$locale['charset'] = "utf-8";
$locale['region'] = "TR";
$locale['xml_lang'] = "tr";
$locale['tinymce'] = "tr";
$locale['select2'] = "tr";
$locale['phpmailer'] = "tr";
$locale['datepicker'] = "tr";
// Full & Short Months
$locale['months'] = "&nbsp|Ocak|Şubat|Mart|Nisan|Mayıs|Haziran|Temmuz|Ağustos|Eylül|Ekim|Kasım|Aralık";
$locale['shortmonths'] = "&nbsp|Ock|Şbt|Mar|Nis|May|Haz|Tem|Ağus|Eyl|Eki|Kas|Arlk";
$locale['weekdays'] = "Pazar|Pazartesi|Salı|Çarşamba|Perşembe|Cuma|Cumartesi";
// Timers
$locale['year'] = "yıl";
$locale['year_a'] = "yıl";
$locale['month'] = "ay";
$locale['month_a'] = "ay";
$locale['day'] = "gün";
$locale['day_a'] = "gün";
$locale['hour'] = "saat";
$locale['hour_a'] = "saat";
$locale['minute'] = "dakika";
$locale['minute_a'] = "dakika";
$locale['second'] = "saniye";
$locale['second_a'] = "saniye";
$locale['just_now'] = "şimdi";
$locale['ago'] = "önce";
// Geo
$locale['street1'] = "Adres 1";
$locale['street2'] = "Adres 2";
$locale['city'] = "Şehir";
$locale['postcode'] = "Posta Kodu";
$locale['sel_country'] = "Ülke Seçin";
$locale['sel_state'] = "İl Seçin";
$locale['sel_user'] = "Lütfen Kullanıcı Adı Girin";
$locale['add_language'] = "Dil Çevirilerini Ekle";
$locale['add_lang'] = "Ekle %s";
// Name
$locale['name'] = "Tam Adınız";
$locale['username_pretext'] = "Genel Kullanıcı Adınızla Kullanıcı Profil Adınız Aynıdır.: %s %s";
$locale['first_name'] = "Adınız";
$locale['middle_name'] = "İkinci Adınız";
$locale['last_name'] = "Soyadınız";
// Documents
$locale['doc_type'] = "Doküman Türü";
$locale['doc_series'] = "Serisi";
$locale['doc_number'] = "Numara";
$locale['doc_authority'] = "Yetki";
$locale['doc_date_issue'] = "Yayın Tarihi";
$locale['doc_date_expire'] = "Son Kullanım Tarihi";
// Standard User Levels
$locale['user0'] = "Genel";
$locale['user1'] = "Üye";
$locale['user2'] = "Yönetici";
$locale['user3'] = "Super Yönetici";
$locale['user_na'] = "Yok";
$locale['user_guest'] = "Misafir";
$locale['user_anonymous'] = "Anonim Üye";
$locale['genitive'] = "%s's %s";
// Standard User Status
$locale['status0'] = "Aktif";
$locale['status1'] = "Engellenmiş";
$locale['status2'] = "İnaktif Edilmiş";
$locale['status3'] = "Geçici Banlanmış";
$locale['status4'] = "Güvenlik Banı Uygulanmış";
$locale['status5'] = "İptal Edilmiş";
$locale['status6'] = "Anonim";
$locale['status7'] = "Deaktif";
$locale['status8'] = "İnaktif";
// Forum Moderator Level(s)
$locale['userf1'] = "Moderatör";
// Navigation
$locale['global_001'] = "Ana Menü";
$locale['global_002'] = "Kayıtlı Link Yok\n";
$locale['global_003'] = "Önizleme Yok";
// Users Online
$locale['global_010'] = "Çevrimiçi Kullanıcılar";
$locale['global_011'] = "Çevrimiçi Ziyaretçiler";
$locale['global_012'] = "Çevrimiçi Üyeler";
$locale['global_013'] = "Çevrimiçi Üye Yok";
$locale['global_014'] = "Toplam Üye Sayısı";
$locale['global_015'] = "Aktif Edilmemiş Üye Sayısı";
$locale['global_016'] = "En Yeni Üye";
$locale['global_017'] = "Toggle Navigation";
// Forum Side panel
$locale['global_020'] = "Forum Başlıkları";
$locale['global_021'] = "En Yeni Forum Başlıkları";
$locale['global_022'] = "En Fazla İlgilenilen Başlıklar";
$locale['global_023'] = "Henüz Başlık Oluşturulmamış.";
$locale['global_024'] = "Participated Discussions";
$locale['global_027'] = "Cevaplanmamış Konular";
$locale['global_028'] = "Çözülmemiş Sorular";
// Comments Side panel
$locale['global_025'] = "Son Yorumlar";
$locale['global_026'] = "Hiç Yorum Girilmemiş.";
// Articles Side panel
$locale['global_030'] = "En Son Makaleler";
$locale['global_031'] = "Makale Bulunamadı.";
// Downloads Side panel
$locale['global_032'] = "Son Eklenen Dosyalar";
$locale['global_033'] = "Hiç Dosya Bulunamadı.";
// Welcome panel
$locale['global_035'] = "Hoş Geldiniz";
// Latest Active Forum Threads panel
$locale['global_040'] = "En Son Aktif Forum Başlıkları";
$locale['global_041'] = "Yeni Başlıklarım";
$locale['global_042'] = "Yeni Forum Mesajlarım";
$locale['global_043'] = "Yeni Mesajlar";
$locale['global_044'] = "Başlık";
$locale['global_045'] = "Gösterim";
$locale['global_046'] = "Cevaplar";
$locale['global_047'] = "En Son Mesaj";
$locale['global_048'] = "Forum";
$locale['global_049'] = "Gönderen";
$locale['global_050'] = "Yazar";
$locale['global_051'] = "Anket";
$locale['global_052'] = "Taşındı";
$locale['global_053'] = "Hiç Forum Başlığı Oluşturmamışsınız.";
$locale['global_054'] = "Foruma Hiç Mesaj Göndermemişsiniz.";
$locale['global_055'] = "Enson Girişinizden Beri %u Yeni Mesaj, %u Farklı Başlık İçerisinde Bulunmakta.";
$locale['global_056'] = "Takip Ettiğim Başlıklar";
$locale['global_057'] = "Seçenekler";
$locale['global_058'] = "Takibi Durdur";
$locale['global_059'] = "Hiçbir Başlığı Takip Etmiyorsunuz.";
$locale['global_060'] = "Başlığı Takip Etmeyi Durdurmak İstediğinizden Emin Misiniz?";
// Blog, News & Articles
$locale['global_070'] = "Yazar ";
$locale['global_070b'] = "Yazarın Tüm Başlıklarını Göster %s";
$locale['global_071'] = "- ";
$locale['global_071b'] = "Yazar";
$locale['global_072'] = "Okumaya Devam Et";
$locale['global_073'] = " Yorumlar";
$locale['global_073b'] = " Yorum";
$locale['global_074'] = " Okunma";
$locale['global_074b'] = " Okunma";
$locale['global_075'] = "Yazdır";
$locale['print'] = "Yazdır";
$locale['global_076'] = "Düzenle";
$locale['global_077'] = "Haberler";
$locale['global_078'] = "Henüz Haber Eklenmemiş";
$locale['global_079'] = "İçinde ";
$locale['global_080'] = "Kategorisiz";
$locale['global_081'] = "Haberler Ana Sayfa";
$locale['global_082'] = "Haberler";
$locale['global_083'] = "Son Güncelleme";
$locale['global_084'] = "Haber Kategorisi";
$locale['global_085'] = "Tüm Kategoriler";
$locale['global_086'] = "Enson Haberler";
$locale['global_087'] = "En Çok Yorumlanan Haberler";
$locale['global_088'] = "En Yüksek Puanlı Haberler";
$locale['global_089'] = "İlk Yorum Yapan Siz Olun %s";
$locale['global_089a'] = "İlk Oylamayı Siz Yapın %s";
$locale['global_089b'] = "Büyük Görünüm";
$locale['global_089c'] = "Liste Görünümü";
// Page Navigation
$locale['global_090'] = "Önceki";
$locale['global_091'] = "Sonraki";
$locale['global_092'] = "Sayfa ";
$locale['global_093'] = " Arası ";
$locale['global_094'] = " Dışında ";
// Guest User Menu
$locale['global_100'] = "Giriş Yap";
$locale['global_101'] = "Giriş ID";
$locale['global_101a'] = "Kullanıcı Adı Girin";
$locale['global_101b'] = "E-posta Adresinizi Girin";
$locale['global_101c'] = "E-posta veya Kullanıcı Adınızı Girin";
$locale['global_102'] = "Parola";
$locale['global_103'] = "Oturum Açık Kalsın";
$locale['global_104'] = "Giriş Yap";
$locale['global_105'] = "Henüz Üye Değil Misiniz? [LINK]Buraya Tıklayarak[/LINK] Üye Olabilirsiniz.";
$locale['global_106'] = "[LINK]Parolanızı Mı Unuttunuz? [/LINK]";
$locale['global_107'] = "Kayıt Ol";
$locale['global_108'] = "Kayıp Parola";
// Member User Menu
$locale['global_120'] = "Profil Sayfanızı Özelleştirin";
$locale['global_121'] = "Özel Mesajlar";
$locale['global_122'] = "Üye Listesi";
$locale['global_123'] = "Yönetici Paneli";
$locale['global_124'] = "Çıkış";
$locale['global_125'] = "%u Yeni Özel";
$locale['global_126'] = "Mesaj";
$locale['global_127'] = "Mesajlar";
$locale['global_128'] = "Öneri";
$locale['global_129'] = "Öneriler";
// User Menu
$locale['UM060'] = "Giriş";
$locale['UM061'] = "Kullanıcı Adı";
$locale['UM061a'] = "E-Posta";
$locale['UM061b'] = "Kullanıcı Adı veya E-Posta";
$locale['UM062'] = "Parola";
$locale['UM063'] = "Beni Hatırla";
$locale['UM064'] = "Login";
$locale['UM065'] = "Henüz Üye Değil Misiniz? [LINK]Buraya Tıklayarak[/LINK] Üye Olabilirsiniz.";
$locale['UM066'] = "Parolanızı Mı Unuttunuz?\n[LINK]Yeni Bir Tane Talep Et[/LINK].";
$locale['UM080'] = "Profil Düzenle";
$locale['UM081'] = "Özel Mesajlar";
$locale['UM082'] = "Üye Listesi";
$locale['UM083'] = "Yönetici Paneli";
$locale['UM084'] = "Çıkış";
$locale['UM085'] = "%u Yeni ";
$locale['UM086'] = "Mesaj";
$locale['UM087'] = "Mesajlar";
$locale['UM088'] = "Takip Ettiğim Konular";
// Submit (news, link, article)
$locale['UM089'] = "Öner...";
$locale['UM090'] = "Haber Öner";
$locale['UM091'] = "Link Öner";
$locale['UM092'] = "Makale Öner";
$locale['UM093'] = "Resim Öner";
$locale['UM094'] = "Dosya Öner";
$locale['UM095'] = "Blog Öner";
// User Panel
$locale['UM096'] = "Hoş Geldiniz: ";
$locale['UM097'] = "Kişisel Menü";
$locale['UM101'] = "Dil Değiştir";
// Gauges
$locale['UM098'] = "Gelen Mesajlar :";
$locale['UM099'] = "Gider Mesajlar :";
$locale['UM100'] = "Mesaş Arşivi :";
// Keywords and Meta
$locale['tags'] = "Etiketler";
// Captcha
$locale['global_150'] = "Doğrulama Kodu:";
$locale['global_151'] = "Doğrulama Kodunu Giriniz:";
// Footer Counter
$locale['global_170'] = "Tekil Ziyaretçi";
$locale['global_171'] = "Tekil Ziyaretçi";
$locale['global_172'] = "Sayfa Oluşturulma Süresi: %s Saniye";
$locale['global_173'] = "Sorgu";
$locale['global_174'] = "Kullanılan Bellek";
$locale['global_175'] = "Ortalama: %s Saniye";
// Admin Navigation
$locale['global_180'] = "Yönetici Ana Sayfa";
$locale['global_181'] = "Siteye Geri Dön";
$locale['global_182'] = "Yönetici Parolası Hatalı Veya Girilmedi.";
// Miscellaneous
$locale['global_190'] = "Bakım Modu Aktif";
$locale['global_191'] = "IP Adresiniz Kara Listede.";
$locale['global_192'] = "Oturumunuzun Açık Kalma Süresi Doldu. Lütfen Tekrar Giriş Yapınız";
$locale['global_193'] = "Cookie Oluşturulamadı. Lütfen Doğru Şekilde Oturum Açabilmek İçin Çerezlerinizin Etkin Olduğundan Emin Olun.";
$locale['global_194'] = "Üyeliğiniz Askıya Alınmıştır (Siteden Banlandınız).";
$locale['global_195'] = "Üyeliğiniz Henüz Aktif Edilmedi.";
$locale['global_196'] = "Hatalı Kullanıcı Adı Veya Şifre.";

$locale['global_197'] = "Yeniden Yönlendiriliyorsunuz, Lütfen Bekleyin...\n\n[ [LINK] Veya Beklemek İstemiyorsanız Buraya Tıklayın[/LINK] ]";

$locale['global_198'] = "UYARI: KURULUM KLASÖRÜ TESPİT EDİLDİ, LÜTFEN KURULUM DOSYASINI SİLİNİZ.";
$locale['global_199'] = "UYARI: Yönetici Parolası Oluşturulmamış, [LINK]Profil Düzenle[/LINK] Tıklayarak Oluşturunuz.";
//Titles
$locale['global_200'] = " - ";
$locale['global_201'] = ": ";
$locale['global_202'] = " - Arama";
$locale['global_203'] = " - S.S.S";
$locale['global_204'] = " - Forum";
//Themes
$locale['global_210'] = "İçeriğe Git";
$locale['global_300'] = "Tema Bulunamadı";
$locale['global_301'] = "Gerçekten Üzgünüz, Ancak Bu Sayfa Görüntülenemiyor. Bazı Sorunlardan Dolayı Biçbir Site Teması Bulunamadı.
  Site Yöneticisiyseniz, PHP-Fusion 9 İçin Tasarlanmış Temaları Themes Klasörüne Yüklemek İçin Lütfen FTP İstemcinizi Kullanın.
  Yükledikten Sonra, Seçilen Temanın Themes Dizinine Doğru Şekilde Yüklenip Yüklenmediğini Görmek İçin Tema Ayarları'na Bir Gözatın.
  Yüklenen Tema Klasörünün Tam Olarak Aynı Adı Taşıması Gerektiğini Unutmayın (Unix Tabanlı Sunucularda Önemli Olan Karakter Durumu Da Dahil Olmak Üzere)
  Tema Ayarları Sayfasında Seçildiği Gibi.\n\nBu Sitenin Düzenli Üyesiyseniz, Lütfen [SITE_EMAIL] E-Posta Aracılığıyla Sitenin Yöneticisine Başvurun Ve Bu Sorunu Bildirin.";
$locale['global_302'] = "Ana Ayarlarda Seçilen Tema Bulunamadı Veya Dosyaları Eksik!";
// JavaScript Not Enabled
$locale['global_303'] = "Oh no! Where's the JavaScript?\nYour Web browser does not have JavaScript enabled or does not support JavaScript.
Please enable JavaScript on your Web browser to properly view this Web site, or upgrade to a Web browser that does support JavaScript.";
// User Management
$locale['global_400'] = "Askıya Alınmış (Geçici Banlanmış)";
$locale['global_401'] = "Banlanmış";
$locale['global_402'] = "İnaktif Edilmiş";
$locale['global_403'] = "Hesap Durdurulmuş.";
$locale['global_404'] = "Hesap Anonim Hale Dönüştürülmüş";
$locale['global_405'] = "Ananim Üye";
$locale['global_406'] = "Bu Hesap Şu Sebepten Dolayı Banlanmıştır::";
$locale['global_407'] = "Bu Hesap Şu Tarihe Kadar Askıya Alınmıştır: ";
$locale['global_408'] = ", Sebebi:";
$locale['global_409'] = "Bu Hesap Güvenlik Gerekçesi İle Banlanmıştır.";
$locale['global_410'] = "Bunun Sebebi: ";
$locale['global_411'] = "Bu Hesap İptal Edilmiştir.";
$locale['global_412'] = "Bu Hesap Muhtemelen İnaktiflikten Yüzünden Anonim Hale Dönüştürülmüştür.";
// Flood control
$locale['global_440'] = "Flood Kontrol Sistemi Tarafından Otomatik Banlama";
$locale['global_441'] = "[SITENAME] Üzerindeki Üyeliğiniz Banlandı";
$locale['global_442'] = "Merhaba [USER_NAME],\n
Sitemiz Olan  [SITENAME] Adresinde Üyeliğiniz Arka Arkaya Pek Çok İçeriğin IP Adresiniz Olan [USER_IP], Hızlıca Girildiğini Fark Etti ve Üyeliğiniz Banladı. Bu Korumanın Sebebi Sitemize Botların Spam Mesaj Göndermelerini Engellemektir.\n
Eğer Güvenlik Sistemindeki Olası Bir Hatanın Sizi Yanlışlıkla Engellediğini Düşünüyorsanız Lütfen [SITE_EMAIL] E-Posta Adresi Aracılığı İle Site Yöneticileri İle İrtibata Geçin.\n\n
Saygılarımızla,\n[SITEUSERNAME]";
// Authenticate Class
$locale['global_450'] = "Üyelik Askınız Sona Erdi (Geçici Ban Süreniz Bitti)";
$locale['global_451'] = "Sitemiz [SITENAME] Üzerindeki Geçici Engellemeniz Kaldırılmıştır.";
$locale['global_452'] = "Merhaba USER_NAME,\n
[SITEURL] Üzerindeki Üyelik Askınız Sona Ermiş, Geçici Banınız Kaldırılmıştır. Sitemize Giriş Bilgileriniz Aşağıdadır:\n
Kullanıcı Adı: USER_NAME\nParola: Güvenlik Sebebi İle Gizlenmiştir\n
Eğer Parolanızı Unuttuysanız Şu Linke Tıklayarak Sıfırlayabilirsiniz: LOST_PASSWORD\n\n
Saygılarımızla,\n[SITEUSERNAME]";
$locale['global_453'] = "Merhaba USER_NAME,\n [SITEURL] Üzerindeki Üyelik Askınız Sona Ermiştir.\n\n
Saygılarımızla,\n[SITEUSERNAME]";
$locale['global_454'] = "Sitemiz [SITENAME] Üzerideki Hesabınız Yeniden Aktifleştirlmiştir.";
$locale['global_455'] = "Merhaba USER_NAME,\n
[SITEURL] Adresi Üzerinden Sitemize Yaptığınız Son Giriş Üzerine Hesabınız Yeniden Aktif Konuma Getirilmiş, İnaktif İbaresi Kaldırılmıştır.\n\n
Saygılarımızla,\n[SITEUSERNAME]";
$locale['global_456'] = "[SITENAME] Yeni Şifre Bildirimi";
$locale['global_457'] = "Merhaba USER_NAME,
\n\nHesabınız İçin [SITENAME] Adresinde Yeni Bir Şifre Belirlendi. Lütfen Oturum Açma Ayrıntılarına Bakınız:\n\n
Kullanıcı Adı: USER_NAME\nParola: [PASSWORD]\n\nRegards,\n[SITEUSERNAME]";
$locale['global_458'] = "USER_NAME İçin Yeni Bir Parola Belirlendi.";
$locale['global_459'] = "USER_NAME İçin Yeni Bir Parola Belirlendi, ve E-Posta Gönderilmedi. Lütfen Kullanıcıya Yeni Bilgileri İletmeyi Unutmayın.";

// Function parsebytesize()
$locale['global_460'] = "Boş";
$locale['global_461'] = "Byte";
$locale['global_462'] = "KB";
$locale['global_463'] = "MB";
$locale['global_464'] = "GB";
$locale['global_465'] = "TB";
//Safe Redirect
$locale['global_500'] = "%s Sayfasına Yönlendiriliyorsunuz, Lütfen Bekleyin. Eğer Yönlenme Gerçekleşmezse Buraya Tıklayın..";
// Captcha Locales
$locale['global_600'] = "Doğrulama Kodu";
$locale['recaptcha'] = "tr";
// Site links
$locale['global_700'] = "Daha Fazla Göster";
//Miscellaneous
$locale['global_900'] = "Sekizlik (HEX) Veri Onluk (DEC) Veriye Dönüştürülemedi";
$locale['global_901'] = "Medya Ekle";
//Language Selection
$locale['global_ML100'] = "Dil:";
$locale['global_ML101'] = "- Dil Seçin -";
$locale['global_ML102'] = "Site Dili";
// Flood Control
$locale['flood'] = "Flood Sayılabilecek Kadar Çok Seri Paylaşım Yapıyorsunuz. %s Belirtilen Süre Kadar Mesaj Göndermeniz Engellendi..";
$locale['no_image'] = "İmaj Yok";
$locale['send_message'] = "Mesaj Gönder";
$locale['go_profile'] = "Profil %s Sayfasına Git";
// Global one word locales
$locale['hello'] = "Merhaba!";
$locale['goodbye'] = "GüleGüle!";
$locale['welcome'] = "Tekrar Hoş Geldiniz";
$locale['home'] = "Ana Sayfa";
// Status
$locale['error'] = "Hata!";
$locale['success'] = "Başarılı!";
$locale['enable'] = "Açık";
$locale['disable'] = "Kapalı";
$locale['can'] = "can";
$locale['cannot'] = "cannot";
$locale['no'] = "Hayır";
$locale['yes'] = "Evet";
$locale['off'] = "Kapat";
$locale['on'] = "Aç";
$locale['or'] = "Veya";
$locale['by'] = "Tarafından";
$locale['in'] = "İçinde";
$locale['of'] = "Arasında";
$locale['and'] = "ve";
$locale['na'] = "Bilgi Bulunmamaktadır";
$locale['joined'] = "Katılım Tarihi: ";
// Navigation
$locale['next'] = "Önceki";
$locale['previous'] = "Sonraki";
$locale['back'] = "Geri";
$locale['forward'] = "İleri";
$locale['go'] = "Git";
$locale['cancel'] = "İptal";
$locale['clear'] = "Temizle";
$locale['move'] = "Taşı";
$locale['move_up'] = "Üste Taşı";
$locale['move_down'] = "Aşağı Taşı";
$locale['load_more'] = "Daha Fazla Öğe Yükle";
$locale['load_end'] = "Başlangıçtan İtibaren Yükle";
// Actions
$locale['add'] = "Ekle";
$locale['save'] = "Kaydet";
$locale['save_changes'] = "Değişikliği Kaydet";
$locale['save_and_close'] = "Kaydet ve Kapat";
$locale['confirm'] = "Onayla";
$locale['update'] = "Güncelle";
$locale['updated'] = "Güncellendi";
$locale['remove'] = "Kaldır";
$locale['delete'] = "Sil";
$locale['search'] = "Ara";
$locale['help'] = "Yardım";
$locale['register'] = "Kayıt";
$locale['ban'] = "Engelle";
$locale['reactivate'] = "Yeniden Etkinleştir";
$locale['user'] = "Kullanıcı";
$locale['promote'] = "Destek";
$locale['show'] = "Göster";
$locale['actions'] = "Eylem";
$locale['language'] = "Dil";

// Persons & Identifiers
$locale['you'] = "Sen";
$locale['me'] = "Ben";
$locale['they'] = "Onlar";
$locale['we'] = "Biz";
$locale['us'] = "Bize";
$locale['he'] = "O";
$locale['she'] = "O";
$locale['it'] = "O";

//Tables
$locale['status'] = "Durum";
$locale['order'] = "Gönderi";
$locale['sort'] = "Sırala";
$locale['id'] = "ID";
$locale['title'] = "Başlık";
$locale['rights'] = "Haklar";
$locale['info'] = "Bilgi";
$locale['image'] = "Resim";
// Forms
$locale['choose'] = "Lütfen Birini Seçin...";
$locale['no_opts'] = "Seçim Yok";
$locale['root'] = "Temel Olarak";
$locale['choose-user'] = "Lütfen Bir Kullanıcı Seçin...";
$locale['choose-location'] = "Lütfen Konum Seçin";
$locale['parent'] = "Yeni Temel Oluştur..";
$locale['order'] = "Ürün Sırala";
$locale['status'] = "Durum";
$locale['note'] = "Bu Ögeyi Not Alın";
$locale['publish'] = "Yayınlandı";
$locale['unpublish'] = "Yayınlanmadı";
$locale['sticky'] = "Sticky";
$locale['unsticky'] = "Unsticky";
$locale['draft'] = "Taslak";
$locale['settings'] = "Ayarlar";
$locale['posted'] = "Gönderildi";
$locale['profile'] = "Profil";
$locale['edit'] = "Düzenle";
$locale['qedit'] = "Hızlı Düzenle";
$locale['view'] = "Gösterim";
$locale['login'] = "Giriş";
$locale['logout'] = "Çıkış";
$locale['admin-logout'] = "Yönetici Çıkış";
$locale['message'] = "Özel Mesajlar";
$locale['logged'] = " Olarak Giriş Yap";
$locale['version'] = "Versiyon ";
$locale['browse'] = "Gözat ...";
$locale['close'] = "Kapat";
$locale['nopreview'] = "Önizlenecek Bir Şey Yok.";
$locale['mark_as'] = "İşaretle";
$locale['preview'] = "Önizleme";
$locale['custom'] = "Özel";
// Alignment
$locale['left'] = "Sol";
$locale['center'] = "Merkez";
$locale['right'] = "Sağ";
// Comments and ratings
$locale['comments'] = "Yorumlar";
$locale['ratings'] = "Oylar";
$locale['comments_ratings'] = "Yorumlar ve Oylar";
$locale['user_account'] = "Kullanıcı Hesabı";
$locale['about'] = "Hakkında";
// User status
$locale['online'] = "Çevrimiçi";
$locale['offline'] = "Çevrimdışı";
// Words for formatting to single and plural forms. Count of forms is language-dependent
$locale['fmt_submission'] = "Öneri|Öneriler";
$locale['fmt_article'] = "Makale|Makaleler";
$locale['fmt_blog'] = "Blog|Bloglar";
$locale['fmt_comment'] = "Yorum|Yorumlar";
$locale['fmt_vote'] = "Oy|Oylar";
$locale['fmt_rating'] = "Oylama|Oylamalar";
$locale['fmt_day'] = "Gün|Günler";
$locale['fmt_download'] = "İndirme|İndirmeler";
$locale['fmt_follower'] = "Takipçi|Takipçiler";
$locale['fmt_forum'] = "Forum|Forumlar";
$locale['fmt_guest'] = "Misafir|Misafirler";
$locale['fmt_hour'] = "Saat|Saatler";
$locale['fmt_item'] = "Ürün|Ürünler";
$locale['fmt_member'] = "Üye|Üyeler";
$locale['fmt_message'] = "Mesaj|Mesajlar";
$locale['fmt_minute'] = "Dakika|Dakikalar";
$locale['fmt_month'] = "Ay|Aylar";
$locale['fmt_news'] = "Haber|Haberler";
$locale['fmt_photo'] = "Resim|Resimler";
$locale['fmt_post'] = "Mesaj|Mesajlar";
$locale['fmt_question'] = "Soru|Sorular";
$locale['fmt_read'] = "Okuma|Okuma";
$locale['fmt_second'] = "Saniye|Saniyeler";
$locale['fmt_shouts'] = "Ses|Sesler";
$locale['fmt_thread'] = "Konu|Konular";
$locale['fmt_user'] = "Kullanıcı|Kullanıcılar";
$locale['fmt_views'] = "Gösterim|Gösterimler";
$locale['fmt_weblink'] = "Site Linki|Site Linkleri";
$locale['fmt_week'] = "Hafta|Haftalar";
$locale['fmt_year'] = "Yıl|Yıllar";
// include Defender locales
include __DIR__."/defender.php";