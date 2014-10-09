<?php namespace r0ckf3l3r\LaravelBootstrap\Accounts;
use r0ckf3l3r\LaravelBootstrap\Core\EloquentBaseModel;
use Illuminate\Auth\UserInterface as LaravelUserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;
use Hash;

class User extends EloquentBaseModel implements LaravelUserInterface, RemindableInterface
{
    // The Tables
    protected $table    = 'users';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = array('password');

    /**
     * These are the mass-assignable keys
     * @var array
     */
    protected $fillable = array('first_name', 'last_name', 'email', 'password');

    protected $validationRules = [
        'first_name'    => 'required',
        'last_name'   => 'required',
        'email' => 'required|email',
        'password' => 'confirmed|min:5'
    ];

    /**
     * Get the unique identifier for the user.
     *
     * @return mixed
     */
    public function getAuthIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Get the full name of the user
     * @return string
     */
    public function getFullNameAttribute(){
        return $this->first_name.' '.$this->last_name;
    }

    /**
     * Get the password for the user.
     *
     * @return string
     */
    public function getAuthPassword()
    {
        return $this->password;
    }

    /**
     * Get the e-mail address where password reminders are sent.
     *
     * @return string
     */
    public function getReminderEmail()
    {
        return $this->email;
    }

    /**
     * Set the password, lets automatically hash it
     * @param string $value The password (unhashed)
     */
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make( $value );
    }

    public function getRememberToken()
    {
        return $this->remember_token;
    }

    public function setRememberToken($value)
    {
        $this->remember_token = $value;
    }

    public function getRememberTokenName()
    {
        return 'remember_token';
    }

}