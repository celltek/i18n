<?php

define("_CONTACTSENDMSG","Send Email");
define("_CONTACTSEND","The email has been sent successfully!");
define("_CONTACTSENDERROR","The email could not be sent!");
define("_CONTACTNOTALLFIELDS","You have not filled in all fields!");
define("_CONTACTNOEMAIL","No email account has been set up for system emails yet!");
define("_CONTACTMEMBER","Customer*:");
define("_CONTACTSUBJECT","Subject*:");
define("_CONTACTPLAIN","Plain Text:");
define("_CONTACTHTML","HTML:");
define("_CONTACTTEMPLATES","Text Templates");
define("_CONTACTVIEWTEMPLATE","Preview Template");

define("_QUESTIONCONTACTSEND","Do you want to send the message?");

define("_ASSISTENTCONTACT","Here you can send emails to your customers. If you click on a customer's email in the module Customers,
they should be marked here now. Below you will find the templates that you can create in the Email Templates module.
You can use the following variables:<br><br>
{%customerid%} - for the customer ID<br>
{%email%} - for the email address<br>
{%surname%} - for the first name<br>
{%name%} - for the last name<br>
{%fullname%} - for the first and last name<br>
{%address%} - for the address<br><br>
{%credits%} - for the current account balance<br>
{%ftppasswd%} - for the FTP password");

?>