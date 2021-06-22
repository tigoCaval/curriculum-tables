<?php
namespace Tigo\Curriculum\Base\Log;

class Log
{

    public static function console($data)
    {
       echo "<script>console.log('$data')</script>"; 
    }
}