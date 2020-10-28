
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{asset("css/app.css")}}">
  <title>Laravel-Boolean</title>
</head>
<body>
  <div>
    <h1>Lista degli Studenti</h1>
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Nome</th>
          <th>Cognome</th>
          <th>Data di nascita</th>
          <th>Luogo di nascita</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($students as $student)
          <tr>
            <td>{{$student->id}}</td>
            <td>{{$student->nome}}</td>
            <td>{{$student->cognome}}</td>
            <td>{{$student->data_di_nascita}}</td>
            <td>{{$student->luogo_di_nascita}}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</body>
</html>
