<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $name }}</title>
</head>
<body>
@php
    class Person {
        public string $name;
        public string $address;
    }

    $person = new Person();
    $person->name = "Rangga";
    $person->address = "Jalan jalan";
@endphp

<p>{{ $person->name }}</p>
<p>{{ $person->address }}</p>
</body>
</html>
