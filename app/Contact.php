<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Contact extends Model
{
    use Notifiable;
    
    protected $fillable = ['names','email','telephone','company','service_required','more_info'];
    /**
     * Route notifications for the mail channel.
     *
     * @return string
     */
    public function routeNotificationForMail()
    {
    	//Por defecto, el email que se utiliza es el atributo llamado 'email' que contiene el modelo, en este caso, Job. Vamos a utilizar el email de Intelix 
        return Company::all()->first()->email_contacts;
    }
}
