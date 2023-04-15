<?php

define("_EMAILPRESETSNEW","Add a template");
define("_EMAILPRESETSNOTALLFIELDS","All required fields marked with an * weren't filled in!");
define("_EMAILPRESETSEXIST","A template for this module already exists!");
define("_EMAILPRESETSEXISTOP","A template for this option already exists!");
define("_EMAILPRESETSDBUPERROR","Database error! The template couldn't be changed!");
define("_EMAILPRESETSDBUPDATED","The template was changed!");
define("_EMAILPRESETSDBSAVEERROR","Database error! The template couldn't be added!");
define("_EMAILPRESETSDBDELERROR","Database error! The template couldn't be deleted!");
define("_EMAILPRESETSDBDELETED","The template has been successfully deleted!");
define("_EMAILPRESETSCREATED","The template was successfully added!");
define("_EMAILPRESETSNOENTRY","<b>No templates available!</b>");
define("_EMAILPRESETSDELETESEL","delete selected programs");
define("_EMAILPRESETSSTATUS","The selected templates will be deleted!");
define("_EMAILPRESETSSUBJECT","Subject*:");
define("_EMAILPRESETSMODUL","Module*:");
define("_EMAILPRESETSOPTION","Additional option*:");
define("_EMAILPRESETSTEXT","Content*:");
define("_EMAILPRESETSNO","nothing");
define("_EMAILPRESETSNOMODULE","No module");
define("_EMAILPRESETSLOGIN","Logindata");
define("_EMAILPRESETSCHANGEPW","Password changed");
define("_EMAILPRESETSBILL","New invoice");
define("_EMAILPRESETSREMINDONE","Dunning level 1");
define("_EMAILPRESETSREMINDTWO","Dunning level 2");
define("_EMAILPRESETSREMINDTHREE","Dunning level 3");
define("_EMAILPRESETSREMINDFOUR","Dunning level 4");
define("_EMAILPRESETSTICKETADMIN","Support request to admin");
define("_EMAILPRESETSTICKETMEM","Support answer to customer");
define("_EMAILPRESETSLPWADMIN","Lost password to admin");
define("_EMAILPRESETSLPWMEM","Lost password to customer");
define("_EMAILPRESETSROOTINST","Root reinstall to admin");
define("_EMAILPRESETSTSTOKEN","Teamspeak 3 token");

define("_QUESTIONEMAILPRESETSCHANGE","Are you sure you wish to make these changes?");

define("_ASSISTENTEMAILPRESETS","In this module you can create templates for the contact and newsletter modules. You can also set up templates for the customer login 
information and changing the customer password. You can use the following variables: <br><br>
gsuserid - Customer ID<br>
gssurname - Customer surname<br>
gsname - Customer surname and name<br>
gspasswd - Customer password (Only for login information, password and lost password emails)<br>
gsmoney - Customer money on account<br>
gscode - Confirmation code<br><br>
gsdetails - Informations about a reinstallation order<br><br>
Use the confirmation code on the lost password email as follows: <br>
<b>http://yourdomain.com/path/gscode</b>");

?>