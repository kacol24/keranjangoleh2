<header class="sticky-header">
    <div class="row remove-padding-margin velocity-divide-page no-gutters">
        <div class="col-md d-flex align-items-center" style="max-width: 230px">
            <logo-component add-class="navbar-brand"></logo-component>
        </div>
        <div class="col-md">
            <searchbar-component></searchbar-component>
        </div>
    </div>
</header>

@push('scripts')
    <script type="text/javascript">
        (() => {
            document.addEventListener('scroll', e => {
                scrollPosition = Math.round(window.scrollY);

                if (scrollPosition > 50) {
                    document.querySelector('header').classList.add('header-shadow');
                } else {
                    document.querySelector('header').classList.remove('header-shadow');
                }
            });
        })();
    </script>
@endpush
