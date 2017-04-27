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
$locale['field_error_blank'] = "%s cannot be left empty.";
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
$locale['token_error_1'] = "Session not started.";
$locale['token_error_2'] = "Token was not posted.";
$locale['token_error_3'] = "Invalid token. ";
$locale['token_error_4'] = "Invalid UserID within token.";
$locale['token_error_5'] = "Invalid token datestamp.";
$locale['token_error_6'] = "Post was made too fast.";
$locale['token_error_7'] = "Invalid token hash.";
$locale['token_error_8'] = "Invalid token format.";
$locale['token_error_9'] = "Cannot find any token for this form.";
$locale['token_error_10'] = "Cannot find any token for storage: ";

$locale['df_300'] = "Click to add files";
$locale['df_301'] = "Click to add photo";
$locale['df_302'] = "Click to add video";
$locale['df_303'] = "Click to add audio";
$locale['df_304'] = "Selected file Remove";

$locale['df_400'] = "%s contains invalid character.";
$locale['df_401'] = "%s is not a valid email address.";
$locale['df_402'] = "%s is not a valid password.";
$locale['df_403'] = "%s is not a valid number.";
$locale['df_404'] = "%s is not a valid date.";
$locale['df_405'] = "%s is not a valid URL.";
$locale['df_415'] = "Invalid filename.";
$locale['df_416'] = "Upload file too large. File must be less than %s.";
$locale['df_417'] = "Upload file is not a valid file type. Image must be one of the following file types - %s";
$locale['df_418'] = "Upload file is fine, but the extension is invalid. Please rename your file extension and try again.";
$locale['df_419'] = "Image failed verification check. Please re-do your image.";
$locale['df_420'] = "Folder does not exist. Please create the folder via FTP and try again.";
$locale['df_421'] = "Image must be no bigger than %uw x %uh pixels.";
$locale['df_422'] = "Unknown error (Query)";
$locale['df_423'] = "Image was not uploaded properly. Please try again";
$locale['df_424'] = "Current upload files is more than the maximum limit. Please try again and attach less files.";

// ReCaptcha2
$locale['grecaptcha'] = "Google Recaptcha";
$locale['grecaptcha_desc'] = "Google Recaptcha Field Module";
$locale['grecaptcha_placeholder_1'] = "SITE KEY from Google";
$locale['grecaptcha_placeholder_2'] = "SECRET-KEY from Google";
$locale['no_keys'] = "It looks like you don't have any keys yet. Register and obtain your [RECAPTCHA_LINK]public key here[/RECAPTCHA_LINK]";
// here
//$locale['review_keys'] = "<a href='https://www.google.com/recaptcha/admin' target='_BLANK'><button class='button'>Review your keys at Google reCAPTCHA</button></a>";
$locale['grecaptcha_0100'] = "Public Key";
$locale['grecaptcha_0101'] = "Private Key";
$locale['grecaptcha_0102'] = "Theme";
$locale['grecaptcha_0102a'] = "Light";
$locale['grecaptcha_0102b'] = "Dark";
$locale['grecaptcha_0103'] = "Validation Type";
$locale['grecaptcha_0103a'] = "Text";
$locale['grecaptcha_0103b'] = "Audio";
$locale['grecaptcha_warn'] = "Please enter your public and private reCAPTCHA key";