<?php

define("_FPRODUCTSNOTALLFIELDS","All required fields marked with an * weren't filled in!");
define("_FPRODUCTSTITLEEXIST","A product with this title already exists!");
define("_FPRODUCTSNUMBEREXIST","A product with this product number already exists!");
define("_FPRODUCTSDBUPERROR","Database error! The product couldn't be changed!");
define("_FPRODUCTSDBUPDATED","The product was changed!");
define("_FPRODUCTSDBSAVEERROR","Database error! The product couldn't be added!");
define("_FPRODUCTSCREATED","The product was successfully added!");
define("_FPRODUCTSNEW","Add a product");
define("_FPRODUCTSNOENTRY","<b>No product available!</b>");
define("_FPRODUCTSDELETESEL","delete selected products");
define("_FPRODUCTSSTATUS","The selected products will be deleted!");
define("_FPRODUCTSDBDELERROR","Database error! The product couldn't be deleted!");
define("_FPRODUCTSDBDELETED","The product has been successfully deleted!");
define("_FPRODUCTSMEMPRODUCTSEXIST","The product couldn't be deleted. The product is used by customer packages!");
define("_FPRODUCTSNUM","Product ID*:");
define("_FPRODUCTSTITLE","Title*:");
define("_FPRODUCTSTEXT","Description*:");
define("_FPRODUCTSPRICE","Price*:");
define("_FPRODUCTSTAX","Tax key*:");
define("_FPRODUCTSCONTRACT","Contract:");
define("_FPRODUCTSNOCONTRACT","No contract");
define("_FPRODUCTSCONACCOUNT","Conaccount*:");
define("_FPRODUCTSCONACCOUNTTWO","EÜR account*:");

define("_QUESTIONFPRODUCTSCHANGE","Are you sure you wish to make these changes?");

define("_ASSISTENTFPRODUCTS","Here you will create your products that you can later assign to your customer and use to create invoices. 
It is not necessary to add every game and total slots. It is fine just to enter a single product for instance game servers or to be more 
detailed Counter-Strike server. What's important is that you use a return at the end of each line in the product description. 
If not, the description will be rolled together in 1 line on the invoice and not be listed one after the other:
<br><br>
10 Slot Clan CS1.6<br>
+14 Slot Teamspeak<br><br>
If you enter every thing in the box without a return, it will look like this: 
<br><br>
10 Slot Clan CS1.6 +14 Slot Teamspeak<br><br>
With two lines, it's not that bad, but when your description contains multiple lines the invoice can become an incomprehensible mess.");

?>