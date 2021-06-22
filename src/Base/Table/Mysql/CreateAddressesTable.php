<?php
namespace Tigo\Curriculum\Base\Table\Mysql;

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
        id INT NOT NULL AUTO_INCREMENT,
        country VARCHAR(45) NOT NULL,
        city VARCHAR(45) NOT NULL,
        uf VARCHAR(45) NOT NULL,
        address VARCHAR(45) NOT NULL,
        neighborhood VARCHAR(45) NOT NULL,
        postal_code VARCHAR(45) NOT NULL,
        user_id INT NOT NULL,
        PRIMARY KEY (id),
        INDEX fk_addresses_users1_idx (user_id ASC) VISIBLE,
        CONSTRAINT fk_addresses_users1
          FOREIGN KEY (user_id)
          REFERENCES users (id)
          ON DELETE NO ACTION
          ON UPDATE NO ACTION);
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