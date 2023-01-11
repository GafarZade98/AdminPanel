<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->get('search');
        $limit = $request->get('limit');

        return view('admin.pages.contacts')->with([
            'contacts' => Contact::query()
                ->when($search, fn($query) => $query
                    ->where('name', 'like', "%$search%")
                    ->orWhere('phone', 'like', "%$search%")
                    ->orWhere('message', 'like', "%$search%")
                    ->orWhere('email', 'like', "%$search%")
                )
                ->paginate($limit),
        ]);
    }
    public function create(ContactRequest $request)
    {
        Contact::create($request->validated());
        return back()->with('success', trans('admin.notification.success'));
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();
        return back()->with('success', trans('admin.notification.success'));
    }

    public function setPhoneAttribute($value): ?string
    {
        return $this->attributes['phone'] = phone_cleaner($value);
    }

    public function getPhoneAttribute($value): ?string
    {
        return phone_formatter($value, true);
    }
}
