<?php

define("_RTEMPNOTALLFIELDS","All required fields marked with an * weren't filled in!");
define("_RTEMPEXIST","A template with this name already exists!");
define("_RTEMPDBUPERROR","Database error! The template couldn't be changed!");
define("_RTEMPDBUPDATED","The template was changed!");
define("_RTEMPDBDELERROR","Database error! The template couldn't be deleted!");
define("_RTEMPDBDELETED","The template has been successfully deleted!");
define("_RTEMPDBSAVEERROR","Database error! The template couldn't be added!");
define("_RTEMPCREATED","The template was successfully added!");
define("_RTEMPNEW","Add a template");
define("_RTEMPDELETESEL","delete selected templates");
define("_RTEMPNOENTRY","<b>No templates available!</b>");
define("_RTEMPSTATUS","The selected template status will be changed!");
define("_RTEMPTITLE","Template Title*:");
define("_RTEMPMEMBER","Customer root server:");
define("_RTEMPAPPSALLOWED","Allow programs:");
define("_RTEMPGAMESALLOWED","Allow game servers:");
define("_RTEMPSTREAMSALLOWED","Allow stream servers:");
define("_RTEMPVOICESALLOWED","Allow voice servers:");
define("_RTEMPVSERVERALLOWED","Allow VServers");
define("_RTEMPSERVICESALLOWED","Allow services:");
define("_RTEMPRESTARTALLOWED","Allow restarts:");
define("_RTEMPSHUTDOWNALLOWED","Allow shutdowns:");
define("_RTEMPREINSTALLALLOWED","Allow reinstalls:");
define("_RTEMPCPUINFO","CPU:");
define("_RTEMPRAM","RAM:");
define("_RTEMPHDD","HDD:");
define("_RTEMPTRAFFIC","Traffic:");
define("_RTEMPOPSYSTEMINFO","Operation system info:");
define("_RTEMPOPSYSTEM","Operation system:");
define("_RTEMPOPPOOL","Operation system choice:<br>(Customer reinstall)");
define("_RTEMPOPSYSTEMONE","32Bit");
define("_RTEMPOPSYSTEMTWO","64Bit");
define("_RTEMPSSHDAEMON","Connection type:");
define("_RTEMPSSHKEYS","SSH keys");
define("_RTEMPLINUXDAEMON","Linux Daemon");
define("_RTEMPWINDAEMON","Windows Daemon");
define("_RTEMPDAEMONPASSWD","Daemon password:");
define("_RTEMPINDEX","Index Value:");
define("_RTEMPSSHUSER","SSH user:");
define("_RTEMPSSHPORT","SSH or Daemon port:");
define("_RTEMPSCRIPTPATH","Script folder:");
define("_RTEMPTYP","Template type:");
define("_RTEMPCUSTOMER","Customer root server");
define("_RTEMPOWN"," Root server");
define("_RTEMPVSERVER","Customer Vserver");
define("_RTEMPSERVERINFO","<b>Server infos</b>");
define("_RTEMPSERVERFUNC","<b>Server functions</b>");
define("_RTEMPSERVERSET","<b>Server settings</b>");
define("_RTEMPOPENVZSET","<b>OpenVZ settings</b>");
define("_RTEMPHOSTNAME","Hostname:");
define("_RTEMPNAMESERVER","Nameserver:");
define("_RTEMPCPUUNITS","CPU performance min.:");
define("_RTEMPCPULIMIT","CPU performance max.:");
define("_RTEMPNUMPROC","Processes max.:");
define("_RTEMPVMGUARPAGES","RAM min.:");
define("_RTEMPPRIVVMPAGES","RAM max.:");
define("_RTEMPDISKSPACE","Diskspace:");
define("_RTEMPINUNITS","in Units");
define("_RTEMPINPERCENT","in %");
define("_RTEMPEXAMPLE","(100M, 1G, ...)");

define("_QUESTIONRTEMPCHANGE","Are you sure you wish to make these changes?");

define("_ASSISTENTRTEMP","Here you can create a customer VServers similar to the customer root server. If you have created a server template, you only 
need to select the template, and then add a name and IP address of the server. You can select if the server should be control via the SSH keys or by using a Daemon.");

?>