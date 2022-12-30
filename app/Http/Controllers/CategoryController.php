<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->authorizeResource(Category::class);
    }

    public function index(Request $request)
    {
        $search = $request->get('search');
        $limit = $request->get('limit');

        return view('admin.pages.categories')->with([
            'categories' => Category::query()
                ->with('categories')
                ->when($search, fn ($query) => $query
                    ->where('name', 'like', "%$search%")
                    ->orWhere('keyword', 'like', "%$search%")
                    ->orWhere('description', 'like', "%$search%"))
                ->paginate($limit),
        ]);
    }

    public function store(CategoryRequest $request): RedirectResponse
    {
        $validated = $request->validated();
        $validated['is_active'] = $request->has('is_active');
        if ($request->file('image')) {

            $image_value = $request->file('image');
            $validated['image'] = $image_value->storeAs('categories', $image_value->hashName());
        }

        Category::create($validated);
        return back()->with('success', trans('admin.notification.success'));
    }

    public function update(CategoryRequest $request, Category $category): RedirectResponse
    {
        $validated = $request->validated();
        $validated['is_active'] = $request->has('is_active');
        if ($request->file('image')) {

            $image_value = $request->file('image');
            $validated['image'] = $image_value->storeAs('categories', $image_value->hashName());

            if (Storage::exists($category->getAttribute('image'))) {
                Storage::delete($category->getAttribute('image'));
            }
        }
        $category->update($validated);
        return back()->with('success', trans('admin.notification.success'));
    }

    public function destroy(Category $category): RedirectResponse
    {
        if ($category->delete()) {
            if (Storage::exists($category->getAttribute('image'))) {
                Storage::delete($category->getAttribute('image'));
            }
        }
        return back()->with('success', trans('admin.notification.success'));
    }
}
