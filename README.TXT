FORGEIGNITER 1.0.3 INSTALLATION GUIDE
=====================================

Thank you for downloading ForgeIgniter.
This guide provides the basic steps needed in order to get ForgeIgniter running on your server. 

QUICK START GUIDE
------------------------------

1. Download the latest repository from https://github.com/Forgeigniter/ForgeIgniter-CI-2.x
2. Extract the contents in to your Web Root folder (including the '/static' folder, 'index.php' and the '.htaccess' files).
3. Go to 'yourdomain' in your web browser, install should start.

-- NOTE: At this point ForgeIgniter should run on your domain, but for security reasons we suggest you continue --

5. Move the '/ForgeIgniter/system' folder outside of the Web Root, for example in to the parent directory, or a Code repository folder.
6. Edit the 'index.php' file, go to line 93, and change the path to your new system folder (e.g. '../ForgeIgniter').
  You can old do the same step with the entire Forgeigniter application.

-- TESTING A NEW SITE --

7. Go to 'mydomain.com/admin'.
8. Login with the default superuser account: (superuser / super123).
9. Change your superuser password to a more secure password and then create a website administrator by clicking on Users.

You should now be good to go.

-- Note: If you have a problem with directory paths make sure to change the base url to http://yourdomain/ remembering the / in ForgeIgniter\config\config.php on line 23.
Further more if you have problems don't hesitate to check out the Forums on www.forgeigniter.com


FURTHER CONFIGURATIONS
------------------------------

Because ForgeIgniter is built upon the amazing CodeIgniter framework (http://codeigniter.com), you can easily extend and modify ForgeIgniter to your hearts content.
There are also configurations you can make to ForgeIgniter using the standard CodeIgniter configuration files, for
example the database.php (in /ForgeIgniter/config), the config.php (for character encoding and compression settings), etc.


MODULES
------------------------------

We hope you'll find the built-in modules everything you'll need for your sites, however you are free to build your own modules by
just building mini-applications (see the CodeIgniter and HMVC documentation) and dropping them in to the Modules folder inside the
Application. You can then access the modules by going to yoursite.com/module.

Also be sure to show off your creations on the Forums for everyone else to see.


YOUR LEGAL OBLIGATION
------------------------------

By using ForgeIgniter you agree to be bound by the license terms and conditions stated on our website: 

http://www.forgeigniter.com/license

