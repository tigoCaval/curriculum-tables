<?php
namespace Tigo\Curriculum\Base\Table\Sqlite;

use Tigo\Curriculum\Base\Abstracts\AbsConnect;

/**
 * [class CreateContactsTable]
 * 
 * @author Tiago A C Pereira <tiagocavalcante57@gmail.com>
 */
class CreateContactsTable extends AbsConnect
{
   
    private $hookup;
    //Table contacts
    private $table = <<<TABLE
    CREATE TABLE IF NOT EXISTS contacts(
        id INTEGER NOT NULL,
        phone VARCHAR(45) NOT NULL,
        phone_message VARCHAR(45) NULL,
        email VARCHAR(45) NULL,
        user_id INTEGER NOT NULL,
        PRIMARY KEY (id AUTOINCREMENT),
        CONSTRAINT fk_contacts_users1
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