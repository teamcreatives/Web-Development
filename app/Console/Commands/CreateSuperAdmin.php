<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class CreateSuperAdmin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:superadmin';
    private $admin_name, $email, $phonenumber, $password;

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        $this->admin_name = $this->ask('Enter Admin Name?');
        $this->getEmail();
        $this->getPhone();
        $this->getPassword();
        try {


            $user = new User();
            $user->name = $this->admin_name;
            $user->email = $this->email;
            $user->phonenumber = $this->phonenumber;
            $user->password =Hash::make($this->admin_name);
            $user->email_verified_at = now();
            $user->is_admin =1;
            $user->save();
            $this->info('SuperAdmin Created Successfully.');

        } catch (\Throwable $th) {
            $this->error($th);
        }


        // return Command::SUCCESS;
    }

    private function getEmail()
    {



        for ($i=0; $i < 3 ; $i++) {

            $this->email = $this->ask('What is your email?');
            if(!filter_var($this->email, FILTER_VALIDATE_EMAIL))
            {

                $this->warn('Provide a valid Email address');
                continue;

            }

            if(User::whereEmail($this->email)->exists()){

                $this->error('Email Exists in daatabase ');
                continue;

            }

            return;

        }

        exit(0);
    }

    private function getPassword()
    {



        for ($i=0; $i < 3 ; $i++) {

            $this->password = $this->secret('Enter your password');
            if(Str::length($this->password) < 6)
            {

                $this->warn('Password should not be less than six.');
                continue;

            }
            return;

        }

        exit(0);
    }

    private function getPhone()
    {



        for ($i=0; $i < 3 ; $i++) {

            $this->phonenumber = $this->ask('Enter your phonenumber');
            if(Str::length($this->phonenumber) > 11)
            {

                $this->warn('Phonenumber should not be more than Eleven.');
                continue;

            }
            return;

        }

        exit(0);
    }

}
