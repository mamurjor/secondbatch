
<div class="container-fluid">
    <div id="about" class="row about-section">
        <div class="col-lg-4 about-card">
            @foreach ($about as $singleuvalue )
            <h3 class="font-weight-light">{{ $singleuvalue->who }}</h3>
            <span class="line mb-5"></span>
            <h5 class="mb-3">{{ $singleuvalue->title }}</h5>
            <p class="mt-20">{{ $singleuvalue->short_des }}</p>
          <a href="{{ $singleuvalue->button_url }}">  <button class="btn btn-outline-danger"><i class="icon-down-circled2 "></i>{{ $singleuvalue->button_text }}</button></a>

            @endforeach

        </div>
        @foreach ($about as $singleuvalue )
        {!! $singleuvalue->info !!}
        @endforeach
        <div class="col-lg-4 about-card">
            <h3 class="font-weight-light">My Expertise</h3>
            <span class="line mb-5"></span>

            @foreach ($myexpertise as $singlevalue )
            <div class="row">
                <div class="col-1 text-danger pt-1"><i class="{{ $singlevalue->expert_icon_class }}"></i></div>
                <div class="col-10 ml-auto mr-3">
                    <h6>{{ $singlevalue->expert_title }}</h6>
                    <p class="subtitle">{{ $singlevalue->expert_des }}</p>
                    <hr>
                </div>
            </div>
            @endforeach


        </div>
    </div>
</div>
