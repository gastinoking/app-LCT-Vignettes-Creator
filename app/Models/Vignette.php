<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Vignette extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $appends =['img'];



    public static $typesVignettes =  [
        'images/vignettes/vignette-vert.png'=>'Vignette verte',
        'images/vignettes/vignette-rouge.png'=>'Vignette rouge',
        'images/vignettes/vignette-jeune.png'=>'Vignette jaune',
        'images/vignettes/vignette-bleu.png'=>'Vignette bleu',
    ] ;

    public function getImgAttribute()
    {
        return asset($this->typeimpression);
    }
}
