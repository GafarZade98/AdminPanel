<div class="container-fluid offer pt-5">
    <div class="row px-xl-5">
        @foreach($solutions as $solution)
            @php($numbers = [1 => 'right', 'left'])
            <div class="col-md-6 pb-4">
                <div class="position-relative bg-secondary text-center text-md-{{$numbers[$loop->iteration]}} text-white mb-2 py-5 px-5">
                    <img src="{{image($solution->getAttribute('image'))}}" alt="">
                    <div class="position-relative" style="z-index: 1;">
                        <h5 class="text-uppercase text-primary mb-3">{{$solution->getAttribute('description')}}</h5>
                        <h1 class="mb-4 font-weight-semi-bold">{{$solution->getAttribute('title')}}</h1>
                        <a href="{{$solution->getAttribute('link')}}" class="btn btn-outline-primary py-md-2 px-md-3">Shop Now</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
