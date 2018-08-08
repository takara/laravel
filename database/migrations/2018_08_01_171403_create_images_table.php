<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('images', function (Blueprint $table) {
            //$table->increments('id');
            //$table->timestamps();
            $sql =
                "CREATE TABLE `images` (\n".
                "  `id`         int(11) unsigned NOT NULL AUTO_INCREMENT,\n".
                "  `comics_id`  int(11) DEFAULT NULL,\n".
                "  `page`       int(11) DEFAULT NULL,\n".
                "  `filepath`   text,\n".
                "  `created_at` timestamp NULL DEFAULT NULL,\n".
                "  `updated_at` timestamp NULL DEFAULT NULL,\n".
                "  PRIMARY KEY (`id`)\n".
                ") ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='イメージ';\n".
                "";
            DB::connection()->getPdo()->exec($sql);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('images');
    }
}
