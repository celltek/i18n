<?php

define("_CONTACTSENDMSG","Email abschicken");
define("_CONTACTSEND","Die Email wurde soeben versendet!");
define("_CONTACTSENDERROR","Die Email konnte nicht versendet werden!");
define("_CONTACTNOTALLFIELDS","Sie haben nicht alle Felder ausgefüllt!");
define("_CONTACTNOEMAIL","Es wurde noch kein Email Konto für System Mails angelegt!");
define("_CONTACTMEMBER","Kunde*:");
define("_CONTACTSUBJECT","Betreff*:");
define("_CONTACTPLAIN","Text:");
define("_CONTACTHTML","Html:");
define("_CONTACTTEMPLATES","Text Templates");
define("_CONTACTVIEWTEMPLATE","Template Vorschau");

define("_QUESTIONCONTACTSEND","Wollen sie die Nachricht versenden?");

define("_ASSISTENTCONTACT","Hier können sie eMails an ihre Kunden versenden. Wenn sie zuvor im Modul Kunden auf die eMail eines Kunden
klicken, dann sollte dieser jetzt hier makiert sein. Weiter unten finden sie die Vordrucke, die sie im Modul Email Templates anlegen können.
Sie können folgende Variablen verwenden:<br><br>
{%customerid%} - für die Kundenkennung<br>
{%email%} - für die Email<br>
{%surname%} - für den Vornamen<br>
{%name%} - für den Nachnamen<br>
{%fullname%} - für den Vornamen und Nachnamen<br>
{%address%} - für die Anschrift<br><br>
{%credits%} - für den aktuellen Kontostand<br>
{%ftppasswd%} - für das FTP Passwort");

?>