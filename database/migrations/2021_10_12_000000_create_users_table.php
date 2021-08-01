<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('name_ar');
            $table->date("date_of_birth");
            $table->unsignedBigInteger('national_id')->unique();
            $table->string('email')->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->enum('immunity_status', [
                'Immune',
                'No record of infection',
                'Exposed',
                'Infected',
                'Home quarantine',
                'Institutional quarantine'
            ]);
            $table->string('passport_no')->unique();
            $table->enum('blood_type', [
                'O-',
                'O+',
                'A-',
                'A+',
                'B-',
                'B+',
                'AB-',
                'AB+',
            ]);
            $table->foreignId("vaccine_id");
            $table->dateTime('immunity_date')->nullable();
            $table->string('profile_pic');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
