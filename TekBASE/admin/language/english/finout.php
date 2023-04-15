<?php

define("_FINOUTNOTALLFIELDS","All required fields marked with an * weren't filled in!");
define("_FINOUTDATEERROR","The date is incorrect! Please use this current financial month! See upstairs!");
define("_FINOUTDBUPERROR","Database error! The receipt couldn't be changed!");
define("_FINOUTDBUPDATED","The receipt was changed!");
define("_FINOUTDBSAVEERROR","Database error! The receipt couldn't be added!");
define("_FINOUTDBCREATED","The receipt was successfully added!");
define("_FINOUTSTATUS","Database error! The receipt couldn't be deleted!");
define("_FINOUTIMPORTGO","The invoices will be imported!");
define("_FINOUTIMPORTERROR","No invoices available!");
define("_FINOUTARCHIVEGO","The receipts will be archived!");
define("_FINOUTARCHIVEERROR","No receipts available!");
define("_FINOUTARCHIVEDOK","The receipt was successfully archived!");
define("_FINOUTARCHIVEDERROR","Database error! The receipt couldn't be archived!");
define("_FINOUTBILLOK","The invoice was successfully imported!");
define("_FINOUTBILLERROR","Database error! The invoice couldn't be imported!");
define("_FINOUTBILLSEND","The invoice email has been sent to the customer!");
define("_FINOUTBILLSENDERROR","The invoice email couldn't be sent to the customer!");
define("_FINOUTBILLSENDLETTER","The invoice letter will be sent to the customer!");
define("_FINOUTBILLNOSENDLETTER","The invoice letter couldn't be sent! An email was sent to customer!");
define("_FINOUTDBDELERROR","Database error! The receipt couldn't be deleted!");
define("_FINOUTDBDELETED","The receipt has been successfully deleted!");
define("_FINOUTDBCANCELERROR","Database error! The receipt  couldn't be canceled!");
define("_FINOUTDBCANCELED","The receipt has been successfully canceled!");
define("_FINOUTNOCANCELED","The receipt was already canceled!");
define("_FINOUTCANCELTEXT","Reversal entry");
define("_FINOUTALL","All payments");
define("_FINOUTALLYEARS","List from all years");
define("_FINOUTTHISYEAR","Current year");
define("_FINOUTTHISMONTH","Current montht");
define("_FINOUTEXIST","A receipt with this receipt ID already exists!");
define("_FINOUTDELETESEL","delete selected receipts");
define("_FINOUTCANCELSEL","cancel selected receipts");
define("_FINOUTNOENTRY","<b>No receipts available!</b>");
define("_FINOUTFASTINSERT","<b>Recording of entries</b>");
define("_FINOUTTEMPLATE","Template");
define("_FINOUTNOTEMPLATE","[No template]");
define("_FINOUTCONACCOUNT","Counter account*:");
define("_FINOUTCONACCOUNTTWO","Counter account*:");
define("_FINOUTACCOUNT","Account*:");
define("_FINOUTTAXKEY","Tax key*:");
define("_FINOUTDATE","Date*:");
define("_FINOUTDATEEXAMPLE","(DD.MM.YYYY)");
define("_FINOUTSIGN","Purpose*:");
define("_FINOUTMONEY","Amount (in USD)*:");
define("_FINOUTRECEIPT","Receipt ID*:");
define("_FINOUTIMPORT","Import invoices");
define("_FINOUTTOARCHIVE","Archive receipt");
define("_FINOUTIN","Debit (+)");
define("_FINOUTOUT","Credit (-)");
define("_FINOUTPDFCREATE","Creat a PDF list");
define("_FINOUTARCH","Archive");
define("_FINOUTPDFTITLE","FINANCIAL TRANSACTIONS ARCHIVE");
define("_FINOUTPDFFIRM","Client:");
define("_FINOUTPDFCITY","City:");
define("_FINOUTPDFDATE","Date:");
define("_FINOUTPDFTIME","Time:");
define("_FINOUTPDFTIMETEXT","");
define("_FINOUTPDFINOUTDATE","Date");
define("_FINOUTPDFIN","Debit");
define("_FINOUTPDFOUT","Credit");
define("_FINOUTPDFCONACCOUNT","C. account");
define("_FINOUTPDFACCOUNT","Account");
define("_FINOUTPDFTEXT","Text");
define("_FINOUTPDFRECEIPTID","Receipt ID");
define("_FINOUTPDFCURRENCY","C");
define("_FINOUTPDFSITE","Site");
define("_FINOUTCONACCOUNTTHREE","<b>Counter account:</b>");
define("_FINOUTACCOUNTTWO","<b>Account:</b>");
define("_FINOUTSIGNTWO","<b>Intended purpose:</b>");
define("_FINOUTNOEDIT","Cant be edited");
define("_FINOUTBALANCE","Open invoice balanced");
define("_FINOUTNOBALANCE","Open invoice not balanced or no open invoice founded");

define("_QUESTIONFINOUTCHANGE","Are you sure you wish to make these changes?");
define("_QUESTIONFINOUTIMPORT","Are you sure you wish to import these invoices?");
define("_QUESTIONFINOUTARCHIVE","Are you sure you wish to archive these financial transactions and finish these month?");

define("_ASSISTENTFINOUT","Here you can review invoices and enter payments. Once an invoice has been inportet into this module the system will send the customer 
and email stating that a new invoice exists. At the end of the month, you will have to archive all transactions. You cannot carry on to the next month until an 
archive has been complete and the month’s financials have been closed. Furthermore, with this module, you can cancel open invoices and or archived invoices. 
You will find the templates here that you created in the accounts code lists module.");

?>