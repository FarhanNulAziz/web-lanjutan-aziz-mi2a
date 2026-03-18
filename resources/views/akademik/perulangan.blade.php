<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perulangan</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body>
     <div class="container">
        {{-- 
        <h2>Perulangan for</h2>
        <div class="col-md-6">
            @for ($i =0; $i < 5; $i++)
            Looping ke- {{$i }}<br/>
            @endfor
        <h2>Perulangan While</h2>
        <div class="col-md-6">
            <?php $i = 1; ?>
            @while ($i < 5)
                Looping ke- {{ $i }} <br/>
                <?php $i++; ?>
            @endwhile
        <h2>Perulangan Foreach</h2>
        <div class="col-md-6"> 
            <h4>Nama = {{ $nama  }}, Nim = {{ $nim }}</h4>
            Nilai = 
            @foreach ( $total_nilai as $nilai)
            <div class="alert alert-info d-inline-block"> {{ $nilai }} </div>
            @endforeach      
            

            <h2> Perulangan </h2>
            <div class="col-md-6">
                <h4>Nama = {{ $nama }}, Nim = {{ $nim }}</h4>
                Nilai =
                @forelse ( $total_nilai as $val )
                @if (($val >= 80) && ($val <= 50))
                <div class="alert alert-warning d-inline-block"> {{ $val }} </div>
                @elseif (($val >= 50) && ($val <=100))
                <div class="alert alert-success d-inline-block"> {{ $val }} </div>
                @endif
                @empty
                <div class="alert alert-danger d-inline-block"> Data Tidak Valid </div>
                @endforelse
--}}

            <h2>Perulangan Pake Break</h2>
            <h4>Nama = {{ $nama }}, Nim = {{ $nim }}</h4>
            Nilai =
            @foreach ($total_nilai as $nilai)
            @if ($nilai < 50 )
            @break
            @endif
            <div class="alert alert-danger d-inline-block">{{ $nilai }}</div>
            @endforeach
            
        </div>
    </div>
    
</body>
</html>