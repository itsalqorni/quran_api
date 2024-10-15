@extends('index')

@section('content')

<div class="py-2" id="home" style="margin-top: 140px ; margin-bottom: 20;">
    <div class="bg-dark">
        <div class="text-center font-weight-bold">
            <h2 class="about text-center" id="about" style="color: white;">Daftar Surah</h2>
        </div>
    </div>
</div>

<table class="table table-striped">
    <thead style="--bs-table-bg: purple ; --bs-table-color: white;">{{-- (background-color: purple; color: white)not working --}}
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama Surat</th>
        <th scope="col">Nama Latin</th>
        <th scope="col">Arti Idn</th>
        <th scope="col">Arti Eng</th>
        <th scope="col">Jumlah Ayat</th>
        <th scope="col">Tempat Turun</th>
        <th scope="col">Tipe</th>
        <th scope="col">Audio</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($response as $quran)
        <tr>
            <th scope="row">{{ $quran->number_of_surah}}</th>
            <td>{{ $quran->name_translations->ar}}<br>
                <a href="/quran/{{ $quran->number_of_surah}}">
                    <button class="btn btn-primary btn-sm btn-menu">Lihat Surah</button>
                </a>
            </td>
            <td>{{ $quran->name}}</td>
            <td>{{ $quran->name_translations->en}}</td>
            <td>{{ $quran->name_translations->id}}</td>
            <td>{{ $quran->number_of_ayah}}</td>
            <td>{{ $quran->place}}</td>
            <td>{{ $quran->type}}</td>
            <td>
                <figure>
                    <figcaption>Dengarkan Murottal</figcaption>
                <audio src="{{ $quran->recitation}}" controls></audio>
                </figure>
            </td>
        </tr>

      {{-- <tr>
        <th scope="row">2</th>
        <td>البقرة<br>
            <a href="">
                <button class="btn btn-primary btn-sm btn-menu">Lihat Surah</button>
            </a>
        </td>
        <td>Al-Baqarah</td>
        <td>Sapi Betina</td>
        <td>286 Ayat</td>
        <td>Madinah</td>
        <td>Madaniyah</td>
        <td>
            <figure>
                <figcaption>Dengarkan Murottal</figcaption>
                <audio src="#" controls></audio>
            </figure>
        </td>
      </tr> --}}
   
      
    </tbody>
    @endforeach
</table>

@endsection