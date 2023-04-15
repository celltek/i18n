<?php

define("_TEXTPRESETSNEW","Template eintragen");
define("_TEXTPRESETSNOTALLFIELDS","Es wurden nicht alle mit einem * gekennzeichneten Felder ausgefüllt!");
define("_TEXTPRESETSEXISTOP","Es existiert schon ein Template für diese Option!");
define("_TEXTPRESETSDBUPERROR","Datenbankfehler! Das Template konnte nicht geändert werden!");
define("_TEXTPRESETSDBUPDATED","Das Template wurde geändert!");
define("_TEXTPRESETSDBSAVEERROR","Datenbankfehler! Das Template konnte nicht hinzugefügt werden!");
define("_TEXTPRESETSDBDELERROR","Datenbankfehler! Das Template konnte nicht gelöscht werden!");
define("_TEXTPRESETSDBDELETED","Das Template wurde soeben aus dem Webinterface gelöscht!");
define("_TEXTPRESETSCREATED","Das Template wurde soeben hinzugefügt!");
define("_TEXTPRESETSNOENTRY","<b>Keine Templates vorhanden!</b>");
define("_TEXTPRESETSDELETESEL","markierte Templates löschen");
define("_TEXTPRESETSSTATUS","Die ausgewählten Templates werden nun gelöscht!");
define("_TEXTPRESETSSUBJECT","Betreff*:");
define("_TEXTPRESETSOPTION","Zusätzliche Optionen*:");
define("_TEXTPRESETSPLAIN","Text:");
define("_TEXTPRESETSHTML","Html:");
define("_TEXTPRESETSCONTACT","Kontakt");
define("_TEXTPRESETSTICKETSYS","Ticketsystem");
define("_TEXTPRESETSLOGIN","Logindaten (Email)");
define("_TEXTPRESETSCHANGEPW","Passwort (Email)");
define("_TEXTPRESETSBILL","Rechnung (Kunden)");
define("_TEXTPRESETSREMINDONE","Mahnstufe 1 (Kunden)");
define("_TEXTPRESETSREMINDTWO","Mahnstufe 2 (Kunden)");
define("_TEXTPRESETSREMINDTHREE","Mahnstufe 3 (Kunden)");
define("_TEXTPRESETSREMINDFOUR","Mahnstufe 4 (Kunden)");
define("_TEXTPRESETSTICKETADMIN","Supportanfrage (Admin)");
define("_TEXTPRESETSTICKETMEM","Supportantwort (Kunden)");
define("_TEXTPRESETSLPWADMIN","Passwort vergessen (Admin)");
define("_TEXTPRESETSLPWMEM","Passwort vergessen (Kunden)");
define("_TEXTPRESETSROOTINST","Rootserver Neuinstallation (Admin)");
define("_TEXTPRESETSTSTOKEN","Teamspeak 3 Token (Kunden)");
define("_TEXTPRESETSMUSICBOT","Musicbot Passwort (Kunden)");
define("_TEXTPRESETSPRODUCTCHANCEL","Kündigungsbestätigung (Kunden)");
define("_TEXTPRESETSPRODUCTCHANCELNO","Kündigung storniert (Kunden)");
define("_TEXTPRESETSMEMCLOSED","Kundenzugang gesperrt (Kunden)");
define("_TEXTPRESETSMEMACTIVATED","Kundenzugang reaktiviert (Kunden)");
define("_TEXTPRESETSCMSCONTACT","Kontakt (Email)");
define("_TEXTPRESETSCMSJOINUS","User Anmeldung (Email)");
define("_TEXTPRESETSCMSLOSTPW","User Passwort vergessen (Email)");
define("_TEXTPRESETSRATING","Bewertungsanfrage (Kunden)");
define("_TEXTPRESETSCONCILIATION","Schlichtung bestätigen (Kunden)");
define("_TEXTPRESETSRESOURCES","Resourcen");
define("_TEXTPRESETSSUGGESTIONS","Feature Wünsche");
define("_TEXTPRESETSFINANCES","Finanzen");
define("_TEXTPRESETSSUPPORT","Support");
define("_TEXTPRESETSSYSTEM","System");
define("_TEXTPRESETSSERVER","Server");
define("_TEXTPRESETSCMS","CMS");
define("_TEXTPRESETSDATABASEINST","Datenbank wird installiert (Kunden)");
define("_TEXTPRESETSGSERVERINST","Gameserver wird installiert (Kunden)");
define("_TEXTPRESETSSTREAMINST","Streamserver wird installiert (Kunden)");
define("_TEXTPRESETSVOICEINST","Voiceserver wird installiert (Kunden)");
define("_TEXTPRESETSAPPINST","Programm wird installiert (Kunden)");
define("_TEXTPRESETSMRSERVERINST","Rootserver wird installiert (Kunden)");
define("_TEXTPRESETSMVSERVERINST","VServer wird installiert (Kunden)");
define("_TEXTPRESETSMINERINST","Miner wird installiert (Kunden)");

define("_QUESTIONTEXTPRESETSCHANGE","Wollen sie den Status wirklich ändern?");

define("_ASSISTENTTEXTPRESETS","In diesem Modul können sie verschiedene Templates anlegen. Sie können folgende Variablen verwenden:<br><br>
{%adminid%} - Adminkennung (Logindaten / Passwort)<br>
{%customerid%} - Kundenkennung<br>
{%email%} - Email<br>
{%surname%} - Vornamen<br>
{%name%} - Nachnamen<br>
{%fullname%} - Vornamen und Nachnamen<br>
{%address%} - Anschrift<br>
{%credits%} - Aktueller Kontostand<br>
{%billid%} - Aktuelle Rechnungsnummer (Mahnungen)<br><br>
{%tickettext%} - Inhalt der Supportanfrage<br><br>
{%passwd%} - Passwort (Datenbanken, Logindaten / Passwort)<br>
{%ftppasswd%} - FTP Passwort<br>
{%siteurl%} - URL wie sie unter Setting Module - Einstellungen angegeben wurde<br>
{%code%} - Bestätigungscode (Passwort vergessen)<br>
{%details%} - Bei Root-Neuinstallation, gekündigten Produkten, stornierten Kündigungen<br>
{%canceldate%} - Kündigungsdatum bei Kündigungsbestätigungen<br><br>
{%serveripport%} - Installation, TS3 Tokken, Musicbot Server IP und Port bzw. nur Server IP<br>
{%ts3token%} - Teamspeak 3 Tokken<br>
{%ts3mbapasswd%} - Musicbot Admin Passwort<br>
{%ts3mbupasswd%} - Musicbot User Passwort<br><br>
{%miner%} - Miner zb. 10TH/s Bitcoin<br><br>
{%rating%} - Generierter Bewertungs- bzw. Schlichtungs-Link<br><br>
Bestätigungscode bei der Passwort vergessen Email oder auch für das Bewertungssystem unbedingt so angeben:<br>
<b>{%siteurl%}/{%code%}</b>");

?>