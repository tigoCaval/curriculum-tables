<?php
namespace Tigo\Curriculum\Base\Table\Sqlite;

use Tigo\Curriculum\Base\Abstracts\AbsConnect;

/**
 * [class CreateAddressesTable]
 * 
 * @author Tiago A C Pereira <tiagocavalcante57@gmail.com>
 */
class CreateAddressesTable extends AbsConnect
{
   
    private $hookup;
    //Table addresses
    private $table = <<<TABLE
    CREATE TABLE IF NOT EXISTS addresses(
        id INTEGER NOT NULL,
        country VARCHAR(45) NOT NULL,
        city VARCHAR(45) NOT NULL,
        uf VARCHAR(45) NOT NULL,
        address VARCHAR(45) NOT NULL,
        neighborhood VARCHAR(45) NOT NULL,
        postal_code VARCHAR(45) NOT NULL,
        user_id INTEGER NOT NULL,
        PRIMARY KEY (id AUTOINCREMENT),
        CONSTRAINT fk_addresses_users1
          FOREIGN KEY (user_id)
          REFERENCES users (id)
          ON DELETE NO ACTION
          ON UPDATE NO ACTION);
    TABLE;

    public function __construct()
    {
        $this->hookup = $this->connect();
        if($this->hookup->query($this->table)){
            $this->hookup->exec('PRAGMA FOREIGN_KEYS = ON;');
            $this->hookup = null;
        }    
        else    
          die(var_export($this->hookup->errorinfo(), TRUE)); 
    } 

}