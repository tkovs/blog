<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public static function incomplete() {
    	return static::where('completed', 0)->get();
    }

    public static function complete() {
    	return static::where('completed', 1)->get();
    }

    public function isCompleted() {
    	return $this->completed;
    }

    public function finish() {
    	$this->completed = true;
    	return $this->save();
    }
}
