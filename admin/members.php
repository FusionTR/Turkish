<?php
/*-------------------------------------------------------+
| PHP-Fusion İçerik Yönetim Sistemi
| PHP-Fusion v9 Türkçe Dil Dosyası
| https://www.php-fusion.co.uk/
+--------------------------------------------------------+
| Filename: members.php
| Author: Ali SAKA
| Web: http://www.fusiontr.com  
+--------------------------------------------------------*/
$locale['ME_400'] = 'Kullanıcı Yönetimi';
$locale['ME_401'] = 'Kullanıcı Ara ...';
$locale['ME_402'] = 'Ekran Filtreleri';
$locale['ME_403'] = 'Yeni Kullanıcı Ekle';
$locale['ME_404'] = 'Filtre Uygula';
$locale['ME_405'] = 'Arama Kriterleri altında herhangi bir kullanıcı bulunamadı';
//
$locale['ME_407'] = 'Displaying %s - %d of %d records found';
$locale['ME_408'] = 'Temel Bilgiler';
$locale['ME_409'] = 'Detaylı Bilgi';
$locale['ME_410'] = 'Kullanıcı';
$locale['ME_411'] = 'Kullanıcı Seviyesi';
$locale['ME_412'] = 'E-Posta Adresi';
$locale['ME_413'] = ' Kullanıcı Hesabı';
$locale['ME_414'] = 'Tümünü Seç';
$locale['ME_415'] = 'Gizli';
$locale['ME_416'] = 'Gösterilen';

// Core Fields Filter
$locale['ME_420'] = 'Gizli E-Posta?';
$locale['ME_421'] = 'Kayıt Tarihi';
$locale['ME_422'] = 'Son Giriş';
$locale['ME_423'] = 'IP Adresi';
$locale['ME_424'] = 'IP Tipi';
$locale['ME_425'] = 'Kullanıcı Grubu';
$locale['ME_426'] = 'Zaman dilimi';

// Action Form
$locale['ME_430'] = 'Hata: Seçilen kullanıcılara yönelik işlem tamamlanamadı';
$locale['ME_431'] = 'The following users will be %s:';
$locale['ME_432'] = '%s has been %s';
$locale['ME_433'] = 'Lütfen eylem için bir sebep belirtin';
$locale['ME_434'] = 'Sebep';
$locale['ME_435'] = 'Süre';
$locale['ME_436'] = 'Gün';
$locale['ME_437'] = 'Kullanıcı Güncelleme';

$locale['ME_450'] = 'Yeni Kullanıcı Ekle';
$locale['ME_451'] = '%s\'nun Profili';
$locale['ME_452'] = '%s\'nun Profilini Düzenle';
$locale['ME_453'] = '%s Kullanıcıyı Sil';
$locale['ME_454'] = "Uyarı!";
$locale['ME_455'] = "%s kullanıcısını silmek üzeresiniz! \n\r\n\rDevam ederseniz kullanıcı tarafından bu sitede yayınlanan içerik silinecek.\n\r
Bu örneğin bir spamcı olmadığı sürece. Bu kullanıcıyı Yasaklama, Askıya Alma, İptal veya Anomize etmenizi öneririz.\n\r
Bu kullanıcıyı silmek istediğinizden emin misiniz?\n\r";
$locale['ME_456'] = 'Kullanıcı Sil';

$locale['ME_460'] = 'Devre dışı bırakılacak kullanıcı yok';
$locale['ME_461'] = '%s has been deactivated';
$locale['ME_462'] = 'Deactivate Inactive Members';
$locale['ME_463'] = 'You have more then 50 inactive users and will have to run the deactivation process (%d) times.';
$locale['ME_464'] = '%d user(s) have not logged in for %d day(s) and have been marked as inactive. By deactivating these users they will have (%d) day(s) before they are %s.';
$locale['ME_465'] = 'Please note that some users may have submitted content to your site such as forum posts, comments, photos etc. These will be deleted when deactivated users are beeing deleted.';
$locale['ME_466'] = 'It is strongly recommended to change deactivation action to anonymize instead of delete to prevent data loss!';
$locale['ME_467'] = "Set deactivation system to anonymize.";
$locale['ME_468'] = 'Automatic deactivation of inactive users.';

// Actions
$locale['ME_500'] = 'Banlan';
$locale['ME_501'] = 'Eski durumuna getir';
$locale['ME_502'] = 'Devre dışı bırak';
$locale['ME_503'] = 'Askıya al';
$locale['ME_504'] = 'Güvenlik Banı';
$locale['ME_505'] = 'İptal Et';
$locale['ME_506'] = 'Anonimleştir';

// a_message keys
$locale['ME_550'] = 'Banlandı';
$locale['ME_551'] = 'reinstated';
$locale['ME_552'] = 'deactivated';
$locale['ME_553'] = 'askıya alındı';
$locale['ME_554'] = 'security banned';
$locale['ME_555'] = 'cancelled';
$locale['ME_556'] = 'anonymized';
$locale['ME_557'] = 'permanently deleted';

