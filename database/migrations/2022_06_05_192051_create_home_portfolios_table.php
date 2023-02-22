<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomePortfoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_portfolios', function (Blueprint $table) {
            $table->id();

            $table->string('client')->nullable();
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->string('project_url')->nullable();
            // $table->string('home_portfolio_image_id');

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
        Schema::dropIfExists('home_portfolios');
    }
}
