<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Standings!</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <div class="row">
                    <div class="col">
                        <div class="card" style="width: 30rem;">
                            <div class="row">
                                <div class="col">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">Chelsea</h5>
                                        <h1 class="card-text display-1">2</h1>
                                    </div>
                                    <div class="card-body text-center">
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <button type="button" class="btn btn-primary">-</button>
                                            <button type="button" class="btn btn-primary" disabled></button>
                                            <button type="button" class="btn btn-primary">+</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col align-self-center">
                                    <h2 class="text-center">VS</h2>
                                </div>
                                <div class="col">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">Real Madrid</h5>
                                        <h1 class="card-text display-1">2</h1>
                                    </div>
                                    <div class="card-body text-center">
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <button type="button" class="btn btn-primary">-</button>
                                            <button type="button" class="btn btn-primary" disabled></button>
                                            <button type="button" class="btn btn-primary">+</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="table-responsive">

                    <table class="table table-hover table-striped table-sm table-light">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Team Name</th>
                                <th scope="col">P</th>
                                <th scope="col">W</th>
                                <th scope="col">D</th>
                                <th scope="col">L</th>
                                <th scope="col">F</th>
                                <th scope="col">A</th>
                                <th scope="col">GD</th>
                                <th scope="col">Pts</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($data as $kls) : ?>
                                <tr>
                                    <th scope="row"><?= $no; ?></th>
                                    <td><?= $kls['name'] ?></td>
                                    <td><?= $kls['p'] ?></td>
                                    <td><?= $kls['w'] ?></td>
                                    <td><?= $kls['d'] ?></td>
                                    <td><?= $kls['l'] ?></td>
                                    <td><?= $kls['f'] ?></td>
                                    <td><?= $kls['a'] ?></td>
                                    <td><?= $kls['gd'] ?></td>
                                    <td><?= $kls['pts'] ?></td>
                                </tr>
                            <?php $no++;
                            endforeach; ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>