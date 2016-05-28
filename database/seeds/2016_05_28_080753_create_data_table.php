<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data', function (Blueprint $table) {
            $table->increments('id');
            $table->text('head_title');
            $table->text('head_text');
            $table->text('head_button');
            $table->text('intro_small_head');
            $table->text('intro_head');
            $table->text('intro_text');
            $table->text('intro_button');
            $table->text('chara_head');
            $table->text('chara_text');
            $table->text('chara_intro1_icon');
            $table->text('chara_intro1_head');
            $table->text('chara_intro1_text');
            $table->text('chara_intro2_icon');
            $table->text('chara_intro2_head');
            $table->text('chara_intro2_text');
            $table->text('chara_intro3_icon');
            $table->text('chara_intro3_head');
            $table->text('chara_intro3_text');
            $table->text('chara_intro4_icon');
            $table->text('chara_intro4_head');
            $table->text('chara_intro4_text');
            $table->text('chara_intro5_icon');
            $table->text('chara_intro5_head');
            $table->text('chara_intro5_text');
            $table->text('chara_intro6_icon');
            $table->text('chara_intro6_head');
            $table->text('chara_intro6_text');
            $table->text('step_head');
            $table->text('step_text');
            $table->text('step1_img');
            $table->text('step1_head');
            $table->text('step1_text');
            $table->text('step2_img');
            $table->text('step2_head');
            $table->text('step2_text');
            $table->text('step3_img');
            $table->text('step3_head');
            $table->text('step3_text');
            $table->text('step4_img');
            $table->text('step4_head');
            $table->text('step4_text');
            $table->text('step5_img');
            $table->text('step5_head');
            $table->text('step5_text');
            $table->text('step6_img');
            $table->text('step6_head');
            $table->text('step6_text');
            $table->text('slogan_head');
            $table->text('slogan_text');
            $table->text('slogan_button');
            $table->text('crew_head');
            $table->text('crew_text');
            $table->text('crew_mem1_img');
            $table->text('crew_mem1_name');
            $table->text('crew_mem1_title');
            $table->text('crew_mem2_img');
            $table->text('crew_mem2_name');
            $table->text('crew_mem2_title');
            $table->text('crew_mem3_img');
            $table->text('crew_mem3_name');
            $table->text('crew_mem3_title');
            $table->text('crew_mem4_img');
            $table->text('crew_mem4_name');
            $table->text('crew_mem4_title');
            $table->text('contact_head')
            $table->text('contact_text')
            $table->text('contact_button')
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
        Schema::drop('data');
    }
}
