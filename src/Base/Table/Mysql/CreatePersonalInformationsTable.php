<?php
namespace Tigo\Curriculum\Base\Table\Mysql;

use Tigo\Curriculum\Base\Abstracts\AbsConnect;

/**
 * [class CreatePersonalInformationsTable]
 * 
 * @author Tiago A C Pereira <tiagocavalcante57@gmail.com>
 */
class CreatePersonalInformationsTable extends AbsConnect
{

    private $hookup;
    //Table personal_informations
    private $table = <<<TABLE
    CREATE TABLE IF NOT EXISTS personal_informations(
        id INT NOT NULL AUTO_INCREMENT,
        user_id INT NOT NULL,
        gender_id INT NOT NULL,
        marital_status_id INT NOT NULL,
        PRIMARY KEY (id),
        INDEX fk_personal_informations_users_idx (user_id ASC) VISIBLE,
        INDEX fk_personal_informations_genders1_idx (gender_id ASC) VISIBLE,
        INDEX fk_personal_informations_marital_statuses1_idx (marital_status_id ASC) VISIBLE,
        CONSTRAINT fk_personal_informations_users
          FOREIGN KEY (user_id)
          REFERENCES users (id)
          ON DELETE NO ACTION
          ON UPDATE NO ACTION,
        CONSTRAINT fk_personal_informations_genders1
          FOREIGN KEY (gender_id)
          REFERENCES genders (id)
          ON DELETE NO ACTION
          ON UPDATE NO ACTION,
        CONSTRAINT fk_personal_informations_marital_statuses1
          FOREIGN KEY (marital_status_id)
          REFERENCES marital_statuses (id)
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
