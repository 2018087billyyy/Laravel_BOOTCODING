<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Categories</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <h1>Daftar Categories</h1>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Course</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            @if($categories->isEmpty())
                <tr>
                    <td colspan="3" align="center">Data Kosong</td>
                </tr>
            @else
                @foreach($categories as $category)
                    <tr>
                        <td>{{ $category->nama }}</td>
                        <td>{{ $category->course }}</td>
                        <td>{{ $category->harga }}</td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</body>

</html>
