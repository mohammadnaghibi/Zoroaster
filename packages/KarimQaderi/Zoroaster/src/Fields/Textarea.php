<?php

    namespace KarimQaderi\Zoroaster\Fields;


    use KarimQaderi\Zoroaster\Fields\Other\Field;
    use KarimQaderi\Zoroaster\Fields\Traits\Resource;


    class Textarea extends Field
    {
        use Resource;

        /**
         * The field's component.
         *
         * @var string
         */
        public $component = 'textarea';

        public function rows($rows)
        {
            return $this->withMeta([
                'rows' => $rows,
            ]);
        }

    }