<?php
// Error messages
$locale['500'] = "Bir hata oluştu";
$locale['501'] = "Tıklamış olduğunuz yeniden aktifleştirme linki geçerli değildir.<br /><br />
Lütfen <a href='mailto:".fusion_get_settings('siteemail')."'>".fusion_get_settings('siteemail')."</a> adresi üzerinden site yöneticileri ile görüşerek manuel bir yeniden aktifleştirme linki talep edin.";
$locale['502'] = "Tıklamış olduğunuz yeniden aktifleştirme linki geçerli değildir!<br /><br />
Eğer manuel bir yeniden aktifleştirme linki istiyorsanız lütfen <a href='mailto:".fusion_get_settings('siteemail')."'>".fusion_get_settings('siteemail')."</a> adresi üzerinden site yöneticileri ile görüşün.";
$locale['503'] = "Tıklamış olduğunuz yeniden aktifleştirme linki hesabınızı aktifleştiremedi.<br />
Hesabınız zaten aktifleştirilmiş olabilir, eğer öyleyse <a href='".fusion_get_settings('siteurl')."login.php'> siteye giriş yapabilirsiniz.</a>.<br /><br />
Eğer halen giriş yapamıyorsanız lütfen <a href='mailto:".fusion_get_settings('siteemail')."'>".fusion_get_settings('siteemail')."</a> adresi üzerinden site yöneticileri ile görüşerek manuel bir yeniden aktifleştirme linki talep edin.";
// Send confirmation mail
$locale['504'] = "Hesabınız Aktifleştirildi ".fusion_get_settings('sitename');
$locale['505'] = "Merhaba [USER_NAME],\n
".fusion_get_settings('sitename')." üzerindeki hesabınız yeniden aktifleştirildi. Sizi sitemizde artık daha sık görmek isteriz.\n\n
Saygılarımızla,\n\n
".fusion_get_settings('siteusername');
$locale['506'] = "Üye tarafından yeniden aktifleştirilmiş.";
?>
