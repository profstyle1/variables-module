<?php

class VariableFormBuilderTest extends TestCase
{

    public function testOnReady()
    {
        /* @var \Anomaly\VariablesModule\Variable\Form\VariableFormBuilder $builder */
        $builder = app(\Anomaly\VariablesModule\Variable\Form\VariableFormBuilder::class);

        $builder->setModel(\Anomaly\Streams\Platform\Model\Variables\VariablesExamplesEntryModel::class);

        $builder->build();

        $builder->onReady(); // for coverage

        $this->assertInstanceOf(\Anomaly\Streams\Platform\Ui\Form\FormBuilder::class, $builder);
    }

    public function testGetContextualId()
    {
        /* @var \Anomaly\VariablesModule\Variable\Form\VariableFormBuilder $builder */
        $builder = app(\Anomaly\VariablesModule\Variable\Form\VariableFormBuilder::class);

        $builder->setModel(\Anomaly\Streams\Platform\Model\Variables\VariablesExamplesEntryModel::class);

        $builder->build();

        $this->assertTrue(is_integer($builder->getContextualId()));
    }
}
