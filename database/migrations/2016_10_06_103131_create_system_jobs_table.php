<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSystemJobsTable extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        /** @noinspection PhpUndefinedMethodInspection */
        Schema::create("system_jobs", function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string("queue");
            $table->longText("payload");

            /** @noinspection PhpUndefinedMethodInspection */
            $table->tinyInteger("attempts")->unsigned();

            /** @noinspection PhpUndefinedMethodInspection */
            $table->unsignedInteger("reserved_at")->nullable();

            $table->unsignedInteger("available_at");
            $table->unsignedInteger("created_at");
            $table->index(["queue", "reserved_at"]);
        });
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        /** @noinspection PhpUndefinedMethodInspection */
        Schema::dropIfExists("system_jobs");
    }
}
