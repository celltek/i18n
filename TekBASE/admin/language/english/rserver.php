<?php

define("_RSERVERNOTALLFIELDS","All required fields marked with an * weren't filled in!");
define("_RSERVEREXIST","A root server with this ip already exists!");
define("_RSERVERDBUPERROR","Database error! The root server couldn't be changed!");
define("_RSERVERDBUPDATED","The root server was changed!");
define("_RSERVERDBDELERROR","Database error! The root server couldn't be deleted!");
define("_RSERVERDBDELETED","The root server has been successfully deleted!");
define("_RSERVERDBSAVEERROR","Database error! The root server couldn't be added!");
define("_RSERVERCREATED","The root server was successfully added!");
define("_RSERVERNEW","Add a root server");
define("_RSERVERDELETESEL","delete selected root servers");
define("_RSERVERINSTSEL","update selected root servers");
define("_RSERVERNOENTRY","<b>No root servers available!</b>");
define("_RSERVERSTATUS","The selected root server status will be changed!");
define("_RSERVERUPDATED","The scripts will be updated!");
define("_RSERVERUPDATEERROR","The scripts couldn't be updated!");
define("_RSERVERNAME","Name*:");
define("_RSERVERIP","Server IP*:");
define("_RSERVERTEMP","Template:");
define("_RSERVERAPPSALLOWED","Programs:");
define("_RSERVERGAMESALLOWED","Game servers:");
define("_RSERVERSTREAMSALLOWED","Stream servers:");
define("_RSERVERVOICESALLOWED","Voice servers:");
define("_RSERVERVSERVERALLOWED","VServers:");
define("_RSERVERTSADMIN","TS2 superadmin:");
define("_RSERVERTSPASSWD","TS2 password:");
define("_RSERVERTSQUERY","TS2 queryport:");
define("_RSERVERTSPATH","TS2 folder:");
define("_RSERVEROPSYSTEMINFO","Operation system info:");
define("_RSERVERCPUINFO","CPU:");
define("_RSERVERRAM","RAM:");
define("_RSERVERHDD","HDD:");
define("_RSERVERTRAFFIC","Traffic:");
define("_RSERVERSYSTEM","Operation system:");
define("_RSERVERSYSTEMONE","32Bit");
define("_RSERVERSYSTEMTWO","64Bit");
define("_RSERVERSSHDAEMON","Connection type:");
define("_RSERVERSSHKEYS","SSH keys");
define("_RSERVERLINUXDAEMON","Linux Daemon");
define("_RSERVERWINDAEMON","Windows Daemon");
define("_RSERVERDAEMONPASSWD","Daemon password:");
define("_RSERVERIPINFO","(all IP's view icon)");
define("_RSERVERTSINFOS","<b>Teamspeak2 info:</b>");
define("_RSERVERONLINESINCE","Online since:");
define("_RSERVERTSVERSION","TS2 version:");
define("_RSERVERSLOTS","Slots");
define("_RSERVERSTATCPU","<b>CPU usage rate</b>");
define("_RSERVERSTATLOAD","<b>Load</b>");
define("_RSERVERSTATMEMORY","<b>RAM usage rate</b>");
define("_RSERVERSTATSWAP","<b>Swap usage rate</b>");
define("_RSERVERSTATUSERS","<b>Users</b>");
define("_RSERVERSTATTRAFFIC","<b>Traffic</b>");
define("_RSERVERDAY","<b>24h view</b>");
define("_RSERVERWEEK","<b>Weakly view</b>");
define("_RSERVERMONTH","<b>Monthly view</b>");
define("_RSERVERYEAR","<b>Yearly view</b>");
define("_RSERVERSTATEMPTY","No statistics available");
define("_RSERVERNEWSCRIPT","New scripts available!");
define("_RSERVERSCRIPTOK","The scripts are up to date!");
define("_RSERVERERROR","Root server not reachable!");
define("_RSERVERJAVASSH","SSH terminal");
define("_RSERVERMEMADDRESS","<b>Address:</b>");
define("_RSERVERMEMPHONE","Phone:");
define("_RSERVERMEMEMAIL","Email:");
define("_RSERVERROOT","<b>Root server:</b>");
define("_RSERVERCPUINFOTWO","<b>CPU:</b>");
define("_RSERVERRAMTWO","<b>RAM:</b>");
define("_RSERVERHDDTWO","<b>HDD:</b>");
define("_RSERVERTRAFFICTWO","<b>Traffic:</b>");
define("_RSERVERAPPSYES","Programs");
define("_RSERVERGAMESYES","Game servers");
define("_RSERVERSTREAMSYES","Stream servers");
define("_RSERVERVOICESYES","Voice servers");
define("_RSERVERVSERVERYES","VServers");
define("_RSERVERAPPSNO","");
define("_RSERVERGAMESNO","");
define("_RSERVERSTREAMSNO","");
define("_RSERVERVOICESNO","");
define("_RSERVERVSERVERNO","");
define("_RSERVERAPPS","<b>Programs:</b>");
define("_RSERVERGAMES","<b>Game servers:</b>");
define("_RSERVERSTREAMS","<b>Stream servers:</b>");
define("_RSERVERVOICES","<b>Voice servers:</b>");
define("_RSERVERVSERVER","<b>VServers:</b>");
define("_RSERVERINDEX","Index Value:");
define("_RSERVERLOAD","Calculated workload:");
define("_RSERVERPERCENT","%");
define("_RSERVERSSHUSER","SSH user:");
define("_RSERVERPORT","SSH or Daemon port:");
define("_RSERVERSSHUSERTWO","<b>SSH user:</b>");
define("_RSERVERSSHPORT","<b>SSH port:</b>");
define("_RSERVERDAEMONPORT","<b>Daemon port:</b>");
define("_RSERVERSCRIPTPATH","Script folder:");
define("_RSERVERCONNECTION","<b>Connection via:</b>");

define("_QUESTIONRSERVERCHANGE","Are you sure you wish to make these changes?");

define("_ASSISTENTRSERVER","Before you install game servers, steam servers, voice servers and or programs you need to add a root server to the webinterface. 
If you have created a server template, you only need to select the template, and then add a name and IP address of the server. You can select if the server 
should be control via the SSH keys or by using a Daemon. If you have installed Munin, you can allow your customer to use Munin statistics for their server. 
Enter the server IDS for the name within the brackets. You will find this in the browser address bar when you are working on the server. ");

?>