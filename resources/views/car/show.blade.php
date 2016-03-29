<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Car {{$car->id}}</title>
  </head>
  <body>
    <h1>Car {{ $car->id }}</h1>
    <ul>
      <li>Make: {{$car->make}}</li>
      <li>Model: {{$car->model}}</li>
      <li>Produced On: {{$car->produced_on}}</li>
    </ul>
  </body>
</html>
