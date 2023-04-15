<?php
define("_TEXTPRESETSNEW","Add Template");
define("_TEXTPRESETSNOTALLFIELDS","Not all fields marked with * have been filled out!");
define("_TEXTPRESETSEXISTOP","A template for this option already exists!");
define("_TEXTPRESETSDBUPERROR","Database error! The template could not be changed!");
define("_TEXTPRESETSDBUPDATED","The template has been changed!");
define("_TEXTPRESETSDBSAVEERROR","Database error! The template could not be added!");
define("_TEXTPRESETSDBDELERROR","Database error! The template could not be deleted!");
define("_TEXTPRESETSDBDELETED","The template has just been deleted from the web interface!");
define("_TEXTPRESETSCREATED","The template has just been added!");
define("_TEXTPRESETSNOENTRY","<b>No templates available!</b>");
define("_TEXTPRESETSDELETESEL","delete marked templates");
define("_TEXTPRESETSSTATUS","The selected templates will now be deleted!");
define("_TEXTPRESETSSUBJECT","Subject*:");
define("_TEXTPRESETSOPTION","Additional options*:");
define("_TEXTPRESETSPLAIN","Text:");
define("_TEXTPRESETSHTML","Html:");
define("_TEXTPRESETSCONTACT","Contact");
define("_TEXTPRESETSTICKETSYS","Ticket system");
define("_TEXTPRESETSLOGIN","Login data (email)");
define("_TEXTPRESETSCHANGEPW","Password (email)");
define("_TEXTPRESETSBILL","Invoice (customer)");
define("_TEXTPRESETSREMINDONE","First reminder (customer)");
define("_TEXTPRESETSREMINDTWO","Second reminder (customer)");
define("_TEXTPRESETSREMINDTHREE","Third reminder (customer)");
define("_TEXTPRESETSREMINDFOUR","Fourth reminder (customer)");
define("_TEXTPRESETSTICKETADMIN","Support request (admin)");
define("_TEXTPRESETSTICKETMEM","Support response (customer)");
define("_TEXTPRESETSLPWADMIN","Forgot password (admin)");
define("_TEXTPRESETSLPWMEM","Forgot password (customer)");
define("_TEXTPRESETSROOTINST","Root server new installation (admin)");
define("_TEXTPRESETSTSTOKEN","Teamspeak 3 token (customer)");
define("_TEXTPRESETSMUSICBOT","Music bot password (customer)");
define("_TEXTPRESETSPRODUCTCHANCEL","Cancellation confirmation (customer)");
define("_TEXTPRESETSPRODUCTCHANCELNO","Cancellation canceled (customer)");
define("_TEXTPRESETSMEMCLOSED","Customer account blocked (customer)");
define("_TEXTPRESETSMEMACTIVATED","Customer account reactivated (customer)");
define("_TEXTPRESETSCMSCONTACT","Contact (email)");
define("_TEXTPRESETSCMSJOINUS","User registration (email)");
define("_TEXTPRESETSCMSLOSTPW","User forgot password (email)");
define("_TEXTPRESETSRATING","Rating request (customer)");
define("_TEXTPRESETSCONCILIATION","Confirmation of conciliation (customer)");
define("_TEXTPRESETSRESOURCES","Resources");
define("_TEXTPRESETSSUGGESTIONS","Feature requests");
define("_TEXTPRESETSFINANCES","Finances");
define("_TEXTPRESETSSUPPORT","Support");
define("_TEXTPRESETSSYSTEM","System");
define("_TEXTPRESETSSERVER","Server");
define("_TEXTPRESETSCMS","CMS");
define("_TEXTPRESETSDATABASEINST","Database is being installed (customer)");
define("_TEXTPRESETSGSERVERINST","Game server is being installed (customer)");
define("_TEXTPRESETSSTREAMINST","Stream server is being installed (customer)");
define("_TEXTPRESETSVOICEINST","Voice server will be installed (Customer)");
define("_TEXTPRESETSAPPINST","Program will be installed (Customer)");
define("_TEXTPRESETSMRSERVERINST","Root server will be installed (Customer)");
define("_TEXTPRESETSMVSERVERINST","VServer will be installed (Customer)");
define("_TEXTPRESETSMINERINST","Miner will be installed (Customer)");

define("_QUESTIONTEXTPRESETSCHANGE","Do you really want to change the status?");

define("_ASSISTENTTEXTPRESETS","In this module, you can create various templates. You can use the following variables:<br><br>
{%adminid%} - Admin ID (login data / password)<br>
{%customerid%} - Customer ID<br>
{%email%} - Email<br>
{%surname%} - First name<br>
{%name%} - Last name<br>
{%fullname%} - First and last name<br>
{%address%} - Address<br>
{%credits%} - Current account balance<br>
{%billid%} - Current invoice number (reminders)<br><br>
{%tickettext%} - Contents of the support request<br><br>
{%passwd%} - Password (databases, login data / password)<br>
{%ftppasswd%} - FTP password<br>
{%siteurl%} - URL as specified in Settings Module - Settings<br>
{%code%} - Confirmation code (password forgotten)<br>
{%details%} - For root new installation, terminated products, cancelled terminations<br>
{%canceldate%} - Cancellation date in cancellation confirmations<br><br>
{%serveripport%} - Installation, TS3 token, musicbot server IP and port or just server IP<br>
{%ts3token%} - Teamspeak 3 token<br>
{%ts3mbapasswd%} - Musicbot admin password<br>
{%ts3mbupasswd%} - Musicbot user password<br><br>
{%miner%} - Miner e.g. 10TH/s Bitcoin<br><br>
{%rating%} - Generated evaluation or dispute link<br><br>
Confirmation code for the password forgotten email or also for the rating system must be specified as follows:<br>
<b>{%siteurl%}/{%code%}</b>");
?>