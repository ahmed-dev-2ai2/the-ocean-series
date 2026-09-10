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
        Schema::table('videos', function (Blueprint $table) {
            $table->string('title')->after('id');
            $table->text('description')->nullable()->after('title');

            $table->string('video_path')->after('description');
            $table->string('video_disk')->default('local')->after('video_path');

            $table->string('mime_type')->nullable()->after('video_disk');
            $table->unsignedBigInteger('file_size')->nullable()->after('mime_type');

            $table->string('status')->default('active')->after('file_size');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('videos', function (Blueprint $table) {
            $table->dropColumn([
                'title',
                'description',
                'video_path',
                'video_disk',
                'mime_type',
                'file_size',
                'status',
            ]);
        });
    }
};
