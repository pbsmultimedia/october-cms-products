<?php namespace Pbs\Products\Models;

#use Model;
use October\Rain\Database\Pivot;
use System\Models\File;

/**
 * Model
 */
class ItemVariantPivot extends Pivot
{

    public $attachOne = [

        // the name will make the match
        # can´t access the relation directly.. WTF.. maybe because is a pivot?
        'outline' => ['System\Models\File']
        //'outline_data'   => ['System\Models\File']

    ];

}