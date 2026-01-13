<?php

namespace App\Livewire;

use Livewire\Component;
use App\Services\ApiService;

class PersonalTable extends Component
{
    public $data = [];
    public $loading = true;
    public $error = null;

    public function mount(ApiService $apiService)
    {
        $this->loadData($apiService);
    }

    public function loadData(ApiService $apiService)
    {
        $this->loading = true;
        $this->error = null;

        $result = $apiService->fetchData();

        if ($result) {
            $this->data = $result;
        } else {
            $this->error = 'Failed to fetch data from backend API';
        }

        $this->loading = false;
    }

    public function refresh()
    {
        $apiService = app(ApiService::class);
        $this->loadData($apiService);
    }

    public function render()
    {
        return view('livewire.personal-table');
    }
}
