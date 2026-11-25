
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('pelanggans', function (Blueprint $table) {
            $table->string('kode_pelanggan')->unique()->after('id');
            $table->string('kategori')->after('nama');
            $table->date('tanggal_daftar')->after('email');
            $table->text('keterangan')->nullable()->after('alamat');
        });
    }

    public function down(): void
    {
        Schema::table('pelanggans', function (Blueprint $table) {
            $table->dropUnique(['kode_pelanggan']);
            $table->dropColumn([
                'kode_pelanggan',
                'kategori',
                'tanggal_daftar',
                'keterangan',
            ]);
        });
    }
};
