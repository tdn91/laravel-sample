<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\ValidationException;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/login', function (Request $request) {
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    $user = User::where('email', $request->email)->first();

    if (! $user || ! Hash::check($request->password, $user->password)) {
        throw ValidationException::withMessages([
            'email' => ['The provided credentials are incorrect.'],
        ]);
    }

    return ['token' => $user->createToken($user->email)->plainTextToken];
});

Route::get('products/dropdown', [\App\Http\Controllers\ProductController::class, 'getForDropdown'])
    ->middleware('auth:sanctum');

Route::apiResource('products', \App\Http\Controllers\ProductController::class)
    ->middleware('auth:sanctum');
