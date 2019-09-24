<?php

class GetVariableValueTest extends TestCase
{
    public function testHandle()
    {
        $this->assertEquals(
            'demo@example.com',
            dispatch_now(new \Anomaly\VariablesModule\Variable\Command\GetVariableValue('examples', 'email'))
        );

        $this->assertNull(
            dispatch_now(new \Anomaly\VariablesModule\Variable\Command\GetVariableValue('examples', str_random()))
        );
    }
}
