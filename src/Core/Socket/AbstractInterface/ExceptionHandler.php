<?php
/**
 * Created by PhpStorm.
 * User: yf
 * Date: 2018/1/5
 * Time: 下午2:34
 */

namespace EasySwoole\Core\Socket\AbstractInterface;


use EasySwoole\Core\Socket\Command\CommandBean;

interface ExceptionHandler
{
    public function handler(\Exception $exception,$client,CommandBean $bean):void;
}