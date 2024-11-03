<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $resume->name }}'s Resume</title>
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
</head>
<body>
    <header>
        <h1>{{ $resume->name }}</h1>
        <p>{{ $resume->title }}</p>
    </header>
    <section id="about">
        <h2>About Me</h2>
        <p>{{ $resume->about_me }}</p>
    </section>
    <section id="hobbies">
        <h2>Hobbies</h2>
        <ul>
            @foreach (json_decode($resume->hobbies) as $hobby)
                <li>{{ $hobby }}</li>
            @endforeach
        </ul>
    </section>
    <section id="education">
        <h2>Education</h2>
        <ul>
            @foreach (json_decode($resume->education) as $edu)
                <li>{{ $edu }}</li>
            @endforeach
        </ul>
    </section>
    <footer>
        <h2>Email Address & Contact</h2>
        <p>Email: {{ $resume->email }}</p>
        <p>Contact Number: {{ $resume->contact_number }}</p>
    </footer>
</body>
</html>
