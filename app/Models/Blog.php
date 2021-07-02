<?php

namespace App\Models;
use App\Models\PostView;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $guarded = [];

   public function postView()
    {
        return $this->hasMany(PostView::class);
    }

    public function showPost()
    {
        if(auth()->id()==null){
            return $this->postView()
            ->where('ip', '=',  request()->ip())->exists();
        }

        return $this->postView()
        ->where(function($postViewsQuery) { $postViewsQuery
            ->where('session_id', '=', request()->getSession()->getId())
            ->orWhere('user_id', '=', (auth()->check()));})->exists();  
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable')->whereNull('parent_id');
    }
}
