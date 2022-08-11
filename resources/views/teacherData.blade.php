<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="resources/showdata.css"> -->
    <link href="{{ asset('css/aaa.css') }}" rel="stylesheet">
    <title>Show Data</title>


</head>

<body>






    <h1><span class="blue">&lt;</span>Table<span class="blue">&gt;</span> <span class="yellow">Responsive</pan>
    </h1>
    <h2>Created with love by <a href="https://github.com/pablorgarcia" target="_blank">Pablo García</a></h2>

    <table class="container">
        <!-- <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead> -->

        <tbody>

            <tr>
                @foreach($teacher as $item)
                <td>
                    <a href="{{ url('edit-student/'.$item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                </td>
                @endforeach
            </tr>

            <tr>
                @foreach($teacher as $item)
                <td>{{ $item->name }}</td>
                <!-- <td>
                    <a href="{{ url('edit-student/'.$item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                </td> -->
                <!-- <td>{{ $item->email }}</td> -->
                @endforeach
            </tr>
            <tr>
                @foreach($teacher as $item)
                <td>{{ $item->email }}</td>
                @endforeach
            </tr>


        </tbody>

    </table>
</body>

</html>