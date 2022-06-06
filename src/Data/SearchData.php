<?php

namespace App\Data;

use App\Entity\Category;

/**
 * Undocumented class
 */
class SearchData
{
    /**
     * Undocumented variable
     *
     * @var string
     */
    public $q = '';

    /**
     * Tableau de catégorie
     *
     * @var Category[]
     */
    public $categories = [];

    /**
     * Undocumented variable
     *
     * @var null/integer
     */
    public $max;

    /**
     * Undocumented variable
     *
     * @var null/integer
     */
    public $min;
}
