<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDogsRemarksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('dogs', function (Blueprint $table) {
            //
            $table->text('remarks')->comment('特記事項')->after('dog_status')->nullable();
            $table->string( 'experience_year')->comment('経験年数')->after('remarks')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    //ここでdropculumとすることで、カラムの状態を一つ戻す。
    public function down()
    {
        Schema::table('dogs', function (Blueprint $table) {
            //
            $table->dropColumn('remarks');
            $table->dropColumn('experience_year');
        });
    }
}
