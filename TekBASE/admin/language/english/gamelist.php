<?php

define("_GAMELISTDBSAVEERROR","Datenbankfehler! Das Spiel konnte nicht hinzugefügt werden!");
define("_GAMELISTCREATED","Das Spiel wurde soeben hinzugefügt!");
define("_GAMELISTDBUPERROR","Datenbankfehler! Das Spiel konnte nicht geändert werden!");
define("_GAMELISTDBUPDATED","Das Spiel wurde geändert!");
define("_GAMELISTDBDELERROR","Datenbankfehler! Das Spiel konnte nicht gelöscht werden!");
define("_GAMELISTDBDELETED","Das Spiel wurde soeben aus dem Webinterface gelöscht!");
define("_GAMELISTSTATUS","Die ausgewählten Spiele werden nun gelöscht!");
define("_GAMELISTNOTALLFIELDS","Es wurden nicht alle mit einem * gekennzeichneten Felder ausgefüllt!");
define("_GAMELISTEXIST","Es existiert schon ein Spiel mit dem Namen!");
define("_GAMELISTNEW","Spiel eintragen");
define("_GAMELISTNOENTRY","<b>Keine Spiele vorhanden!</b>");
define("_GAMELISTDELETESEL","markierte Spiele löschen");
define("_GAMELISTGAME","Spiel*:");
define("_GAMELISTSHORT","Kürzel*:");
define("_GAMELISTSHORTINFO","(Kann nicht geändert werden!)");
define("_GAMELISTSCRIPT","Startscript*:");
define("_GAMELISTSCRIPTFOLDER","Startscript Ordner:");
define("_GAMELISTVARNAMEA","Variable 1 Name:");
define("_GAMELISTVARNAMEB","Variable 2 Name:");
define("_GAMELISTVARNAMEC","Variable 3 Name:");
define("_GAMELISTVARNAMED","Variable 4 Name:");
define("_GAMELISTVARNAMEE","Variable 5 Name:");
define("_GAMELISTVARNAMEF","Variable 6 Name:");
define("_GAMELISTVARPARA","Variable 1 Parameter:");
define("_GAMELISTVARPARB","Variable 2 Parameter:");
define("_GAMELISTVARPARC","Variable 3 Parameter:");
define("_GAMELISTVARPARD","Variable 4 Parameter:");
define("_GAMELISTVARPARE","Variable 5 Parameter:");
define("_GAMELISTVARPARF","Variable 6 Parameter:");
define("_GAMELISTSTDMAP","Standard Map:");
define("_GAMELISTSTDTICK","Standard Tickrate:");
define("_GAMELISTMEMBERSTART","Kunden Startfenster:");
define("_GAMELISTMAPSEL","Map Auswahl");
define("_GAMELISTMODSEL","Mod Auswahl");
define("_GAMELISTPWSEL","Passwort Auswahl");
define("_GAMELISTTICKSEL","Tickrate Auswahl");
define("_GAMELISTSERVERFILE","Dateiname ohne Endung:");
define("_GAMELISTMULTI","Multi Images:");
define("_GAMELISTCLANVARI","Qstat Clanserver Variable:");
define("_GAMELISTGAMEQ","GameQ Kürzel:");
define("_GAMELISTQSTAT","Qstat Kürzel:");
define("_GAMELISTQUERYPORT","Abfrage mit Queryport:");
define("_GAMELISTFILES","<b>Freigeschaltete Dateien für den Editor:</b>");
define("_GAMELISTNOFILES","Keine Dateien vorhanden!");
define("_GAMELISTADDONS","<b>Addons:</b>");
define("_GAMELISTNOADDONS","Keine Addons vorhanden!");
define("_GAMELISTMODS","<b>Mods:</b>");
define("_GAMELISTNOMODS","Keine Mods vorhanden!");
define("_GAMELISTISACTIVE","Spiel für Rootserver Kunden aktivieren?");
define("_GAMELISTLOCK","Nicht aktiv");
define("_GAMELISTACTIVE","Aktiv");
define("_GAMELISTRESETLIST","Config Variablen schützen:");
define("_GAMELISTPROTECTFILE","Zu schützende Datei:");
define("_GAMELISTPORTRANGE","Portrange:");
define("_GAMELISTPORTSTEP","Schritte für Portvergabe:");
define("_GAMELISTPROTECTED","Protection Mode Spiel:");
define("_GAMELISTNONPROTECTED","Freigegebene Dateien:");
define("_GAMELISTCOPYFILES","Geschützte Dateien:");
define("_GAMELISTINSTALLSCRIPT","oder Installscript:");
define("_GAMELISTUPDATESCRIPT","Updatescript:");
define("_GAMELISTHLSTATS","HlStatsX CE:");
define("_GAMELISTWORKSHOPID","Workshop ID:");
define("_GAMELISTSTEAMAPPID","Steam AppID:");
define("_GAMELISTPROTECTIONINFO","Wenn sie bei Protection Mode Spiel Ja auswählen, so stellen sie sicher, dass das gleiche Spiel auch ohne Protection Mode existiert.<br>
Das Kürzel des Protection Mode Spieles muss identisch sein jedoch mit dem Zusatz -p. Bei Counter-Strike lautet das Kürzel cs für ein<br>
Protection Mode Spiel müsste es dann cs-p lauten. Protection Mode Spiele werden nicht in der Spiele Auswahl beim Anlegen eines<br>
Gameservers aufgelistet. Bei Freigegebene Dateien geben Sie bitte untereinander die Dateien an, die Sie freigeben möchten. Für die<br>
server.cfg von Counter-Strike wäre es cstrike/server.cfg");

define("_GAMELISTSOFTLIMIT","Speicherplatz Softlimit:");
define("_GAMELISTSOFTLIMITEXAMPLE","(100M, 1G, ...)");

define("_QUESTIONGAMELISTCHANGE","Wollen sie den Status wirklich ändern?");

define("_ASSISTENTGAMELIST","In diesem Modul können sie Spiele der Liste hinzufügen. Diese können dann im Gameserver Modul beim erstellen eines Gameservers ausgewählt werden.
Sie können nur Spiele auf den Servern installieren, die vorher auch hier eingetragen worden sind. Außerdem müssen sie einmalig ein Image erstellen und in ihr \"Installpfad\" kopieren.
Der Name des Images muss dem angegebenem Kürzel entsprechen. Bei dem Feld Startscript Ordner wird nur benötigt, wenn das Startscript nicht im Hauptordner liegt.<br><br>
32Bit - für Programme die nur als 32Bit Variante verfügbar sind aber auch auf 64Bit Systemen laufen<br>
64Bit - für Programme die nur als 64Bit Variante verfügbar sind<br>
32/64Bit - für Programme die getrennt als 32Bit oder 64Bit Versionen verfügbar sind.<br><br>
Als Variablen für das Startscript können sie folgendes verwenden:<br><br>
gsuser (Wichtig für z.B. COD, CODII, ET)<br>	  
gsmap (Map die aufgerufen werden soll)<br>
gsplayer (Anzahl der Spieler)<br>
gsip (IP des Servers)<br>
gsport, gsqueryport (Port und Queryport des Servers)<br>
gsmod (Mod oder sonstiges)<br>
gsram (RAM z.b. bei Minecraft)<br>
gstick (Tickrate z.B. bei CS:S)<br>
gspasswd (Passwort des Servers)<br>
gsgamekey (Gamekey, Tokken, etc für z.B.: Steam)<br>
gsworkshopid (Workshop ID für Steam)<br><br>
Beispiel<br>
<b>./start.sh -maxPlayers gsplayer -Port gsport</b><br><br>
Sollte für das Spiel kein Qstat Kürzel Verfügbar sein, so geben Sie bitte no ein. Die fünf Variablenfelder sind dazu da, dass man der Kunden im Serverstartfenster neben den Auswahlfeldern für Map, Tickrate und Passwort auch noch zum Beispiel Vac deaktivieren
auswählen kann. Dazu zum Beispiel einfach in den Variablen Feldern folgendes schreiben:<br><br>
<b>Variablen Name: Vac deaktivieren<br>
Variablen Parameter: -insecure</b><br><br>
Wichtig ist, wenn sie angeben, dass Map Auswahl, Tickrate Auswahl usw. im Startfenster verfügbar sein soll, sie auch im Startscript die Platzhalter für diese Variablen angeben und auch
im Spielemaps Modul die entsprechenden Map Dateien freigeben.
<br><br>
Als Updateskript können sie die Variablen gsimageserverone bzw. gsimageservertwo verwenden diese steht für den jeweiligen Imageserver.Im folgenden Beispiel würde das TekBASE das Update Image downloaden und entpacken.
<br><br>
<b>wget gsimageserverone/css_update.tar;tar -xf css_update.tar;rm css_update.tar</b>");

?>