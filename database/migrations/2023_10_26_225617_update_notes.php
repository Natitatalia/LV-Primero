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
        Schema::table("notes",function(Blueprint $table){
            $table->string("autor",20)->unique();
            $table->dropColumn("terminado");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table("notes",function(blueprint $table){
            $table->dropColumn(["autor"]);
        });
    }
};
