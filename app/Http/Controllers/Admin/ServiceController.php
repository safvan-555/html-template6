<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\ServicePage;
use App\Models\ServiceItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    public function index()
    {
        $service = ServicePage::first();
        $serviceItems = ServiceItem::latest()->get(); 
        return view('admin.services', compact('service', 'serviceItems'));
    }

    public function show($id)
    {
        $serviceItem = ServiceItem::findOrFail($id);
        return response()->json($serviceItem);
    }

    public function getService()
    {
        return response()->json(ServicePage::first());
    }

    public function update(Request $request)
    {
        $request->validate([
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'heading' => 'nullable|string|max:255',
            'banner' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048'
        ]);

        $service = ServicePage::first();

        if (!$service) {
            $service = new ServicePage();
        }

        if ($request->hasFile('banner')) {
            // Delete old banner if exists
            if ($service->banner) {
                Storage::disk('public')->delete($service->banner);
            }
            $path = $request->file('banner')->store('services', 'public');
            $service->banner = $path;
        }

        $service->meta_title = $request->meta_title;
        $service->meta_description = $request->meta_description;
        $service->heading = $request->heading;
        $service->save();

        return back()->with('success', 'Service page updated successfully!');
    }

    // Store a new service item
    public function storeItem(Request $request)
    {
        $request->validate([
            'card_heading' => 'required|string',
            'card_description' => 'required|string',
            'card_banner' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            // 'card_icon' => 'nullable|image|mimes:jpg,jpeg,png,webp,svg|max:2048'
            'card_icon' => 'nullable|mimes:jpg,jpeg,png,webp,svg|max:2048'
        ]);

        $serviceItem = new ServiceItem();
        $serviceItem->card_description = $request->card_description;
        $serviceItem->card_heading = $request->card_heading;

        if ($request->hasFile('card_banner')) {
            $path = $request->file('card_banner')->store('service-items/banners', 'public');
            $serviceItem->card_banner = $path;
        }

        if ($request->hasFile('card_icon')) {
            $path = $request->file('card_icon')->store('service-items/icons', 'public');
            $serviceItem->card_icon = $path;
        }

        $serviceItem->save();
        return response()->json(['success' => true, 'message' => 'Service item added successfully!']);
    }

    // Update a service item
    public function updateItem(Request $request, $id)
    {
        $serviceItem = ServiceItem::findOrFail($id);

        $request->validate([
            'card_description' => 'required|string',
            'card_heading' => 'required|string',
            'description' => 'string',
            'card_banner' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'page_banner' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            // 'card_icon' => 'nullable|image|mimes:jpg,jpeg,png,webp,svg|max:2048'
            'card_icon' => 'nullable|mimes:jpg,jpeg,png,webp,svg|max:2048'
        ]);

        $serviceItem->card_description = $request->card_description;
        $serviceItem->meta_title = $request->meta_title;
        $serviceItem->meta_description = $request->meta_description;
        $serviceItem->card_heading = $request->card_heading;
        $serviceItem->description = $request->description;

        if ($request->hasFile('card_banner')) {
            // Delete old banner if exists
            if ($serviceItem->card_banner) {
                Storage::disk('public')->delete($serviceItem->card_banner);
            }
            $path = $request->file('card_banner')->store('service-items/banners', 'public');
            $serviceItem->card_banner = $path;
        }
            

        if ($request->hasFile('page_banner')) {
            if ($serviceItem->page_banner) {
                Storage::disk('public')->delete($serviceItem->page_banner);
            }
            $path = $request->file('page_banner')->store('service-items/page_banner', 'public');
            $serviceItem->page_banner = $path;
        }


        if ($request->hasFile('card_icon')) {
            // Delete old icon if exists
            if ($serviceItem->card_icon) {
                Storage::disk('public')->delete($serviceItem->card_icon);
            }
            $path = $request->file('card_icon')->store('service-items/icons', 'public');
            $serviceItem->card_icon = $path;
        }

        $serviceItem->save();
        return redirect()->route('admin.services.item.edit', $serviceItem->id)->with('success', 'Service item created successfully!');
    }

    // Delete a service item
    public function deleteItem($id)
    {
        $serviceItem = ServiceItem::findOrFail($id);
        
        // Delete banner file if exists
        if ($serviceItem->card_banner) {
            Storage::disk('public')->delete($serviceItem->card_banner);
        }
        
        // Delete icon file if exists
        if ($serviceItem->card_icon) {
            Storage::disk('public')->delete($serviceItem->card_icon);
        }
        
        $serviceItem->delete();

        return response()->json(['success' => true, 'message' => 'Service item deleted successfully!']);
    }

    public function edit($id)
    {
        $item = ServiceItem::findOrFail($id);
        return view('admin.services.service_details', compact('item'));
    }
}