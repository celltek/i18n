<?php

define("_APPLISTDBSAVEERROR","Database error! The program could not be added!");
define("_APPLISTCREATED","The program has just been added!");
define("_APPLISTDBUPERROR","Database error! The program could not be modified!");
define("_APPLISTDBUPDATED","The program has been modified!");
define("_APPLISTDBDELERROR","Database error! The program could not be deleted!");
define("_APPLISTDBDELETED","The program has just been deleted from the web interface!");
define("_APPLISTSTATUS","The selected programs are being deleted now!");
define("_APPLISTNOTALLFIELDS","Not all fields marked with * have been filled in!");
define("_APPLISTEXIST","There is already a program with this name!");
define("_APPLISTNEW","Add program");
define("_APPLISTNOENTRY","<b>No programs available!</b>");
define("_APPLISTDELETESEL","delete selected programs");
define("_APPLISTSHORT","Short name*:");
define("_APPLISTNAME","Program name*:");
define("_APPLISTCANTCHANGE","(Cannot be changed!)");
define("_APPLISTSCRIPT","Start script*:");
define("_APPLISTVARNAMEA","Variable 1 name:");
define("_APPLISTVARNAMEB","Variable 2 name:");
define("_APPLISTVARPARA","Variable 1 parameter:");
define("_APPLISTVARPARB","Variable 2 parameter:");
define("_APPLISTMULTI","Multi images:");
define("_APPLISTFILES","<b>Enabled files for the editor:</b>");
define("_APPLISTNOFILES","No files available!");
define("_APPLISTMOREOPTIONS","<b>Advanced settings</b>");
define("_APPLISTUPDATESCRIPT","Update script:");
define("_APPLISTPIDFILE","PID file if necessary:");

define("_QUESTIONAPPLISTCHANGE","Do you really want to change the status?");

define("_ASSISTENTAPPLIST","In this module you can add programs to the list. These can then be selected when creating a program in the program module.
You can only install programs on the servers that have been previously registered here. In addition, you need to create an image once and copy it to your "install path".
The name of the image must correspond to the specified short name. Here you can enter gsip and gsport into the start script as variables. This will then be replaced by the corresponding port for the respective customer program in the program module.<br><br>
32Bit - for programs that are only available as 32-bit versions but also run on 64-bit systems<br>
64Bit - for programs that are only available as 64-bit versions<br>
32/64Bit - for programs that are available separately as 32-bit or 64-bit versions
<br><br>
As an update script, you can use the variables gsimageserverone and gsimageservertwo, which stand for the respective image servers. In the following example, TekBASE would download and extract the update image:
<br><br>
<b>wget gsimageserverone/egg_update.tar;tar -xf egg_update.tar;rm egg_update.tar</b>");

?>