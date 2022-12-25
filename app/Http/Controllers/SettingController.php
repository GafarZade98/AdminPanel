<?php

namespace App\Http\Controllers;

use App\{Http\Requests\SettingRequest, Models\Setting};
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\{RedirectResponse, Request};

class SettingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->authorizeResource(Setting::class);
    }

    public function index(Request $request)
    {
        $search = $request->get('search');
        $limit = $request->get('limit');

        return view('admin.pages.settings')->with([
            'settings' => Setting::query()
                ->when($search, fn ($query) => $query
                    ->where('key', 'like', "%$search%")
                    ->orWhere('value', 'like', "%$search%"))
                ->paginate($limit),
        ]);
    }

    public function store(SettingRequest $request): RedirectResponse
    {
        $validated = $request->validated();
        $validated['status'] = $request->has('status');
        if ($request->file('value')) {

            $image_value = $request->file('value');
            $validated['value'] = $image_value->storeAs('settings', $image_value->hashName());
        }

        Setting::create($validated);
        return back()->with('success', trans('admin.notification.success'));
    }

    public function update(SettingRequest $request, Setting $setting): RedirectResponse
    {
        $validated = $request->validated();
        $validated['status'] = $request->has('status');
        if ($request->file('value')) {

            $image_value = $request->file('value');
            $validated['value'] = $image_value->storeAs('settings', $image_value->hashName());

            if (Storage::exists($setting->getAttribute('value'))) {
                Storage::delete($setting->getAttribute('value'));
            }
        }
        $setting->update($validated);
        return back()->with('success', trans('admin.notification.success'));
    }

    public function destroy(Setting $setting): RedirectResponse
    {
        if ($setting->delete()) {
            if (Storage::exists($setting->getAttribute('value'))) {
                Storage::delete($setting->getAttribute('value'));
            }
        }
        return back()->with('success', trans('admin.notification.success'));
    }
}
