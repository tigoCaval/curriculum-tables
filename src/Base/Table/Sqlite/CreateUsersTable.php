<?php
namespace Tigo\Curriculum\Base\Table\Sqlite;

use Tigo\Curriculum\Base\Abstracts\AbsConnect;

/**
 * [class CreateUsersTable]
 * 
 * @author Tiago A C Pereira <tiagocavalcante57@gmail.com>
 */
class CreateUsersTable extends AbsConnect
{
    
    private $hookup;
    //Table users
    private $table = <<<TABLE
        CREATE TABLE IF NOT EXISTS users(
            id	INTEGER NOT NULL,
            name VARCHAR(45) NOT NULL,
            email	VARCHAR(80) NOT NULL,
            password VARCHAR(45) NOT NULL,
            PRIMARY KEY(id AUTOINCREMENT));
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
