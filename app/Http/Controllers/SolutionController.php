<?php

namespace App\Http\Controllers;

use App\{Http\Requests\SolutionRequest, Models\Solution};
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\{RedirectResponse, Request};

class SolutionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->authorizeResource(Solution::class);
    }

    public function index(Request $request)
    {
        $search = $request->get('search');
        $limit = $request->get('limit');

        return view('admin.pages.solutions')->with([
            'solutions' => Solution::query()
                ->when($search, fn ($query) => $query
                    ->where('title', 'like', "%$search%")
                    ->orWhere('link', 'like', "%$search%")
                    ->orWhere('description', 'like', "%$search%"))
                ->paginate($limit),
        ]);
    }

    public function store(SolutionRequest $request): RedirectResponse
    {
        $validated = $request->validated();
        $validated['is_active'] = $request->has('is_active');
        if ($request->file('image')) {
            $image_value = $request->file('image');
            $validated['image'] = $image_value->storeAs('solutions', $image_value->hashName());
        }

        Solution::create($validated);
        return back()->with('success', trans('admin.notification.success'));
    }

    public function update(SolutionRequest $request, Solution $solution): RedirectResponse
    {
        $validated = $request->validated();
        $validated['is_active'] = $request->has('is_active');
        if ($request->file('image')) {

            $image_value = $request->file('image');
            $validated['image'] = $image_value->storeAs('solutions', $image_value->hashName());

            if (Storage::exists($solution->getAttribute('image'))) {
                Storage::delete($solution->getAttribute('image'));
            }
        }
        $solution->update($validated);
        return back()->with('success', trans('admin.notification.success'));
    }

    public function destroy(Solution $solution): RedirectResponse
    {
        if ($solution->delete()) {
            if (Storage::exists($solution->getAttribute('image'))) {
                Storage::delete($solution->getAttribute('image'));
            }
        }
        return back()->with('success', trans('admin.notification.success'));
    }
}
