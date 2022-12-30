<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\UserLivewire;
use Illuminate\Support\Facades\Hash;

class InsertUser extends Component
{

    protected $listeners=[
        'showUserbyId'
    ];

    public $username;
    public $hak_akses;
    public $password;
    public $userId = 0;
    public function render()
    {
        return view('livewire.insert-user');
    }
    public function createUser(){
        
        if($this->userId === 0){    
            UserLivewire::create([
                'username' => $this->username,
                'hak_akses' => $this->hak_akses,
                'password' => Hash::make($this->password)
            ]);
        }else{
            $data = UserLivewire::find($this->userId);
            if(password_verify($this->password, $data->password)){
                $data->update([
                    'username' => $this->username,
                    'hak_akses' => $this->hak_akses,
                    'password' => $this->password
                ]);
            }else{
                session()->flash('error', 'wrong password');
            }
        }

        $this->username="";
        $this->hak_akses="";
        $this->password="";
        $this->userId = 0;
        $this->emit('newUser');
    }
    public function showUserbyId(UserLivewire $user){
        $this->userId = $user->id;
        $this->username = $user->username;
        $this->hak_akses = $user->hak_akses;
    }
}
