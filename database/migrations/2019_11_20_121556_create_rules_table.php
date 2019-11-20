<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rules', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('rule');
            $table->boolean('g1');
            $table->boolean('g2');
            $table->boolean('g3');
            $table->boolean('g4');
            $table->boolean('g5');
            $table->boolean('g6');
            $table->boolean('g7');
            $table->boolean('g8');
            $table->boolean('g9');
            $table->boolean('g10');
            $table->boolean('g11');
            $table->boolean('g12');
            $table->boolean('g13');
            $table->boolean('g14');
            $table->boolean('g15');
            $table->boolean('g16');
            $table->boolean('g17');
            $table->boolean('g18');
            $table->boolean('g19');
            $table->boolean('g20');
            $table->boolean('g21');
            $table->boolean('g22');
            $table->boolean('g23');
            $table->boolean('g24');
            $table->boolean('g25');
            $table->boolean('g26');
            $table->boolean('g27');
            $table->boolean('g28');
            $table->boolean('g29');
            $table->boolean('g30');
            $table->boolean('g31');
            $table->boolean('g32');
            $table->boolean('g33');
            $table->boolean('g34');
            $table->boolean('g35');
            $table->boolean('g36');
            $table->boolean('g37');
            $table->boolean('g38');
            $table->boolean('g39');
            $table->boolean('g40');
            $table->boolean('g41');
            $table->boolean('g42');
            $table->boolean('g43');
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
        Schema::dropIfExists('rules');
    }
}
