<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Notas</title>
</head>

<body>
    <form action="{{ route('notas.store') }}" method="post">
        @csrf
        <label for="id_nota">ID Nota</label><br>
        <input type="text" id="id_nota" name="id_nota"><br> </br>
        <label for="emissor">Emissor</label><br>
        <input type="text" id="emissor" name="emissor"> </br> </br>
        <label for="data">Data</label><br>
        <input type="date" id="data" name="data">

        </br>
        </br>

        <button type="button" id="addItem">Adicionar Novo Item</button> </br>

        <table id="itemsTable">
            <thead>
                <tr>
                    <th>item</th>
                    <th>produto</th>
                    <th>valor</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="text" name="items[0][item]" class="form-control" required></td>
                    <td><input type="text" name="items[0][produto]" class="form-control" required></td>
                    <td><input type="text" name="items[0][valor]" class="form-control" required></td>

                    <td><button type="button" class="btn btn-danger remove-item">Remove</button></td>
                </tr>
            </tbody>


        </table>
        <button type="submit">Salvar Nota Fiscal</button>
    </form>




    <script>
        let itemIndex = 1;

        document.getElementById('addItem').addEventListener('click', function () {
            const tableBody = document.querySelector('#itemsTable tbody');
            const newRow = document.createElement('tr');

            newRow.innerHTML = `
            <td><input type="text" name="items[${itemIndex}][item]" class="form-control" required></td>
            <td><input type="text" name="items[${itemIndex}][produto]" class="form-control" required></td>
            <td><input type="text" name="items[${itemIndex}][valor]" class="form-control" required></td>

            <td><button type="button" class="btn btn-danger remove-item">Remove</button></td>
        `;

            tableBody.appendChild(newRow);
            itemIndex++;
        });

        document.getElementById('itemsTable').addEventListener('click', function (event) {
            if (event.target.classList.contains('remove-item')) {
                event.target.closest('tr').remove();
            }
        });
    </script>

</body>


</html>