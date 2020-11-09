<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMayInTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('may_in', function (Blueprint $table) {
            $table->id();
            $table->string('ten');
            $table->string('ma_san_pham');
            $table->string('hinh_anh');
            $table->text('mo_ta');
            $table->bigInteger('danh_muc');
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
        Schema::dropIfExists('may_in');
    }
}
