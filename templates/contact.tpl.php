<form action="<?= $base_url ?>/?page=contact_send" method="POST">
    <label for="email">Email</label>
    <input id="email" name="email" type="text" pattern="\w+(\.\w+)?@\w*\.\w+" />
    <label for="message">Message</label>
    <textarea id="message" name="message"></textarea>
    <button type="submit">Send</button>
</form>