<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* Name:  Ion Auth Lang - Dutch
*
* Author: Jeroen van der Gulik
*         jeroen@isset.nl
*
* Adjustments by Dieter
*
* Location: http://github.com/benedmunds/CodeIgniter-Ion-Auth
*
* Created:  05.01.2010
*
* Description:  Dutch language file for Ion Auth messages and errors
*
*/

// Account Creation
$lang['account_creation_successful'] 	  	 = 'Account is aangemaakt';
$lang['account_creation_unsuccessful'] 	 	 = 'Account aanmaken is mislukt';
$lang['account_creation_duplicate_email'] 	 = 'E-mailadres is al in gebruik of ongeldig';
$lang['account_creation_duplicate_identity'] 	 = 'Gebruikersnaam is al in gebruik of ongeldig';

// TODO Please Translate
$lang['account_creation_missing_default_group'] = 'Standaard groep is niet ingesteld';
$lang['account_creation_invalid_default_group'] = 'Standaard groepsnaam is ongeldig';

// TODO Please Translate
$lang['account_creation_missing_default_group'] = 'Standaard groep is niet ingesteld';
$lang['account_creation_invalid_default_group'] = 'Standaard groepsnaam is ongeldig';


// Password
$lang['password_change_successful'] 	 	 = 'Wachtwoord succesvol gewijzigd';
$lang['password_change_unsuccessful'] 	  	 = 'Wachtwoord wijzigen is mislukt';
$lang['forgot_password_successful'] 	 	 = 'E-mail om het wachtwoord te resetten is verzonden';
$lang['forgot_password_unsuccessful'] 	 	 = 'Wachtwoord resetten is mislukt';

// Activation
$lang['activate_successful'] 		  	 = 'Account is geactiveerd';
$lang['activate_unsuccessful'] 		 	 = 'Account activeren is mislukt';
$lang['deactivate_successful'] 		  	 = 'Account is gedeactiveerd';
$lang['deactivate_unsuccessful'] 	  	 = 'Accound deactiveren is mislukt';
$lang['activation_email_successful'] 	  	 = 'Activatie e-mail is verzonden';
$lang['activation_email_unsuccessful']   	 = 'Activatie e-mail verzenden is mislukt';

// Login / Logout
$lang['login_successful'] 		  	 = 'U bent ingelogd';
$lang['login_unsuccessful'] 		  	 = 'Login is incorrect';
<<<<<<< HEAD
$lang['login_unsuccessful_not_active'] 		 = 'Account is inactive';
$lang['login_timeout']                       = 'Temporarily Locked Out.  Try again later.';
=======
$lang['login_unsuccessful_not_active'] 		 = 'Account is inactief';
$lang['login_timeout']                       = 'U bent tijdelijk geblokkeerd. Probeer het later nogmaals.';
>>>>>>> upstream/2
$lang['logout_successful'] 		 	 = 'U bent uitgelogd';

// Account Changes
$lang['update_successful'] 		 	 = 'Account is bijgewerkt';
$lang['update_unsuccessful'] 		 	 = 'Account bijwerken is mislukt';
$lang['delete_successful'] 		 	 = 'Gebruiker is verwijderd';
$lang['delete_unsuccessful'] 		 	 = 'Gebruiker verwijderen is mislukt';

// Groups
<<<<<<< HEAD
$lang['group_creation_successful']  = 'Group created Successfully';
$lang['group_already_exists']       = 'Group name already taken';
$lang['group_update_successful']    = 'Group details updated';
$lang['group_delete_successful']    = 'Group deleted';
$lang['group_delete_unsuccessful'] 	= 'Unable to delete group';
$lang['group_delete_notallowed']    = 'Can\'t delete the administrators\' group';
$lang['group_name_required'] 		= 'Group name is a required field';

// Activation Email
$lang['email_activation_subject']            = 'Account Activering';
$lang['email_activate_heading']    = 'Activate account for %s';
$lang['email_activate_subheading'] = 'Please click this link to %s.';
$lang['email_activate_link']       = 'Activate Your Account';

// Forgot Password Email
$lang['email_forgotten_password_subject']    = 'Verificatie Verloren Wachtwoord';
$lang['email_forgot_password_heading']    = 'Reset Password for %s';
$lang['email_forgot_password_subheading'] = 'Please click this link to %s.';
$lang['email_forgot_password_link']       = 'Reset Your Password';
// New Password Email
$lang['email_new_password_subject']          = 'Nieuw wachtwoord';
$lang['email_new_password_heading']    = 'New Password for %s';
$lang['email_new_password_subheading'] = 'Your password has been reset to: %s';
=======
$lang['group_creation_successful']  = 'Groep is succesvol aangemaakt';
$lang['group_already_exists']       = 'Groepsnaam is reeds in gebruik';
$lang['group_update_successful']    = 'Groepsinformatie is bijgewerkt';
$lang['group_delete_successful']    = 'Groep is verwijderd';
$lang['group_delete_unsuccessful'] 	= 'Groep verwijderen is mislukt';
$lang['group_delete_notallowed']    = 'Het is niet mogelijk om de administrator groep te verwijderen';
$lang['group_name_required'] 		= 'Groepsnaam is een verplicht veld';
$lang['group_name_admin_not_alter'] = 'De naam van de administrator groep is niet aanpasbaar';

// Activation Email
$lang['email_activation_subject']            = 'Account activering';
$lang['email_activate_heading']    = 'Activeer account voor %s';
$lang['email_activate_subheading'] = 'Gelieve op deze link te klikken om %s.';
$lang['email_activate_link']       = 'Activeer uw account';

// Forgot Password Email
$lang['email_forgotten_password_subject']    = 'Verificatie vergeten wachtwoord';
$lang['email_forgot_password_heading']    = 'Reset wachtwoord voor %s';
$lang['email_forgot_password_subheading'] = 'Gelieve op deze link te klikken om %s.';
$lang['email_forgot_password_link']       = 'Reset uw wachtwoord';
// New Password Email
$lang['email_new_password_subject']          = 'Nieuw wachtwoord';
$lang['email_new_password_heading']    = 'Nieuw wachtwoord voor %s';
$lang['email_new_password_subheading'] = 'Uw wachtwoord is aangepast naar: %s';
>>>>>>> upstream/2

/* End of file ion_auth_lang.php */
/* Location: ./system/application/language/dutch/ion_auth_lang.php */
