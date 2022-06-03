@extends('homepage.layouts.app')

@section('title')
Beranda
@endsection

@section('content')

<section id="about_middle">
    <div class="container">
        <div class="row">
            <div class="about_middle clearfix ">
                <div class="row">
                    <div class="col-lg-6">
                        <h1>UPTD Museum Negeri Mulawarman</h1>
                        <p style="text-align: justify; font-size: large; margin-top: 20px">UPTD Museum Negeri Mulawarman Provinsi Kalimantan Timur merupakan objek wisata budaya yang bermuatan Ilmu Pengetahuan, Sejarah Budaya Kerajaan Kutai Kartanegara
                            dan Kalimantan Timur. Memiliki tugas mengumpulkan, meneliti dan mengelola koleksi sejarah, budaya dan sejarah alam. Serta memberikan bimbingan edukatif kultural dalam hal pengenalan 
                            kolekso kepada masyarakat dan pelajar.
                        </p>
                        <p style="font-size: 24pt; "><a href="" style="color: black;">> Informasi Kunjungan</a></p>
                    </div>
                    <div class="col-lg-6"><img src="{{ asset('_homepage/img/lembuswana.png') }}" height="80%" width="80%"> </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection