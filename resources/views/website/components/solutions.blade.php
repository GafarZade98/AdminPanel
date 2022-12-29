<div id="ttm_bannercms">
    <div class="container">
        <div class="bannercms">
            <ul class="bannercms-wrapper">

                @foreach($solutions as $solution)
                    @php($numbers = [1 => 'first', 'second', 'third', 'forth'])
                    <li class="bannercms_content {{$numbers[$loop->iteration]}} col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="bannercms_item">
                            <a href="#" class="img"><img src="{{image($solution->getAttribute('image'))}}" height="300" width="700" alt=""></a>
                            <div class="bannertext">
                                <span class="bannertext1">{{$solution->getAttribute('title')}}t</span>
                                <span class="bannertext2">{{$solution->getAttribute('description')}}</span>

                                <a class="bannerbtn" href="{{$solution->getAttribute('link')}}">shop now <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </li>
                @endforeach

            </ul>
        </div>
    </div>
</div>
