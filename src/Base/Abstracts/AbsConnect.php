<?php
namespace Tigo\Curriculum\Base\Abstracts;

use Tigo\Curriculum\Base\Connect\UniversalConnect;
 
/**
 * [class AbsConnect]
 * 
 * @author Tiago A C Pereira <tiagocavalcante57@gmail.com>
 */
abstract class AbsConnect
{
    private $conn = true;
  
    public function connect()
    {
         return $this->conn == true ?  UniversalConnect::doConnection() : null;
    }

}