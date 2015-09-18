<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
<<<<<<< HEAD
* Name:  Ion Auth Lang - Turkish (UTF-8)
*
* Author: Ben Edmunds
* 	  ben.edmunds@gmail.com
*         @benedmunds
* Translation:  Acipayamli Ozi
*
* Author: Hüseyin Kozan
* 		  posta@huseyinkozan.com.tr
*         @huseyinkozan
*             
* Location: http://github.com/huseyinkozan/CodeIgniter-Ion-Auth/
*
* Created:  05.01.2010
*
* Updated: 21.08.2014
*
* Description:  Turkish language file for Ion Auth messages and errors
*/

// Account Creation
$lang['account_creation_successful'] 	  	         = 'Üyelik Kaydınız Başarıyla Tamamlandı';
$lang['account_creation_unsuccessful'] 	 	 = 'Üyelik Kaydınız Yapılamadı';
$lang['account_creation_duplicate_email'] 	 = 'Eposta Adresi Geçersiz ya da Daha Önceden Alınmış';
$lang['account_creation_duplicate_username']	 = 'Kullanıcı Adı Geçersiz ya da Daha Önceden Alınmış';

// TODO Please Translate
$lang['account_creation_missing_default_group'] = 'Default group is not set';
$lang['account_creation_invalid_default_group'] = 'Invalid default group name set';


// Password
$lang['password_change_successful'] 	 	 = 'Şifreniz Değiştirildi';
$lang['password_change_unsuccessful'] 	  	 = 'Şifreniz Değiştirile Başarısız';
$lang['forgot_password_successful'] 	 	 = 'Yeni Şifreniz Eposta Adresinize Gönderildi';
$lang['forgot_password_unsuccessful'] 	 	 = 'Şifreniz Değiştirileme Başarısız';

// Activation
$lang['activate_successful'] 		  	 = 'Hesap Başarıyla Etkinleştirildi';
$lang['activate_unsuccessful'] 		 	 = 'Hesap Etkinleştirme Başarısız';
$lang['deactivate_successful'] 		  	 = 'Hesap Devre Dışı Bırakıldı';
$lang['deactivate_unsuccessful'] 	  	 = 'Hesap Devre Dışı Bırakılama Başarısız';
$lang['activation_email_successful'] 		 = 'Etkinleştirme Epostası Gönderildi';
$lang['activation_email_unsuccessful']  	 = 'Etkinleştirme Epostası Gönderme Başarısız';

// Login / Logout
$lang['login_successful'] 		  	 = 'Giriş Başarılı';
$lang['login_unsuccessful'] 		 	 = 'Giriş Başarısız';
$lang['login_unsuccessful_not_active'] ="Giriş Başarısız ,Hesabınız Etkin Değil";
$lang['login_timeout']                       = 'Temporarily Locked Out. Try again later.';
$lang['logout_successful'] 		 	 = 'Çıkış Başarılı';
  
// Account Changes
$lang['update_successful'] 		 	 = 'Üyelik Bilgileri Güncellendi';
$lang['update_unsuccessful'] 		 	 = 'Üyelik Bilgileri Güncelleme Başarısız';
$lang['delete_successful'] 		 	 = 'Kullanıcı Silindi';
$lang['delete_unsuccessful'] 			 = 'Kullanıcı Silme Başarısız';

// Groups
$lang['group_creation_successful']  = 'Group created Successfully';
$lang['group_already_exists']       = 'Group name already taken';
$lang['group_update_successful']    = 'Group details updated';
$lang['group_delete_successful']    = 'Group deleted';
$lang['group_delete_unsuccessful'] 	= 'Unable to delete group';
$lang['group_delete_notallowed']    = 'Can\'t delete the administrators\' group';
$lang['group_name_required'] 		= 'Group name is a required field';
// Activation Email
$lang['email_activation_subject']            = 'Üyelik Etkinleştirme';
$lang['email_activate_heading']    = 'Activate account for %s';
$lang['email_activate_subheading'] = 'Please click this link to %s.';
$lang['email_activate_link']       = 'Activate Your Account';
// Forgot Password Email
$lang['email_forgotten_password_subject']    = 'Şifremi Unuttum';
$lang['email_forgot_password_heading']    = 'Reset Password for %s';
$lang['email_forgot_password_subheading'] = 'Please click this link to %s.';
$lang['email_forgot_password_link']       = 'Reset Your Password';
// New Password Email
$lang['email_new_password_subject']          = 'Yeni Şifre';
$lang['email_new_password_heading']    = 'New Password for %s';
$lang['email_new_password_subheading'] = 'Your password has been reset to: %s';
=======
 * Name:  Ion Auth Lang - Turkish (UTF-8)
 *
 * Author: Ben Edmunds
 * 	       ben.edmunds@gmail.com
 *         @benedmunds
 *
 * Translation: Acipayamli Ozi
 *
 * Modifications:
 *           Hüseyin Kozan @huseyinkozan posta@huseyinkozan.com.tr
 *           Burak Özdemir @ozdemirburak http://burakozdemir.co.uk
 *
 * Created:  05.01.2010
 * Updated:  03.14.2015
 * Description:  Turkish language file for Ion Auth messages and errors
 *
 */

