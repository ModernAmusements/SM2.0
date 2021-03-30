@auth()
    @include('layouts.navbars.navs.authUser')
@endauth

@guest()
    @include('layouts.navbars.navs.guest')
@endguest
