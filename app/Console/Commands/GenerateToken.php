<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use App\Traits\PassportToken;

class GenerateToken extends Command
{
    use PassportToken;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'larabbs:generate-token';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '快速为用户生成 token';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $userId = $this->ask('输入用户 id');

        $user = User::find($userId);

        if (!$user) {
            return $this->error('用户不存在');
        }

        // 一年以后过期
        $ttl = 365*24*60;
        // $this->info(\Auth::guard('api')->setTTL($ttl)->fromUser($user));
        log:info(json_encode($this->getBearerTokenByUser($user, '1', false)));
        $this->info(json_encode($this->getBearerTokenByUser($user, '1', false)));
    }
}
