<?php

use Phalcon\Model\Base as Model;

class Categories extends Model
{
    /**
     * @var integer
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    public function initialize()
    {
        $this->hasMany('id', 'NewsCategories', 'categories_id');
    }
}
