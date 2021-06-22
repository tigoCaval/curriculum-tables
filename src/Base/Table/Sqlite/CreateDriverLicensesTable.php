<?php
namespace Tigo\Curriculum\Base\Table\Sqlite;

use Tigo\Curriculum\Base\Abstracts\AbsConnect;

/**
 * [class CreateDriverLicensesTable]
 * 
 * @author Tiago A C Pereira <tiagocavalcante57@gmail.com>
 */
class CreateDriverLicensesTable extends AbsConnect
{
   
    private $hookup;
    //Table driver_licenses
    private $table = <<<TABLE
    CREATE TABLE IF NOT EXISTS driver_licenses(
        id INTEGER NOT NULL ,
        description VARCHAR(45) NOT NULL,
        PRIMARY KEY (id AUTOINCREMENT));
    TABLE;

    public function __construct()
    {
        $this->hookup = $this->connect();
        if($this->hookup->query($this->table))
            $this->hookup = null;
        else    
          die(var_export($this->hookup->errorinfo(), TRUE));  
    }

}