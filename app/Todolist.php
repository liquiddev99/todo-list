<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todolist extends Model
{
	protected $fillable = [
		'body'
	];

  public function user() {
    $this->belongsTo(User::class);
  }


}
