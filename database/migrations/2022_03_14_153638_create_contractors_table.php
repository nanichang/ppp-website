<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contractors', function (Blueprint $table) {
            $table->id();
            $table->string('profile_pic')->nullable();
            $table->string('country')->nullable();
            // $table->string('mda_code')->nullable();
            // $table->string('mda_short_code')->nullable();
            $table->string('website')->nullable();
            // $table->string('mandate')->nullable();
            $table->integer('sub_sector_id')->unsigned()->nullable();
            $table->string('bank_name')->nullable();
            $table->string('bank_code')->nullable();
            $table->string('bank_account_no')->nullable();
            $table->decimal('split_percentage', 5, 2)->default(0);
            $table->boolean('isActive')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contractors');
    }
}
