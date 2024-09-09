<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://unpkg.com/htmx.org@2.0.2" integrity="sha384-Y7hw+L/jvKeWIRRkqWYfPcvVxHzVzn5REgzbawhxAuQGwX1XWe70vji+VSeHOThJ" crossorigin="anonymous" type="text/javascript"></script>
<script src="https://unpkg.com/hyperscript.org@0.9.12" type="text/javascript"></script>
<script src="https://code.jquery.com/jquery-1.12.4.min.js" type="text/javascript"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP URL Shortener</title>
</head>
<body>
    <h1>PHP URL Shortener</h1>
    <!-- <form hx-post="./create-url/index.php" hx-target="input.result" hx-swap="outerHTML">
        <input type="text" name="url" required>
        <button type="submit">Shorten URL</button>
    </form> -->
    <form method="post" action="./create-url/index.php">
        <input type="text" name="url" required>
        <button type="submit">Shorten URL</button>
    </form>
    <!-- <input type="text" class="result" readonly value="Your Link will appear here!"> -->
</body>
</html>