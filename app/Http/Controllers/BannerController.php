<?php

namespace App\Http\Controllers;

use App\Http\Requests\BannerRequest;
use App\Models\Banner;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->authorizeResource(Banner::class);
    }

    public function index(Request $request)
    {
        $search = $request->get('search');
        $limit = $request->get('limit');

        return view('admin.pages.banners')->with([
            'banners' => Banner::query()
                ->when($search, fn ($query) => $query
                    ->where('name', 'like', "%$search%"))
                ->paginate($limit),
        ]);
    }

    public function store(BannerRequest $request): RedirectResponse
    {
        $validated = $request->validated();
        $validated['is_active'] = $request->has('is_active');
        if ($request->file('image')) {

            $image_value = $request->file('image');
            $validated['image'] = $image_value->storeAs('banners', $image_value->hashName());
        }

        Banner::create($validated);
        return back()->with('success', trans('admin.notification.success'));
    }

    public function update(BannerRequest $request, Banner $banner): RedirectResponse
    {
        $validated = $request->validated();
        $validated['is_active'] = $request->has('is_active');
        if ($request->file('image')) {

            $image_value = $request->file('image');
            $validated['image'] = $image_value->storeAs('banners', $image_value->hashName());

            if (Storage::exists($banner->getAttribute('image'))) {
                Storage::delete($banner->getAttribute('image'));
            }
        }
        $banner->update($validated);
        return back()->with('success', trans('admin.notification.success'));
    }

    public function destroy(Banner $banner): RedirectResponse
    {
        if ($banner->delete()) {
            if (Storage::exists($banner->getAttribute('image'))) {
                Storage::delete($banner->getAttribute('image'));
            }
        }
        return back()->with('success', trans('admin.notification.success'));
    }
}
