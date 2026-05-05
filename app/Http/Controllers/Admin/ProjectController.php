<?php
// app/Http/Controllers/Admin/ProjectController.php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProjectPage;
use App\Models\ProjectItem;
use App\Models\ServiceItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function index()
    {
        
        $projectPage = ProjectPage::first();
        $projectItems = ProjectItem::latest()->get(); 
        $services = ServiceItem::all(); 
        return view('admin.projects', compact('projectPage', 'projectItems', 'services'));
    }

    public function show($id)
    {
        $projectItem = ProjectItem::with('service')->findOrFail($id);
        return response()->json($projectItem);
    }

    public function getProjectPage()
    {
        return response()->json(ProjectPage::first());
    }

    public function update(Request $request)
    {
        $request->validate([
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'heading' => 'nullable|string|max:255',
            'banner' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048'
        ]);

        $projectPage = ProjectPage::first();

        if (!$projectPage) {
            $projectPage = new ProjectPage();
        }

        if ($request->hasFile('banner')) {
            if ($projectPage->banner) {
                Storage::disk('public')->delete($projectPage->banner);
            }
            $path = $request->file('banner')->store('projects/page', 'public');
            $projectPage->banner = $path;
        }

        $projectPage->meta_title = $request->meta_title;
        $projectPage->meta_description = $request->meta_description;
        $projectPage->heading = $request->heading;
        $projectPage->save();

        return back()->with('success', 'Project page updated successfully!');
    }

    public function storeItem(Request $request)
    {
        $request->validate([
            'heading' => 'required|string|max:255',
            'sub_heading' => 'nullable|string',
            'service_id' => 'nullable|exists:services,id',
            'banner' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'card_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'description' => 'nullable|string',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string'
        ]);

        $projectItem = new ProjectItem();
        $projectItem->heading = $request->heading;
        $projectItem->sub_heading = $request->sub_heading;
        $projectItem->service_id = $request->service_id;
        $projectItem->description = $request->description;
        $projectItem->meta_title = $request->meta_title;
        $projectItem->meta_description = $request->meta_description;

        if ($request->hasFile('banner')) {
            $path = $request->file('banner')->store('projects/banners', 'public');
            $projectItem->banner = $path;
        }
        if ($request->hasFile('card_image')) {
            $path = $request->file('card_image')->store('projects/card_images', 'public');
            $projectItem->card_image = $path;
        }

        $projectItem->save();

        return response()->json(['success' => true, 'message' => 'Project added successfully!']);
    }

    public function updateItem(Request $request, $id)
    {
        $projectItem = ProjectItem::findOrFail($id);

        $request->validate([
            'heading' => 'required|string|max:255',
            'sub_heading' => 'nullable|string',
            'service_id' => 'nullable|exists:services,id',
            'banner' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'card_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'description' => 'nullable|string',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string'
        ]);

        $projectItem->heading = $request->heading;
        $projectItem->sub_heading = $request->sub_heading;
        $projectItem->service_id = $request->service_id;
        $projectItem->description = $request->description;
        $projectItem->meta_title = $request->meta_title;
        $projectItem->meta_description = $request->meta_description;

        if ($request->hasFile('banner')) {
            if ($projectItem->banner) {
                Storage::disk('public')->delete($projectItem->banner);
            }
            $path = $request->file('banner')->store('projects/banners', 'public');
            $projectItem->banner = $path;
        }


        if ($request->hasFile('card_image')) {
            if ($projectItem->card_image) {
                Storage::disk('public')->delete($projectItem->card_image);
            }
            $path = $request->file('card_image')->store('projects/card_image', 'public');
            $projectItem->card_image = $path;
        }

        $projectItem->save();

        return redirect()->route('admin.projects.item.edit', $projectItem->id)
            ->with('success', 'Project updated successfully!');
    }

    public function deleteItem($id)
    {
        $projectItem = ProjectItem::findOrFail($id);
        
        if ($projectItem->banner) {
            Storage::disk('public')->delete($projectItem->banner);
        }
        if ($projectItem->card_image) {
            Storage::disk('public')->delete($projectItem->card_image);
        }
        
        $projectItem->delete();

        return response()->json(['success' => true, 'message' => 'Project deleted successfully!']);
    }

    public function edit($id)
    {
        $item = ProjectItem::with('service')->findOrFail($id);
        $services = ServiceItem::all();
        return view('admin.projects.project_details', compact('item', 'services'));

    }

    
}