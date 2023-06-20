<html>
<body>
@inject('service',App\services\SayHello)
<h1>{{ $service->sayHello($namew) }}</h1>
</body>
</html>
