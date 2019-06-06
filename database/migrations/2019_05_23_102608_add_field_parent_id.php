<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldParentId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('categories', function (Blueprint $table) {
            //
            // Définition d'une catégorie parente s'il s'agit d'une sous-catégorie, cette clé étrangère fait référence à l'id de la catégorie parente. Cette clé n'est pas obligatoire puisqu'il y a des catégories principale, qui ne sont pas des sous-catégories, c'est pour cette raison qu'elle est 'nullable' et qu'on n'indique pas 'on delete cascade'
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->foreign('parent_id')->references('id')->on('categories')->onDelete('set null');
            Schema::enableForeignKeyConstraints();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('category', function (Blueprint $table) {
            //
        });
    }
}
