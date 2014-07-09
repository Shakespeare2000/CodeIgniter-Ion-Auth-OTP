#Ion Auth 2 OTP
###The future of authentication
by [Ben Edmunds](http://benedmunds.com)
TOTP by [SpyTec](http://spytec.se)

Redux Auth 2 had a lot of potential.  It's lightweight, simple, and clean, 
but had a ton of bugs and was missing some key features.  So we refactored 
the code and added new features.

This version drops any backwards compatibility and makes things even more 
awesome then you could expect.

##TOTP
This branch includes multi-factor authentication with (T)OTP for PHP 5 >= 5.1.2. This works 
with Google Authenticator and Authy on both Android and iOS. Should work
with any other app that follows [RFC-6238](http://tools.ietf.org/html/rfc6238).

Is this branch behind [Ion-Auth 2](https://github.com/iamfiscus/codeigniter-ion-auth-migration) feel free to contact me to pull from the main repo.

MongoDB is yet to be configured for TOTP, send a PR if you've fixed it.

##Documentation
Documentation is located at http://benedmunds.com/ion_auth/

##Installation
Just copy the files from this package to the corresponding folder in your 
application folder.  For example, copy Ion_auth/config/ion_auth.php to 
application/config/ion_auth.php.  

###Relational DB Setup
Then just run the appropriate SQL file (if you're using migrations you can 
get the migrations from JD here: 
https://github.com/iamfiscus/codeigniter-ion-auth-migration).  

###MongoDB Setup
Should be noted that MongoDB is not yet configured for OTP.
If you want to port it to MongoDB, send a PR.

Integrate the following projects to enable MongoDB support in CodeIgniter:  
  
    CodeIgniter MongoDB Active Record Library - http://github.com/alexbilbie/codeigniter-mongodb-library/tree/v2
	CodeIgniter MongoDB Session Library - http://github.com/sepehr/ci-mongodb-session  
  
Set $config['use_mongodb'] = TRUE; in the config file and then run the following command:    
  
    $ mongorestore sql/mongo


##Usage   
In the package you will find example usage code in the controllers and views 
folders.  The example code isn't the most beautiful code you'll ever see but 
it'll show you how to use the library and it's nice and generic so it doesn't 
require a MY_controller or anything else.

###Default Login
Username: admin@admin.com
Password: password

###Important
It is highly recommended that you use encrypted database sessions for security!


###Optimization
It is recommended that you add your identity column as a unique index.



Feel free to send me an email if you have any problems.  


Thanks,  
-Ben Edmunds  
 ben.edmunds@gmail.com  
 @benedmunds   
