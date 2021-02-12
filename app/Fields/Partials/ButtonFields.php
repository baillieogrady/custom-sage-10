<?php

namespace App\Fields\Partials;

use Log1x\AcfComposer\Partial;
use StoutLogic\AcfBuilder\FieldsBuilder;

class ButtonFields extends Partial
{
    /**
     * The partial field group.
     *
     * @return array
     */
    public function fields()
    {
        $buttonFields = new FieldsBuilder('button_fields');

        $buttonFields
            ->addLink('button');

        return $buttonFields;
    }
}
