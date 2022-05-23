<?php include("include_header.php") ?>

<form action="handler_register.php" method="post">

    <p>
        <label for="input-username">Name :</label>
        <input type="text" name="data-username" id="input-username">
    </p>
    <p>
        <label for="input-mail">Mail :</label>
        <input type="email" name="data-mail" id="input-mail">
    </p>
    <p>
        <label for="input-password">Mot de passe :</label>
        <input type="password" name="data-password" id="input-password">
    </p>
    <p>
        <label for="input-confirmation">Confirmation :</label>
        <input type="password" name="data-confirmation" id="input-confirmation">
        <span id="message"></span>
    </p>
    <p>
        <input type="submit" value="Enregister">
    </p>

</form>
<script src="checkPwdConfirmation.js"></script>
<?php include("include_footer.php") ?>