# Gauntlet

Create a dbConnect.php file in controller/database, containing the following:

```php
<?php //this is a sample dbConnect file, fill in the information below
  define('DB_USER',     '');
  define('DB_PASSWORD', '');
  define('DB_NAME',     '');
  define('DB_HOST',     '');
  
  $dbh = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
  
  if (!$dbh) {
    die('Could not connect to database');
  }
  
  $dbh->set_charset("utf8");


?>
```
