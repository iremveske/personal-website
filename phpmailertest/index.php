<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>E-posta Gönderme Formu</h2>
    <form action="send.php" method="post">
        <label for="name">Adınız:</label>
        <input type="text" name="name" required>
        <br>
        <label for="email">E-posta Adresiniz:</label>
        <input type="email" name="email" required>
        <br>
        <label for="message">Mesajınız:</label>
        <textarea name="message" required></textarea>
        <br>
        <input type="submit" value="Gönder">
    </form>
</body>
</html>