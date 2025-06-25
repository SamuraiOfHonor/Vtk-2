<?php

use App\Models\Language;
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
        Schema::create('directions', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique()->comment('Код кафедры');
            $table->string('name')->comment(comment: 'Название кафедры');
            $table->string('slug')->unique()->comment(comment: 'Slug страницы');
            $table->string('img')->comment('Картинка кафедры');
            $table->longtext('description')->comment('Описание Кафедры');
            $table->string('type')->comment('Вид образовательной программы');
            $table->string('level')->comment('Реализуемый уровень образования');
            $table->string('Qualification')->comment('Квалификация');
            $table->foreignIdFor(Language::class)->constrained()->onDelete('cascade');
            $table->string(column: 'accreditation')->comment('Срок действия гос. аккредитации');
            $table->string('Department')->comment('Кафедра');

            $table->json('education')->comment('Базовое образование, форма обучения, срок обучения');
            
            $table->boolean('is_active')->default(0);
            $table->boolean('is_popular')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('directions');
    }
};
