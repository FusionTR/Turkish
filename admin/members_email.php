<?php
$locale['email_create_subject'] = "Sitemizde üyeliğiniz oluşturuldu ";
$locale['email_create_message'] = "Merhaba [USER_NAME],\n
Sitemiz olan ".fusion_get_settings('sitename')." üzerindeki hesabınız oluşturuldu.\n
Sitemize aşağıdaki kullanıcı bilgileri ile giriş yapabilirsiniz:\n
kullanıcı adı: [USER_NAME]\n
parola: [PASSWORD]\n\n
Saygılarımızla,\n
".fusion_get_settings('siteusername');
$locale['email_activate_subject'] = "Sitemizde üyeliğiniz aktif edildi ";
$locale['email_activate_message'] = "Merhaba [USER_NAME],\n
".fusion_get_settings('sitename')." adlı sitemizde üyeliğiniz aktif edildi.\n
Mevcut kullanıcı adınız ve şifrenizle sitemize yeniden giriş yapabilirsiniz.\n\n
Saygılarımızla,\n
".fusion_get_settings('siteusername');
$locale['email_deactivate_subject'] = "Sitemizde hesabınızı yeniden aktifleştirmeniz gerekmekte ".fusion_get_settings('sitename');
$locale['email_deactivate_message'] = "Merhaba [USER_NAME],\n
Sitemiz olan ".fusion_get_settings('sitename')." adresine ".fusion_get_settings('deactivation_period')." gündür girmediğinizi fark ettik.
Hesabınızı yeniden aktifleştirmek için aşağıdaki linke tıklayabilirsiniz:\n
".fusion_get_settings('siteurl')."reactivate.php?user_id=[USER_ID]&code=[CODE]\n\n
Saygılarımızla,\n
".fusion_get_settings('siteusername');
$locale['email_ban_subject'] = "Üyesi olduğunuz ".fusion_get_settings('sitename')." Sitemizden banlandınız";
$locale['email_ban_message'] = "Merhaba [USER_NAME],\n
Sitemiz olan ".fusion_get_settings('sitename')." üzerindeki hesabınız ".$userdata['user_name']." tarafından aşağıdaki sebepten dolayı banlandı:\n
[REASON].\n
Eğer bu konu ile ilgili detaylı bilgiye ihtiyaç duyuyorsanız lütfen ".fusion_get_settings('siteemail')." adresi üzerinden site yöneticileri ile irtibata geçin.\n
".fusion_get_settings('siteusername');
$locale['email_secban_subject'] = "Üyesi olduğunuz ".fusion_get_settings('sitename')." sitemizden banlandınız";
$locale['email_secban_message'] = "Merhaba [USER_NAME],\n
Sitemiz olan ".fusion_get_settings('sitename')." üzerindeki hesabınız ".$userdata['user_name']." tarafından sizin ya da sizin hesabınız üzerinden yapılan sitemiz için güvenlik riski teşkil edecek bir davranıştan dolayı banlanmıştır.\n
Eğer bu konu ile ilgili detaylı bilgiye ihtiyaç duyuyorsanız lütfen ".fusion_get_settings('siteemail')." adresi üzerinden site yöneticileri ile irtibata geçin.\n
".fusion_get_settings('siteusername');
$locale['email_suspend_subject'] = "Üyesi olduğunuz ".fusion_get_settings('sitename')." üzerindeki hesabınız askıya alındı";
$locale['email_suspend_message'] = "Merhaba [USER_NAME],\n
Sitemiz olan ".fusion_get_settings('sitename')." üzerindeki hesabınız ".$userdata['user_name']." tarafından [DATE] tarihine kadar (site zamanı) aşağıdaki gerekçe ile askıya alınmıştır:\n
[REASON].\n
Eğer bu konu ile ilgili detaylı bilgiye ihtiyaç duyuyorsanız lütfen ".fusion_get_settings('siteemail')." adresi üzerinden site yöneticileri ile irtibata geçin.\n
".fusion_get_settings('siteusername');
?>