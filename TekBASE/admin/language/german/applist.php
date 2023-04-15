<?php

define("_APPLISTDBSAVEERROR","Datenbankfehler! Das Programm konnte nicht hinzugefügt werden!");
define("_APPLISTCREATED","Das Programm wurde soeben hinzugefügt!");
define("_APPLISTDBUPERROR","Datenbankfehler! Das Programm konnte nicht geändert werden!");
define("_APPLISTDBUPDATED","Das Programm wurde geändert!");
define("_APPLISTDBDELERROR","Datenbankfehler! Das Programm konnte nicht gelöscht werden!");
define("_APPLISTDBDELETED","Das Programm wurde soeben aus dem Webinterface gelöscht!");
define("_APPLISTSTATUS","Die ausgewählten Programme werden nun gelöscht!");
define("_APPLISTNOTALLFIELDS","Es wurden nicht alle mit einem * gekennzeichneten Felder ausgefüllt!");
define("_APPLISTEXIST","Es existiert schon ein Programm mit dem Namen!");
define("_APPLISTNEW","Programm eintragen");
define("_APPLISTNOENTRY","<b>Keine Programme vorhanden!</b>");
define("_APPLISTDELETESEL","markierte Programme löschen");
define("_APPLISTSHORT","Kürzel*:");
define("_APPLISTNAME","Programmname*:");
define("_APPLISTCANTCHANGE","(Kann nicht geändert werden!)");
define("_APPLISTSCRIPT","Startscript*:");
define("_APPLISTVARNAMEA","Variable 1 Name:");
define("_APPLISTVARNAMEB","Variable 2 Name:");
define("_APPLISTVARPARA","Variable 1 Parameter:");
define("_APPLISTVARPARB","Variable 2 Parameter:");
define("_APPLISTMULTI","Multi Images:");
define("_APPLISTFILES","<b>Freigeschaltete Dateien für den Editor:</b>");
define("_APPLISTNOFILES","Keine Dateien vorhanden!");
define("_APPLISTMOREOPTIONS","<b>Erweiterte Einstellungen</b>");
define("_APPLISTUPDATESCRIPT","Updatescript:");
define("_APPLISTPIDFILE","PID Datei falls nötig:");

define("_QUESTIONAPPLISTCHANGE","Wollen sie den Status wirklich ändern?");

define("_ASSISTENTAPPLIST","In diesem Modul können sie Programme der Liste hinzufügen. Diese können dann im Programm Modul beim erstellen eines Programmes ausgewählt werden.
Sie können nur Programme auf den Servern installieren, die vorher auch hier eingetragen worden sind. Außerdem müssen sie einmalig ein Image erstellen und in ihr \"Installpfad\" kopieren.
Der Name des Images muss dem angegebenem Kürzel entsprechen. Als Variable kann man hier gsip und gsport in das Startscript eintragen dieses wird dann durch den im Programm Modul zum jeweiligen
Kundenprogramm gehörendem Port ersetzt.<br><br>
32Bit - für Programme die nur als 32Bit Variante verfügbar sind aber auch auf 64Bit Systemen laufen<br>
64Bit - für Programme die nur als 64Bit Variante verfügbar sind<br>
32/64Bit - für Programme die getrennt als 32Bit oder 64Bit Versionen verfügbar sind
<br><br>
Als Updateskript können sie die Variablen gsimageserverone bzw. gsimageservertwo verwenden diese steht für den jeweiligen Imageserver.Im folgenden Beispiel würde das TekBASE das Update Image downloaden und entpacken.
<br><br>
<b>wget gsimageserverone/egg_update.tar;tar -xf egg_update.tar;rm egg_update.tar</b>");

?>