<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            margin: 20px;
        }

        h1 {
            color: #333;
        }

        h2 {
            color: #555;
        }

        p {
            margin-bottom: 15px;
        }

        .section {
            margin-bottom: 30px;
        }

        .section h2 {
            border-bottom: 2px solid #333;
            padding-bottom: 5px;
            margin-bottom: 10px;
        }

        .section p {
            margin-bottom: 10px;
        }
        img {
            max-width: 100%;
            height: auto;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>

    <h1>{{ $profile->user->name }} - Curriculum Vitae</h1>


    <!-- Personal Information Section -->
    <div class="section">
        <h2>Personal Information</h2>
        <p><strong>Phone:</strong> {{ $profile->phone }}</p>
        <p><strong>Address:</strong> {{ $profile->address }}</p>
        <p><strong>Gender:</strong> {{ $profile->user->email }}</p>
        <p><strong>Birth Date:</strong> {{ $profile->birth_date}}</p>
        <p><strong>Gender:</strong> {{ $profile->gender }}</p>

    </div>

    <!-- Education Section -->
    <div class="section">
        <h2>Education</h2>
        <p>{{ $profile->education }}</p>
    </div>

    <!-- Experience Section -->
    <div class="section">
        <h2>Experience</h2>
        <p>{{ $profile->experience }}</p>
    </div>

    <!-- Skills Section -->
    <div class="section">
        <h2>Skills</h2>
        <p>{{ $profile->skills }}</p>
    </div>

    <!-- Certifications Section -->
    <div class="section">
        <h2>Certifications</h2>
        <p>{{ $profile->certification }}</p>
    </div>

    <!-- Language Section -->
    <div class="section">
        <h2>Language Proficiency</h2>
        <p>{{ $profile->language }}</p>
    </div>

    <!-- Courses Section -->
    <div class="section">
        <h2>Courses</h2>
        <p>{{ $profile->courses }}</p>
    </div>

    <!-- Other Sections... -->

</body>

</html>
