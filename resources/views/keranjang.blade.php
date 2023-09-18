<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Keranjang Belanja - Toko Online Ariq</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #f9f505;
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }
        h1 {
            margin: 0;
            padding: 0;
        }
        nav {
            background-color: #f9f505;
            color: #fff;
            text-align: center;
            padding: 10px 0;
        }
        nav ul {
            list-style-type: none;
            padding: 0;
        }
        nav ul li {
            display: inline;
            margin-right: 20px;
        }
        .container {
            max-width: 960px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
        }
        .product {
            border: 1px solid #ddd;
            padding: 10px;
            margin-bottom: 20px;
        }
        #cart {
            border-collapse: collapse;
            width: 100%;
        }
        #cart th, #cart td {
            border: 1px solid #faf603;
            padding: 8px;
            text-align: left;
        }
        #cart tr:nth-child(even) {
            background-color: #fcfcf6;
        }
    </style>
</head>
<body>
    <header>
        <h1>Keranjang Belanja - Toko Online Ariq</h1>
    </header>
    <nav>
        <ul>
            <li><a href="#">Beranda</a></li>
            <li><a href="#">Produk</a></li>
            <li><a href="#">Tentang Kami</a></li>
            <li><a href="#">Kontak</a></li>
            <li><a href="#">logout</a></li>
        </ul>
    </nav>
    <div class="container">
        <h2>Keranjang Belanja</h2>
        <table id="cart">
            <thead>
                <tr>
                    <th>Produk</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th>Subtotal</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Produk 1</td>
                    <td>Rp100.000</td>
                    <td>2</td>
                    <td>Rp200.000</td>
                </tr>
                <tr>
                    <td>Produk 2</td>
                    <td>Rp150.000</td>
                    <td>1</td>
                    <td>Rp150.000</td>
                </tr>
                <!-- Tambahkan item keranjang lainnya di sini -->
            </tbody>
        </table>
        <h3>Total Belanja: Rp350.000</h3>
        <button>Lanjutkan Ke Pembayaran</button>
    </div>
</body>
</html>