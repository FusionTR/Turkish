<?php
/*-------------------------------------------------------+
| PHP-Fusion İçerik Yönetim Sistemi
| PHP-Fusion v9 Türkçe Dil Dosyası
| https://www.php-fusion.co.uk/
+--------------------------------------------------------+
| Filename: members_email.php
| Author: Ali SAKA
| Web: http://www.fusiontr.com  
+--------------------------------------------------------*/
$locale['email_create_subject'] = "[SITENAME] üyeliğiniz oluşturuldu ";
$locale['email_create_message'] = "Merhaba [USER_NAME],\n
Sitemiz olan [SITENAME] üzerindeki hesabınız oluşturuldu.\nSitemize aşağıdaki kullanıcı bilgileri ile giriş yapabilirsiniz:\n
kullanıcı adı: [USER_NAME]\n
parola: [PASSWORD]\n\nSaygılarımızla,\n[SITEUSERNAME]";
$locale['email_activate_subject'] = "Sitemizde üyeliğiniz aktif edildi ";
$locale['email_activate_message'] = "Merhaba [USER_NAME],\n[SITENAME] adlı sitemizde üyeliğiniz aktif edildi.\n
Mevcut kullanıcı adınız ve şifrenizle sitemize yeniden giriş yapabilirsiniz.\n\nSaygılarımızla,\n[SITEUSERNAME]";
$locale['email_deactivate_subject'] = "Sitemizde hesabınızı yeniden aktifleştirmeniz gerekmekte [SITENAME]";
$locale['email_deactivate_message'] = "Merhaba [USER_NAME],\nSitemiz olan [SITENAME] adresine [DEACTIVATION_PERIOD] gündür girmediğinizi fark ettik.
Hesabınızı yeniden aktifleştirmek için aşağıdaki linke tıklayabilirsiniz:\n [REACTIVATION_LINK]\n\nSaygılarımızla,\n[SITEUSERNAME]";
$locale['email_ban_subject'] = "Üyesi olduğunuz [SITENAME] Sitemizden banlandınız";
$locale['email_ban_message'] = "Merhaba [USER_NAME],\nSitemiz olan [SITENAME] üzerindeki hesabınız [ADMIN_USERNAME] tarafından aşağıdaki sebepten dolayı banlandı:\n
[REASON].\nEğer bu konu ile ilgili detaylı bilgiye ihtiyaç duyuyorsanız lütfen [SITENAME] adresi üzerinden site yöneticileri ile irtibata geçin.\n[SITEUSERNAME]";
$locale['email_secban_subject'] = "Üyesi olduğunuz [SITENAME] sitemizden banlandınız";
$locale['email_secban_message'] = "Merhaba [USER_NAME],\nSitemiz olan [SITENAME] üzerindeki hesabınız [ADMIN_USERNAME] tarafından sizin ya da sizin hesabınız üzerinden yapılan sitemiz için güvenlik riski teşkil edecek bir davranıştan dolayı banlanmıştır.\n
Eğer bu konu ile ilgili detaylı bilgiye ihtiyaç duyuyorsanız lütfen [SITENAME] adresi üzerinden site yöneticileri ile irtibata geçin.\n[SITEUSERNAME]";
$locale['email_suspend_subject'] = "Üyesi olduğunuz [SITENAME] üzerindeki hesabınız askıya alındı";
$locale['email_suspend_message'] = "Merhaba [USER_NAME],\n
Sitemiz olan [SITENAME] üzerindeki hesabınız [ADMIN_USERNAME] tarafından [DATE] tarihine kadar (site zamanı) aşağıdaki gerekçe ile askıya alınmıştır:\n
[REASON].\nEğer bu konu ile ilgili detaylı bilgiye ihtiyaç duyuyorsanız lütfen [SITENAME] adresi üzerinden site yöneticileri ile irtibata geçin.\n[SITEUSERNAME]";