<?php namespace Pbs\Products\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePbsProductsItemVariant extends Migration
{
    public function up()
    {
        Schema::table('pbs_products_item_variant', function($table)
        {
            $table->dropColumn('name');
        });
    }
    
    public function down()
    {
        Schema::table('pbs_products_item_variant', function($table)
        {
            $table->string('name', 191);
        });
    }
}
