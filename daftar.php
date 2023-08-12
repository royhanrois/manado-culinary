<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Tiket</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <br /><br />

    <div class="container-md">
      <div class="text-start">
        <h1>Add Restaurant</h1>
      </div>
      <br /><br />
      <form method="POST" action="" enctype="multipart/form-data">
        <div class="mb-3">
          <label for="name" class="form-label">Registrant Name:</label>
          <input
            type="text"
            class="form-control"
            name="name"
            id="name"
            placeholder="Input Your Name"
          />
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email:</label>
          <input
            type="email"
            class="form-control"
            name="email"
            id="email"
            placeholder="Input your email:"
          />
        </div>
        <div class="mb-3">
          <label for="notelp" class="form-label">Phone Number:</label>
          <input
            type="number"
            class="form-control"
            name="notelp"
            id="notelp"
            placeholder="Input your phone number"
          />
        </div>
        <div class="mb-3">
          <label for="resname" class="form-label">Restaurant Name: </label>
          <input
            class="form-control"
            type="text"
            name="resname"
            id="resname"
            placeholder="Type your restaurant name"
          />
        </div>

        <div class="mb-3">
          <label for="address" class="form-label">Restaurant Address: </label>
          <input
            class="form-control"
            type="text"
            name="address"
            id="address"
            placeholder="Type your restaurant name"
          />
        </div>


        <label for="menu" class="form-label">Menu</label>
        <div class="input-group">
          <select class="form-select" id="menu" name="menu">
            <option selected>Pilih Lomba</option>
            <option value="Desain Poster">Desain Poster</option>
            <option value="Fotografi">Fotografi</option>
            <option value="Short Movie">Short Movie</option>
            <option value="Solo Singing">Solo Singing</option>
            <option value="Talkshow Only">Talkshow Only</option>
          </select>
        </div>

        <br />
        <div class="mb-3 form-check">
          <input
            type="checkbox"
            class="form-check-input"
            id="tnc"
            required="required"
          />
          <label class="form-check-label" for="tnc"
            >I agree with the Term and Conditions and Privacy Policy</label
          >
        </div>
        <button
          type="submit"
          class="btn btn-primary"
          name="tambahTiket"
          value="Submit"
        >
          Daftar
        </button>
      </form>
      <br />

      <button class="btn btn-primary" onclick="goBack()">
        Kembali Ke Halaman Awal
      </button>
      <script>
        function goBack() {
          window.history.back();
        }
      </script>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
      crossorigin="anonymous"
    ></script>
  </body>
</html>