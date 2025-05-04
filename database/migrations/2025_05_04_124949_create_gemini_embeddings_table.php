<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // First ensure the pgvector extension is installed
        DB::statement('CREATE EXTENSION IF NOT EXISTS vector');

        Schema::create('gemini_embeddings', function (Blueprint $table) {
            $table->id();
            $table->morphs('embeddable');
            $table->string('embedding_model');
            $table->uuid('content_hash');
            $table->vector('vector', 256);
            $table->timestamps();

            // Add indexes
            $table->index(['content_hash']);
            $table->unique(['embeddable_type', 'embeddable_id']);
        });

        // Create HNSW index on the vector column
        DB::statement("CREATE INDEX gemini_embeddings_vector_idx ON gemini_embeddings USING hnsw (vector vector_cosine_ops)");
        // https://platform.openai.com/docs/guides/embeddings#which-distance-function-should-i-use
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gemini_embeddings');
    }
};
