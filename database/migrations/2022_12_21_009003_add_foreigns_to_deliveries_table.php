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
        Schema::table('deliveries', function (Blueprint $table) {
            $table
                ->foreign('receipt_id')
                ->references('id')
                ->on('receipts')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table
                ->foreign('rider_id')
                ->references('id')
                ->on('riders')
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
        Schema::table('deliveries', function (Blueprint $table) {
            $table->dropForeign(['receipt_id']);
            $table->dropForeign(['user_id']);
        });
    }
};
