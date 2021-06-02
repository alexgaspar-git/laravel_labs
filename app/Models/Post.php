<?php

namespace App\Models;

use Egulias\EmailValidator\Warning\Comment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function user() {
        return $this->hasMany(User::class);
    }
    public function category() {
        return $this->belongsTo(Category::class);
    }
    public function comment() {
        return $this->belongsTo(Comment::class);
    }
    public function tags(){
        return $this->belongsToMany(Tag::class, 'tagpost', 'post_id');
    }
}
