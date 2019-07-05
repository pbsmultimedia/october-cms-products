<?php namespace Pbs\Products\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreatePbsProductsVariant extends Migration
{
    public function up()
    {
        Schema::create('pbs_products_variant', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('id');
            $table->text('name');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('pbs_products_variant');
    }
}
