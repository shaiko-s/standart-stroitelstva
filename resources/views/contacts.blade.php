<x-app-layout>

    <h1 class="main-title">
        Контакты
    </h1>

    <div class="contactUs">
        <h2>Свяжитесь с нами</h2>
        <div class="contactUs__phone">

            <x-icon-phone />

            <x-phones />

        </div>

        <x-email-icon />

        <address class="contactUs__address">

            <x-icon-address />

            <x-address />

        </address>
        <div class="contactUs__buttons">

            <x-button-callOrder id="openOrderCall" />

            <x-icon-whatsApp />

            <x-icon-telegram />

        </div>
    </div>

    <x-menu />

</x-app-layout>
