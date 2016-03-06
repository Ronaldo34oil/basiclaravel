<?php namespace App\model;

use Illuminate\Database\Eloquent\Model;

class User extends Model {

	//
	protected $table = 'users';
	protected $fillable = ['firstname','lastname','tel','email','password']; //fillable no variable

}
