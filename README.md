# Curriculum 
Migrate curriculum tables to database
- MIT license. ***Feel free to use this project***. ***Leave a star :star: or make a fork !***
- Download package: ```composer require tigo/curriculum```

*If you found this project useful, consider making a donation to support the developer.* 

[![paypal](https://www.paypalobjects.com/pt_BR/BR/i/btn/btn_donateCC_LG.gif)](https://www.paypal.com/donate?hosted_button_id=5PG6N2SFW2ZHL)
[![paypal](https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif)](https://www.paypal.com/donate?hosted_button_id=CDAV425UPG2E2)
# Modeling
[Click here](https://github.com/tigoCaval/curriculum-tables/blob/main/modeling/cv_modeling.png) to check out the database modeling

# Introduction
 ### Getting started
 Starting with composer
 1. Install composer
 2. Download package: ```composer require tigo/curriculum```
 3. PHP >= 7.0; Versions that have been tested:  7.3.23, 8.0.1 e 8.0.3. 

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
 ## Supporting this project
If you are interested in supporting this project, you can help in many ways. Leave a star :star: or make a donation of any value.

## Sponsor supporting this project
- []
## Contributors
<a href="https://github.com/tigoCaval"><img src="https://avatars.githubusercontent.com/u/19934116?v=4" width="90" height="100" /> </a>
 
 - [List of contributors](https://github.com/tigoCaval/curriculum-tables/graphs/contributors)

## License
MIT license. See the archive [License](https://github.com/tigoCaval/curriculum-tables/blob/main/LICENSE)
