<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;
use App\Fields\Partials\Heading;
use App\Fields\Partials\Wysiwyg;
use App\Fields\Partials\ButtonFields;

class Banner extends Block
{
    /**
     * The block name.
     *
     * @var string
     */
    public $name = 'Banner';

    /**
     * The block description.
     *
     * @var string
     */
    public $description = 'A simple Banner block.';

    /**
     * The block category.
     *
     * @var string
     */
    public $category = 'formatting';

    /**
     * The block icon.
     *
     * @var string|array
     */
    public $icon = '';

    /**
     * The block keywords.
     *
     * @var array
     */
    public $keywords = [];

    /**
     * The block post type allow list.
     *
     * @var array
     */
    public $post_types = ['page'];

    /**
     * The parent block type allow list.
     *
     * @var array
     */
    public $parent = [];

    /**
     * The default block mode.
     *
     * @var string
     */
    public $mode = 'edit';

    /**
     * The default block alignment.
     *
     * @var string
     */
    public $align = '';

    /**
     * The default block text alignment.
     *
     * @var string
     */
    public $align_text = '';

    /**
     * The default block content alignment.
     *
     * @var string
     */
    public $align_content = '';

    /**
     * The supported block features.
     *
     * @var array
     */
    public $supports = [
        'align' => false,
        'align_text' => false,
        'align_content' => false,
        'mode' => false,
        'multiple' => true,
        'jsx' => true,
    ];

    /**
     * The block preview example data.
     *
     * @var array
     */
    public $example = [];

    /**
     * Data to be passed to the block before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'data' => $this->data(),
        ];
    }

    /**
     * The block field group.
     *
     * @return array
     */
    public function fields()
    {
        $Banner = new FieldsBuilder('Banner');

        $Banner
            ->addFields($this->get(Heading::class))
            ->addFields($this->get(Wysiwyg::class))
            ->addFields($this->get(ButtonFields::class))
            ->addImage('image');


        return $Banner->build();
    }

    /**
     * Return fields data.
     *
     * @return array
     */
    public function data()
    {
        return [
            'heading' => get_field('heading'),
            'wysiwyg' => get_field('wysiwyg'),
            'button' => get_field('button'),
            'image' => get_field('image'),
        ];
    }

    /**
     * Assets to be enqueued when rendering the block.
     *
     * @return void
     */
    public function enqueue()
    {
        //
    }
}
