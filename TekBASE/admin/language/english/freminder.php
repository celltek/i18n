<?php

define("_FREMINDERDBSAVEERROR","Database error! The dunning level couldn't be added!");
define("_FREMINDERCREATED","The dunning level was successfully added!");
define("_FREMINDERDBUPERROR","Database error! The dunning level couldn't be changed!");
define("_FREMINDERDBUPDATED","The dunning level was changed!");
define("_FREMINDERDBDELERROR","Database error! The dunning level couldn't be deleted!");
define("_FREMINDERDBDELETED","The dunning level has been successfully deleted!");
define("_FREMINDERSTATUS","The selected dunning levels will be deleted!");
define("_FREMINDERNOTALLFIELDS","All required fields marked with an * weren't filled in!");
define("_FREMINDEREXIST","This dunning level already exists!");
define("_FREMINDERNEW","Add a dunning level");
define("_FREMINDERNOENTRY","<b>No dunning level available!</b>");
define("_FREMINDERDELETESEL","delete selected dunning level");
define("_FREMINDERSTEPS","Level*:");
define("_FREMINDERDAYS","After # days*:");
define("_FREMINDERINTEREST","Interest rate (in%):");
define("_FREMINDERPRICE","Reminder fee (in USD):");

define("_QUESTIONFREMINDERCHANGE","Are you sure you wish to make these changes?");

define("_ASSISTENTFREMINDER","In this module you can establish payment reminder levels. You will have to enter the 
amount manually into your financial system. The formula for the interest calculations:
<br><br>
Percent * (Amount * Days) / (100 * 360) = Interest<br><br>
At 5% with an unpaid amount of 50,- USD and with the payment being 30 days late the interest would be 0,21 USD.");

?>