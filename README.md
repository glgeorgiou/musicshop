# musicshop
============

English Version
================
A music e-shop for educational only purposes
This is the readme file. The musicshop project was created for educational purposes only. The aim of this project is to investigate and learn how an eShop is made and operates.
Please fill free to use it and debug it. Fork it on https://github.com/glgeorgiou/musicshop


Greek Version - Ελληνική έκδοση
================================
Το site αυτό είναι ένα e-shop για ακαδημαϊκή χρήση και έρευνα. Ο σκοπός του project αυτού είναι η έρευνα ανάπτυξης και χρήσης ενός e-shop αποκλειστικά κατασκευασμένου από την αρχή. Μπορείτε να το 'αρπάξετε', fork it on https://github.com/glgeorgiou/musicshop.

Τρόπος χρήσης
-------------
1. Φτιάχνουμε στον server μας μια βάση δεδομένων με το όνομα musicshop.
2. Φτιάχνουμε έναν χρήση με όνομα 'MusicShopUser' και κωδικό 'Us3rMus1cSh0pK0d'.
3. Ως φιλοξενητή, host, θέτουμε localhost εάν είναι για τοπική χρήση ή το όνομα του server σε περίπτωση χρήσης στο web. Για περισσότερες λεπτομέρειες δείτε τα αρχεία 
3.1. account-out.php: δείχνει τα στοιχεία του συνδεδεμένου χρήστη,
3.2. registration-out.php: δείχνει τα στοιχεία του εγγεγραμμένου χρήστη.

Οι υπόλοιπες σελίδες είναι στατικές και δείχνουν απλά τις κατηγορίες των προϊόντων και τα προϊόντα.

Πως κατασκευάστηκε
--------------------
Χρησιμοποιήθηκε το bootstrap template. Όλες οι σελίδες χρησιμοποιούν κοινές δομές, όπως τα 'πρόσφατα προϊόντα' οι οποίες επαναλαμβάνονται σε κάθε σελίδα.

Δομή
----
-Μ.Ο.Ε. = index.html
-Προϊόντα - #
-- Πνευστά = pneusta.html
-- Κρουστά = krousta.html
-- Έγχορδα = exorda.html
-Λογαριασμός = account.html / Εγγραφή χρήστη: registration-in.php --> registration-out.php / Είσοδος χρήστη: account-in.php --> account-out.php
-Όροι χρήσης = terms.html
-Κουμπί Καλάθι = account.html / Αγορά προϊόντων = paypal.html