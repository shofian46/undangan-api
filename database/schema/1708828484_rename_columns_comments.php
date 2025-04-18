<?php

use Core\Database\Migration;
use Core\Database\Schema;
use Core\Database\Table;

return new class implements Migration
{
    /**
     * Jalankan migrasi.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('comments', function (Table $table) {
            if ($table->checkColumn('name')) {
                $table->renameColumn('name', 'name');
            }
        });

        Schema::table('comments', function (Table $table) {
            if ($table->checkColumn('presence')) {
                $table->renameColumn('hadir', 'presence');
            }
        });

        Schema::table('comments', function (Table $table) {
            if ($table->checkColumn('comment')) {
                $table->renameColumn('komentar', 'comment');
            }
        });
    }

    /**
     * Kembalikan seperti semula.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('comments', function (Table $table) {
            if ($table->checkColumn('name')) {
                $table->renameColumn('name', 'name');
            }
        });

        Schema::table('comments', function (Table $table) {
            if ($table->checkColumn('presence')) {
                $table->renameColumn('presence', 'hadir');
            }
        });

        Schema::table('comments', function (Table $table) {
            if ($table->checkColumn('comment')) {
                $table->renameColumn('comment', 'komentar');
            }
        });
    }
};
