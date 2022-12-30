<?php

namespace App\Http\Controllers;

use Illuminate\{Http\RedirectResponse, Http\Request, Support\Facades\Storage};
use App\{Http\Requests\PartnerRequest, Models\Partner};

class PartnerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->authorizeResource(Partner::class);
    }

    public function index(Request $request)
    {
        $search = $request->get('search');
        $limit = $request->get('limit');

        return view('admin.pages.partners')->with([
            'partners' => Partner::query()
                ->when($search, fn ($query) => $query
                    ->where('name', 'like', "%$search%"))
                ->paginate($limit),
        ]);
    }

    public function store(PartnerRequest $request): RedirectResponse
    {
        $validated = $request->validated();
        $validated['is_active'] = $request->has('is_active');
        if ($request->file('image')) {

            $image_value = $request->file('image');
            $validated['image'] = $image_value->storeAs('partners', $image_value->hashName());
        }

        Partner::create($validated);
        return back()->with('success', trans('admin.notification.success'));
    }

    public function update(PartnerRequest $request, Partner $partner): RedirectResponse
    {
        $validated = $request->validated();
        $validated['is_active'] = $request->has('is_active');
        if ($request->file('image')) {

            $image_value = $request->file('image');
            $validated['image'] = $image_value->storeAs('partners', $image_value->hashName());

            if (Storage::exists($partner->getAttribute('image'))) {
                Storage::delete($partner->getAttribute('image'));
            }
        }
        $partner->update($validated);
        return back()->with('success', trans('admin.notification.success'));
    }

    public function destroy(Partner $partner): RedirectResponse
    {
        if ($partner->delete()) {
            if (Storage::exists($partner->getAttribute('image'))) {
                Storage::delete($partner->getAttribute('image'));
            }
        }
        return back()->with('success', trans('admin.notification.success'));
    }
}
