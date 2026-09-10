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
            // إضافة عمود 'level' إذا لم يكن موجوداً
            if (!Schema::hasColumn('videos', 'level')) {
                $table->string('level')->nullable()->after('status');
            }
            
            // إضافة عمود 'teacher_name' إذا لم يكن موجوداً
            if (!Schema::hasColumn('videos', 'teacher_name')) {
                $table->string('teacher_name')->nullable()->after('level');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('videos', function (Blueprint $table) {
            $table->dropColumn(['level', 'teacher_name']);
        });
    }
};