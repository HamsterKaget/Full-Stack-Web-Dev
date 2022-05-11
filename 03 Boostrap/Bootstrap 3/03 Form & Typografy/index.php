<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Themplate</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

  </head>
  <body>

    <div class="container">
    <h1>h1 Bootstrap heading</h1>
    <h2>h2 Bootstrap heading</h2>
    <h3>h3 Bootstrap heading</h3>
    <h4>h4 Bootstrap heading</h4>
    <h5>h5 Bootstrap heading</h5>
    <h6>h6 Bootstrap heading</h6>
    </div>

    <hr>
    <h1>Kostumisasi Judul</h1>
    <p>Elemen HTML small digunakan untuk membuat text sekunder di dalam judul / heading.
    Biasanya digunakan untuk memberi keterangan lebih detail pada Judul tersebut.</p>

    <h1>
        Ini Judul Primer
    <small class="text-muted">Ini Judul Sekunder</small>
    </h1>
    <h2>
        Ini Judul Primer
    <small class="text-muted">Ini Judul Sekunder</small>
    </h2>
    <h3>
        Ini Judul Primer
    <small class="text-muted">Ini Judul Sekunder</small>
    </h3>

    <hr>
    <h1>Alignment Class</h1>
    <p>Digunakan untuk mengatur kesejajaran dari text, seperti mengatur text rata kanan, atau rata kiri dsb.</p>

    <p class="text-left">
    Text-left. Text-left. Text-left. Text-left. 
    </p>

    <p class="text-right">
    Text-right. Text-right. Text-right. Text-right. 
    </p>

    <p class="text-center">
    Text-center. Text-center. Text-center. Text-center. 
    </p>

    <p class="text-justify">
    Text-justify. Text-justify. Text-justify. Text-justify. 
    </p>

    <p class="text-nowrap">
    Text-nowrap. Text-nowrap. Text-nowrap. Text-nowrap. 
    </p>
    
    <hr>
    <h1>Lead</h1>
    <p>Lead Digunakan untuk membuat tampilan suatu paragraf menjadi lebih menonjol jika dibandingkan paragraf lain.</p>
    <br>
    <p>
    Bootstrap typography. Bootstrap typography. Bootstrap typography. Bootstrap     typography. Bootstrap typography. Bootstrap typography. Bootstrap typography.
    </p>
    <p class="lead">
    Bootstrap Lead. Bootstrap Lead. Bootstrap Lead. 
    </p>
    <p>
    Bootstrap typography. Bootstrap typography. Bootstrap typography. Bootstrap     typography. Bootstrap typography. Bootstrap typography. Bootstrap typography.
    </p>

    <hr>
    <h1>abbr</h1>
    <p>Digunakan untuk menandai dan menampilkan singkatan dari sebuah text. Ketika kursor diarahkan ke text, akan menampilkan keterangan dari singkatan tersebut.</p>

    <br>
    <p><abbr title="Cascading Style Sheets">CSS</abbr></p>
    <p><abbr title="HyperText Markup Language">HTML</abbr></p>

    <hr>
    <h1>Member warna dan warna latar</h1>
    <p>Bootstrap juga mempunyai class yang dapat digunakan untuk memberikan warna pada text ataupun memberikan warna latar pada text agar text tersebut memiliki makna khusus.
        Contoh text dengan warna latar hijau digunakan untuk memberi notifikasi sukses, text dengan warna latar merah digunakan untuk memberi notifikasi bahaya, dll.</p>

    <h2>Class warna latar</h2>
    <p>Class untuk memberi warna latar antara lain seperti di bawah ini. <br>
    .bg-primary, .bg-success, .bg-info, .bg-warning, dan .bg-danger</p>

    <br>
    <p class="bg-primary">bg-primary Untuk menandai bahwa ini adalah text penting.</p>
    <p class="bg-success">bg-succes Untuk menampilkan notifikasi sukses</p>
    <p class="bg-info">bg-info Untuk menandai text sebagai info.</p>
    <p class="bg-warning">bg-warning Untuk menandai bahwa ini adalah text peringatan.</p>
    <p class="bg-danger">bg-danger Untuk menandai bahawa ini adalah text bahaya.</p>

    <h2>Class warna Text</h2>
    <p>.text-muted, .text-primary, .text-success, .text-info, .text-warning, dan .text-danger</p>

    <hr>

    <h1>List</h1>
    <h3>.list-unstyled</h2>
    <p>Menghilangkan style / gaya default yang ada pada list dan menampilkan secara rata kiri.</p>

    <ul class="list-unstyled">
    <li>Database</li>
        <li>Pemrograman
        <ul>
            <li>PHP</li>
            <li>Java</li>
            <li>.NET</li>
        </ul>
        </li>
        <li>Desain</li>
    </ul>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  </body>
</html>