<?php

define("_STREAMLISTDBSAVEERROR","Datenbankfehler! Der Stream konnte nicht hinzugefügt werden!");
define("_STREAMLISTCREATED","Der Stream wurde soeben hinzugefügt!");
define("_STREAMLISTDBUPERROR","Datenbankfehler! Der Stream konnte nicht geändert werden!");
define("_STREAMLISTDBUPDATED","Der Stream wurde geändert!");
define("_STREAMLISTDBDELERROR","Datenbankfehler! Der Stream konnte nicht gelöscht werden!");
define("_STREAMLISTDBDELETED","Der Stream wurde soeben aus dem Webinterface gelöscht!");
define("_STREAMLISTSTATUS","Die ausgewählten Streams werden nun gelöscht!");
define("_STREAMLISTNOTALLFIELDS","Es wurden nicht alle mit einem * gekennzeichneten Felder ausgefüllt!");
define("_STREAMLISTEXIST","Es existiert schon ein Stream mit dem Namen!");
define("_STREAMLISTNEW","Stream eintragen");
define("_STREAMLISTNOENTRY","<b>Keine Streams vorhanden!</b>");
define("_STREAMLISTDELETESEL","markierte Streams löschen");
define("_STREAMLISTSHORT","Kürzel*:");
define("_STREAMLISTNAME","Stream*:");
define("_STREAMLISTTYP","Streamtyp*:");
define("_STREAMLISTOTHERS","Sonstige");
define("_STREAMLISTCANTCHANGE","(Kann nicht geändert werden!)");
define("_STREAMLISTSCRIPT","Startscript*:");
define("_STREAMLISTMULTI","Multi Images:");
define("_STREAMLISTFILES","<b>Freigeschaltete Dateien für den Editor:</b>");
define("_STREAMLISTNOFILES","Keine Dateien vorhanden!");
define("_STREAMLISTISACTIVE","Stream für Rootserver Kunden aktivieren?");
define("_STREAMLISTLOCK","Nicht aktiv");
define("_STREAMLISTACTIVE","Aktiv");
define("_STREAMLISTRESETLIST","Config Variablen schützen:");
define("_STREAMLISTPORTRANGE","Portrange:");
define("_STREAMLISTPORTSTEP","Schritte für Portvergabe:");
define("_STREAMLISTUPDATESCRIPT","Updatescript:");
define("_STREAMLISTMOREOPTIONS","<b>Erweiterte Einstellungen</b>");

define("_QUESTIONSTREAMLISTCHANGE","Wollen sie den Status wirklich ändern?");

define("_ASSISTENTSTREAMLIST","In diesem Modul können sie Streams der Liste hinzufügen. Diese können dann im Programm Modul beim erstellen eines Programmes ausgewählt werden.
Sie können nur Programme auf den Servern installieren, die vorher auch hier eingetragen worden sind. Außerdem müssen sie einmalig ein Image erstellen und in ihr \"Installpfad\" kopieren. 
Der Name des Images muss dem angegebenem Kürzel entsprechen.<br><br>
32Bit - für Programme die nur als 32Bit Variante verfügbar sind aber auch auf 64Bit Systemen laufen<br>
64Bit - für Programme die nur als 64Bit Variante verfügbar sind<br>
32/64Bit - für Programme die getrennt als 32Bit oder 64Bit Versionen verfügbar sind.<br><br>
Als Variablen für das Startscript können sie folgendes verwenden:<br><br>
gsslots (Anzahl der Zuhörer)<br>
gsip (IP des Servers)<br>
gsport (Port des Servers)<br>
gsbitrate (Bitrate des Servers)<br><br>
Beispiel<br>
<b>./start.sh -Slots gsslots -Port gsport</b><br><br>
Bei den Einstellungen für die Schritte bei der Portvergabe empfehlen wir mindestens 50 einzutragen, da der Shoutcast mit AutoDJ 2.x mehrere Ports belegt. Wenn sie als Port 8000 angeben
so werden vom System noch 8010 und 8020 reserviert.
<br><br>
Als Updateskript können sie die Variablen gsimageserverone bzw. gsimageservertwo verwenden diese steht für den jeweiligen Imageserver.Im folgenden Beispiel würde das TekBASE das Update Image downloaden und entpacken.
<br><br>
<b>wget gsimageserverone/sc2_update.tar;tar -xf sc2_update.tar;rm sc2_update.tar</b>");

?>