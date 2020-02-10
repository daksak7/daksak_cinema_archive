<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="style.css" />
    <title>DAKSAK</title>
  </head>
  <body>
    <div class="container">
      <form id="form" class="form">
        <h2>Kayıt Ol</h2>
        <div class="form-control">
          <label for="username">Kullanıcı Adı</label>
          <input type="text" id="username" placeholder="Kullanıcı adınızı giriniz..." />
          <small>Error message</small>
        </div>
        <div class="form-control">
          <label for="email">E-posta Adresi</label>
          <input type="text" id="email" placeholder="E-posta adresinizi giriniz" />
          <small>Error message</small>
        </div>
        <div class="form-control">
          <label for="password">Parola</label>
          <input type="password" id="password" placeholder="Parolanızı giriniz" />
          <small>Error message</small>
        </div>
        <div class="form-control">
          <label for="password2">Parola(Tekrar)</label>
          <input
            type="password"
            id="password2"
            placeholder="Parolanızı tekrar giriniz"
          />
          <small>Error message</small>
        </div>
        <button type="submit">Kayıt Ol</button>
      </form>
    </div>

    <script src="script.js"></script>
  </body>
</html>
