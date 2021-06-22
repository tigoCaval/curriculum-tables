<?php
namespace Tigo\Curriculum\Job\Creator;

use Tigo\Curriculum\Base\Interfaces\IPush;

abstract class CurriculumCreator
{
        
    /**
     * factoryMethod
     *
     * @param  IPush $push
     * @return [type]
     */
    protected abstract function factoryMethod(IPush $push);
    
    /**
     * doFactory
     *
     * @param IPush $method
     * @return [type]
     */
    public function doFactory($method)
    {
        return $this->factoryMethod($method);   
    }

}