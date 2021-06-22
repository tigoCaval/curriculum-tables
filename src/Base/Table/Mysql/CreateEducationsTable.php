<?php
namespace Tigo\Curriculum\Base\Table\Mysql;

use Tigo\Curriculum\Base\Abstracts\AbsConnect;

/**
 * [class CreateEducationsTable]
 * 
 * @author Tiago A C Pereira <tiagocavalcante57@gmail.com>
 */
class CreateEducationsTable extends AbsConnect
{
   
    private $hookup;
    //Table educations
    private $table = <<<TABLE
    CREATE TABLE IF NOT EXISTS educations(
        id INT NOT NULL AUTO_INCREMENT,
        education_course_id INT NOT NULL,
        user_id INT NOT NULL,
        PRIMARY KEY (id),
        INDEX fk_educations_education_courses1_idx (education_course_id ASC) VISIBLE,
        INDEX fk_educations_users1_idx (user_id ASC) VISIBLE,
        CONSTRAINT fk_educations_education_courses1
          FOREIGN KEY (education_course_id)
          REFERENCES education_courses (id)
          ON DELETE NO ACTION
          ON UPDATE NO ACTION,
        CONSTRAINT fk_educations_users1
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