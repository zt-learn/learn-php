<?php

class talker
{
    private $data = 'Hi ';

    public function & get()
    {
        return $this->data;
    }

    public function out()
    {
        echo $this->data;
    }

}

$talker = new talker();
$data = &$talker->get();

$talker->out();
$data = 'How ';

$talker->out();
$data = 'Are ';

$talker->out();
$data = 'You ';

$talker->out();
