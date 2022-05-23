<?php

namespace App\Http\Controllers;

use Illuminate\{Http\RedirectResponse, Http\Request};
use App\{Http\Requests\TestRequest, Models\Test};

class TestController extends Controller

{
    public function index(Request $request)
    {
        $search = $request->get('search');
        $limit = $request->get('limit');

        return view('admin.pages.tests')->with([
            'tests' => Test::query()
                ->when($search, fn ($query) => $query->where('name', 'like', "%$search%"))
                ->paginate($limit),
        ]);
    }

    public function store(TestRequest $request): RedirectResponse
    {
        Test::create($request->validated());
        return back()->with('success', trans('admin.notification.success'));
    }

    public function update(TestRequest $request, Test $test): RedirectResponse
    {
        $test->update($request->validated());
        return back()->with('success', trans('admin.notification.success'));
    }

    public function destroy(Test $test): RedirectResponse
    {
        $test->delete();
        return back()->with('success', trans('admin.notification.success'));
    }
}
