<?php namespace Pbs\Products\Models;

use Model;

/**
 * Model
 */
class Variant extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'pbs_products_variant';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
    
}
