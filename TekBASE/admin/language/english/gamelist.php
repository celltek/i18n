<?php

define("_GAMELISTDBSAVEERROR","Database error! The game couldn't be added!");
define("_GAMELISTCREATED","The game was successfully added!");
define("_GAMELISTDBUPERROR","Database error! The game couldn't be changed!");
define("_GAMELISTDBUPDATED","The game was changed!");
define("_GAMELISTDBDELERROR","Database error! The game couldn't be deleted!");
define("_GAMELISTDBDELETED","The game has been successfully deleted!");
define("_GAMELISTSTATUS","The selected games will be deleted!");
define("_GAMELISTNOTALLFIELDS","All required fields marked with an * weren't filled in!");
define("_GAMELISTEXIST","A game with this name already exists!");
define("_GAMELISTNEW","Add a game");
define("_GAMELISTNOENTRY","<b>No games available!</b>");
define("_GAMELISTDELETESEL","delete selected games");
define("_GAMELISTGAME","Game*:");
define("_GAMELISTSHORT","Shorrtcut*:");
define("_GAMELISTSHORTINFO","(can't be changed!)");
define("_GAMELISTSCRIPT","Start script*:");
define("_GAMELISTSCRIPTFOLDER","Start script folder:");
define("_GAMELISTVARNAMEA","Variable 1 name:");
define("_GAMELISTVARNAMEB","Variable 2 name:");
define("_GAMELISTVARPARA","Variable 1 parameter:");
define("_GAMELISTVARPARB","Variable 2 parameter:");
define("_GAMELISTSTDMAP","Standard map:");
define("_GAMELISTSTDTICK","Standard tickrate:");
define("_GAMELISTMEMBERSTART","Customer choices:");
define("_GAMELISTMAPSEL","Map choice");
define("_GAMELISTMODSEL","Mod choice");
define("_GAMELISTPWSEL","Password choice");
define("_GAMELISTTICKSEL","Tickrate choice");
define("_GAMELISTMULTI","Multi images:");
define("_GAMELISTMULTIONE","32Bit");
define("_GAMELISTMULTITWO","64Bit");
define("_GAMELISTMULTITHREE","32/64Bit");
define("_GAMELISTCLANVARI","Qstat clan server variable:");
define("_GAMELISTQSTAT","Qstat short cut*:");
define("_GAMELISTQUERYPORT","Request with queryport:");
define("_GAMELISTFILES","<b>Available files for the editor:</b>");
define("_GAMELISTNOFILES","No files available!");
define("_GAMELISTADDONS","<b>Addons:</b>");
define("_GAMELISTNOADDONS","No addons available!");
define("_GAMELISTMODS","<b>Mods:</b>");
define("_GAMELISTNOMODS","No Mods available!");
define("_GAMELISTISACTIVE","Activate games for root server customers?");
define("_GAMELISTLOCK","Not active");
define("_GAMELISTACTIVE","Active");


define("_QUESTIONGAMELISTCHANGE","Are you sure you wish to make these changes?");

define("_ASSISTENTGAMELIST","You can add games to the games list with this module. Once entered here, these games can be installed over the game servers module.
You are only allowed to install games that have first been entered into this list. A game image must also be created or available in the installation path. 
The name of the image must match the game's short name.<br><br>
32Bit - for Games that are only available in 32Bit version, but will run on a 64Bit platforms.<br>
64Bit - for Games that are only available in 64Bit versions<br>
32/64Bit - for Games that are available for either 32Bit or 64Bit versions.");

define("_ASSISTENTGAMELISTEDIT","You can use following variables:<br><br>
gsuser (Important for COD, CODII, ET, ...)<br>	  
gsmap (Map placeholder)<br>
gsplayer (Player count placeholder)<br>
gsip (IP from the server placeholder)<br>
gsport (Port from the server placeholder)<br>
gstick (Tickrate for CS:S, ... placeholder)<br>
gsmod (Mod start script placeholder)<br>
gspasswd (Password placeholder)<br>
Example<br><br>
<b>./start.sh -maxPlayers gsplayer -Port gsport</b><br><br>
You can use the Variation A and B for Vac deactivate or something:<br><br>
<b>Variable 1 name: Vac deactivated<br>
Variable parameter: -insecure</b>");

?>