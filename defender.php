<?php
/*-------------------------------------------------------+
| PHP-Fusion İçerik Yönetim Sistemi
| PHP-Fusion v9 Türkçe Dil Dosyası
| https://www.php-fusion.co.uk/
+--------------------------------------------------------+
| Filename: defender.php
| Author: Ali SAKA
| Web: http://www.fusiontr.com
+--------------------------------------------------------*/
$locale['validate'] = "Lütfen Alanı Kontrol Edin Ve Tekrar Doğrulayın.";
$locale['error_request'] = "İsteğiniz İşlenirken Bir Hata Oluştu."; // to be moved
$locale['regex_error'] = "Lütfen %s Alanını Kontrol Edin Ve Tekrar Doğrulayın"; // to be moved
// Text fields errors
$locale['error_input_username'] = "Lütfen Geçerli Bir Kullanıcı Adı Giriniz";
$locale['error_input_default'] = "Lütfen Bu Alanı Doldurun";
$locale['error_input_password'] = "Lütfen Geçerli Bir Şifre Giriniz";
$locale['error_input_email'] = "Lütfen Geçerli Bir E-Posta Adresi Giriniz";
$locale['error_input_number'] = "Lütfen Geçerli Bir Numara Girinin";
$locale['error_input_url'] = "Lütfen Geçerli Bir URL Giriniz";
$locale['error_input_regex'] = "Lütfen Geçerli Bir Desen Giriniz";
$locale['error_input_safemode'] = "Lütfen Bu Alanı Doğru Bir Şekilde Doldurunuz";
$locale['error_input_check'] = "Please fill out a correct field value";
$locale['df_error_text'] = "%s has error and requires your attention.";
$locale['error_invalid_theme'] = "Lütfen Geçerli Bir Tema Seçin"; // to be moved
$locale['error_input_checkbox'] = "Lütfen Onay Kutusunu İşaretleyin"; // to be moved
$locale['error_input_file'] = "Lütfen Geçerli Bir Dosya Seçiniz";
$locale['error_secure_file'] = "Kötü Amaçlı Eylem Olasılığı Nedeniyle Yüklenen Dosya Reddedildi.";
// Admin Login
$locale['cookie_title'] = "Oturum Zaman Aşımına Uğradı";
$locale['cookie_description'] = "Geçerli Kimlik veya Oturum Muhtemelen Zaman Aşımına Uğradı. Tekrar Giriş Yapınız.";
$locale['cookie_expired'] = "Site Yöneticisi Çerez Süresi Doldu. Tekrar Giriş Yapınınız.";
$locale['password_invalid'] = "Yanlış veya Geçersiz Şifre";
$locale['password_invalid_description'] = "Parola Giriş Başarısız Oldu. Lütfen Tekrar Deneyin.";
$locale['cookie_error'] = "Çerez Hatası";
$locale['cookie_error_description'] = "Yönetim Bölümüne Girebilmek İçin Tarayıcı Çerezini Etkinleştirmeniz Gerekir.";
$locale['validate_title'] = "Could you check something!";
// Address errors
$locale['street_error'] = "Street Address requires attention.";
$locale['country_error'] = "Country requires attention.";
$locale['state_error'] = "State requires attention.";
$locale['city_error'] = "City requires attention.";
$locale['postcode_error'] = "Postcode requires attention.";
$locale['field_error_blank'] = "%s Boş bırakılamaz.";
// Name errors
$locale['firstname_error'] = "Firstname requires attention.";
$locale['lastname_error'] = "Lastname requires attention.";
$locale['name_error'] = "Firstname and Lastname cannot be same.";
// Document errors
$locale['doc_type_error'] = "Document type requires attention.";
$locale['doc_series_error'] = "Document series requires attention.";
$locale['doc_number_error'] = "Document number requires attention.";
$locale['doc_authority_error'] = "Document authority requires attention.";
$locale['date_issue_error'] = "Document date of issue requires attention.";
// Tokens
$locale['token_error_title'] = "Token Hatası";
$locale['token_error'] = "Üzgünüz, Bir Hata Oluştu. Geri Dönün, Sayfayı Yenileyin ve Tekrar Deneyin.";
$locale['token_error_1'] = "Oturum Başlatılmadı.";
$locale['token_error_2'] = "Token was not posted.";
$locale['token_error_3'] = "Invalid token. ";
$locale['token_error_4'] = "Invalid UserID within token.";
$locale['token_error_5'] = "Invalid token datestamp.";
$locale['token_error_6'] = "Post was made too fast.";
$locale['token_error_7'] = "Invalid token hash.";
$locale['token_error_8'] = "Invalid token format.";
$locale['token_error_9'] = "Cannot find any token for this form.";
$locale['token_error_10'] = "Cannot find any token for storage: ";

