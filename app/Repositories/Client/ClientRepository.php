<?php

namespace App\Repositories\Client;

use App\Models\Client\Client;

class ClientRepository
{
    public static function create($data)
    {
        return Client::create($data);
    }

    public static function updateOrCreate($where, $data)
    {
        return Client::updateOrCreate($where, $data);
    }
}
