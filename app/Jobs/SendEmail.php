<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use App\Produto;
use App\Mail\Mailtrap;


class SendEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $produto;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Produto $produto)
    {
        $this->produto = $produto;
  
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        \Mail::to('giovanizapa7@gmail.com')->send(new Mailtrap($this->produto)); 
    }
}
