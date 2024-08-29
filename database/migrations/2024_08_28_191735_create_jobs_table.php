<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Employer;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Employer::class); // Foreign key to employers table
            $table->string('title');
            $table->decimal('salary', 8, 2); // Adjust the precision as needed
            $table->string('location');
            $table->string('schedule')->nullable(); // Nullable if it's optional
            $table->string('url')->nullable(); // Nullable if it's optional
            $table->boolean('featured')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
