<?php
//$dsn = 'mysql:host=localhost;dbname=oophp';
//$dsn = 'mysql:host=localhost;dbname=oophp;port=8889';

// CHANGE only the username.... mine is sp2020 
// This is a lite version of a database (not mysql, but easy to use when code is transfered and you do not have to create a new database)
$dsn = 'sqlite:/home/sp2020/public_html/PhpPDO/sqlite/oophp.db';
//$dsn = 'sqlite:/Applications/MAMP/htdocs/oophp/sqlite/oophp.db';

$db = new PDO($dsn, 'oophp', 'lynda');