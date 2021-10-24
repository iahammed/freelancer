<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Query\Expression;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFreelancersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('freelancers', function (Blueprint $table) {
            $table->id();
            $table->string('name', 75)->nullable();
            $table->string('email')->unique();
            $table->string('address', 120)->nullable();
            $table->string('phone', 20)->nullable();
            $table->json('skills')->default(new Expression('(JSON_ARRAY())'))->nullable();
            $table->text('profile')->nullable();
            $table->enum('currency', ['EUR', 'USD', 'GBP'])->default('GBP');
            $table->decimal('rate', $precision = 8, $scale = 2)->default(0.00);
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
        Schema::dropIfExists('freelancers');
    }
}
