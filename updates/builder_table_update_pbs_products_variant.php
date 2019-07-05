<?php namespace Pbs\Products\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePbsProductsVariant extends Migration
{
    public function up()
    {
        Schema::table('pbs_products_variant', function($table)
        {
            $table->primary(['id']);
        });
    }
    
    public function down()
    {
        Schema::table('pbs_products_variant', function($table)
        {
            $table->dropPrimary(['id']);
        });
    }
}
