@props(['success'])

<!-- Menu PopUp -->
<div id="success" class="popup" style="{{ $success ? 'display: block;' : '' }}">

{{-- <div id="success" class="popup"> --}}

    <x-popup.button-close id="closeSuccess" />

    <div class="popup-container">

        <h3>Спасибо!</h3>

        <p>{{ $success }}</p>

        <img src="/images/checked_green.svg" alt="">

    </div>
</div>

{{-- <div id="overlay2" class="overlay" style="{{ $success==true ? 'display: block;' : '' }}"></div> --}}
