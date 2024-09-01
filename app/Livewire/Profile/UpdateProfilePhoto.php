<?php

namespace App\Http\Livewire\Profile;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UpdateProfilePhoto extends Component
{
    use WithFileUploads;

    public $photo;


    public function updatedPhoto()
    {
        $this->validate([
            'photo' => 'image|mimes:jpg,jpeg,png|max:1024',
        ]);

        $path = $this->photo->store('profile-photos', 'public');
        
        Auth::user()->update(['profile_photo_path' => $path]);
    }

    public function render()
    {
        return view('livewire.profile.update-profile-photo');
    }
}
