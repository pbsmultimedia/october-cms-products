<?php namespace Pbs\Products\Models;

use Model;

/**
 * Model
 */
class Item extends Model
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
    public $table = 'pbs_products_item';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    # get the tails
    public $belongsToMany =
        [
            'variant'  => [
                'Pbs\Products\Models\Variant',
                'table'     => 'pbs_products_item_variant',
                #'key'      => 'surfboardmodel_id',
                #'otherKey' => 'tail_id',
                'pivotModel' => 'Pbs\Products\Models\ItemVariantPivot',
                # works
                // works - stores the path
                #'pivot'    => ['id', 'outline_data']
            ],
        ];

}
