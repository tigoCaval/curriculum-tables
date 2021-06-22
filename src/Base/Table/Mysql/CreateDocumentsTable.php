<?php
namespace Tigo\Curriculum\Base\Table\Mysql;

use Tigo\Curriculum\Base\Abstracts\AbsConnect;

/**
 * [class CreateDocumentsTable]
 * 
 * @author Tiago A C Pereira <tiagocavalcante57@gmail.com>
 */
class CreateDocumentsTable extends AbsConnect
{
   
    private $hookup;
    //Table documents
    private $table = <<<TABLE
    CREATE TABLE IF NOT EXISTS documents(
        id INT NOT NULL AUTO_INCREMENT,
        full_name VARCHAR(45) NOT NULL,
        date_birth DATE NOT NULL,
        nationality VARCHAR(45) NOT NULL,
        place_birth VARCHAR(45) NOT NULL,
        ssn VARCHAR(45) NULL,
        cpf_br VARCHAR(16) NULL,
        rg_br VARCHAR(30) NULL,
        user_id INT NOT NULL,
        driver_license_id INT NOT NULL,
        PRIMARY KEY (id),
        INDEX fk_documents_users1_idx (user_id ASC) VISIBLE,
        INDEX fk_documents_driver_licenses1_idx (driver_license_id ASC) VISIBLE,
        CONSTRAINT fk_documents_users1
          FOREIGN KEY (user_id)
          REFERENCES users (id)
          ON DELETE NO ACTION
          ON UPDATE NO ACTION,
        CONSTRAINT fk_documents_driver_licenses1
          FOREIGN KEY (driver_license_id)
          REFERENCES driver_licenses (id)
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