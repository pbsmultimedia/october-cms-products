<?php namespace Pbs\Products\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePbsProductsItemVariant2 extends Migration
{
    public function up()
    {
        Schema::table('pbs_products_item_variant', function($table)
        {
            $table->integer('variant_id');
            $table->renameColumn('products_item_id', 'item_id');
        });
    }
    
    public function down()
    {
        Schema::table('pbs_products_item_variant', function($table)
        {
            $table->dropColumn('variant_id');
            $table->renameColumn('item_id', 'products_item_id');
        });
    }
}
