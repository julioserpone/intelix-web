<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class JobApplicationSent extends Notification
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
                ->subject('Solicitud de empleo via webpage')
                ->line('Nombres y Apellidos: '.$this->data['names'])
                ->line('Email: '.$this->data['email'])
                ->line('Telefono: '.(($this->data['telephone'])?:'NO ESPECIFICADO'))
                ->line('Lugar de Residencia: '.(($this->data['residence'])?:'NO ESPECIFICADO'))
                ->markdown('mail.jobs.application.sent');

        if (isset($this->data['link_social_network'])) {
            $mail_message->action('Ver perfil en linea del solicitante', $this->data['link_social_network']);
        }
        if (isset($this->data['url_document'])) {
            $mail_message->attach(storage_path('app').'/'.$this->data['url_document']);
        }
        
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
