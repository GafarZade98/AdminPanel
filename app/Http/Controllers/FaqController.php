<?php

namespace App\Http\Controllers;

use App\Http\Requests\FaqRequest;
use App\Models\Faq;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->authorizeResource(Faq::class);
    }

    public function index(Request $request)
    {
        $search = $request->get('search');
        $limit = $request->get('limit');

        return view('admin.pages.faqs')->with([
            'faqs' => Faq::query()
                ->when($search, fn($query) => $query
                    ->where('question', 'like', "%$search%")
                    ->orWhere('answer', 'like', "%$search%"))
                ->paginate($limit),
        ]);
    }

    public function store(FaqRequest $request): RedirectResponse
    {
        $validated = $request->validated();
        $validated['is_active'] = $request->has('is_active');
        Faq::create($validated);
        return back()->with('success', trans('admin.notification.success'));
    }

    public function update(FaqRequest $request, Faq $faq): RedirectResponse
    {
        $validated = $request->validated();
        $validated['is_active'] = $request->has('is_active');

        $faq->update($validated);
        return back()->with('success', trans('admin.notification.success'));
    }

    public function destroy(Faq $faq): RedirectResponse
    {
        $faq->delete();
        return back()->with('success', trans('admin.notification.success'));
    }
}
