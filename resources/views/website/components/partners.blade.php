<div class="container-fluid py-5">
    <div class="row px-xl-5">
        <div class="col">
            <div class="owl-carousel vendor-carousel">

                @foreach($partners as $partner)
                    <div class="vendor-item border p-4">
                        <img src="{{image($partner->getAttribute('image'))}}" alt="">
                    </div>
                @endforeach

            </div>
        </div>
    </div>
</div>
