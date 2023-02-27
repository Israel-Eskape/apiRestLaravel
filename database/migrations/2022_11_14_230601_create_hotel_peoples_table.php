<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotelPeoples', function (Blueprint $table) {
            $table->id();
            $table->string('name',50);
            $table->string('firstName',20);
            $table->string('lastName',20);
            $table->date('birthday');
            $table->string('address',100);
            $table->string('phone',20);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->unsignedBigInteger('hotelRole_id');
            $table->unsignedBigInteger('hotelStatusEntity_id');
            $table->foreign('hotelRole_id')
                            ->references('id')
                            ->on('hotelRoles')
                            ->onUpdate('cascade')
                            ->onDelete('cascade');

            $table->foreign('hotelStatusEntity_id')
                            ->references('id')
                            ->on('hotelStatusEntitys')
                            ->onUpdate('cascade')
                            ->onDelete('cascade');
            
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
        Schema::dropIfExists('hotelPeoples');
    }
};
