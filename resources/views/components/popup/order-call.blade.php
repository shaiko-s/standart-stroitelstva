<!-- Menu PopUp -->
<div id="orderCall" class="popup">

    <x-popup.button-close id="closeOrderCall" />

    <div class="popup-container">

        <h3>Обратный звонок</h3>

        <p>Оставьте Ваши данные и мы свяжемся с Вами</p>

        <form id="orderCallForm">
            @csrf
            <div class="input-field">
                <input type="text" id="name" name="name" placeholder="Введите Ваше имя" required>
            </div>

            <div class="input-field">
                <input type="tel" id="phone" name="phone" placeholder="Введите Ваш телефон" required>
            </div>

            <x-button-callOrder id="confirmCallOrder" />
        </form>

        <p class="declaration">Отправляя заявку, Вы соглашаетесь
            с <a href="#">политикой конфиденциальности</a></p>

    </div>
</div>
