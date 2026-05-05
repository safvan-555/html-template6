<?php
// app/Http/Controllers/Admin/AboutUsPageController.php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutUsPage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutUsPageController extends Controller
{
    public function index()
    {
        $aboutUsPage = AboutUsPage::first();
        return view('admin.aboutus_page', compact('aboutUsPage'));
    }

    public function update(Request $request)
    {
        $aboutUsPage = AboutUsPage::first();
        
        if (!$aboutUsPage) {
            $aboutUsPage = new AboutUsPage();
        }

        $validated = $request->validate([
            'heading' => 'nullable|string|max:255',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'whychoose_heading' => 'nullable|string|max:255',
            'whychoose_subheading' => 'nullable|string|max:255',
            'whychoose_paragraph' => 'nullable|string',
            'whychoose_card1_heading' => 'nullable|string|max:255',
            'whychoose_card2_heading' => 'nullable|string|max:255',
            'whychoose_card3_heading' => 'nullable|string|max:255',
            'aboutus_heading' => 'nullable|string|max:255',
            'aboutus_paragraph' => 'nullable|string',
            'aboutus_card1_heading' => 'nullable|string|max:255',
            'aboutus_card1_paragraph' => 'nullable|string',
            'aboutus_card2_heading' => 'nullable|string|max:255',
            'aboutus_card2_paragraph' => 'nullable|string',
            'aboutus_card3_heading' => 'nullable|string|max:255',
            'aboutus_card3_paragraph' => 'nullable|string',
            'ourservice_heading' => 'nullable|string|max:255',
            'ourservice_paragraph' => 'nullable|string',
            'ourwork_heading' => 'nullable|string|max:255',
            'ourwork_paragraph' => 'nullable|string',
            'ourmission_heading' => 'nullable|string|max:255',
            'ourmission_paragraph' => 'nullable|string',
            'banner' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',

            'whychoose_card1_icon' => 'nullable|mimes:jpg,jpeg,png,webp,svg|max:2048',
            'whychoose_card2_icon' => 'nullable|mimes:jpg,jpeg,png,webp,svg|max:2048',
            'whychoose_card3_icon' => 'nullable|mimes:jpg,jpeg,png,webp,svg|max:2048',
            'aboutus_card1_icon' => 'nullable|mimes:jpg,jpeg,png,webp,svg|max:2048',
            'aboutus_card2_icon' => 'nullable|mimes:jpg,jpeg,png,webp,svg|max:2048',
            'aboutus_card3_icon' => 'nullable|mimes:jpg,jpeg,png,webp,svg|max:2048',

            'our_mission_img1' => 'nullable|mimes:jpg,jpeg,png,webp,svg|max:2048',
            'our_mission_img2' => 'nullable|mimes:jpg,jpeg,png,webp,svg|max:2048',
            'our_mission_img3' => 'nullable|mimes:jpg,jpeg,png,webp,svg|max:2048',
        ]);

        // Handle Banner Image
        if ($request->hasFile('banner')) {
            if ($aboutUsPage->banner && Storage::disk('public')->exists($aboutUsPage->banner)) {
                Storage::disk('public')->delete($aboutUsPage->banner);
            }
            
            $bannerPath = $request->file('banner')->store('about-us/banner', 'public');
            $validated['banner'] = $bannerPath;
        }

        // Handle Why Choose Us Icons
        $iconFields = [
            'whychoose_card1_icon',
            'whychoose_card2_icon',
            'whychoose_card3_icon',
            'aboutus_card1_icon',
            'aboutus_card2_icon',
            'aboutus_card3_icon',
            'our_mission_img1',
            'our_mission_img2',
            'our_mission_img3'
        ];

        foreach ($iconFields as $iconField) {
            if ($request->hasFile($iconField)) {
                // Delete old icon if exists
                if ($aboutUsPage->$iconField && Storage::disk('public')->exists($aboutUsPage->$iconField)) {
                    Storage::disk('public')->delete($aboutUsPage->$iconField);
                }
                
                // Store new icon
                $iconPath = $request->file($iconField)->store('about-us/icons', 'public');
                $validated[$iconField] = $iconPath;
            }
        }

        $aboutUsPage->fill($validated);
        $aboutUsPage->save();
        
        return back()->with('success', 'About Us page updated successfully!');
    }
}