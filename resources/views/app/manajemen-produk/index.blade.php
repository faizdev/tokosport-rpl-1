<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Manajemen Produk</h1>

    {{-- // membuat link ke halaman create --}}
    <a href=" {{ url('produk/create') }} ">
        {{-- // ini bisa diklik --}}
        <button>Tambah</button>
    </a>

    <table border="1">
        <tr>
            <td>No</td>
            <td>Nama</td>
            <td>Harga</td>
            <td>Stock</td>
            <td>Aksi</td>
        </tr>

        @foreach ($dataProduk as $produk)
            <tr>
                <td>No</td>
                <td> {{ $produk->nama }} </td>
                <td> {{ $produk->harga }} </td>
                <td> {{ $produk->stock }} </td>
                <td>
                    <button>Edit</button>
                    <button>Hapus</button>
                </td>
            </tr>
        @endforeach

    </table>
</body>
</html>