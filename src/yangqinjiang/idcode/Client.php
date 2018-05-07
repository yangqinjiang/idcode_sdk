<?php
/**
 * Created by PhpStorm.
 * User: ABC
 * Date: 2018-05-07
 * Time: 10:39
 */

namespace yangqinjiang\idcode;


class Client
{
    protected $a;

    protected $b;

    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function addTogether()
    {
        return $this->a + $this->b;
    }
}