<?php

namespace Anomaly\VariablesModule\Test\Unit\Variable;

use Anomaly\Streams\Platform\Model\Variables\VariablesExamplesEntryModel;
use Anomaly\VariablesModule\Variable\Contract\VariableRepositoryInterface;

class VariableRepositoryTest extends \TestCase
{

    public function testGet()
    {
        /* @var VariableRepositoryInterface $variables */
        $variables = app(VariableRepositoryInterface::class);

        $this->assertEquals('demo@example.com', $variables->get('examples', 'email'));

        $this->assertNull($variables->get('examples', str_random()));
    }

    public function testPresenter()
    {
        /* @var VariableRepositoryInterface $variables */
        $variables = app(VariableRepositoryInterface::class);

        $this->assertInstanceOf(
            \Anomaly\Streams\Platform\Addon\FieldType\FieldTypePresenter::class,
            $variables->presenter('examples', 'email')
        );

        $this->assertNull($variables->presenter('examples', str_random()));
    }

    public function testGroup()
    {
        /* @var VariableRepositoryInterface $variables */
        $variables = app(VariableRepositoryInterface::class);

        $this->assertInstanceOf(VariablesExamplesEntryModel::class, $variables->group('examples'));

        $this->assertNull($variables->group(str_random()));
    }
}
