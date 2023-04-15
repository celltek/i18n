<?php

define("_STREAMLISTDBSAVEERROR","Database error! The stream could not be added!");
define("_STREAMLISTCREATED","The stream has just been added!");
define("_STREAMLISTDBUPERROR","Database error! The stream could not be modified!");
define("_STREAMLISTDBUPDATED","The stream has been modified!");
define("_STREAMLISTDBDELERROR","Database error! The stream could not be deleted!");
define("_STREAMLISTDBDELETED","The stream has just been deleted from the web interface!");
define("_STREAMLISTSTATUS","The selected streams are now being deleted!");
define("_STREAMLISTNOTALLFIELDS","Not all fields marked with * have been filled out!");
define("_STREAMLISTEXIST","A stream with that name already exists!");
define("_STREAMLISTNEW","Add stream");
define("_STREAMLISTNOENTRY","<b>No streams available!</b>");
define("_STREAMLISTDELETESEL","delete marked streams");
define("_STREAMLISTSHORT","Short name*:");
define("_STREAMLISTNAME","Stream name*:");
define("_STREAMLISTTYP","Stream type*:");
define("_STREAMLISTOTHERS","Others");
define("_STREAMLISTCANTCHANGE","(Cannot be changed!)");
define("_STREAMLISTSCRIPT","Start script*:");
define("_STREAMLISTMULTI","Multi images:");
define("_STREAMLISTFILES","<b>Unlocked files for the editor:</b>");
define("_STREAMLISTNOFILES","No files available!");
define("_STREAMLISTISACTIVE","Activate stream for root server customers?");
define("_STREAMLISTLOCK","Not active");
define("_STREAMLISTACTIVE","Active");
define("_STREAMLISTRESETLIST","Protect config variables:");
define("_STREAMLISTPORTRANGE","Port range:");
define("_STREAMLISTPORTSTEP","Steps for port assignment:");
define("_STREAMLISTUPDATESCRIPT","Update script:");
define("_STREAMLISTMOREOPTIONS","<b>Advanced settings</b>");

define("_QUESTIONSTREAMLISTCHANGE","Do you really want to change the status?");

define("_ASSISTENTSTREAMLIST","In this module, you can add streams to the list. These can then be selected in the program module when creating a program.
You can only install programs on the servers that have been previously registered here. Additionally, you must create an image once and copy it to your "install path".
The name of the image must correspond to the specified short name.<br><br>
32Bit - for programs that are only available as 32-bit versions but also run on 64-bit systems<br>
64Bit - for programs that are only available as 64-bit versions<br>
32/64Bit - for programs that are available separately as 32-bit or 64-bit versions.<br><br>
You can use the following variables for the start script:<br><br>
gsslots (number of listeners)<br>
gsip (IP of the server)<br>
gsport (port of the server)<br>
gsbitrate (bitrate of the server)<br><br>
Example<br>
<b>./start.sh -Slots gsslots -Port gsport</b><br><br>
For the settings for the steps in port assignment, we recommend entering at least 50, as Shoutcast with AutoDJ 2.x occupies several ports. If you specify port 8000, for example,
the system reserves ports 8010 and 8020.
<br><br>
For the update script, you can use the variables gsimageserverone and gsimageservertwo, which stand for the respective image servers. In the following example, TekBASE would download and unpack the update image.
<br><br>
<b>wget gsimageserverone/sc2_update.tar;tar -xf sc2_update.tar;rm sc2_update.tar</b>");

?>