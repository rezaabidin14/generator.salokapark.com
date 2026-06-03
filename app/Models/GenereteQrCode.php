<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class GenereteQrCode extends Model
{
    use HasFactory;
    protected $table = 'generete_qr_codes';
    protected $fillable = [
        'title',
        'sort_description',
        'id_departemen',
        'departemen',
        'id_sub_departemen',
        'sub_departemen',
        'status',
    ];

    /**
     * Get all of the comments for the GenereteQrCode
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function generete_qr_code_logs(): HasMany
    {
        return $this->hasMany(GenereteQrCodeLog::class, 'generete_qrcode_id', 'id');
    }

    /**
     * Get all of the comments for the GenereteQrCode
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function detail_qr_codes(): HasMany
    {
        return $this->hasMany(DetailQrCode::class, 'generete_qrcode_id', 'id');
    }
}