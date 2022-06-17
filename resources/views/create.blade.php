<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
  </head>
  <body>

 
  <div class="container">
    <div class="columns">
        <div class="column is-three-fifths is-offset-one-fifth">
 <center>
        <div class="card">
            <p>Form Menu Cafe</p>
</center>
<form action="/store" method="POST">
  @csrf
    <div class="field">
             <label class="label">Nama Makanan/Minuman</label>
         <div class="control">
             <input class="input" type="text" name="menu" placeholder="Text input">
        </div>
    </div>
    <div class="field">
             <label class="label">Harga</label>
         <div class="control">
             <input class="input" type="text" name="price" placeholder="Text input">
        </div>
    </div>



<div class="field is-grouped">
  <div class="control">
    <button class="button is-link">Submit</button>
  </div>
  <div class="control">
    <button class="button is-link is-light">Cancel</button>
  </div>
  </form>
</div>
            </div>
        </div>
    </div>
  </div>
  </body>
</html>