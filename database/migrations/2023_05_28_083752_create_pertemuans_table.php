<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pertemuans', function (Blueprint $table) {
            $table->id();
            $table->string("nama")->nullable();
            $table->string("kelas")->nullable();
            $table->string("guru")->nullable();
            $table->date("tanggal")->nullable();
            $table->text("alasan")->nullable();
            $table->text("tanggapan")->nullable();
            $table->string("status")->default("Menunggu");
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pertemuans');
    }
};
