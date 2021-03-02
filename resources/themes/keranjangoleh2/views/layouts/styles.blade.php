<link rel="stylesheet" href="{{ asset('themes/keranjangoleh2/assets/css/bootstrap.min.css') }}"/>

@if (core()->getCurrentLocale() && core()->getCurrentLocale()->direction == 'rtl')
    <link href="{{ asset('themes/keranjangoleh2/assets/css/bootstrap-flipped.css') }}" rel="stylesheet">
@endif

<link rel="stylesheet" href="{{ asset('themes/keranjangoleh2/assets/css/velocity.css') }}"/>
<link rel="stylesheet" href="{{ mix('css/keranjangoleh2.css', 'themes/keranjangoleh2/assets') }}">

@stack('css')

<style>
    {!! core()->getConfigData('general.content.custom_scripts.custom_css') !!}
</style>