<?php

define("_GAMELISTDBSAVEERROR","Database error! The game could not be added!");
define("_GAMELISTCREATED","The game has just been added!");
define("_GAMELISTDBUPERROR","Database error! The game could not be updated!");
define("_GAMELISTDBUPDATED","The game has been updated!");
define("_GAMELISTDBDELERROR","Database error! The game could not be deleted!");
define("_GAMELISTDBDELETED","The game has just been deleted from the web interface!");
define("_GAMELISTSTATUS","The selected games are now being deleted!");
define("_GAMELISTNOTALLFIELDS","Not all fields marked with * have been filled out!");
define("_GAMELISTEXIST","A game with the same name already exists!");
define("_GAMELISTNEW","Add Game");
define("_GAMELISTNOENTRY","<b>No games available!</b>");
define("_GAMELISTDELETESEL","delete selected games");
define("_GAMELISTGAME","Game*:");
define("_GAMELISTSHORT","Abbreviation*:");
define("_GAMELISTSHORTINFO","(Cannot be changed!)");
define("_GAMELISTSCRIPT","Start script*:");
define("_GAMELISTSCRIPTFOLDER","Start script folder:");
define("_GAMELISTVARNAMEA","Variable 1 name:");
define("_GAMELISTVARNAMEB","Variable 2 name:");
define("_GAMELISTVARNAMEC","Variable 3 name:");
define("_GAMELISTVARNAMED","Variable 4 name:");
define("_GAMELISTVARNAMEE","Variable 5 name:");
define("_GAMELISTVARNAMEF","Variable 6 name:");
define("_GAMELISTVARPARA","Variable 1 parameter:");
define("_GAMELISTVARPARB","Variable 2 parameter:");
define("_GAMELISTVARPARC","Variable 3 parameter:");
define("_GAMELISTVARPARD","Variable 4 parameter:");
define("_GAMELISTVARPARE","Variable 5 parameter:");
define("_GAMELISTVARPARF","Variable 6 parameter:");
define("_GAMELISTSTDMAP","Standard map:");
define("_GAMELISTSTDTICK","Standard tickrate:");
define("_GAMELISTMEMBERSTART","Customer start window:");
define("_GAMELISTMAPSEL","Map selection");
define("_GAMELISTMODSEL","Mod selection");
define("_GAMELISTPWSEL","Password selection");
define("_GAMELISTTICKSEL","Tickrate selection");
define("_GAMELISTSERVERFILE","Filename without extension:");
define("_GAMELISTMULTI","Multi images:");
define("_GAMELISTCLANVARI","Qstat clanserver variable:");
define("_GAMELISTGAMEQ","GameQ abbreviation:");
define("_GAMELISTQSTAT","Qstat abbreviation:");
define("_GAMELISTQUERYPORT","Query with query port:");
define("_GAMELISTFILES","<b>Unlocked files for the editor:</b>");
define("_GAMELISTNOFILES","No files available!");
define("_GAMELISTADDONS","<b>Addons:</b>");
define("_GAMELISTNOADDONS","No addons available!");
define("_GAMELISTMODS","<b>Mods:</b>");
define("_GAMELISTNOMODS","No mods available!");
define("_GAMELISTISACTIVE","Activate game for root server customers?");
define("_GAMELISTLOCK","Inactive");
define("_GAMELISTACTIVE","Active");
define("_GAMELISTRESETLIST","Protect config variables:");
define("_GAMELISTPROTECTFILE","File to protect:");
define("_GAMELISTPORTRANGE","Port range:");
define("_GAMELISTPORTSTEP","Steps for port assignment:");
define("_GAMELISTPROTECTED","Protection mode game:");
define("_GAMELISTNONPROTECTED","Unlocked files:");
define("_GAMELISTCOPYFILES","Protected files:");
define("_GAMELISTINSTALLSCRIPT","or Install script:");
define("_GAMELISTUPDATESCRIPT","Update script:");
define("_GAMELISTHLSTATS","HlStatsX CE:");
define("_GAMELISTWORKSHOPID","Workshop ID:");
define("_GAMELISTSTEAMAPPID","Steam AppID:");
define("_GAMELISTPROTECTIONINFO","If you select Yes for the Protection Mode game, make sure that the same game exists without Protection Mode.<br>
The abbreviation of the Protection Mode game must be identical, but with the addition of -p. For Counter-Strike, the abbreviation is cs for a<br>
Protection Mode game, it should then be cs-p. Protection Mode games are not listed in the game selection when creating a<br>
game server. For shared files, please list the files that you want to share. For the<br>
server.cfg of Counter-Strike, it would be cstrike/server.cfg");

define("_GAMELISTSOFTLIMIT","Soft storage limit:");
define("_GAMELISTSOFTLIMITEXAMPLE","(100M, 1G, ...)");

define("_QUESTIONGAMELISTCHANGE","Do you really want to change the status?");
define("_ASSISTENTGAMELIST", "In this module you can add games to the list. These games can then be selected when creating a game server in the Game Server module.
You can only install games on servers that have been registered here. In addition, you must create an image and copy it to your 'install path' once.
The name of the image must correspond to the specified abbreviation. The Startscript Folder field is only required if the start script is not in the main folder. <br><br>
32-bit - for programs that are only available as 32-bit versions but also run on 64-bit systems <br>
64-bit - for programs that are only available as 64-bit versions <br>
32/64-bit - for programs that are available separately as 32-bit or 64-bit versions. <br><br>
You can use the following variables for the start script: <br><br>
gsuser (Important for e.g. COD, CODII, ET) <br>
gsmap (Map that should be called up) <br>
gsplayer (Number of players) <br>
gsip (IP of the server) <br>
gsport, gsqueryport (Port and query port of the server) <br>
gsmod (Mod or other) <br>
gsram (RAM e.g. for Minecraft) <br>
gstick (Tickrate e.g. for CS:S) <br>
gspasswd (Password of the server) <br>
gsgamekey (Game key, token, etc. for e.g. Steam) <br>
gsworkshopid (Workshop ID for Steam) <br><br>
Example <br>
<b>./start.sh -maxPlayers gsplayer -Port gsport</b> <br><br>
If no Qstat abbreviation is available for the game, please enter 'no'. The five variable fields are there so that the customer can also select, for example, to deactivate Vac in the server start window next to the selection fields for map, tickrate and password. Simply write the following in the variable fields:<br><br>
<b>Variable name: Deactivate Vac <br>
Variable parameter: -insecure</b> <br><br>
It is important that if you specify that map selection, tickrate selection, etc. should be available in the start window, you also specify the placeholders for these variables in the start script and also release the corresponding map files in the Game Maps module. <br><br>
You can use the variables gsimageserverone or gsimageservertwo as the update script, which represents the respective image server. In the following example, TekBASE would download and unpack the update image. <br><br>
<b>wget gsimageserverone/css_update.tar;tar -xf css_update.tar;rm css_update.tar</b>");

?>