<?php

namespace App\Http\Controllers\Admin;

use App\Models\Testimonials;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestimonialsController extends Controller
{
    public function index()
    {
        $testimonials = Testimonials::orderBy('created_at', 'desc')->get();
        return view('admin.testimonials', compact('testimonials'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'profile' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'name' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'rating' => 'required|integer|min:1|max:5',
            'paragraph' => 'required|string'
        ]);

        $data = $request->except('profile');
        
        if ($request->hasFile('profile')) {
            $profilePath = $request->file('profile')->store('testimonials', 'public');
            $data['profile'] = $profilePath;
        }

        Testimonials::create($data);

        return response()->json(['success' => true, 'message' => 'Testimonial created successfully']);
    }

    public function edit($id)
    {
        $testimonial = Testimonials::findOrFail($id);
        return response()->json($testimonial);
    }

    public function update(Request $request, $id)
    {
        $testimonial = Testimonials::findOrFail($id);

        $request->validate([
            'profile' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'name' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'rating' => 'required|integer|min:1|max:5',
            'paragraph' => 'required|string'
        ]);

        $data = $request->except('profile');
        
        if ($request->hasFile('profile')) {
            // Delete old profile if exists
            if ($testimonial->profile && \Storage::disk('public')->exists($testimonial->profile)) {
                \Storage::disk('public')->delete($testimonial->profile);
            }
            $profilePath = $request->file('profile')->store('testimonials', 'public');
            $data['profile'] = $profilePath;
        }

        $testimonial->update($data);

        return response()->json(['success' => true, 'message' => 'Testimonial updated successfully']);
    }

    public function destroy($id)
    {
        $testimonial = Testimonials::findOrFail($id);
        
        // Delete profile image if exists
        if ($testimonial->profile && \Storage::disk('public')->exists($testimonial->profile)) {
            \Storage::disk('public')->delete($testimonial->profile);
        }
        
        $testimonial->delete();

        return response()->json(['success' => true, 'message' => 'Testimonial deleted successfully']);
    }
}