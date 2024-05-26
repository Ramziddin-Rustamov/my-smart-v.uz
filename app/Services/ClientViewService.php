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
    public function paginate($perPage = 50)
    {
        $cacheKey = "client_views_quarter_" . $this->getAuthUserQuarterId();
        $cacheDuration = now()->addMinutes(10);
    
        return Cache::remember($cacheKey, $cacheDuration, function () use ($perPage) {
            return $this->clintViewModel->with('user')
                ->where('quarter_id', $this->getAuthUserQuarterId())
                ->orderBy('id', 'desc')
                ->paginate($perPage);
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