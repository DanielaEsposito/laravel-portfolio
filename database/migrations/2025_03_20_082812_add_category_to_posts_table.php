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
        Schema::table('posts', function (Blueprint $table) {
            
            //aggiungo la nuova colonna che sarà una foreign key
            $table->foreignId('category_id')->nullable()->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            //richiamo la vecchia tabella 
            $table->string('category');
            //elimino la costrain
            $table->dropForeign('posts_category_id_foreign');
            //elimino la colonna
            $table->dropColumn('category_id');
        });
    }
};
