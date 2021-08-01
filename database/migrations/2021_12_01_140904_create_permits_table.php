<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permits', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->enum('type', [
                'Governmental',
                'Personal',
                'Commercial',
                'Institutional quarantine'
            ])->default("Personal");
            $table->string('place')->default("Unspecified");
            $table->unsignedInteger('capacity')->default(1);
            $table->unsignedInteger('radius')->default(200);
            $table->decimal('lon', 10, 7)->default(0);
            $table->decimal('lat', 10, 7)->default(0);
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
        Schema::dropIfExists('permits');
    }
}
