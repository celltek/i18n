<?php

define("_FOPENNOENTRY","<b>No open positions available!</b>");
define("_FOPNENNOTALLFIELDS","All required fields marked with an * weren't filled in!");
define("_FOPENDELETESEL","delete selected positions");
define("_FOPENBALANCESEL","mark selected positions as paid");
define("_FOPENREOPENSEL","reopen selected positions");
define("_FOPENDTASEL","reset DTA status for selected positions");
define("_FOPENDBDELERROR","Database error! The position couldn't be deleted!");
define("_FOPENDBDELETED","The position has been successfully deleted!");
define("_FOPENDBUPERROR","Database error! The position couldn't be changed!");
define("_FOPENDBUPDATED","The position was changed!");
define("_FOPENDBBALANCEERROR","Database error! The position couldn't be balanced!");
define("_FOPENDBBALANCED","The position has been successfully balanced!");
define("_FOPENDBREOPENEDERROR","Database error! The position couldn't be reopened!"");
define("_FOPENDBREOPENED","The position was reopened!");
define("_FOPENDBDTAERROR","Database error! The DTA status couldn't be reseted!");
define("_FOPENDBDTA","The DTA status has been successfully reseted!");
define("_FOPENSTATUS","Database error! The position couldn't be deleted!");
define("_FOPENSENDSTATUS","Payment remindes will sent to customers with open invoices!");
define("_FOPENSENDSTATUSERROR","The are no customers with open invoices requiring a reminder!");
define("_FOPENREMINDSENDED","The reminder has been sent to the customer!");
define("_FOPENREMINDSENDERROR","The reminder couldn't be sent to the customer!");
define("_FOPENREMINDNO","The customer should not recieve a reminder!");
define("_FOPENMEMBER","Customer:");
define("_FOPENDATE","Date*:");
define("_FOPENMONEY","Amount*:");
define("_FOPENRECEIPT","Purpose*:");
define("_FOPENREMINDSEND","Send reminder");
define("_FOPENPDFCREATE","Creat a PDF list");
define("_FOPENPDFTITLE","OPEN POSITIONS");
define("_FOPENPDFFIRM","Client:");
define("_FOPENPDFCITY","City:");
define("_FOPENPDFDATE","Date:");
define("_FOPENPDFTIME","Time:");
define("_FOPENPDFTIMETEXT","");
define("_FOPENPDFBILLNUMBER","Bill ID");
define("_FOPENPDFDATETEXT","Date");
define("_FOPENPDFMEMBERID","Customer ID");
define("_FOPENPDFSURNAME","Surname");
define("_FOPENPDFNAME","Name");
define("_FOPENPDFSTREET","Street");
define("_FOPENPDFZIPCODECITY","ZIP / City");
define("_FOPENPDFPHONE","Phone");
define("_FOPENPDFMONEYOPEN","Debit");
define("_FOPENPDFMONEYIN","Credit");
define("_FOPENPDFCURRENCY","C");
define("_FOPENPDFREMINDER","RS");
define("_FOPENPDFARCHTITLE","OPEN POSITION ARCHIVE");
define("_FOPENARCH","Archive");
define("_FOPENPDFSITE","Site");
define("_FOPENWIREPAY","Payment via bank transfer");
define("_FOPENPAYPALPAY","Payment via PayPal");
define("_FOPENDEBITPAY","Payment via debit");
define("_FOPENDEBITLOOP","Payment via debit standing order");
define("_FOPENDTAOPEN","DTA Export still open");

define("_QUESTIONFOPENCHANGE","Are you sure you wish to make these changes?");

define("_ASSISTENTFOPEN","In the module you find an overview of all unpaid invoices. Unpaid invoices will appear here once the invoice has been imported 
using the financial transactions module and if the customer didn't have sufficient credit to cover the invoice. You can also send payment reminders to all 
customers with outstanding invoices, enter payments. You can alse reset the DTA export status if the DTA export didn't work.");

?>