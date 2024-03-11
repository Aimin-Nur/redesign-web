<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class ModelPorto extends Model
{
    use HasFactory;
    protected $table = 'portofolio';

    protected $keyType = 'string'; // Mengatur tipe data kunci utama
    public $incrementing = false; // Menonaktifkan inkremental

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->id = (string) Str::uuid();
        });
    }

    protected $fillable = [
        'id',
        'gambar',
        'judul',
        'status',
        'isi',
    ];

    public function limitWords($text, $limit) {
        $words = str_word_count($text, 2);
        $pos = array_keys($words);
        if (count($words) > $limit) {
            $text = substr($text, 0, $pos[$limit]) . '...';
        }
        return $text;
    }

}
