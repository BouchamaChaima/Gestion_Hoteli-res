<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Table</title>
</head>
<body>
    <header></header>
    <section>
            <h1>Commande passer</h1>
            <table border="2">
                <thead>
                    <th>Numéro de chambre</th>
                    <th>Type de chambre</th>
                    <th>Numéro de personnes</th>
                    <th>Numéro d'enfants</th>
                    <th>Situation familial</th>
                </thead>
                <tbody>
                    <td>{{$numc}}</td>
                    <td></td>
                    <td>{{$nump}}</td>
                    <td>{{$nume}}</td>
                    <td></td>
                </tbody>
                <tfoot></tfoot>
            </table>
    </section>
    <footer></footer>
</body>
</html>