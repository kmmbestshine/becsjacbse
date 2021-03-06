<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      $sql = 'CREATE TABLE exam (id int(11) NOT NULL AUTO_INCREMENT, school_id int(11) NOT NULL, exam_type varchar(200) NOT NULL, pass_marks int(11) NOT NULL, max_marks int(11) NOT NULL, platform varchar(50) NOT NULL, created_at timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP, updated_at timestamp NOT NULL DEFAULT "0000-00-00 00:00:00",PRIMARY KEY (`id`));';
      \DB::connection()->getPdo()->exec($sql);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exam');
    }
}
