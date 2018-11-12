<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class ContactSent extends Notification
{
    use Queueable;

    private $data;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $mail_message = (new MailMessage)
                ->subject('Contacto Externo')
                ->line('Nombres y Apellidos: '.$this->data['names'])
                ->line('Email: '.$this->data['email'])
                ->line('Telefono: '.(($this->data['telephone'])?:'NO ESPECIFICADO'))
                ->line('Empresa: '.(($this->data['company'])?:'NO ESPECIFICADO'))
                ->line('Servicio: '.(($this->data['service_required'])?:'NO ESPECIFICADO'))
                ->line('Información adicional: '.(($this->data['more_info'])?:'NO ESPECIFICADO'))
                ->markdown('mail.contacts.sent');
        
        return $mail_message;
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            'data' => $this->data
        ];
    }
}
