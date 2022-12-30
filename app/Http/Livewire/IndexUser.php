<?php

namespace App\Http\Livewire;

use App\Models\UserLivewire;
use Livewire\Component;

class IndexUser extends Component
{
    protected $listeners = [
        'newUser' => '$refresh'
    ];
    
    public function render()
    {
        $data = UserLivewire::all();
        return view('livewire.index-user',[
            'data' => $data
        ]);
    }
    public function updateUser($id){
        $data = UserLivewire::find($id);
        $this->emit('showUserbyId', $data);
    }
    public function deleteUser($id){
        $data = UserLivewire::find($id);
        $data->delete();
    }
}
