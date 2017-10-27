<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    // protected $fillable = ['title', 'body'];
    protected $guarded = [];

    public static function incomplete() {
    	return static::where('completed', 0)->get();
    }

    public static function done() {
    	return static::where('completed', 1)->get();
    }

    public function isCompleted() {
    	return $this->completed;
    }

    public function finish() {
        $this->completed = 1;

    	return $this->save();
    }
}
