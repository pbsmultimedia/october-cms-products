<?php namespace Pbs\Products\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreatePbsProductsItemVariant extends Migration
{
    public function up()
    {
        Schema::create('pbs_products_item_variant', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('id');
            $table->integer('products_item_id');
            $table->string('name');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('pbs_products_item_variant');
    }
}
