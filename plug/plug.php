<?php
class SomeCLass {
    public $var1;
    protected $var2;
    private $var3;
    function __construct(string $a, int $b, bool $c = false) {
        $this->var1 = $a;
        $this->var2 = $b;
        $this->var3 = $c;
    }
}