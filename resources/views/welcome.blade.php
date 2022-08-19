<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TODO</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        h1 {
            font-size: 1.5em;
            font-weight: 700;
            color: #fff;
        }

        label {
            color: #fff;
        }

        p {
            color: #fff;
        }

        .list {
            display: flex;
            align-items: center;
        }
    </style>
</head>

<body class="antialiased">
    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        <div>
            <h1>TODO LIST</h1>

            @foreach ($listItems as $listItem)
                <div class="list">
                    <p style=" padding-right: 50px">Item: {{ $listItem->name }}</p>
                    <form method="POST" action="{{ route('markComplete', $listItem->id) }}">
                        {{ csrf_field() }}
                        <button type="submit" style="max-height: 25px; margin-left: 20px">Mark as Done</button>
                    </form>
                </div>
            @endforeach

            <form action="{{ route('saveItem') }}" method="post">
                {{ csrf_field() }}
                <label for="listItem">New TODO Item</label> <br>
                <input type="text" name="listItem">
                <button>Save</button>

            </form>
        </div>
    </div>
</body>

</html>
