<!doctype html>
<html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exojson</title>
  </head>

  <body>

    <form method="POST" action="traitement.php">

        <SELECT name="pizza" size="1">

            <option value=""> Choisir votre pizza </option>
            <option value="pizza1"> Marguerita </option>
            <option value="pizza2"> 3 fromages </option>
            <option value="pizza3"> 3 jambons </option>

        </SELECT>

        <span><input type="checkbox" name="olive" value="supp1"/> olive</span>
        <span><input type="checkbox" name="tomate" value="supp2"/> tomate</span>
        <span><input type="checkbox" name="mozzarella" value="supp3"/> mozzarella</span>

        <input type="submit" name="envoyer">

  </body>

</html>
