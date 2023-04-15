<?php

define("_NEWSLETTERNOTALLFIELDS","Not all fields marked with an * have been filled out!");
define("_NEWSLETTERDBUPERROR","Database error! The newsletter could not be updated!");
define("_NEWSLETTERDBUPDATED","The newsletter has been updated!");
define("_NEWSLETTERDBSAVEERROR","Database error! The newsletter could not be added!");
define("_NEWSLETTERDBCREATED","The newsletter has just been added!");
define("_NEWSLETTERNEW","Subscribe to Newsletter");
define("_NEWSLETTERACTIVATESEL","Activate selected newsletters");
define("_NEWSLETTERDELETESEL","Delete selected newsletters");
define("_NEWSLETTERNOENTRY","<b>No newsletters available!</b>");
define("_NEWSLETTERSTATUS","The newsletter status is now being reset!");
define("_NEWSLETTERDBDELERROR","Database error! The newsletter could not be deleted!");
define("_NEWSLETTERDBDELETED","The newsletter has just been deleted from the web interface!");
define("_NEWSLETTERDBACTERROR","Database error! The newsletter could not be activated!");
define("_NEWSLETTERDBACTIVATED","The newsletter has just been reactivated!");
define("_NEWSLETTERMSG","The newsletter is now being sent! The page will reload several times, please wait!");
define("_NEWSLETTERSENDED","The newsletter has been sent successfully!");
define("_NEWSLETTERSENDERROR","The newsletter could not be sent!");
define("_NEWSLETTERNOEMAIL","No email account has been created for newsletters yet!");
define("_NEWSLETTERALLSENDED","The newsletter has been sent to all applicable customers!");
define("_NEWSLETTEREXIST","A newsletter with this subject already exists!");
define("_NEWSLETTERSENDNOW","Send newsletter");
define("_NEWSLETTERTESTSENDNOW","Send test newsletter");
define("_NEWSLETTERSENDFINISH","Sent");
define("_NEWSLETTERSUBJECT","Subject*:");
define("_NEWSLETTERSENDDATE","Send on*:");
define("_NEWSLETTERPLAIN","Text:");
define("_NEWSLETTERHTML","Html:");
define("_NEWSLETTERMAILGROUP","Category*:");
define("_NEWSLETTERALL","All customers");
define("_NEWSLETTERGAMES","Gameserver customers");
define("_NEWSLETTERSTREAMS","Streamserver customers");
define("_NEWSLETTERVOICES","Voiceserver customers");
define("_NEWSLETTERROOTS","Rootserver customers");
define("_NEWSLETTERVSERVER","VServer customers");

define("_QUESTIONNEWSLETTERCHANGE","Do you really want to change the status?");
define("_QUESTIONNEWSLETTERSEND","Do you want to send the newsletter now?");
define("_QUESTIONNEWSLETTERTESTSEND","Do you want to send the test newsletter now?");

define("_ASSISTENTNEWSLETTER","In this module you can create and send text and HTML newsletters. You can perform the sending via cron job or directly here.
You can use the following variables:<br><br>
{%customerid%} - for the customer ID<br>
{%email%} - for the email address<br>
{%surname%} - for the first name<br>
{%name%} - for the last name<br>
{%fullname%} - for the first and last name");

?>