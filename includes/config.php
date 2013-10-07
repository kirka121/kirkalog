<?php
// config.php
// stores all the configuration globals that do not belong in a database

// database
define("DB_SERVER",     "localhost");       // location of database. url
define("DB_USER",       "kirka");           // username to database
define("DB_PASS",       "nonknj");          // password to database
define("DB_NAME",       "kirkablog");       // actual name of database


// mailserver
define("EMAIL_SENT_FROM",   "kirka121@gmail.com");      // email that will be displayed as a sent from
define("EMAIL_SSL",         "ssl://smtp.gmail.com");    // URL to the login of mailserver
define("EMAIL_SSL_LOGIN",   "kirka121@gmail.com");      // username of mailserver
define("EMAIL_SSL_PASS",    "C45tt6KL32");              // password of mailserver


?>