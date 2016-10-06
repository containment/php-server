<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSystemFailedJobsTable extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        /** @noinspection PhpUndefinedMethodInspection */
        Schema::create("system_failed_jobs", function (Blueprint $table) {
            $table->increments("id");
            $table->text("connection");
            $table->text("queue");
            $table->longText("payload");
            $table->longText("exception");
            
            /** @noinspection PhpUndefinedMethodInspection */
            $table->timestamp("failed_at")->useCurrent();
        });
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        /** @noinspection PhpUndefinedMethodInspection */
        Schema::dropIfExists("system_failed_jobs");
    }
}
