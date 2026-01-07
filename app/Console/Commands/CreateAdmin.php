<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;

class CreateAdmin extends Command
{
    protected $signature = 'user:create-admin {email} {--name=Admin}';
    protected $description = 'Cria um usuário administrador';

    public function handle()
    {
        $email = $this->argument('email');
        $name = $this->option('name');
        $password = $this->secret('Senha do admin');

        if (User::where('email', $email)->exists()) {
            $this->error('Usuário já existe.');
            return;
        }

        User::create([
            'name' => $name,
            'email' => $email,
            'password' => bcrypt($password),
            'is_admin' => true,
        ]);

        $this->info('Admin criado com sucesso!');
    }
}
