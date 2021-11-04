<!DOCTYPE html>
<html>
  <head>
    <title>Registrasion Form</title>
    <link rel="stylesheet" href="/assets/css/form_artikel.css">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">

    </script>
  </head>
  <body>
    <div class="wrapper">
      <div class="header">
      </div>
      <div class="form">
        <form action="" method="">
          <h1>Ketikkan Artikel Disini </h1>
          <p>
            <label for="title">Title</label>
            <input type="text" name="title" id="tittle" class="form-input">
          </p>
          <p>
              <label for="foto">Upload Foto</label>
              <button>Upload</button>
          </p>
          <p>
            <label for="footer">Footer</label>
            <textarea name="footer" id="footer" rows="15"></textarea>
          </p>
          <p>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-input">
          </p>
          <!-- <p>
            <label for="paragraf-tittle">Paragraf Tittle</label>
            <input type="text" name="paragraf-tittle" id="paragraf-title" class="form-input">
          </p> -->
          <p>
            <label for="content">Content</label>
            <textarea name="footer" id="content" rows="15"></textarea>
          </p>
          <p>
            <input type="submit" onclick="return validate()">
          </p>
        </form>
      </div>
    </div>
  </body>
</html>