// Account Creation
$lang['account_creation_successful'] 	  	    = 'Üyelik kaydınız başarıyla tamamlandı';
$lang['account_creation_unsuccessful'] 	 	    = 'Üyelik kaydınız yapılamadı';
$lang['account_creation_duplicate_email'] 	    = 'E-posta adresi geçersiz ya da daha önceden alınmış';
$lang['account_creation_duplicate_identity']    = 'Kullanıcı adı geçersiz ya da daha önceden alınmış';
$lang['account_creation_missing_default_group'] = 'Herhangi bir varsayılan grup ayarlanmamış';
$lang['account_creation_invalid_default_group'] = 'Geçersiz bir varsayılan grup seçimi';

// Password
$lang['password_change_successful'] 	 	    = 'Şifreniz değiştirildi';
$lang['password_change_unsuccessful'] 	  	    = 'Şifre değiştirme isteği gerçekleştirilemedi';
$lang['forgot_password_successful'] 	 	    = 'Yeni şifreniz e-posta adresinize gönderildi';
$lang['forgot_password_unsuccessful'] 	 	    = 'Şifre yenileme isteği gerçekleştirilemedi';

// Activation
$lang['activate_successful'] 		  	        = 'Hesap başarıyla etkinleştirildi';
$lang['activate_unsuccessful'] 		 	        = 'Hesap etkinleştirme başarısız';
$lang['deactivate_successful'] 		  	        = 'Hesap devre dışı bırakıldı';
$lang['deactivate_unsuccessful'] 	  	        = 'Hesap devre dışı bırakma isteğiniz gerçekleştirilemedi';
$lang['activation_email_successful'] 	        = 'Hesap etkinleştirme e-postası gönderildi';
$lang['activation_email_unsuccessful']          = 'Hesap etkinleştirme e-postası gönderilemedi';

// Login / Logout
$lang['login_successful'] 		  	            = 'Giriş başarılı';
$lang['login_unsuccessful'] 		 	        = 'Giriş başarısız';
$lang['login_unsuccessful_not_active']          = 'Giriş başarısız, hesap aktif değil';
$lang['login_timeout']                          = 'Oturum zaman aşımı, daha sonra tekrar deneyiniz.';
$lang['logout_successful'] 		 	            = 'Çıkış başarılı';

// Account Changes
$lang['update_successful'] 		 	            = 'Üyelik bilgileri güncellendi';
$lang['update_unsuccessful'] 		 	        = 'Üyelik bilgileri güncellenemedi';
$lang['delete_successful'] 		 	            = 'Kullanıcı silindi';
$lang['delete_unsuccessful'] 			        = 'Kullanıcı silme başarısız';

// Groups
$lang['group_creation_successful']              = 'Grup başarıyla oluşturuldu';
$lang['group_already_exists']                   = 'Grup adı daha önceden oluşturulmuş';
$lang['group_update_successful']                = 'Grup detayları güncellendi';
$lang['group_delete_successful']                = 'Grup silindi ';
$lang['group_delete_unsuccessful'] 	            = 'Grup silinemedi';
$lang['group_delete_notallowed']                = 'Yönetici grup silinemez';
$lang['group_name_required'] 		            = 'Grup adı alanı gereklidir';
$lang['group_name_admin_not_alter']             = 'Yönetici grup adı değiştirilemez';

// Activation Email
$lang['email_activation_subject']               = 'Hesap Etkinleştirme';
$lang['email_activate_heading']                 = '%s için hesap etkinleştirme';
$lang['email_activate_subheading']              = 'Bu linke tıklayarak %s.';
$lang['email_activate_link']                    = 'hesabınızı etkinleştirin';

// Forgot Password Email
$lang['email_forgotten_password_subject']       = 'Şifremi Unuttum';
$lang['email_forgot_password_heading']          = '%s için şifre sıfırlama';
$lang['email_forgot_password_subheading']       = 'Bağlantıya tıklayarak %s.';
$lang['email_forgot_password_link']             = 'şifrenizi sıfırlayınız';

// New Password Email
$lang['email_new_password_subject']             = 'Yeni Şifre';
$lang['email_new_password_heading']             = '%s için yeni şifre';
$lang['email_new_password_subheading']          = 'Şifreniz %s olarak değiştirildi';
>>>>>>> upstream/2
