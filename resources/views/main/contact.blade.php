<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Muli:400,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="normalize.min.css">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>
<body>
@include('main/header')

<div class="container">
    <div class="row">
        <div class="col-12">
    
</div>
    </div>
    <div class="row">
        <div class="col-5 ml-7">

    <div class="contact">
            <h2>N'hesitez pas à prendre contact avec nous</h2>
            <form action="https://mamasita.club/oburo.html" method="GET" >
            <p><b>1) Envoyer un message à:</b>
            <select name="mailto_name">
            <option>bollo@bollo.fr</option>
            <option>Mariam Bollo</option>
            <option>Joseph Tchooungui Akoa</option>
            <option selected="selected">O'Buro</option>
            </select>
            </p>
            <p><b>2) Donnez votre adresse mail:</b> </p>
            <p>
            <input type="text" name="email" value="moi@example.com"
            size="60" />
            </p>
            <!-- case corps du message-->
            <p>
            <textarea cols="60" rows="8" name="corps_du_message">
            Remplacez ce texte par le votre ( 500 caractères MAX )!
            Puis pressez le bouton "Envoyer message" pour
            effectuer l'envoi
            Vous pouvez utiliser le bouton "Remise à zéro"
            pour remettre les valeurs initiales
            </textarea>
            </p>
            <p>
            <input type="submit" value="Envoyer message" />
            <input type="reset" value="Remise à zéro" /></p>
            </form>
            </div>
        </div>

        <div class="col-7">
            <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1990.3946328607083!2d11.499516057793242!3d3.8553529754402898!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x108bcfbda1d06019%3A0xe07d3b2893e4568d!2sRestaurant%20N%C2%B01%2C%20Joseph%20Tchooungui%20Akoa%2C%20Yaound%C3%A9%2C%20Cameroun!5e0!3m2!1sfr!2sfr!4v1646319792252!5m2!1sfr!2sfr" width="500" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
</div>
</body>
</html>


    
    <main>
       
    </main>
    @include('main/footer')
</body>
</html>