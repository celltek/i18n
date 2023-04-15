<?php

define("_GSERVERNOTALLFIELDS","Es wurden nicht alle mit einem * gekennzeichneten Felder ausgefüllt!");
define("_GSERVERIPPORTEXIST","Es existiert schon ein Gameserver mit der IP und dem Port!");
define("_GSERVERPATHEXIST","Das Verzeichnis existiert schon für diesen Kunden!");
define("_GSERVERDBUPERROR","Datenbankfehler! Der Gameserver konnte nicht geändert werden!");
define("_GSERVERDBUPDATED","Der Gameserver wurde geändert!");
define("_GSERVERDBSAVEERROR","Datenbankfehler! Der Gameserver konnte nicht hinzugefügt werden!");
define("_GSERVERCREATED","Der Gameserver wurde soeben hinzugefügt!");
define("_GSERVERNEW","Gameserver eintragen");
define("_GSERVERNOENTRY","<b>Keine Gameserver vorhanden!</b>");
define("_GSERVERDELETESEL","markierte Gameserver löschen");
define("_GSERVERSTARTSEL","markierte Gameserver neustarten");
define("_GSERVERSTOPSEL","markierte Gameserver stoppen");
define("_GSERVERSERVICEONSEL","Wartungsmodus aktivieren");
define("_GSERVERSERVICEOFFSEL","Wartungsmodus deaktivieren");
define("_GSERVERINSTALLSEL","markierte Gameserver neuinstalliern");
define("_GSERVERMEMBER","Kunde*:");
define("_GSERVERGAME","Spiel*:");
define("_GSERVERSERVER","Server IP*:");
define("_GSERVERPORT","Serverport*:");
define("_GSERVERCPUCORES","CPU Kern zuweisen:");
define("_GSERVERRAM","RAM falls notwendig:");
define("_GSERVERTICKRATE","Max Tickrate:");
define("_GSERVERGAMESWITCH","Gameswitch:");
define("_GSERVERGAMESWITCHMAX","Gameswitch Server max:");
define("_GSERVERPROTECTED","Protection Mode:");
define("_GSERVERSLOTS","Slotanzahl*:");
define("_GSERVERPATH","Verzeichnis*:");
define("_GSERVERPATHEXAMPLE","(cs, css, bfii, ...)");
define("_GSERVERQUERY","Queryport:");
define("_GSERVERCLAN","Clanserver");
define("_GSERVERPUBLIC","Public");
define("_GSERVERSERVERSTATUS","Serverstatus:");
define("_GSERVERPASSWORD","Serverpasswort:");
define("_GSERVERPASSWORDEXAMPLE","(nur Clanservern)");
define("_GSERVERSCRIPT","Eigenes Startscript:");
define("_GSERVERUSERSCRIPT","Startscript anpassbar:");
define("_GSERVERSTATUS","Der Gameserverstatus wird nun neu gesetzt!");
define("_GSERVERSERVICEON","Der Wartungsmodus wurde aktiviert!");
define("_GSERVERSERVICEONERROR","Der Wartungsmodus konnte nicht aktiviert werden!");
define("_GSERVERSERVICEONDBERROR","Datenbankefehler! Der Wartungsmodus konnte nicht aktiviert werden!");
define("_GSERVERSERVICEOFF","Der Wartungsmodus wurde deaktiviert!");
define("_GSERVERSERVICEOFFDBERROR","Datenbankefehler! Der Wartungsmodus konnte nicht deaktiviert werden!");
define("_GSERVERDBDELERROR","Datenbankfehler! Der Gameserver konnte nicht gelöscht werden!");
define("_GSERVERDBDELETED","Der Gameserver wurde soeben aus dem Webinterface gelöscht!");
define("_GSERVERREINSTALLED","Der Gameserver wird nun neuinstalliert!");
define("_GSERVERREINSTALLERROR","Der Gameserver konnte nicht neuinstalliert werden!");
define("_GSERVERINSTALLERROR","Der Gameserver konnte nicht installiert werden!");
define("_GSERVERRSERVER","<b>Rootserver:</b>");
define("_GSERVERCPUINFO","<b>CPU:</b>");
define("_GSERVERRAMTWO","<b>RAM:</b>");
define("_GSERVERHDDISK","<b>HDD:</b>");
define("_GSERVERTRAFFIC","<b>Traffic:</b>");
define("_GSERVERSWITCH","Gameswitch Server");
define("_GSERVERBACKUP","Backup erlauben:");
define("_GSERVERREINSTALL","Neuinstallation erlauben:");
define("_GSERVERWEBFTP","WebFTP erlauben:");
define("_GSERVERSCREENLOG","Screenlog");
define("_GSERVEREASYCONF","<b>Zusätzliche Erweiterung:</b>");
define("_GSERVERLINKTOPRODUCT","Produkt zuweisen:");


define("_QUESTIONGSERVERCHANGE","Wollen sie den Status wirklich ändern?");

define("_ASSISTENTGSERVER","In diesem Modul können sie Gameserver erstellen, löschen, neustarten oder stoppen. Bitte beachten sie, dass wenn ein Kunde
auf einer IP schon einen Gameserver hat, nicht noch einmal das selbe Verzeichniss gewählt wird, denn dies kann zu Fehlern führen. Sollten sie Gameswitch auswählen
so können sie dem Kunden mehrere Gameserver auf der gleichen IP und dem gleichen Port installieren, das Webinterface stoppt dann automatische alle Server mit
der gleichen IP und Port bevor es einen anderen startet. So können sie dem Kunden zum Beispiel 10 verschieden Gameserver installieren aber der Kunde kann immer
nur einen starten.");

?>