<a href="components.html" class="btn btn-primary btn-component" data-spy="affix" data-offset-top="600"><i class="ti-shift-left-alt"></i> Components</a>
<header class="header">
    <div class="container">
        <ul class="social-icons pt-3">
            <li class="social-item"><a class="social-link text-light" href="#"><i class="ti-facebook" aria-hidden="true"></i></a></li>
            <li class="social-item"><a class="social-link text-light" href="#"><i class="ti-twitter" aria-hidden="true"></i></a></li>
            <li class="social-item"><a class="social-link text-light" href="#"><i class="ti-google" aria-hidden="true"></i></a></li>
            <li class="social-item"><a class="social-link text-light" href="#"><i class="ti-instagram" aria-hidden="true"></i></a></li>
            <li class="social-item"><a class="social-link text-light" href="#"><i class="ti-github" aria-hidden="true"></i></a></li>
        </ul>



        @foreach ($header_section as  $singleData)
        <div class="header-content">
            <h4 class="header-subtitle" > {{ $singleData->hero_title }}</h4>
            <h1 class="header-title">{{ $singleData->hero_name }}</h1>
            {{ $singleData->hero_designation }}

          <a href="{{ $singleData->button_url }}">  <button class="btn btn-primary btn-rounded"><i class="ti-printer pr-2"></i> {{ $singleData->button_text }} </button> </a>
        </div>
        @endforeach


    </div>
</header>
