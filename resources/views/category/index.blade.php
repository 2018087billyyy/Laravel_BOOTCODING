<!-- resources/views/category/index.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>category</title>
  <link rel="stylesheet" href="{{ asset('style/admin.css') }}" />
</head>

<body>
  <h1>Welcome</h1>
  <nav>
    <span class="logo">
      <img src="{{ asset('assets/code.png') }}" width="38px" />
      <p>Chocoding</p>
    </span>
    <ul>
      <a href="">
        <p>Program Choco</p>
      </a>
      <a href="">
        <p>Location</p>
      </a>
      <a href="">
        <p>About Us</p>
      </a>
    </ul>
    <label class="burger" for="burger">
      <input type="checkbox" id="burger" />
      <span></span>
      <span></span>
      <span></span>
    </label>
    <a href="{{ url('logout') }}">
      <div class="button">
        <span class="btn">
          <p>Logout</p>
        </span>
      </div>
    </a>
  </nav>

  <div class="dropdown" id="dropdown">
    <ul>
      <li>Program Choco</li>
      <li>Location</li>
      <li>About Us</li>
      <li>
        <div class="btn">
          <p>Masuk</p>
        </div>
      </li>
      <li>
        <div class="btn">
          <p>Daftar</p>
        </div>
      </li>
    </ul>
  </div>

  <div class="container">
    <h2>Admin</h2>
    <div class="nav-main">
      <a href="{{ url('category') }}">
        <p class = "active">Category</p>
      </a>
      <a href="{{ url('admin') }}">
        <p class="active">Transaction</p>
      </a>
    </div>

    <div class="card">
      <div class="card-header">
        <h3>Category</h3>
        <div class="card-btn">
          <a href="{{ url('category/create') }}"><i class="fa-solid fa-plus fa-lg" style="margin-right: 7px"></i>Category Entry</a>
          <a href=""><i class="fa-solid fa-table fa-lg" style="color: #ffffff; margin-right: 7px"></i>View Tables</a>
          <a href="{{ url('cetak-transaction') }}" target="_blank"><i class="fa-solid fa-print fa-lg" style="color: #ffffff; margin-right: 7px"></i>Cetak Transaksi</a>
        </div>
      </div>

      <form action="{{ route('category.store') }}" method="POST">
        @csrf
        <div>
      </form>

      <table>
        <thead>
          <tr>
            <th>Nama</th>
            <th>Course</th>
            <th>Price</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          @if($category->isEmpty())
            <tr>
              <td colspan="4" align="center">Data Kosong</td>
            </tr>
          @else
            @foreach($category as $categories)
              <tr>
                <td>{{ $categories->nama }}</td>
                <td>{{ $categories->course }}</td>
                <td>{{ $categories->harga }}</td>
                <td>
                  <a class="btn-edit" href="{{ route('category.edit', $categories->id) }}">Edit</a> | 
                  <form action="{{ route('category.destroy', $categories->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn-delete" onclick="return confirm('Are you sure?')">Hapus</button>
                  </form>
                </td>
              </tr>
            @endforeach
          @endif
        </tbody>
      </table>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
    function Delete() {
      Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!",
      }).then((result) => {
        if (result.isConfirmed) {
          Swal.fire({
            title: "Deleted!",
            text: "Your file has been deleted.",
            icon: "success",
          });
        }
      });
    }

    let burger = document.getElementById("burger");
    let dropdown = document.getElementById("dropdown");
    burger.addEventListener("click", function() {
      dropdown.classList.toggle("tampil");
    });
  </script>
</body>

</html>
