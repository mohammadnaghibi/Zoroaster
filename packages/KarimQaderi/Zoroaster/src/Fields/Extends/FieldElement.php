<?php

    namespace KarimQaderi\Zoroaster\Fields\Other;


    use KarimQaderi\Zoroaster\Element;

    abstract class FieldElement extends Element
    {

        /**
         * check For Update Or Save
         *
         * @var bool
         */
        public $OnUpdate = true;
        public $OnCreation = true;

        /**
         * Custom View
         *
         * @var bool
         */
        public $customView = false;

        /**
         * Custom Controller
         *
         * @var bool
         */
        public $customResourceController = false;

        /**
         * The field's assigned panel.
         *
         * @var string
         */
        public $panel;

        /**
         * Indicates if the element should be shown on the index view.
         *
         * @var bool
         */
        public $showOnIndex = true;

        /**
         * Indicates if the element should be shown on the detail view.
         *
         * @var bool
         */
        public $showOnDetail = true;

        /**
         * Indicates if the element should be shown on the creation view.
         *
         * @var bool
         */
        public $showOnCreation = true;

        /**
         * Indicates if the element should be shown on the update view.
         *
         * @var bool
         */
        public $showOnUpdate = true;

        /**
         * Specify that the element should be hidden from the index view.
         *
         * @return $this
         */
        public function hideFromIndex()
        {
            $this->showOnIndex = false;

            return $this;
        }

        /**
         * Specify that the element should be hidden from the detail view.
         *
         * @return $this
         */
        public function hideFromDetail()
        {
            $this->showOnDetail = false;

            return $this;
        }

        /**
         * Specify that the element should be hidden from the creation view.
         *
         * @return $this
         */
        public function hideWhenCreating()
        {
            $this->showOnCreation = false;

            return $this;
        }

        /**
         * Specify that the element should be hidden from the update view.
         *
         * @return $this
         */
        public function hideWhenUpdating()
        {
            $this->showOnUpdate = false;

            return $this;
        }

        /**
         * Specify that the element should only be shown on the index view.
         *
         * @return $this
         */
        public function onlyOnIndex()
        {
            $this->showOnIndex = true;
            $this->showOnDetail = false;
            $this->showOnCreation = false;
            $this->showOnUpdate = false;

            return $this;
        }

        /**
         * Specify that the element should only be shown on the detail view.
         *
         * @return $this
         */
        public function onlyOnDetail()
        {
            parent::onlyOnDetail();

            $this->showOnIndex = false;
            $this->showOnDetail = true;
            $this->showOnCreation = false;
            $this->showOnUpdate = false;

            return $this;
        }

        /**
         * Specify that the element should only be shown on forms.
         *
         * @return $this
         */
        public function onlyOnForms()
        {
            $this->showOnIndex = false;
            $this->showOnDetail = false;
            $this->showOnCreation = true;
            $this->showOnUpdate = true;

            return $this;
        }

        /**
         * Specify that the element should be hidden from forms.
         *
         * @return $this
         */
        public function exceptOnForms()
        {
            $this->showOnIndex = true;
            $this->showOnDetail = true;
            $this->showOnCreation = false;
            $this->showOnUpdate = false;

            return $this;
        }

        /**
         * Prepare the field element for JSON serialization.
         *
         * @return array
         */
        public function jsonSerialize()
        {
            return array_merge(parent::jsonSerialize() , [
                'panel' => $this->panel ,
            ]);
        }
    }