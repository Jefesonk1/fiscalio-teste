<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <button><a href={{route('notas.create')}}>Nova Nota Fiscal</a></button>
   <table>
  <tr>
    <th>id_nota</th>
    <th>emissor</th>
    <th>data</th>
    <!-- <th>valor</th> -->
  </tr>
   @foreach ($notas as $nota)
   <tr>
    <td>{{$nota->id_nota}}</td>
    <td>{{$nota->emissor}}</td>
    <td>{{$nota->data}}</td>
    <Td><a href="teste">[Editar]</a></Td>
    <Td><a href="teste2">[Excluir]</a></Td>
  </tr>
  @endforeach
</table>
   <div>
       <button>Exportar TXT</button>
       <button>Exportar JSON</button>
   </div>
</body>
</html>