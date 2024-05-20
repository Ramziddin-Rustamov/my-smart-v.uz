<?php

namespace App\Services;

use App\Models\ClientView;
use App\Models\User;
use Illuminate\Support\Facades\Cache;

class ClientViewService
{
    private $clintViewModel;
    private $user;

    public function __construct(ClientView $client, User $user)
    {
        $this->clintViewModel = $client;
        $this->user = $user;
    }
    public function paginate($perPage = 100)
    {
        return Cache::remember("all_client_view",now()->addSecond(3),function () use ($perPage){
            return $this->clintViewModel->with(['user'])->orderBy('id','desc')->where('quarter_id',$this->getAuthUserQuarterId())->simplePaginate($perPage);
        });
    }

    public function create($clientView, $userId)
    {
        $client = new $this->clintViewModel;
        $client->clientView = $clientView;
        $client->quarter_id = $this->getAuthUserQuarterId();
        $client->user_id = $userId;
        $client->save();
    }

    public function getAuthUserQuarterId()
    {
        return auth()->user()->quarter->id;
    }

}

