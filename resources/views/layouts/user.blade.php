@include('sweetalert::alert')

<section class="col-md-12">
                @include('layouts.head')
</section> 


<body class="bg-dark">

            <section>
                <div class="col col-md-12 my-5">
                    @include('layouts.navbar')
                </div> 
            </section> 
            <section>
                <div class="col-12 mt-5">
                    @yield('header')
                </div> 
            </section>

            <section>
                <div class="col-12">
                    
                    @yield('projects')
                </div> 
            </section>
            <section>
                <div class="col-12">
                    
                        @yield('technologies')
                </div> 
            </section>
            <section>
                <div class="col-12">
                    
                    @include('layouts.contactForm')
                </div> 
            </section>
            <section>
                <div class="col-12 mx-auto pb-5 text-center">
                    
                    @yield('footer')
                </div> 
            </section>
    
        
</body>