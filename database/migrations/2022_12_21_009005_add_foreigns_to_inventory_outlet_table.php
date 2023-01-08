<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('inventory_outlet', function (Blueprint $table) {
            $table
                ->foreign('outlet_id')
                ->references('id')
                ->on('outlets')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table
                ->foreign('inventory_id')
                ->references('id')
                ->on('inventories')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('inventory_outlet', function (Blueprint $table) {
            $table->dropForeign(['outlet_id']);
            $table->dropForeign(['inventory_id']);
        });
    }
};
