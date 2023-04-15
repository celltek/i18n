<?php

define("_MEMBERSARCHIVE","Kunden gekündigt");
define("_MEMBERSBAD","Kunden gesperrt");
define("_MEMBERSOPEN","Kunden offene Posten");
define("_MEMBERSDBUPERROR","Datenbankfehler! Der Kunde konnte nicht geändert werden!");
define("_MEMBERSDBSAVEERROR","Datenbankfehler! Der Kunde konnte nicht gespeichert werden!");
define("_MEMBERSDBDELERROR","Datenbankfehler! Der Kunde konnte nicht gelöscht werden!");
define("_MEMBERSDBCLOSEERROR","Datenbankfehler! Der Kunde konnte nicht gesperrt werden!");
define("_MEMBERSDBCANCELERROR","Datenbankfehler! Der Kunde konnte nicht gekündigt werden!");
define("_MEMBERSDBACTIVATEERROR","Datenbankfehler! Der Kunde konnte nicht aktiviert werden!");
define("_MEMBERSDBDELETED","Der Kunde wurde soeben aus dem Webinterface gelöscht!");
define("_MEMBERSDBCLOSED","Der Kunde wurde soeben im Webinterface gesperrt!");
define("_MEMBERSDBCANCELED","Der Kunde wurde soeben im Webinterface gekündigt!");
define("_MEMBERSDBACTIVATE","Der Kunde wurde soeben im Webinterface aktiviert!");
define("_MEMBERSDBUPDATED","Der Kunde wurde geupdatet!");
define("_MEMBERSSTATUS","Der Kundenstatus wird nun neu gesetzt!");
define("_MEMBERSNOTALLFIELDS","Es wurden nicht alle mit einem * gekennzeichneten Felder ausgefüllt!");
define("_MEMBERSBADNAME","Der Name ist bereits vergeben!");
define("_MEMBERSBADPASSWD","Die angegebenen Passwörter stimmen nicht überein!");
define("_MEMBERSCREATED","Der Kunde wurde soeben erstellt und die Zugangsdaten wurden verschickt!");
define("_MEMBERSCREATEDNOEMAIL","Der Kunde wurde soeben erstellt aber die Zugangsdaten konnten nicht verschickt werden!");
define("_MEMBERSNOEMAIL","Es wurde noch kein Email Konto für System Mails angelegt!");
define("_MEMBERSPACKAGE","Kundenpaket");
define("_MEMBERSNEW","Kunden erstellen");
define("_MEMBERSSTATEOFACCOUNT","Kontostand");
define("_MEMBERSCLOSED","Gesperrt");
define("_MEMBERSNOTCLOSED","Nicht gesperrt");
define("_MEMBERSCANCELED","Gekündigt");
define("_MEMBERSPROFILID","Profil ID");
define("_MEMBERSPHONE","Telefon:");
define("_MEMBERSFAX","Fax:");
define("_MEMBERSEMAIL","eMail*:");
define("_MEMBERSBILLINGMAIL","Rechnungs-eMail:");
define("_MEMBERSLOGIN","Als Kunde einloggen");
define("_MEMBERSTITLE","Titel*:");
define("_MEMBERSFIRM","Firmenname:");
define("_MEMBERSVATID","UstID:");
define("_MEMBERSSURNAME","Vorname*:");
define("_MEMBERSNAME","Name*:");
define("_MEMBERSSTREET","Strasse*:");
define("_MEMBERSCITY","Ort*:");
define("_MEMBERSZIPCODE","PLZ*:");
define("_MEMBERSCOUNTRY","Land:");
define("_MEMBERSBIRTHDAY","Geburtstag:");
define("_MEMBERSCUSTOMER","Kontoinhaber:");
define("_MEMBERSBANK","Bank:");
define("_MEMBERSACCOUNT","Kontonummer:");
define("_MEMBERSBANKCODE","Bankleitzahl:");
define("_MEMBERSIBAN","IBAN:");
define("_MEMBERSBIC","BIC:");
define("_MEMBERSNAMEID","Name:");
define("_MEMBERSSTREETID","Strasse:");
define("_MEMBERSCITYID","Ort:");
define("_MEMBERSCOUNTRYID","Land:");
define("_MEMBERSPHONEID","Telefon:");
define("_MEMBERSEMAILID","Email:");
define("_MEMBERSREGDATEID","Registrierung:");
define("_MEMBERSMSGSEND","Nachricht schreiben");
define("_MEMBERSDEBIT","Lastschrift");
define("_MEMBERSDEBITLOOP","Lastschrift Dauerauftrag");
define("_MEMBERSWIRE","Vorkasse");
define("_MEMBERSDELETESEL","markierte Kunden löschen");
define("_MEMBERSCLOSESEL","markierte Kunden sperren");
define("_MEMBERSCANCELSEL","markierte Kunden kündigen");
define("_MEMBERSACTIVATESEL","markierte Kunden aktivieren");
define("_MEMBERSALLSTAT","<b>Kunden gesamt:</b>");
define("_MEMBERSACTIVESTAT","<b>Nicht gesperrt:</b>");
define("_MEMBERSCLOSEDSTAT","<b>Gesperrt:</b>");
define("_MEMBERSCANCELEDSTAT","<b>Gekündigt:</b>");
define("_MEMBERSID","Kundenkennung*:");
define("_MEMBERSGENERATEPASSWD","Passwort generieren");
define("_MEMBERSPASSWD","Passwort:");
define("_MEMBERSPASSWDCONTROL","Passwortkontrolle:");
define("_MEMBERSFTPPASSWD","FTP-Passwort:");
define("_MEMBERSORDERDATE","Bestellt zum:");
define("_MEMBERSNOENTRY","<b>Keine Kunden vorhanden!</b>");
define("_MEMBERSPAYDETAILS","Konto");
define("_MEMBERSPAYMETHODE","Zahlungsart:");
define("_MEMBERSMONEY","Kontostand:");
define("_MEMBERSCREDITS","Guthaben:");
define("_MEMBERSINFO","Infos");
define("_MEMBERSINFOTEXT","Infos:");
define("_MEMBERSSEARCHID","Kundenkennung");
define("_MEMBERSSEARCHMAIL","Email");
define("_MEMBERSSEARCHFIRM","Firma");
define("_MEMBERSSEARCHSNAME","Vorname");
define("_MEMBERSSEARCHNAME","Name");
define("_MEMBERSSEARCHSTREET","Straße");
define("_MEMBERSSEARCHCITY","Stadt");
define("_MEMBERSBILLSEND","Rechnungsversand:");
define("_MEMBERSBILLEMAIL","Email");
define("_MEMBERSBILLLETTER","Post");
define("_MEMBERSRSERVER","Kunden Rootserver");
define("_MEMBERSBILLS","Rechnungen");
define("_MEMBERSLINKBLOCK","Kunden Linkblock:");

define("_QUESTIONMEMBERSCHANGE","Wollen sie den Status wirklich ändern?");

define("_ASSISTENTMEMBERS","In diesem Modul können sie neue Kunden erstellen, sperren oder auch kündigen. Bitte beachten sie, dass wenn
sie einen Kunden kündigen auch noch nach Ablauf seiner Laufzeit, die Gameserver und Programme im Webinterface stoppen und löschen müssen.
Denn Kunden kündigen heißt in dieser Version, dass der Kunde für das Erstellen von Rechnungen und versenden des Newsletters nicht mehr berücksichtigt wird.");

define("_ASSISTENTMEMBERSEDIT","Sie können das Passwort und FTP Passwort Feld frei lassen, das jeweilige Passwort wird dann automatisch generiert.
Nachdem sie auf speichern geklickt haben wird dem Kunden eine Email zugeschickt. Den Inhalt dieser können sie im Emai Template Modul bestimmen.");

?>