<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Job extends Model
{
    use Notifiable;
    
    protected $fillable = ['names','email','residence','telephone','link_social_network'];
    /**
     * Route notifications for the mail channel.
     *
     * @return string
     */
    public function routeNotificationForMail()
    {
    	//Por defecto, el email que se utiliza es el atributo llamado 'email' que contiene el modelo, en este caso, Job. Vamos a utilizar el email de Intelix 
        return Company::all()->first()->email_jobs;
    }
}
