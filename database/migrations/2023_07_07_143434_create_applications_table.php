<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string('departing');
            $table->string('destination');
            $table->boolean('connecting'); // 0 -> no // 1 ->yes
            $table->json('airport_change')->nullable();
            $table->json('airlines')->nullable();
            $table->integer('cancellation_notification')->nullable(); // 0 -> les than 14days //1-more than 14days
            // $table->string('flight_number')->nullable();
            // $table->date('date')->nullable();
            $table->integer('flight_disruption')->nullable(); //0 -> flight Delayed // 1-> flight Cancelled 2-> i was denied boarding
            $table->integer('delayed_hours')->nullable(); //0 -> 0-1 hours // 1-> 1-2 hours // 2 -> 2-3 hours // 3-> 3-4 hours // 4 -> 4+ hours // 5->never arrived
            $table->integer('caused')->nullable(); //0-> dont remember // 1->technical problem //2->bad weather //3->influence by other flight //4->airport problem
                                                    //5->strike //6->No reason given //7->Force majore(covid19)
            $table->string('name')->nullable();
            $table->string('surname')->nullable();
            $table->string('email')->nullable();
            $table->boolean('agree_terms')->default(0)->nullable();
            $table->boolean('agree_promotions')->default(0)->nullable();
            $table->boolean('traveling_alone')->default(0)->nullable(); // 0-> yes // 1->no
            $table->json('other_person')->nullable();
            $table->json('address');
            $table->string('pnr')->nullable();
            $table->integer('status')->default(0)->nullable();  // 0 -> pa zgjidhur // 1 -> zgjidhur // 2-> aplikimi ne shqyrtim // 3-> Aplikimi mori rimbursim // null application send succesfully
            $table->longtext('cancelled_explain')->nullable();
            $table->text('paid')->nullable();
            $table->text('passport_image')->nullable();
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
        Schema::dropIfExists('applications');
    }
};
