<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    // دالة لعرض جميع الكتب
    public function index()
    {
        // استرجاع جميع الكتب من قاعدة البيانات
        $books = Book::all();
        
        // إرجاع العرض مع البيانات
        return view('books.index', compact('books'));
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'section' => 'required|string|max:255',
            'language' => 'required|string|max:255',
            'pages' => 'required|integer',
            'file_size' => 'required|integer',
            'file_type' => 'required|string|max:255',
            'cover_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'publication_date' => 'required|date',
            'description' => 'required|string',
        ]);
    
        try {
            if ($request->hasFile('cover_image')) {
                $imageName = time().'.'.$request->cover_image->extension();  
                $request->cover_image->move(public_path('images'), $imageName);
                $validated['cover_image'] = $imageName;
            }
    
            Book::create($validated);
    
            return redirect()->back()->with('success', 'تم نشر الكتاب بنجاح');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'حدث خطأ أثناء محاولة نشر الكتاب: ' . $e->getMessage());
        }
    }
    
}
