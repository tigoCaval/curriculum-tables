<?php
namespace Tigo\Curriculum\Base\Table\Mysql;

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
        id INT NOT NULL AUTO_INCREMENT,
        company VARCHAR(45) NOT NULL,
        location VARCHAR(45) NOT NULL,
        job_title VARCHAR(45) NOT NULL,
        description LONGTEXT NULL,
        start DATE NOT NULL,
        end DATE NOT NULL,
        user_id INT NOT NULL,
        PRIMARY KEY (id),
        INDEX fk_experiences_users1_idx (user_id ASC) VISIBLE,
        CONSTRAINT fk_experiences_users1
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