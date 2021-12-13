<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'text',
        'slug',
    ];

    public function user(){
        return $this->belongsTo('App\User'); //priradenie príspevku User_ovi
    }
    public function getCreatedAtAttribute($value){
        return date('j M Y, G:i',strtotime($value)); //upravenie dátumu
    }
    public function getTeaserAttribute(){
        return word_limiter($this->text,60); //obmedzenie textu na 60 slov
    }
    public function getRichTextAttribute(){
        return add_paragraphs(filter_url(e($this->text))); //zalomenie
    }
}
