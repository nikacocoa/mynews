<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile; // Profileモデルを使用するための追加

class ProfileController extends Controller
{
    public function create(Request $request)
    {
        // リクエストデータのバリデーション
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'gender' => 'required',
            'hobby' => 'nullable',
            'introduction' => 'nullable'
        ]);

        // バリデーションが通った後のデータ処理
        $profile = new Profile; // Profileインスタンスの作成
        $profile->name = $validatedData['name'];
        $profile->gender = $validatedData['gender'];
        $profile->hobby = $validatedData['hobby'];
        $profile->introduction = $validatedData['introduction'];
        $profile->save(); // データベースに保存

        return redirect('admin/profile/create')->with('success', 'Profile created successfully!');
    }
}
