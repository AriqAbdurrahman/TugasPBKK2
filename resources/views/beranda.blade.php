<meta charset="UTF-8">
    <title>Toko Online Ariq</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: rgb(234, 255, 0);
            color: rgb(251, 251, 251);
            text-align: center;
            padding: 20px 0;
        }
        h1 {
            margin: 0;
            padding: 0;
        }
        nav {
            background-color: rgb(234, 255, 0);
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
        img{
            max-width: 200px;
            width: 100%
        }
    </style>
</head>
<body>
    <header>
        <h1>Selamat Datang di Toko Online Ariq</h1>
    </header>
    <nav>
        <ul>
            <li><a href="beranda">Beranda</a></li>
            <li><a href="produk">Produk</a></li>
            <li><a href="keranjang">Keranjang</a></li>
            <li><a href="tentang kami">Tentang Kami</a></li>
            <li><a href="kontak">Kontak</a></li>
            <li><a href="logout">logout</a></li>

        </ul>
    </nav>
    <div class="container">
        <h2>Produk Terbaru</h2>
        <div class="product">
            <h3>Produk 1</h3>
            <p>Harga: Rp100.000</p>
            <p>sepatu ini cocok digunakan untuk olahraga</p>
            <img src="images.jpeg" alt=""> <br>
            <p></p>
            <button>Beli Sekarang</button>
        </div>
        <div class="product">
            <h3>Produk 2</h3>
            <p>Harga: Rp150.000</p>
            <p>tas kekinian</p>
            <img src="tas-ransel-sekolah-1.jpg" alt=""> <br>
            <p></p>
            <button>Beli Sekarang</button>
        </div>
        <!-- Tambahkan produk lainnya di sini -->
    </div>
</body>
</html>