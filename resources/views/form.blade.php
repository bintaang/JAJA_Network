<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/CSS/form.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,100..900;1,9..144,100..900&family=Special+Gothic+Condensed+One&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playwrite+RO:wght@100..400&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Buenard:wght@400..700&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Golos+Text:wght@400..900&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Doto:wght@100..900&family=Jersey+10&display=swap" rel="stylesheet">
</head>
<body>

<!-- Error handling for validation -->
@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<!-- Success & Error Message Flash -->
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

<!-- Form -->
<h1 class="h">Input New Data</h1> 



<form action="{{ url('siswa', @$siswa->id) }}" method="POST" class="form">
    @csrf

    @if(!empty($siswa->id))
        
        @method('PATCH')
    @endif

    <div id="name-std">
    <label for="name">Students Name:</label>
    <input type="text" name="NamaSiswa" id="nStudent" placeholder="Enter Student Name" value="{{ old('NamaSiswa', @$siswa->NamaSiswa) }}"> <br>
    <label for="NISN">Student ID:</label>
    <input type="text" name="NISN" id="nStudentID" placeholder="Enter Student ID" value="{{ old('NISN', @$siswa->NISN) }}"> <br>
    </div>
    
    
    <div id="major-std">
    <label for="jurusan">Major:</label>
    <select name="jurusan" id="jurusan">
        <option value="">Choose Your Major</option>
        @foreach ($jurusan as $data)
        <option value="{{ $data->id }}" {{ (old("jurusan", @$siswa->Jurusan) == $data->id) ? 'selected' : '' }}>{{$data->Jurusan}}</option>
        @endforeach
    </select> <br> 

    <label for="kelas">Class:</label>
    <select name="kelas" id="kelas">
        <option value="">Choose Your Class</option>
        @foreach ($kelas as $data)
            <option value="{{ $data->id }}" {{ old('kelas') == $data->id ? 'selected' : '' }}>
                {{ $data->Kelas }}
            </option>
        @endforeach
    </select> <br>
    </div>
    
    <div>
    <label for="gedung">Class Building:</label>
    <select name="gedung" id="gedung">
        <option value="">Choose Your Building</option>
        @foreach ($gedung as $data)
            <option value="{{ $data->id }}" {{ old('gedung') == $data->id ? 'selected' : '' }}>
                {{ $data->Gedung }}
            </option>
        @endforeach
    </select> <br>
    </div>
    
    <div>
    <label for="WaliKelas">Home Teacher:</label>
        <select name="walikelas" id="WK">
            @foreach($walikelas as $data)
            <option value="{{$data->id}}">{{$data->WaliKelas}}</option>
            @endforeach
        </select>
    </div>
    
    <div>
    <input type="submit" value="Submit" class="btn btn-primary"><br>
    </div>
    
</form>

</body>
</html>
