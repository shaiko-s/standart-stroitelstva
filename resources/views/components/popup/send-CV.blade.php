<!-- Menu PopUp -->
<div id="sendCV" class="popup">

    <x-popup.button-close id="closeSendCV" />

    <div class="popup-container">

        <h3>Отправьте нам свое резюме</h3>

        <p>Оставьте Ваши данные и мы свяжемся с Вами</p>

        <form id="sendCVForm" method="POST" action="{{ route('vacancies.store') }}" enctype="multipart/form-data">
            @csrf

            <div class="input-field">
                <input type="text" id="name" name="name" placeholder="Введите Ваше имя" required>
            </div>

            <div class="input-field">
                <input type="tel" id="phone" name="phone" placeholder="Введите Ваш телефон" required>
            </div>

            <x-button-attachCV id="attachCVBtn" />

            <x-button-sendCV id="confirmSendCV" title="Отправить" />
        </form>

        <p class="declaration">Отправляя заявку, Вы соглашаетесь
            с <a href="#">политикой конфиденциальности</a></p>

    </div>
</div>
