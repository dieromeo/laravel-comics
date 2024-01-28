<footer>
    <div class="top-bar">
        <div class="container overflow-hidden">
            <div class="d-flex justify-content-between align-items-center position-relative">
                <div class="left d-flex">
                <div>
                    @include('_partials.dcComicsMenu')
                   <h2 class="text-uppercase">Shop</h2>
                   <ul class="p-0 list-unstyled">
                    <li class="m-0">
                        <a href="#" class="text-decoration-none">Shop DC</a>
                    </li>
                    <li class="m-0">
                        <a href="#" class="text-decoration-none">Shop DC Collectibles</a>
                    </li>
                </ul>
                </div>
                <div>
                   @include('_partials.dcMenu')
                </div>
                <div>
                    @include('_partials.sitesMenu')
                </div>
            </div>
            <div class="right">
                <img src="{{ Vite::asset('resources/img/dc-logo-bg.png') }}" alt="" class="position-absolute top-50 end-0">
            </div>
        </div>
        <div class="footer-info">
            <p>All Site Content TM and @ 2020 DC Entertainment, unless otherwise <span><a href="#" class="text-decoration-none">noted here.</a></span> All rights reserved.
                <span><a href="#" class="text-decoration-none">Cookies Settings</a></span></p>
        </div>
        </div>
    </div>
    <div class="bottom-bar">
        <div class="container">
            <div class="ft-content d-flex justify-content-between align-items-center">
               <button id="signup" class="text-uppercase btn btn-outline-primary rounded-0 text-light">sign up now</button>
               @include('_partials.footerSocial')
            </div>
        </div>
    </div>
</footer>