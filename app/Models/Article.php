<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Auteur;
use App\Models\Publication;

class Article extends Model
{
    use HasFactory;
    protected $table = 'article';
    protected $fillable = ['id','categorie','titre','resume','image','contenu','idauteur'];
    public $timestamps = false;

    public function getAuteur() {
        return Auteur::find($this->attributes['idauteur']);
    }

    public function getPublication() {
        $publication = Publication::where('idarticle',$this->attributes['id'])->first();
        return $publication;
    }

    public function getLastNews() {
        $publication = Publication::latest('publish_at')->first();
        return self::find($publication->idarticle);
    }
} 
