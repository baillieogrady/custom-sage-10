<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;
use App\Fields\Partials\Newsletter;

class Post extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $post = new FieldsBuilder('post', ['position' => 'side']);

        $post
            ->setLocation('post_type', '==', 'post');

        $post
            ->addTextArea('subheading');

        return $post->build();
    }
}
