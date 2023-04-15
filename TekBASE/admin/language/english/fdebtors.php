<?php

define("_FDEBTORSNEW","Enter debtor");
define("_FDEBTORSNOTALLFIELDS","Not all fields marked with * have been filled out!");
define("_FDEBTORSEXIST","The invoice number already exists as an entry in debt collection/debtors!");
define("_FDEBTORSDBUPERROR","Database error! The debtor could not be changed!");
define("_FDEBTORSDBUPDATED","The debtor has been changed!");
define("_FDEBTORSDBSAVEERROR","Database error! The debtor could not be entered!");
define("_FDEBTORSCREATED","The debtor has just been entered!");
define("_FDEBTORSDBDELERROR","Database error! The debtor could not be deleted!");
define("_FDEBTORSDBDELETED","The debtor has just been deleted from the web interface!");
define("_FDEBTORSSTATUS","The selected debtors are now being deleted!");
define("_FDEBTORSNOENTRY","<b>No debtors available!</b>");
define("_FDEBTORSADDRESS","<b>Address:</b>");
define("_FDEBTORSINFOS","<b>Info:</b>");
define("_FDEBTORSPHONE","Phone:");
define("_FDEBTORSEMAIL","Email:");
define("_FDEBTORSMEMID","Customer ID*:");
define("_FDEBTORSTITLE","Title*:");
define("_FDEBTORSFIRM","Company name:");
define("_FDEBTORSFORENAME","First name*:");
define("_FDEBTORSSURNAME","Last name*:");
define("_FDEBTORSSTREET","Street*:");
define("_FDEBTORSCITY","City*:");
define("_FDEBTORSZIPCODE","Zip code*:");
define("_FDEBTORSCOUNTRY","Country*:");
define("_FDEBTORSBIRTHDAY","Birthday*:");
define("_FDEBTORSBDAYEXAMPLE","(e.g. 31.10.1980)");
define("_FDEBTORSTYP","Handed over to*:");
define("_FDEBTORSTYPONE","Debtor database local");
define("_FDEBTORSTYPTWO","Debtor database global");
define("_FDEBTORSTYPTHREE","Debt collection - Adebio");
define("_FDEBTORSTYPFOUR","Debt collection - Eurotreuhand");
define("_FDEBTORSTYPFIVE","Debt collection - Mediafinanz");
define("_FDEBTORSREFID","File reference for SDB global*:");
define("_FDEBTORSBILLID","Invoice number(s):");
define("_FDEBTORSDEBTS","Invoice amount:");
define("_FDEBTORSFINES","Reminder fee:");
define("_FDEBTORSBILLDATE","Invoice date*:");
define("_FDEBTORSREMINDERDATE","Reminder date*:");
define("_FDEBTORSINFO","Note:");
define("_FDEBTORSINFOTEXT","For Mediafinanz, please enter the products or services here.");
define("_FDEBTORSTYPONE","Debtor");
define("_FDEBTORSTYPTWO","Debt collection");
define("_FDEBTORSSTATUSONE","Local");
define("_FDEBTORSSTATUSTWO","Transmitted");
define("_FDEBTORSSTATUSTHREE","Transmission error");
define("_FDEBTORSDELETESEL","Delete marked debtors");

define("_QUESTIONFDEBTORSCHANGE","Do you really want to change the status?");

define("_ASSISTENTFDEBTORS","In this module, you can manage your debtors and their status. With an account at adorius.de, you also have the option to submit collection cases and debtors to the adorius debtor database. If you use the TekShop module, a new customer will be checked for creditworthiness if desired.<br><br>
If you want to submit a debtor to the global debtor database, you must specify a file number. If the debtor refuses payment at a collection agency, please enter the file number of the collection agency.");

?>