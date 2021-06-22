<?php
namespace Tigo\Curriculum\Base\Table\Sqlite;

use Tigo\Curriculum\Base\Abstracts\AbsConnect;

/**
 * [class CreateCourseTypesTable]
 * 
 * @author Tiago A C Pereira <tiagocavalcante57@gmail.com>
 */
class CreateCourseTypesTable extends AbsConnect
{
   
    private $hookup;
    //Table course_types
    private $table = <<<TABLE
    CREATE TABLE IF NOT EXISTS course_types(
        id INTEGER NOT NULL,
        description VARCHAR(45) NOT NULL,
        PRIMARY KEY (id AUTOINCREMENT));
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