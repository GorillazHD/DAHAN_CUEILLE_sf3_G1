<?php

namespace AppBundle\Antispam\Antispam;
class Antispam
{
    private $antispamLenght;
    private $mailer;

    public function __construct($antispamLenght)
    {
        $this->antispamLenght = $antispamLenght;
    }

    public function isSpam($text)
    {
        return strlen($text) < $this->antispamLenght;
    }
}