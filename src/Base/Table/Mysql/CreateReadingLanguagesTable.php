<?php
namespace Tigo\Curriculum\Base\Table\Mysql;

use Tigo\Curriculum\Base\Abstracts\AbsConnect;

/**
 * [class CreateReadingLanguagesTable]
 * 
 * @author Tiago A C Pereira <tiagocavalcante57@gmail.com>
 */
class CreateReadingLanguagesTable extends AbsConnect
{
    
    private $hookup;
    //Table reading_languages
    private $table = <<<TABLE
    CREATE TABLE IF NOT EXISTS reading_languages(
        id INT NOT NULL AUTO_INCREMENT,
        description VARCHAR(45) NOT NULL,
        PRIMARY KEY (id));
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