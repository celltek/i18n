<?php

define("_STREAMLISTDBSAVEERROR","Database error! The stream could not be added!");
define("_STREAMLISTCREATED","The stream has just been added!");
define("_STREAMLISTDBUPERROR","Database error! The stream could not be changed!");
define("_STREAMLISTDBUPDATED","The stream has been updated!");
define("_STREAMLISTDBDELERROR","Database error! The stream could not be deleted!");
define("_STREAMLISTDBDELETED","The stream has just been deleted from the web interface!");
define("_STREAMLISTSTATUS","The selected streams are now being deleted!");
define("_STREAMLISTNOTALLFIELDS","Not all fields marked with a * have been filled in!");
define("_STREAMLISTEXIST","A stream with this name already exists!");
define("_STREAMLISTNEW","Add stream");
define("_STREAMLISTNOENTRY","<b>No streams available!</b>");
define("_STREAMLISTDELETESEL","delete selected streams");
define("_STREAMLISTSHORT","Shortcut*:");
define("_STREAMLISTNAME","Stream*:");
define("_STREAMLISTTYP","Stream type*:");
define("_STREAMLISTOTHERS","Other");
define("_STREAMLISTCANTCHANGE","(Cannot be changed!)");
define("_STREAMLISTSCRIPT","Start script*:");
define("_STREAMLISTMULTI","Multi images:");
define("_STREAMLISTFILES","<b>Enabled files for the editor:</b>");
define("_STREAMLISTNOFILES","No files available!");
define("_STREAMLISTISACTIVE","Activate stream for root server customers?");
define("_STREAMLISTLOCK","Inactive");
define("_STREAMLISTACTIVE","Active");
define("_STREAMLISTRESETLIST","Protect config variables:");
define("_STREAMLISTPORTRANGE","Port range:");
define("_STREAMLISTPORTSTEP","Steps for port allocation:");
define("_STREAMLISTUPDATESCRIPT","Update script:");
define("_STREAMLISTMOREOPTIONS","<b>Advanced settings</b>");

define("_QUESTIONSTREAMLISTCHANGE","Do you really want to change the status?");

define("_ASSISTENTSTREAMLIST","In this module you can add streams to the list. These can then be selected when creating a program in the program module.
You can only install programs on the servers that have been registered here before. Additionally, you need to create an image and copy it to your "install path" once.
The name of the image must match the specified shortcut.<br><br>
32Bit - for programs that are only available as 32-bit versions but can also run on 64-bit systems<br>
64Bit - for programs that are only available as 64-bit versions<br>
32/64Bit - for programs that are available separately as 32-bit or 64-bit versions.<br><br>
You can use the following variables for the start script:<br><br>
gsslots (number of listeners)<br>
gsip (server IP)<br>
gsport (server port)<br>
gsbitrate (server bitrate)<br><br>
Example<br>
<b>./start.sh -Slots gsslots -Port gsport</b><br><br>
For the settings for the steps in port allocation, we recommend entering at least 50, as the Shoutcast with AutoDJ 2.x occupies multiple ports. If you specify port 8000
then the system reserves 8010 and 8020 as well.
<br><br>
For the update script, you can use the variables gsimageserverone and gsimageservertwo, which stand for the respective image servers. In the following example, TekBASE would download and unpack the update image.
<br><br>
<b>wget gsimageserverone/sc2_update.tar;tar -xf sc2_update.tar;rm sc2_update.tar</b>");

?>