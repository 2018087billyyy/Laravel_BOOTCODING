<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit Category</title>
    <link rel="stylesheet" href="{{ asset('style/entry-data.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <nav>
        <span class="logo">
            <img src="{{ asset('assets/code.png') }}" width="38px" />
            <p>Chocoding</p>
        </span>
        <ul>
            <li><a href="#"><p>Program Choco</p></a></li>
            <li><a href="#"><p>Location</p></a></li>
            <li><a href="#"><p>About Us</p></a></li>
        </ul>
        <label class="burger" for="burger">
            <input type="checkbox" id="burger" />
            <span></span>
            <span></span>
            <span></span>
        </label>
        {{-- <a href="{{ route('logout') }}">
            <div class="button">
                <span class="btn"><p>Logout</p></span>
            </div>
        </a> --}}
    </nav>

    <div class="dropdown" id="dropdown">
        <ul>
            <li>Program Choco</li>
            <li>Location</li>
            <li>About Us</li>
            <li><div class="btn"><p>Masuk</p></div></li>
            <li><div class="btn"><p>Daftar</p></div></li>
        </ul>
    </div>

    <div class="container">
        <h2>Edit Data</h2>
        <div class="nav-main">
            <p class="active">Category</p>
        </div>

        <div class="card-content">
            <div class="card">
                <div class="entry-box">
                    <form action="{{ route('category.update', $category->id) }}" method="post">
                        @csrf
                        {{-- @method('put') --}}
                        <div class="user-box">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" id="nama" value="{{ $category->nama }}" />
                        </div>
                        <div class="user-box">
                            <label for="course">Course</label>
                            <input type="text" name="course" id="course" value="{{ $category->course }}" />
                        </div>
                        <div class="user-box">
                            <label for="harga">Harga</label>
                            <input type="number" name="harga" id="harga" value="{{ $category->harga }}" />
                        </div>
                        <button name="simpan" type="submit">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        let burger = document.getElementById("burger");
        let dropdown = document.getElementById("dropdown");
        burger.addEventListener("click", function () {
            dropdown.classList.toggle("tampil");
        });
    </script>
</body>
</html>
