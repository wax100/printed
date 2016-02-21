<div id="modal-callback" class="modal" >
	<div class="clb_wrap ">
    	<span class="clb_close close" id="clbh_exit"></span>
    	<form class="clb_form" method="post" action="[[~[[*id]]]]" id="callback_form">
    		<p class="clb_title">Введите свой номер телефона и менеджер перезвонит в течение 30 сек!</p>
            <span class="clb_arrow"></span>
        	<input class="clb_input" type="text" name="phone"  placeholder="Введите ваш телефон" id="callback_phone">
            <p class="error clbh_banner-h1"></p>
    		<p class="error">Необходимо ввести номер!</p>
        	<input class="clb_btn" type="submit" name="sendSms" value="Отправить">
            <div class="clb_timer">
                <span id="countdown">30</span>.<span id="countdown2">00</span>
            </div>
            <div class="clearfix"></div>
            <p class="warning" style="display:none;">В данный момент наблюдаются задержки оповещения.  <br>Рекомендуем воспользоваться <a class="clb_link" href="#">формой обратной связи</a>. <br> Приносим свои извинения за временные неудобства.</p>
    	</form>
        <a href="http://scrumweb.ru" class="logo-scr"></a>
    </div>
</div>

<div id="clbh_phone_div" class="cbh-phone cbh-green cbh-static" style="top: 569px; left: 955px;">
    <div class="cbh-ph-circle"></div>
    <div class="cbh-ph-circle-fill"></div>
    <div class="cbh-ph-img-circle"></div>
</div>