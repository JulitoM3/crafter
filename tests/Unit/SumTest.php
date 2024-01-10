<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class SumTest extends TestCase
{

    public function test_can_sum()
    {

        it('puede sumar', function () {
            $resultado = 1 + 2;
            expect($resultado)->toBeInt();

        });
    }

}
