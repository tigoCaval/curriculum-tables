<?php
namespace Tigo\Curriculum\Base\Table\Sqlite;

use Tigo\Curriculum\Base\Abstracts\AbsConnect;

/**
 * [class CreateLanguagesTable]
 * 
 * @author Tiago A C Pereira <tiagocavalcante57@gmail.com>
 */
class CreateLanguagesTable extends AbsConnect
{
    
    private $hookup;
    //Table languages
    private $table = <<<TABLE
    CREATE TABLE IF NOT EXISTS languages(
        id INTEGER NOT NULL,
        description VARCHAR(45) NOT NULL,
        speak_language_id INTEGER NOT NULL,
        reading_language_id INTEGER NOT NULL,
        writing_language_id INTEGER NOT NULL,
        user_id INTEGER NOT NULL,
        PRIMARY KEY (id AUTOINCREMENT),
        CONSTRAINT fk_languages_speak_languages1
          FOREIGN KEY (speak_language_id)
          REFERENCES speak_languages (id)
          ON DELETE NO ACTION
          ON UPDATE NO ACTION,
        CONSTRAINT fk_languages_reading_languages1
          FOREIGN KEY (reading_language_id)
          REFERENCES reading_languages (id)
          ON DELETE NO ACTION
          ON UPDATE NO ACTION,
        CONSTRAINT fk_languages_writing_languages1
          FOREIGN KEY (writing_language_id)
          REFERENCES writing_languages (id)
          ON DELETE NO ACTION
          ON UPDATE NO ACTION,
        CONSTRAINT fk_languages_users1
          FOREIGN KEY (user_id)
          REFERENCES users (id)
          ON DELETE NO ACTION
          ON UPDATE NO ACTION);
    TABLE;

    //private $sql = "insert into languages('description','speak_language_id','reading_language_id', 'writing_language_id','user_id') VALUES('PT',1,1,1,1);";

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
