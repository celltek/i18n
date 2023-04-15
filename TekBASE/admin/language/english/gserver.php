<?php

define("_GSERVERNOTALLFIELDS","All required fields marked with an * weren't filled in!");
define("_GSERVERIPPORTEXIST","A game server with this ip and port already exists!");
define("_GSERVERPATHEXIST","This directory already exists for this customer!");
define("_GSERVERDBUPERROR","Database error! The game server couldn't be changed!");
define("_GSERVERDBUPDATED","The game server was changed!");
define("_GSERVERDBSAVEERROR","Database error! The game server couldn't be added!");
define("_GSERVERCREATED","The game server was successfully added!");
define("_GSERVERNEW","Add a game server");
define("_GSERVERNOENTRY","<b>No game server available!</b>");
define("_GSERVERDELETESEL","delete selected game servers");
define("_GSERVERSTARTSEL","restart selected game servers");
define("_GSERVERSTOPSEL","stop selected game servers");
define("_GSERVERSERVICEONSEL","activate service mode");
define("_GSERVERSERVICEOFFSEL","deactivate service mode");
define("_GSERVERINSTALLSEL","reinstall selected game servers");
define("_GSERVERMEMBER","Customer*:");
define("_GSERVERGAME","Game*:");
define("_GSERVERSERVER","Server IP*:");
define("_GSERVERPORT","Server port*:");
define("_GSERVERTICKRATE","Max tickrate:");
define("_GSERVERGAMESWITCH","Game switch:");
define("_GSERVERSLOTS","Slots*:");
define("_GSERVERPATH","Directory*:");
define("_GSERVERPATHEXAMPLE","(cs, css, bfii, ...)");
define("_GSERVERMULTIONE","32Bit");
define("_GSERVERMULTITWO","64Bit");
define("_GSERVERMULTITHREE","32/64Bit");
define("_GSERVERQUERY","Queryport:");
define("_GSERVERCLAN","Clan server");
define("_GSERVERPUBLIC","Public server");
define("_GSERVERSERVERSTATUS","Server status:");
define("_GSERVERPASSWORD","Server password:");
define("_GSERVERPASSWORDEXAMPLE","(only clan server)");
define("_GSERVERSCRIPT","Own start script:");
define("_GSERVERUSERSCRIPT","Start script adjustable:");
define("_GSERVERSTATUS","The selected game server status will be changed!");
define("_GSERVERSERVICEON","The service mode was activated!");
define("_GSERVERSERVICEONERROR","The service mode couldn't be activated!");
define("_GSERVERSERVICEONDBERROR","Database error! The service mode couldn't be activated!");
define("_GSERVERSERVICEOFF","The service mode was deactivated!");
define("_GSERVERSERVICEOFFDBERROR","Database error! The service mode couldn't be deactivated!");
define("_GSERVERDBDELERROR","Database error! The game server couldn't be deleted!");
define("_GSERVERDBDELETED","The game server has been successfully deleted!");
define("_GSERVERINSTALL","The game server will be reinstalled!");
define("_GSERVERINSTALLERROR","The game server couldn't be reinstalled!");
define("_GSERVERMEMADDRESS","<b>Address:</b>");
define("_GSERVERMEMPHONE","Phone:");
define("_GSERVERMEMEMAIL","Email:");
define("_GSERVERRSERVER","<b>Root server:</b>");
define("_GSERVERCPUINFO","<b>CPU:</b>");
define("_GSERVERRAM","<b>RAM:</b>");
define("_GSERVERHDDISK","<b>HDD:</b>");
define("_GSERVERTRAFFIC","<b>Traffic:</b>");
define("_GSERVERSWITCH","Game switch server");
define("_GSERVERNOSWITCH","No game switch server");
define("_GSERVERLOAD","Workload:");
define("_GSERVERPERCENT","%");
define("_GSERVERBACKUP","Backup available:");
define("_GSERVERWEBFTP","WebFTP available:");


define("_QUESTIONGSERVERCHANGE","Are you sure you wish to make these changes?");

define("_ASSISTENTGSERVER","With this module you can create and manage game servers. You can start, stop or delete multiple game servers at the same time. 
You can also set individual servers to maintenance mode. This mean that the customer cannot manage the server. We will also find the online status, 
the game and if a clan server is being used as a public server (without password). Clan server (passworded servers) are listed in Red text.
<br><br>
If gameswitch was selected, customer can install multiple game servers on the same IP and Port. The webinterface will automatically stop the existing game 
servers before switching to the new game. For instance, you can install 10 different games for the customer, but only one can be running at any one time.");

?>