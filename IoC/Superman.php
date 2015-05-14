<?php
class Superman
{
    protected $module;

    public function __construct(SuperModuleInterface $module)
    {
        $this->module = $module;
    }
}

$superModule = new XPower();
$superMan = new Superman($superModule);

//$superman = new Superman();

//$superman->shuru('test');
//
//echo 'asdfadf';
//$superman->shuchu();




