
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('bukus', function (Blueprint $table) {
            $table->char('kode', 12)->index();
            $table->char('judul', 255);
            $table->char('penulis', 225);
            $table->char('penerbit', 225);
            $table->char('tahun_terbit', 255);
            $table->char('stok', 255);
        });
    }

    public function down(): void
    {
        Schema::table('bukus', function (Blueprint $table) {
            $table->dropIndex(['kode']);
            $table->dropColumn([
                'kode',
                'judul',
                'penulis',
                'penerbit',
                'tahun_terbit',
                'stok'
            ]);
        });
    }
};
