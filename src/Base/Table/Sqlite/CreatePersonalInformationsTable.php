<?php
namespace Tigo\Curriculum\Base\Table\Sqlite;

use Tigo\Curriculum\Base\Abstracts\AbsConnect;

/**
 * [class CreatePersonalInformationsTable]
 * 
 * @author Tiago A C Pereira <tiagocavalcante57@gmail.com>
 */
class CreatePersonalInformationsTable extends AbsConnect
{

    private $hookup;
    //Table personal_informations
    private $table = <<<TABLE
    CREATE TABLE IF NOT EXISTS personal_informations(
        id INTEGER NOT NULL,
        user_id INTEGER NOT NULL,
        gender_id INTEGER NOT NULL,
        marital_status_id INTEGER NOT NULL,
        PRIMARY KEY (id AUTOINCREMENT),
        CONSTRAINT fk_personal_informations_users
          FOREIGN KEY (user_id)
          REFERENCES users (id)
          ON DELETE NO ACTION
          ON UPDATE NO ACTION,
        CONSTRAINT fk_personal_informations_genders1
          FOREIGN KEY (gender_id)
          REFERENCES genders (id)
          ON DELETE NO ACTION
          ON UPDATE NO ACTION,
        CONSTRAINT fk_personal_informations_marital_statuses1
          FOREIGN KEY (marital_status_id)
          REFERENCES marital_statuses (id)
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
