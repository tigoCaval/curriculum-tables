<?php
namespace Tigo\Curriculum\Base\Table\Sqlite;

use Tigo\Curriculum\Base\Abstracts\AbsConnect;

/**
 * [class CreateSummariesTable]
 * 
 * @author Tiago A C Pereira <tiagocavalcante57@gmail.com>
 */
class CreateSummariesTable extends AbsConnect
{
    
    private $hookup;
    //Table summaries
    private $table = <<<TABLE
    CREATE TABLE IF NOT EXISTS summaries(
        id INTEGER NOT NULL,
        description LONGTEXT NOT NULL,
        user_id INTEGER NOT NULL,
        PRIMARY KEY (id AUTOINCREMENT),
        CONSTRAINT fk_summaries_users1
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
