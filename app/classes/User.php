<?php


namespace App\classes;

class User
{
    protected $user = [];

    public function getAllUser()
    {
        $this->user = [
            0 => [
                'name' => 'Rahim',
                'mobile' => '123654',
                'location' => 'lalbag',
            ],
            1 => [
                'name' => 'Rafa',
                'mobile' => '789654',
                'location' => 'Rampura',
            ],
        ];
        return $this->user;
    }

}