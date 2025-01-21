<?php

namespace App\Jobs;

use App\Mail\BackupMail;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class HttpRequestJobAuto implements ShouldQueue
{
    use Queueable;


    public function __construct()
    {

    }

    public function handle()
    {
        try {
            $backupusers = User::where('backupUser', 1)
                ->with('domains', 'folders')
                ->get();

            $backupusers->each(function ($user) {

                $domain=$user->domains->where('is_active',1)->first();

                $response = Http::withHeaders([
                    'Accept' => 'application/json',
                ])
                    ->timeout(120)
                    ->get('https://'.$domain->domain.'/fhvlqhzebc/caohceghux/vexddoqunr/'.$user->user_app_token);
            });
        } catch (\Exception $e) {

            $rand=random_int(1000,9999);

            Log::channel('backup')->error( $rand.' Backup  Fetch Error ' . $this->user->name . ': ' . $e->getMessage());
            Mail::to('gmta.constantine@gmail.com')->send(new BackupMail($this->user->name, $rand.' Backup  Fetch Error ' , 'is lilnk correct ? '));
        }

    }
}
