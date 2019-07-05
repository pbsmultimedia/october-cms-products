<?php namespace Pbs\Products\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePbsProductsVariant2 extends Migration
{
    public function up()
    {
        Schema::table('pbs_products_variant', function($table)
        {
            $table->increments('id')->change();
        });
    }
    
    public function down()
    {
        Schema::table('pbs_products_variant', function($table)
        {
            $table->integer('id')->change();
        });
    }
}
