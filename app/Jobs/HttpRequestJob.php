<?php

namespace App\Jobs;

use App\Mail\BackupMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class HttpRequestJob implements ShouldQueue
{
    use Queueable;

    public $url;

    public function __construct($url)
    {
        $this->url = $url;
    }

    public function handle()
    {
        try {
            $response = Http::withHeaders([
                'Accept' => 'application/json',
            ])
                ->timeout(120)
                ->get($this->url);
        } catch (\Exception $e) {

            $rand=random_int(1000,9999);

            Log::channel('backup')->error( $rand.' Backup  Fetch Error ' . $this->user->name . ': ' . $e->getMessage());
            Mail::to('gmta.constantine@gmail.com')->send(new BackupMail($this->user->name, $rand.' Backup  Fetch Error ' , 'is lilnk correct ? '));

        }

    }
}
