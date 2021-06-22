<?php
namespace Tigo\Curriculum\Job;

use Tigo\Curriculum\Job\Factories\CurriculumFactory;
use Tigo\Curriculum\Base\Proxy\PushTablesMysql;
use Tigo\Curriculum\Base\Proxy\PushTablesSqlite;

/**
 * [class Curriculum]
 * 
 * @package curriculum
 * @author Tiago A C Pereira <tiagocavalcante57@gmail.com>
 */
class Curriculum
{
        
    /**
     * method
     *
     * @var CurriculumFactory
     */
    protected $method;

    public function __construct()
    {
        $this->method = new CurriculumFactory();
    }
    
    /**
     * migrate mysql tables
     *
     * @return [type]
     */
    public function mysql()
    {
        return $this->method->doFactory(new PushTablesMysql());
    }
    
    /**
     * migrate sqlite tables
     *
     * @return [type]
     */
    public function sqlite()
    {
        return $this->method->doFactory(new PushTablesSqlite());           
    }
   
}