<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('comics', function (Blueprint $table) {
            $sql =
                "CREATE TABLE `comics` (\n".
                "  `id`         int(11) unsigned NOT NULL AUTO_INCREMENT,\n".
                "  `title`      varchar(255) DEFAULT NULL,\n".
                "  `pages`      int(11) DEFAULT NULL,\n".
                "  `zip_path`   varchar(512) DEFAULT NULL,\n".
                "  `cover`      text,\n".
                "  `created_at` timestamp NULL DEFAULT NULL,\n".
                "  `updated_at` timestamp NULL DEFAULT NULL,\n".
                "  PRIMARY KEY (id)\n".
                ") ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='コミック';".
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
        Schema::dropIfExists('comics');
    }
}
