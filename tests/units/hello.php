<?php

namespace Tests\Units;

class stdClass extends \atoum\test {

    public function testSay ( ) {

        $this->string('foo')->isEqualTo('foo');
    }

    public function testSayy ( ) {

        $this->string('bar')->isEqualTo('bar');
    }
}
