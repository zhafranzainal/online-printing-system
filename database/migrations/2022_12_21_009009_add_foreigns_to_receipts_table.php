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
        Schema::table('receipts', function (Blueprint $table) {
            $table
                ->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table
                ->foreign('address_id')
                ->references('id')
                ->on('addresses')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table
                ->foreign('payment_method_id')
                ->references('id')
                ->on('payment_methods')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table
                ->foreign('order_id')
                ->references('id')
                ->on('orders')
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
        Schema::table('receipts', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropForeign(['address_id']);
            $table->dropForeign(['payment_method_id']);
            $table->dropForeign(['order_id']);
        });
    }
};
