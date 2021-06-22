<?php
namespace Tigo\Curriculum\Job\Factories;

use Tigo\Curriculum\Base\Interfaces\IPush;
use Tigo\Curriculum\Job\Creator\CurriculumCreator;

class CurriculumFactory extends CurriculumCreator
{
        
    /**
     * factoryMethod
     *
     * @param  IPush $push
     * @return [type]
     */
    protected function factoryMethod(IPush $push)
    {
        return $push->create();   
    }

}