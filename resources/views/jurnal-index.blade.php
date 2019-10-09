<!DOCTYPE html>
<html>

<head>
    <title>Jurnal Index</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .table {
            margin: auto;
            width: 50% !important;
        }

        .color-me {
            color: black;
        }
    </style>
</head>

<body>
    <ul class="nav nav-tabs color-me">
        <li class="nav-item">
            <a class="nav-link color-me" href="/">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link color-me" href="/website">Website</a>
        </li>
        <li class="nav-item">
            <a class="nav-link color-me" href="/jurnal-data">Jurnal Data</a>
        </li>
        <li class="nav-item">
            <a class="nav-link color-me" href="/jurnal-index">Jurnal Index</a>
        </li>
        <li class="nav-item">
            <a class="nav-link color-me" href="/nav">Nav</a>
        </li>
        <li class="nav-item">
            <a class="nav-link color-me" href="/sinta-score">Sinta Score</a>
        </li>
        <li class="nav-item">
            <a class="nav-link color-me" href="/scopus-score">Scopus Score</a>
        </li>
    </ul>
    <br />
    <h1 class="text-center">Jurnal Index</h1>
    <br />
    <table class="table table-bordered text-center ">
        <thead class="thead-dark">
            <tr>
                <th>id</th>
                <th>Title</th>
            </tr>
            @foreach($allindex as $p)
            <tr>
                <td>{{ $p->id }}</td>
                <td>{{ $p->index_by }}</td>
            </tr>
            @endforeach
    </table>
    <br />
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>