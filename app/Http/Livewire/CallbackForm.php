<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use PHPMailer\PHPMailer\PHPMailer;

class CallbackForm extends Component
{
    public $name;
    public $phone;
    public $email;
    public $captcha = 0;

    protected $rules = [
        'name' => 'required',
        'phone' => 'required',
        'email' => 'required|email',
    ];

    public function render()
    {
        return view('livewire.callback-form');
    }

    public function submit()
    {
        // Log::debug('called submit');
        // session()->flash('success', 'Yeaahhhhhh');
        $this->validate();

        $mailer = new PHPMailer();
        $mailer->CharSet = 'utf-8';
        $mailer->addAddress('info@just2canada.ca');
        $mailer->addAddress('info@tastechnologies.com');
        $mailer->addAddress('shabeeboali@gmail.com');
        $mailer->Subject = "EB Services Contact from $this->name";
        $mailer->From = $this->email;
        $mailer->FromName = $this->name;
        $mailer->AddReplyTo($this->email);
        $message = $this->getMessage();

        $textMsg = trim(strip_tags(preg_replace('/<(head|title|style|script)[^>]*>.*?<\/\\1>/s', '', $message)));

        $mailer->AltBody = @html_entity_decode($textMsg, ENT_QUOTES, "UTF-8");

        $mailer->MsgHTML($message);
        if (!$mailer->Send()) {

            Log::error('Failed sending email!: Sender:' . $this->email . ', Name:' . $this->name . ', Phone:' . $this->phone);

            return redirect('/');
        }
        return redirect('/');
    }

    public function updatedCaptcha($token)
    {
        // Log::debug($token);
        // Log::debug(env('CAPTCHA_SECRET_KEY'));
        $response = Http::post('https://www.google.com/recaptcha/api/siteverify?secret=' . env('CAPTCHA_SECRET_KEY') . '&response=' . $token);
        // dd($response->json());
        if ($response->json()['success']) {
            $this->captcha = $response->json()['score'];
            if ($this->captcha > .3) {
                $this->submit();
            } else {
                session()->flash('message', 'Google thinks you are a bot, please refresh and try again');
            }
        } else {
            session()->flash('message', 'Google thinks you are a bot, please refresh and try again');
        }
    }
}
