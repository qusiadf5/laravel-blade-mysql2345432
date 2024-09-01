<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function show()
    {
        // من المفترض هنا أن تعيد العرض الخاص بصفحة البروفايل
        return view('profile');
    }
    public function updatePhoto(Request $request)
    {
        // التحقق من وجود ملف مرفوع
        if ($request->hasFile('profile_photo')) {
            // الحصول على الملف
            $file = $request->file('profile_photo');
            
            // توليد اسم جديد للملف
            $filename = Auth::id() . '_' . time() . '.' . $file->getClientOriginalExtension();
            
            // حفظ الملف في مجلد التخزين
            $path = $file->storeAs('public/profile-photos', $filename);
            
            // تحديث مسار الصورة في قاعدة البيانات
            Auth::user()->update(['profile_photo_path' => 'profile-photos/' . $filename]);
        }
    
        return redirect()->back();
    }

}
