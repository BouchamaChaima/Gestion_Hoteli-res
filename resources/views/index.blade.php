<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
</head>
<body>
    <header></header>
    <section>
        <form action="/table" method="post">
            <fieldset>
                <h1>Gestion Hôtel</h1>
                <div>
                    <label for="numc">Numéro de chambre :</label>
                    <input type="text" name="numc" id="numc">
                    @if ($errors->has('numc'))
                    {{$errors->first('numc')}}
                    @endif
                </div>
                <div>
                    <label for="type">Type de chambre :</label>
                    <select name="type" id="type">
                        <option value="simple">Simple</option>
                        <option value="double">Double</option>
                        <option value="start">Start</option>
                    </select>
                </div>
                <div>
                    <label for="nump">Numéro de personnes :</label>
                    <input type="text" name="nump" id="nump">
                    @if ($errors->has('nump'))
                    {{$errors->first('nump')}}
                    @endif
                </div>
                <div>
                    <label for="nume">Numéro de enfants :</label>
                    <input type="text" name="nume" id="nume">
                    @if ($errors->has('nume'))
                    {{$errors->first('nume')}}
                    @endif
                </div>
                <div>
                    <label for="situation">Situation familial :</label>
                    <input type="radio" name="situation" id="mar">
                    <label for="mar">Marié</label>
                    <input type="radio" name="situation" id="cel">
                    <label for="cel">Célébataire</label>
                </div>
                <input type="submit" value="Réserver une chambre">
            </fieldset>
            @csrf
        </form>
    </section>
    <footer></footer>
</body>
</html>