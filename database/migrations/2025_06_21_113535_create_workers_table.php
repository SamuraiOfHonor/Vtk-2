<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('workers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('img');
            $table->foreignIdFor(Position::class)->constrained()->onDelete('cascade');
            $table->boolean('is_active')->default(true);
            $table->boolean('is_popular')->default(true);
            $table->timestamp('created_time')->useCurrent();

            $table->string('exp');
            $table->string('exp_teacher');
            
            $table->json('study')->comment('место учёбы, время, специальность');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('workers');
    }
};
