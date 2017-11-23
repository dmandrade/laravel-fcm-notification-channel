<?php

namespace NotificationChannels\FCM;

class MessageWasSended
{
    /**
     * @var mixed
     */
    public $response;

    /**
     * @var object
     */
    public $notifiable;

    /**
     * @var Notification
     */
    public $notification;

    /**
     * @param  mixed  $response
     * @param  object $notifiable
     * @param \Illuminate\Notifications\Notification $notification
     *
     * @return void
     */
    public function __construct($response, $notifiable, Notification $notification)
    {
        $this->response = $response;
        $this->notifiable = $notifiable;
        $this->notification = $notification;
    }
}
