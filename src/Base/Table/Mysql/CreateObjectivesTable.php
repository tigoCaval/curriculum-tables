<?php
namespace Tigo\Curriculum\Base\Table\Mysql;

use Tigo\Curriculum\Base\Abstracts\AbsConnect;

/**
 * [class CreateObjectivesTable]
 * 
 * @author Tiago A C Pereira <tiagocavalcante57@gmail.com>
 */
class CreateObjectivesTable extends AbsConnect
{
    
    private $hookup;
    //Table objectives
    private $table = <<<TABLE
    CREATE TABLE IF NOT EXISTS objectives(
        id INT NOT NULL AUTO_INCREMENT,
        description VARCHAR(45) NOT NULL,
        user_id INT NOT NULL,
        PRIMARY KEY (id),
        INDEX fk_objectives_users1_idx (user_id ASC) VISIBLE,
        CONSTRAINT fk_objectives_users1
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
