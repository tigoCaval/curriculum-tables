<?php
namespace Tigo\Curriculum\Base\Table\Mysql;

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
        id INT NOT NULL AUTO_INCREMENT,
        description VARCHAR(45) NOT NULL,
        speak_language_id INT NOT NULL,
        reading_language_id INT NOT NULL,
        writing_language_id INT NOT NULL,
        user_id INT NOT NULL,
        PRIMARY KEY (id),
        INDEX fk_languages_speak_languages1_idx (speak_language_id ASC) VISIBLE,
        INDEX fk_languages_reading_languages1_idx (reading_language_id ASC) VISIBLE,
        INDEX fk_languages_writing_languages1_idx (writing_language_id ASC) VISIBLE,
        INDEX fk_languages_users1_idx (user_id ASC) VISIBLE,
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

    public function __construct()
    {
        $this->hookup = $this->connect();
        if($this->hookup->query($this->table))
            $this->hookup = null;
        else    
          die(var_export($this->hookup->errorinfo(), TRUE));       
    }


}
