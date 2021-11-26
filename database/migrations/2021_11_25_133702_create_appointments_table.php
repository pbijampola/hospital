<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('doctor');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('date');
            $table->string('message');
            $table->string('status')->default('In Progress');
            $table->softDeletes();
            $table->timestamps();
        });
        return redirect()->back()->with('success','Appointment Created Successfully');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appointments');
    }
}
