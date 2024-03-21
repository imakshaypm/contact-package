<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
</head>
<body>
<h1>Contact Us Any Time</h1>
<form action="{{route('contact')}}" method="POST">
    @csrf
    <label>
        <input type="text" name="name" placeholder="Your Name">
    </label>
    <label>
        <input type="email" name="email" placeholder="Your Valid Email">
    </label>
    <label for="message"></label><textarea name="message" id="message" cols="30" rows="10" placeholder="Your Query"></textarea>
    <input type="submit" value="Submit">

</form>
</body>
</html>
