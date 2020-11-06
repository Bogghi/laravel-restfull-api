<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Get</title>
</head>
<body>
    <main>
        <section>
            @foreach ($books as $book)
                <ul>
                    @foreach ($book as $key => $value)
                        <li><strong>{{$key}}: </strong>{{$value}}</li>
                    @endforeach
                </ul>
            @endforeach
        </section>
    </main>
</body>
</html>