<?php
namespace Tigo\Curriculum\Base\Table\Sqlite;

use Tigo\Curriculum\Base\Abstracts\AbsConnect;

/**
 * [class CreateCoursesTable]
 * 
 * @author Tiago A C Pereira <tiagocavalcante57@gmail.com>
 */
class CreateCoursesTable extends AbsConnect
{
   
    private $hookup;
    //Table courses
    private $table = <<<TABLE
    CREATE TABLE IF NOT EXISTS courses(
        id INTEGER NOT NULL,
        description VARCHAR(45) NOT NULL,
        institution VARCHAR(45) NOT NULL,
        country VARCHAR(45) NOT NULL,
        uf VARCHAR(45) NOT NULL,
        city VARCHAR(45) NOT NULL,
        start DATE NOT NULL,
        end DATE NOT NULL,
        course_type_id INTEGER NOT NULL,
        course_status_id INTEGER NOT NULL,
        user_id INTEGER NOT NULL,
        PRIMARY KEY (id AUTOINCREMENT),
        CONSTRAINT fk_courses_course_types1
          FOREIGN KEY (course_type_id)
          REFERENCES course_types (id)
          ON DELETE NO ACTION
          ON UPDATE NO ACTION,
        CONSTRAINT fk_courses_course_statuses1
          FOREIGN KEY (course_status_id)
          REFERENCES course_statuses (id)
          ON DELETE NO ACTION
          ON UPDATE NO ACTION,
        CONSTRAINT fk_courses_users1
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