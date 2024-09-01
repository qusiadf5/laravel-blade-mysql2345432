<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
// في الـ Controller


    public function store(Request $request)
    {
        // تحقق من صحة البيانات القادمة من الفورم
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // حفظ البيانات في قاعدة البيانات
        Contact::create($validatedData);

        // إعادة التوجيه إلى صفحة أو عرض رسالة نجاح
        return redirect()->back()->with('success', 'تم إرسال الرسالة بنجاح!');
    }
    
}
