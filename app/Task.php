<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    // protected $fillable = ['title', 'body'];
    protected $guarded = [];

    public function person() {
        return $this->belongsTo(Person::class);
    }

    public static function incomplete() {
    	return static::where('completed', 0)
                          ->orderBy('created_at', 'asc')
                          ->get();
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
