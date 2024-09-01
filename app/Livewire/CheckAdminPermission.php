<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;

class CheckAdminPermission extends Component
{
    protected $listeners = ['checkPermission' => 'checkPermission'];

    public function checkPermission()
    {
        $userEmail = Auth::user()->email;

        // تحقق من وجود البريد الإلكتروني في جدول admins
        $isAdmin = Admin::where('email', $userEmail)->exists();

        if ($isAdmin) {
            return redirect()->route('post_book');
        }

        $this->dispatchBrowserEvent('permissionDenied');
    }

    public function render()
    {
        return view('livewire.check-admin-permission');
    }
}
