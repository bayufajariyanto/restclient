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
                        <div class="card" style="width: 100%;">
                            <form action="" method="post">
                                <div class="row">
                                    <div class="col-5 perhitungan">
                                        <div class="card-body text-center">
                                            <select class="btn btn-secondary" name="tim1" id="tim1">
                                                <?php

                                                foreach ($data as $kls) : ?>
                                                    <option><?= $kls['name']; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                            <h1 class="card-text display-1" id="skor1">0</h1>
                                        </div>
                                        <div class="card-body text-center">
                                            <div class="btn-group" role="group" aria-label="">
                                                <button type="button" class="btn btn-primary" name="kurang1" id="kurang1">-</button>
                                                <button type="button" class="btn btn-primary" name="tambah1" id="tambah1">+</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col align-self-center">
                                        <h2 class="text-center">VS</h2>
                                    </div>
                                    <div class="col-5">
                                        <div class="card-body text-center">
                                            <select class="btn btn-secondary" name="tim2" id="tim2">
                                                <?php foreach ($data as $kls) : ?>
                                                    <option><?= $kls['name']; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                            <h1 class="card-text display-1" id="skor2">0</h1>
                                        </div>
                                        <div class="card-body text-center">
                                            <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                                <button type="button" class="btn btn-primary" name="kurang2" id="kurang2">-</button>
                                                <button type="button" class="btn btn-primary" name="tambah2" id="tambah2">+</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Tabel Klasemen -->
            <div class="col">
                <div class="table-responsive">

                    <table class="table table-hover table-striped table-sm table-light">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col" class="text-center">#</th>
                                <th scope="col">Team Name</th>
                                <th scope="col" class="text-center">P</th>
                                <th scope="col" class="text-center">W</th>
                                <th scope="col" class="text-center">D</th>
                                <th scope="col" class="text-center">L</th>
                                <th scope="col" class="text-center">F</th>
                                <th scope="col" class="text-center">A</th>
                                <th scope="col" class="text-center">GD</th>
                                <th scope="col" class="text-center">Pts</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($data as $kls) : ?>
                                <tr>
                                    <th scope="row" class="text-center"><?= $no; ?></th>
                                    <td><?= $kls['name'] ?></td>
                                    <td class="text-center"><?= $kls['p'] ?></td>
                                    <td class="text-center"><?= $kls['w'] ?></td>
                                    <td class="text-center"><?= $kls['d'] ?></td>
                                    <td class="text-center"><?= $kls['l'] ?></td>
                                    <td class="text-center"><?= $kls['f'] ?></td>
                                    <td class="text-center"><?= $kls['a'] ?></td>
                                    <td class="text-center"><?= $kls['gd'] ?></td>
                                    <td class="text-center"><?= $kls['pts'] ?></td>
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
    <script>
        var kurang1 = document.getElementById('kurang1');
        var kurang2 = document.getElementById('kurang2');
        var tambah1 = document.getElementById('tambah1');
        var tambah2 = document.getElementById('tambah2');

        var skor1 = document.getElementById('skor1');
        var skor2 = document.getElementById('skor2');
        var skr1 = 1;
        var skr2 = 1;

        tambah1.addEventListener('click', function() {
            var xhr = new XMLHttpRequest();
            var hasil = skr1++;

            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    var skr1 = document.getElementById("skor1").innerHTML = hasil;
                    return skr1;
                }
            }


            xhr.open('post', '', true);
            xhr.send();
        });
        tambah2.addEventListener('click', function() {
            var xhr = new XMLHttpRequest();
            var hasil = skr2++;

            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    var skr2 = document.getElementById("skor2").innerHTML = hasil;
                    return skr2;
                }
            }

            xhr.open('post', '', true);
            xhr.send();
        });


        kurang1.addEventListener('click', function() {
            var xhr = new XMLHttpRequest();
            var hasil = skr1--;

            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    var skr1 = document.getElementById("skor1").innerHTML = hasil;
                    return skr1;
                }
            }

            xhr.open('post', '', true);
            xhr.send();
        });
        kurang2.addEventListener('click', function() {
            var xhr = new XMLHttpRequest();
            var hasil = skr2--;

            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    var skr2 = document.getElementById("skor2").innerHTML = hasil;
                    return skr2;
                }
            }

            xhr.open('post', '', true);
            xhr.send();
        });

        console.log(skor1);
        console.log(skor2);

        // tambah1.addEventListener('click', function() {
        // let skor1 = 0;
        // var xhr = new XMLHttpRequest();

        // xhr.onreadystatechange = function() {
        // if (xhr.readyState == 4 && xhr.status == 200) {
        // let hasil = skor1 + 1;
        // if (hasil <= 0) { // hasil=0; // } // console.log(hasil); // } // } // xhr.open('post', '' , true); // xhr.send(); // }); 
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>