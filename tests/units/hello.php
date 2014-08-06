<?php

namespace Tests\Units;

class stdClass extends \atoum\test {

    public function testSay ( ) {

        if(50503 !== PHP_VERSION_ID)
            $to = 'foo';
        else
            $to = 'bar';

        $this->string('foo')->isEqualTo($to);
    }

    public function testSayy ( ) {

        $this->string('bar')->isEqualTo('bar');
    }
}
