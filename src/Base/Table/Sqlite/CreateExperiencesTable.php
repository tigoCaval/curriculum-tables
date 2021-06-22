<?php
namespace Tigo\Curriculum\Base\Table\Sqlite;

use Tigo\Curriculum\Base\Abstracts\AbsConnect;

/**
 * [class CreateExperiencesTable]
 * 
 * @author Tiago A C Pereira <tiagocavalcante57@gmail.com>
 */
class CreateExperiencesTable extends AbsConnect
{
   
    private $hookup;
    //Table experiences
    private $table = <<<TABLE
    CREATE TABLE IF NOT EXISTS experiences(
        id INTEGER NOT NULL,
        company VARCHAR(45) NOT NULL,
        location VARCHAR(45) NOT NULL,
        job_title VARCHAR(45) NOT NULL,
        description LONGTEXT NULL,
        start DATE NOT NULL,
        end DATE NOT NULL,
        user_id INTEGER NOT NULL,
        PRIMARY KEY (id AUTOINCREMENT),
        CONSTRAINT fk_experiences_users1
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