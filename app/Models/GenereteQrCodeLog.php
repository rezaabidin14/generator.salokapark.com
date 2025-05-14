<?php

namespace App\Models;

use Generator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class GenereteQrCodeLog extends Model
{
    use HasFactory;
    protected $table = 'generete_qr_code_logs';
    protected $fillable = [
        'user_name',
        'user_id',
        'note_log',
    ];

    /**
     * Get the user that owns the GenereteQrCodeLog
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function generete_qrcode(): BelongsTo
    {
        return $this->belongsTo(GenereteQrCode::class, 'generete_qrcode_id', 'id');
    }
}
