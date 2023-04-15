<?php

define("_NEWSLETTERNOTALLFIELDS","Es wurden nicht alle mit einem * gekennzeichneten Felder ausgefüllt!");
define("_NEWSLETTERDBUPERROR","Datenbankfehler! Der Newsletter konnte nicht geändert werden!");
define("_NEWSLETTERDBUPDATED","Der Newsletter wurde geändert!");
define("_NEWSLETTERDBSAVEERROR","Datenbankfehler! Der Newsletter konnte nicht hinzugefügt werden!");
define("_NEWSLETTERDBCREATED","Der Newsletter wurde soeben hinzugefügt!");
define("_NEWSLETTERNEW","Newsletter eintragen");
define("_NEWSLETTERACTIVATESEL","markierte Newsletter aktivieren");
define("_NEWSLETTERDELETESEL","markierte Newsletter löschen");
define("_NEWSLETTERNOENTRY","<b>Keine Newsletter vorhanden!</b>");
define("_NEWSLETTERSTATUS","Der Newsletterstatus wird nun neu gesetzt!");
define("_NEWSLETTERDBDELERROR","Datenbankfehler! Der Newsletter konnte nicht gelöscht werden!");
define("_NEWSLETTERDBDELETED","Der Newsletter wurde soeben aus dem Webinterface gelöscht!");
define("_NEWSLETTERDBACTERROR","Datenbankfehler! Der Newsletter konnte nicht aktiviert werden!");
define("_NEWSLETTERDBACTIVATED","Der Newsletter wurde soeben wieder aktiviert!");
define("_NEWSLETTERMSG","Der Newsletter wird nun versendet! Die Seite läd sich mehrmals neu bitte warten sie!");
define("_NEWSLETTERSENDED","Der Newsletter wurde erfolgreich versendet!");
define("_NEWSLETTERSENDERROR","Der Newsletter konnte nicht versendet werden!");
define("_NEWSLETTERNOEMAIL","Es wurde noch kein Email Konto für Newsletter angelegt!");
define("_NEWSLETTERALLSENDED","Der Newsletter wurde an alle zutreffenden Kunden verschickt!");
define("_NEWSLETTEREXIST","Ein Newsletter mit diesem Betreff existiert schon!");
define("_NEWSLETTERSENDNOW","Newsletter versenden");
define("_NEWSLETTERTESTSENDNOW","Test Newsletter versenden");
define("_NEWSLETTERSENDFINISH","Versendet");
define("_NEWSLETTERSUBJECT","Betreff*:");
define("_NEWSLETTERSENDDATE","Senden am*:");
define("_NEWSLETTERPLAIN","Text:");
define("_NEWSLETTERHTML","Html:");
define("_NEWSLETTERMAILGROUP","Kategorie*:");
define("_NEWSLETTERALL","Alle Kunden");
define("_NEWSLETTERGAMES","Gameserver Kunden");
define("_NEWSLETTERSTREAMS","Streamserver Kunden");
define("_NEWSLETTERVOICES","Voiceserver Kunden");
define("_NEWSLETTERROOTS","Rootserver Kunden");
define("_NEWSLETTERVSERVER","VServer Kunden");

define("_QUESTIONNEWSLETTERCHANGE","Wollen sie den Status wirklich ändern?");
define("_QUESTIONNEWSLETTERSEND","Wollen sie den Newsletter jetzt versenden?");
define("_QUESTIONNEWSLETTERTESTSEND","Wollen sie den Test Newsletter jetzt versenden?");

define("_ASSISTENTNEWSLETTER","In diesem Modul können sie Text und Html Newsletter erstellen und versenden. Sie können den Versand per Cronjob oder direkt hier durchführen.
Sie können folgende Variablen verwenden:<br><br>
{%customerid%} - für die Kundenkennung<br>
{%email%} - für die Email<br>
{%surname%} - für den Vornamen<br>
{%name%} - für den Nachnamen<br>
{%fullname%} - für den Vornamen und Nachnamen");

?>