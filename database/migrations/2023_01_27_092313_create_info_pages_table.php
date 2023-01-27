<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('info_pages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tenant_id');
            $table->string('title', 100);
            $table->longText('text');
            $table->integer('order')->default(1);
            $table->foreignIdFor(User::class, 'responsible_id');

            // Model columns come here

            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('info_pages');
    }
};
