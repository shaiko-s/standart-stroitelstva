<x-app-layout>

    <x-slot name="popup">
        <x-popup.send-CV />
    </x-slot>

    <h1 class="main-title">
        Вакансии
    </h1>

    <div class="surveyor vacancies-info">
        <h2>Текущих вакансий нет</h2>

        <x-button-sendCV id="openSendCV" />
    </div>

    <x-menu />

</x-app-layout>
