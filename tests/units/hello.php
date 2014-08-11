<?php

namespace Tests\Units;

class stdClass extends \atoum\test {

    public function testSay ( ) {

        $to = 'foo';
        $this->string('foo')->isEqualTo($to);
    }

    public function testSayy ( ) {

        $this->string('bar')->isEqualTo('bar');
    }
}
