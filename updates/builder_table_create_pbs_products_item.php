<?php namespace Pbs\Products\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreatePbsProductsItem extends Migration
{
    public function up()
    {
        Schema::create('pbs_products_item', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('id');
            $table->string('name');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('pbs_products_item');
    }
}