$locale['df_300'] = "Dosya Eklemek İçin Tıklayın";
$locale['df_301'] = "Fotoğraf Eklemek İçin Tıklayın";
$locale['df_302'] = "Video Eklemek İçin Tıklayın";
$locale['df_303'] = "Ses Eklemek İçin Tıklayın";
$locale['df_304'] = "Seçili Dosyayı Kaldır";

$locale['df_400'] = "%s Geçersiz Karakter İçeriyor.";
$locale['df_401'] = "%s Geçerli Bir E-Posta Adresi Değil.";
$locale['df_402'] = "%s Geçerli Bir Parola Değil.";
$locale['df_403'] = "%s Geçerli Bir Sayı Değil.";
$locale['df_404'] = "%s Geçerli Bir Tarih Değil.";
$locale['df_405'] = "%s Geçerli Bir URL Değil.";
$locale['df_415'] = "Geçersiz Dosya Adı.";
$locale['df_416'] = "Yüklenen Dosya Çok Büyük. Dosya %s daha küçük olmalıdır.";
$locale['df_417'] = "Yüklenen dosya geçerli bir dosya türü değil. Resim aşağıdaki dosya türlerinden biri olmalıdır - %s";
$locale['df_418'] = "Yüklenen Dosya iyi ama uzantısı geçersiz. Lütfen dosya uzantısını yeniden adlandırın ve tekrar deneyin.";
$locale['df_419'] = "Resim doğrulama kontrolü başarısız. Lütfen resminizi tekrar yapın.";
$locale['df_420'] = "Klasör yok. Lütfen klasörü FTP ile oluşturup tekrar deneyin.";
$locale['df_421'] = "Resim %uw x %uh piksel değerinden büyük olmamalıdır.";
$locale['df_422'] = "Bilinmeyen hata (Sorgu)";
$locale['df_423'] = "Resim düzgün şekilde yüklenmedi. Lütfen tekrar deneyin";
$locale['df_424'] = "Geçerli yükleme dosyaları maksimum sınırın üzerindedir. Lütfen tekrar deneyin ve daha az dosya ekleyin.";

// ReCaptcha2
$locale['grecaptcha'] = "Google Recaptcha";
$locale['grecaptcha_desc'] = "Google Recaptcha Alan Modülü";
$locale['grecaptcha_placeholder_1'] = "Google'dan SITE KEY";
$locale['grecaptcha_placeholder_2'] = "Google'dan SECRET-KEY";
$locale['no_keys'] = "Henüz herhangi anahtarınız yok gibi görünüyor. Kayıt olun ve [RECAPTCHA_LINK]Ortak Anahtarınızı Buradan[/RECAPTCHA_LINK] edinin.";
// here
//$locale['review_keys'] = "<a href='https://www.google.com/recaptcha/admin' target='_BLANK'><button class='button'>Review your keys at Google reCAPTCHA</button></a>";
$locale['grecaptcha_0100'] = "Ortak Anahtar";
$locale['grecaptcha_0101'] = "Özel Anahtar";
$locale['grecaptcha_0102'] = "Tema";
$locale['grecaptcha_0102a'] = "Açık";
$locale['grecaptcha_0102b'] = "Koyu";
$locale['grecaptcha_0103'] = "Doğrulama Türü";
$locale['grecaptcha_0103a'] = "Metin";
$locale['grecaptcha_0103b'] = "Ses";
$locale['grecaptcha_warn'] = "Lütfen Ortak ve Özel reCAPTCHA Anahtarınızı Girin.";