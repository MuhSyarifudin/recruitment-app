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
        Schema::create('candidates', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("job_id");
            $table->string("name");
            $table->string("email");
            $table->string("phone");
            $table->integer("year");
            $table->integer("created_by");
            $table->integer("updated_by");
            $table->integer("deleted_by");
            $table->timestamps();
            $table->dateTime("deleted_at")->nullable();
            $table->foreign('job_id')->references('id')->on('jobs');
            $table->unique("email");
            $table->unique("phone");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidates');
    }
};
