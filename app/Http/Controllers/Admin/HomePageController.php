<?php
// app/Http/Controllers/Admin/HomePageController.php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomePage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomePageController extends Controller
{
    public function index()
    {
        $homePage = HomePage::first();
        return view('admin.home_page', compact('homePage')); 
    }

    public function update(Request $request)
    {
        $homePage = HomePage::first();
        
        if (!$homePage) {
            $homePage = new HomePage();
        }

        $rules = [
            'banner' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'banner_heading' => 'nullable|string|max:255',
            'banner_paragraph' => 'nullable|string',
            'banner_chip' => 'nullable|string|max:255',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'whychoose_heading' => 'nullable|string|max:255',
            'whychoose_paragraph' => 'nullable|string',
            'whychoose_card1_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'whychoose_card1_heading' => 'nullable|string|max:255',
            'whychoose_card1_paragraph' => 'nullable|string',
            'whychoose_card2_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'whychoose_card2_heading' => 'nullable|string|max:255',
            'whychoose_card2_paragraph' => 'nullable|string',
            'whychoose_card3_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'whychoose_card3_heading' => 'nullable|string|max:255',
            'whychoose_card3_paragraph' => 'nullable|string',
            'our_service_heading' => 'nullable|string|max:255',
            'our_service_paragraph' => 'nullable|string',
            'our_service_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'latest_work_heading' => 'nullable|string|max:255',
            'latest_work_paragraph' => 'nullable|string',
            'counter_banner' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'counter1_heading' => 'nullable|string|max:255',
            'counter1' => 'nullable|string|max:255',
            'counter2_heading' => 'nullable|string|max:255',
            'counter2' => 'nullable|string|max:255',
            'counter3_heading' => 'nullable|string|max:255',
            'counter3' => 'nullable|string|max:255',
            'counter4_heading' => 'nullable|string|max:255',
            'counter4' => 'nullable|string|max:255',
            'testimonial_banner' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'testimonial_heading' => 'nullable|string|max:255',
            'testimonial_paragraph' => 'nullable|string',
            'contactus_heading' => 'nullable|string|max:255',
            'contactus_paragraph' => 'nullable|string',

            'our_service_card1_image' => 'nullable|mimes:jpg,jpeg,png,webp,svg|max:2048',
            'our_service_card2_image' => 'nullable|mimes:jpg,jpeg,png,webp,svg|max:2048',
            'our_service_card3_image' => 'nullable|mimes:jpg,jpeg,png,webp,svg|max:2048',
            'our_service_card4_image' =>'nullable|mimes:jpg,jpeg,png,webp,svg|max:2048',

            'our_service_card1_heading' => 'nullable|string|max:255',
            'our_service_card1_paragraph' => 'nullable|string|max:255',
            'our_service_card2_heading' => 'nullable|string|max:255',
            'our_service_card2_paragraph' => 'nullable|string|max:255',
            'our_service_card3_heading' => 'nullable|string|max:255',
            'our_service_card3_paragraph' => 'nullable|string|max:255',
            'our_service_card4_heading' => 'nullable|string|max:255',
            'our_service_card4_paragraph' => 'nullable|string|max:255',

        ];

        $validated = $request->validate($rules);

        $imageFields = [
        'banner', 
        'whychoose_card1_image', 
        'whychoose_card2_image',
        'whychoose_card3_image',
        'our_service_image',
        'counter_banner', 
        'testimonial_banner',
        'our_service_card1_image',
        'our_service_card2_image',
        'our_service_card3_image',
        'our_service_card4_image'
        ];
        
        foreach ($imageFields as $field) {
            if ($request->hasFile($field)) {
                if ($homePage->$field && Storage::disk('public')->exists($homePage->$field)) {
                    Storage::disk('public')->delete($homePage->$field);
                }
                $path = $request->file($field)->store('homepage', 'public');
                $validated[$field] = $path;
            }
        }

        $homePage->fill($validated);
        $homePage->save();

        return redirect()->route('admin.home-page')->with('success', 'Home page updated successfully!');
    }
}