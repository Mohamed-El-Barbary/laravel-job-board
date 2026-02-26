<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    use HasUuids;

    protected $primaryKey = 'id';

    protected $keyType = 'varchar';

    public $incrementing = false;

    protected $table = 'post';

    protected $fillable = ['title', 'body', 'published', 'user_id'];

    protected $guarded = ['id'];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(related: Comment::class);
    }

    public function tags()
    {
        return $this->belongsToMany(related: Tag::class);
    }
}
