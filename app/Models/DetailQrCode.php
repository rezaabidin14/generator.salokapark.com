<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DetailQrCode extends Model
{
    use HasFactory;
    protected $table = 'qr_codes';
    protected $fillable = [
        'link_qr',
        'note_qr',
        'status',
    ];


    /**
     * Get the user that owns the DetailQrCode
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function generete_qrcode(): BelongsTo
    {
        return $this->belongsTo(GenereteQrCode::class, 'generete_qrcode_id', 'id');
    }
}