$locale['ME_560'] = "Display Results";
$locale['ME_561'] = "Display User With Status";

/*--------------------------------------------------------------------------
These are old locale. They are MOST LIKELY not being used by the new member center.
Please remove them or reindex the keys if you find any.
*--------------------------------------------------------------------------*/


// Edit Member Details
$locale['430'] = "Üye Düzenle";
// Add Member Errors
$locale['480'] = "Üye ekle";
$locale['481'] = "Üye hesabı oluşturuldu.";
$locale['482'] = "Üye hesabı oluşturulamadı.";

// Member Management Options
$locale['400'] = "Üye Yönetimi";
$locale['401'] = "Üye";
$locale['402'] = "Ekle";
$locale['403'] = "Üye Tipi";
$locale['404'] = "Seçenekler";
$locale['405'] = "Görüntüle";
$locale['406'] = "Düzenle";
$locale['407'] = "Aktif Et";
$locale['408'] = "Banı Kaldır";
$locale['409'] = "Banla";
$locale['410'] = "Sil";
$locale['411'] = "%S Bulunamadı";
$locale['412'] = ". Aranan İlk Harf: ";
$locale['413'] = ". Aranan Kullanıcı Adı: ";
$locale['414'] = "Hepsini Göster";
$locale['415'] = "Üye Ara:";
$locale['416'] = "Ara";
$locale['417'] = "İşlem Seçin";
$locale['418'] = "İptal Et";
$locale['419'] = "Eski Durumuna Getir";
// Ban/Unban/Delete Member
$locale['420'] = "Siteden Banlandı";
$locale['421'] = "Banı Kaldırıldı";
$locale['422'] = "Üye Silindi";
$locale['423'] = "Bu Üyeyi Silmek Istediğinizden Emin Misiniz?";
$locale['424'] = "Üye Aktif Edildi";
$locale['426'] = "Evet";
$locale['427'] = "Hayır";
// Suspension Log 
$locale['510s'] = "Suspension Log for ";
$locale['511s'] = "There are no recorded suspensions for this member in the suspension log.";
$locale['512s'] = "Previous suspensions of ";
$locale['513'] = "No."; // as in number
$locale['514'] = "Date";
$locale['515'] = "Reason";
$locale['516'] = "Suspending Administrator";
$locale['517'] = "System Action";
$locale['518'] = "Back to User Profile";
$locale['519'] = "Suspension Log for this User ";
$locale['520'] = "Lifted: ";
$locale['521'] = "IP: ";
$locale['522'] = "Not yet reinstated";
$locale['540'] = "Error";
$locale['541'] = "Error: You must state a reason for the Suspension!";
$locale['542'] = "Error: You must state a reason for the Security Ban!";
// User Management Admin
$locale['550'] = "Suspend User: ";
$locale['551'] = "Duration in days:";
$locale['552'] = "Reason:";
$locale['553'] = "Suspend";
$locale['554'] = "There are no recorded suspensions for this member in the suspension log.";
$locale['555'] = "If you decide that this user should be banned click on 'Ban'";
$locale['556'] = "Lift Suspension of User: ";
$locale['557'] = "Lift Suspension";
$locale['558'] = "Lift Ban of User: ";
$locale['559'] = "Lift Ban ";
$locale['560'] = "Lift Security Ban of User: ";
$locale['561'] = "Lift Security Ban";
$locale['562'] = "Ban User: ";
$locale['563'] = "Security Ban User: ";
$locale['585a'] = "Please specify a reason for why you are banning or unbanning ";
$locale['566'] = "Ban lifted";
$locale['568'] = "Security Ban imposed";
$locale['569'] = "Security Ban lifted";
$locale['572'] = "Member suspended";
$locale['573'] = "Suspension lifted";
$locale['574'] = "Member deactivated";
$locale['575'] = "Member reactivated";
$locale['576'] = "Account cancelled";
$locale['577'] = "Account cancellation undone";
$locale['578'] = "Account cancelled and anonymized";
$locale['579'] = "Account anonymization undone";
$locale['582'] = "Reactivate";
$locale['583'] = "Re-instate";
$locale['584'] = "Select new status";
$locale['585'] = "This Member was originally banned for security reasons! Are you certain you want to unban this member now?";
$locale['590'] = "Suspend";
$locale['591'] = "Unsuspend";
$locale['592'] = "suspending";
$locale['593'] = "unsuspending";
$locale['594'] = "Please specify a reason for why you are ";
$locale['595'] = " the user ";
$locale['600'] = "Security ban";
$locale['601'] = "security banning";
$locale['602'] = "Unban";
$locale['603'] = "unbanning";
$locale['604'] = "Reason:";
// Deactivation System
$locale['612'] = "user";
$locale['613'] = "users";
$locale['614'] = "Deactivate";
