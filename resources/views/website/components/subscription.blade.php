<div class="container-fluid bg-secondary my-5">
    <div class="row justify-content-md-center py-5 px-xl-5">
        <div class="col-md-6 col-12 py-5">
            <div class="text-center mb-2 pb-2">
                <h2 class="section-title px-5 mb-3"><span class="bg-secondary px-2">@lang('website.general.subscription_title')</span></h2>
                <p>@lang('website.general.subscription_body')</p>
            </div>
            <form action="{{ route('contact.create') }}" method="POST">
                @csrf
                <div class="input-group">
                    <input type="text" name="phone" class="form-control border-white p-4" placeholder="@lang('admin.placeholders.phone')">
                    <div class="input-group-append">
                        <button class="btn btn-primary px-4">@lang('website.general.subscribe')</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
