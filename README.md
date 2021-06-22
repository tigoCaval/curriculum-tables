# Curriculum Tables
Migrate curriculum tables to database
- MIT license. ***Feel free to use this project***. ***Leave a star :star: or make a fork !***
- Download package: ```composer require tigo/curriculum```

*If you found this project useful, consider making a donation to support the developer.* 

[![paypal](https://www.paypalobjects.com/pt_BR/BR/i/btn/btn_donateCC_LG.gif)](https://www.paypal.com/donate?hosted_button_id=5PG6N2SFW2ZHL)
[![paypal](https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif)](https://www.paypal.com/donate?hosted_button_id=CDAV425UPG2E2)
# Modeling
[![](https://github.com/tigoCaval/curriculum-tables/blob/main/modeling/cv_modeling.png)](https://github.com/tigoCaval/curriculum-tables)

# Introduction

 ### Configure database
     directory: src/Base/Interfaces/IConnect.php
  The default configuration uses the sqlite database. You can choose to use mysql or sqlite.
    
 ```php
  /*const DATABASE = "mysql:"; 
    const HOST = "host=localhost;";
    const DBNAME = "dbname=name";
    const USER = "";
    const PASS = "";*/
    
    const DATABASE = "sqlite:".__DIR__."../../database.db"; 
    const HOST = "";
    const DBNAME = "";
    const USER = null;
    const PASS = null;
 ```
 Somewhere in your project, you may need to use autoload
 ```php
 include __DIR__ ."/vendor/autoload.php";
 ```
Example: Migrating Tables to Database
 ```php
  use Tigo\Curriculum\Job\Curriculum; // import class
  
  $table = new Curriculum();
  $table->sqlite(); //migrate sqlite tables
  $table->mysql(); //migrate mysql tables
  
 ```
