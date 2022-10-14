<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Player;
use App\Models\Comment;

class Team extends Model
{
    use HasFactory;

    public static function getAllTeams()
    {
        return self::all();
    }

    public function players()
    {
        return $this->hasMany(Player::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    public function news()
    {
        return $this->belongsToMany(News::class, 'news_teams');
    }
}
