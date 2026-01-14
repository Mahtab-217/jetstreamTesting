<?php

namespace App\Providers;

use App\Models\students;
use App\Models\User;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    //     Gate::define('edit-student',function(User $user, students $student){
    //     return $user->id===$student->user_id;
    //     });
    //     Gate::define('delete',function(User $user, students $student){
    //   return $user->id===$student->user_id;
    //     });
     
    VerifyEmail::toMailUsing(function($notifiable, $url){
        return (new MailMessage())->subject('تایید ایمیل آدرس')->view('mail.verify',compact('url'));
      });
    }
      
}
