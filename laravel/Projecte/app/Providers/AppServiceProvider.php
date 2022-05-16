<?php

namespace App\Providers;

use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\HtmlString;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        VerifyEmail::$toMailCallback = function ($notifiable, $verificationUrl){
            return (new MailMessage)
                ->greeting(Lang::get("Hola!"))
                ->subject(Lang::get('Verificació Adreça Mail'))
                ->line(Lang::get('Si us plau, clica el botó de sota per verificar la teva adreça de correu.'))
                ->action(Lang::get('Verificar Adreça Mail'), $verificationUrl)
                ->line(Lang::get('Si tú no has creat cap compta en la nostra pàgina, no es necessària cap acció, nosaltres ens encarreguem d\'eliminar la solicitud.'))
                ->salutation(new HtmlString(
                    Lang::get("Salutacions cordials.").'<br>' .'<strong>'. Lang::get("Empresa") . '</strong>'
                ));
        };
    }
}

