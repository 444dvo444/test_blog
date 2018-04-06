<footer>
    <p id="dev" class="fl-r">by <a href="http://reburo.ru" target="_blank">reburo</a></p>

    <span id="copy">&copy; 2014 Mlinovi hills exclusive villas</span>

    <span id="footer-phone" class="icon-mobile">8 800 152 58 95</span>

    <span id="footer-email" class="icon-mail"><a href="mailto:mlinovi-hills@mail.hr">mlinovi-hills@mail.hr</a></span>

    <a id="to-top" class="icon-up-open" href="#"></a>
</footer>
</div>

<form id="callback-form" class="form">
    <span id="close-form"></span>

    <h2>Send call request</h2>

    <input type="hidden" name="action" value="request">
    <input type="hidden" name="type" value="form-message">

    <label for="inp-name">name</label>
    <input id="inp-name" type="text" name="name" />

    <label for="inp-phone">phone</label>
    <input id="inp-phone" type="text" name="phone" />

    <label for="inp-email">email</label>
    <input id="inp-email" type="text" name="email" />

    <input type="submit" value="Send call request">
</form>

<div id="overlay-message">Данные были успешно отправлены!</div>

<script type="text/javascript" src="{{ URL::to('js/jquery.packed_plugins.js') }}"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&key=AIzaSyBk5ekRq7WUHVSHMzAdpZrY17aDcgtf9hg"></script>
<script type="text/javascript" src="{{ URL::to('js/jquery.main.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('js/aplication.js') }}"></script>
</body>
</html>