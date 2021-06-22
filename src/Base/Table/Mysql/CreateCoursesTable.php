<?php
namespace Tigo\Curriculum\Base\Table\Mysql;

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
        id INT NOT NULL AUTO_INCREMENT,
        description VARCHAR(45) NOT NULL,
        institution VARCHAR(45) NOT NULL,
        country VARCHAR(45) NOT NULL,
        uf VARCHAR(45) NOT NULL,
        city VARCHAR(45) NOT NULL,
        start DATE NOT NULL,
        end DATE NOT NULL,
        course_type_id INT NOT NULL,
        course_status_id INT NOT NULL,
        user_id INT NOT NULL,
        PRIMARY KEY (id),
        INDEX fk_courses_course_types1_idx (course_type_id ASC) VISIBLE,
        INDEX fk_courses_course_statuses1_idx (course_status_id ASC) VISIBLE,
        INDEX fk_courses_users1_idx (user_id ASC) VISIBLE,
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
        if($this->hookup->query($this->table))
            $this->hookup = null;
        else    
          die(var_export($this->hookup->errorinfo(), TRUE));  
    }

}