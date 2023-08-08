<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('phone')->after('password')->nullable();
            $table->string('user_type')->after('phone')->default('user');
            $table->string('bio')->after('user_type')->nullable();
            $table->string('address')->after('bio')->nullable();
            $table->string('image')->after('address')->nullable();
            $table->unsignedBigInteger('state_id')->after('id')->nullable();
            $table->unsignedBigInteger('lga_id')->after('state_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('phone');
            $table->dropColumn('user_type');
            $table->dropColumn('bio');
            $table->dropColumn('address');
            $table->dropColumn('image');
            $table->dropColumn('state_id');
            $table->dropColumn('lga_id');
        });
    }
}
