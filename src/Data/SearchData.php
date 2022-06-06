<?php

namespace App\Data;

use App\Entity\Category;

/**
 * Undocumented class
 */
class SearchData
{
    /**
     * Numéro de la page
     *
     * @var integer
     */
    public $page = 1;

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
