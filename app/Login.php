<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

use App\User;

class Login extends Model {

  protected $table='users_logins';
  protected $fillable = ['user_id','valid','ip'];
  protected $hidden = ['created_at'];

  public function user()
  {
      return $this->belongsTo('App\User');
  }

  public function setUpdatedAtAttribute($value)
  {
      // deshabilitamos el campo updated_at (no necesario en esta tabla)
  }


  public $max_attempts = 5; // número de intentos de login fallidos antes de bloquear el usuario
  public $time_limit = 60; // tiempo de comprobación de intentos fallidos
  public $user;
  public $times = 0;

  public function __construct($email)
	{
      $this->user = User::findEmail($email)->first();
	}

  /* comprobación de intentos de login fallidos en el tiempo establecidos */
  public function check()
    {
        $this->times =  DB::table($this->table)->where('user_id', $this->user->id)
                                               ->where('valid', 0)
                                               ->where(DB::raw("TIMESTAMPDIFF(MINUTE,created_at,NOW()) "), '<', $this->time_limit)
                                               ->count();

        return (($this->times+1) < $this->max_attempts);
    }


}
