<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $fillable = [
		'title', 'body', 'user_id'
	];

	public function comments() {
		return $this->hasMany(Comment::class)->latest();
	}

	public function user() {
		return $this->belongsTo(User::class);
	}

	public function tags() {
		return $this->belongsToMany(Tag::class);
	}

	public function delete() {
		$this->comments()->delete();
		return parent::delete();
	}

	public static function archives() {
		return static::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
            ->groupBy('year', 'month')
            ->orderByRaw('min(created_at) desc')
            ->get();
	}
}
