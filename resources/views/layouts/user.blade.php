@include('sweetalert::alert')

<section class="col-md-12">
                @include('layouts.head')
</section> 

<section>
    <div class="col col-md-12 my-5">
        @include('layouts.navbar')
    </div> 
</section> 
<section>
    <div class="col-12 mt-5">
        @yield('body')
    </div> 
</section>

<section>
    <div class="col col-md-12 my-5">
        @include('layouts.footer')
    </div> 
</section> 
