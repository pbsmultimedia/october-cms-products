<?php namespace Pbs\Products\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePbsProductsItemVariant3 extends Migration
{
    public function up()
    {
        Schema::table('pbs_products_item_variant', function($table)
        {
            $table->dropColumn('id');
        });
    }
    
    public function down()
    {
        Schema::table('pbs_products_item_variant', function($table)
        {
            $table->integer('id');
        });
    }
}
