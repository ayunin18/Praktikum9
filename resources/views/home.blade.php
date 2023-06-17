@extends('layouts.app')

@section('content')

     <!-- Jumbotron-->
     <section class="jumbotron text-center" width="100">
     @vite('resources/sass/app.scss')
     @vite('resources/sass/_style.scss')
        <img src="{{asset('image/Ais.png')}}" alt="AIS AYUNI NUR" width="200" class="rounded-circle img-thumbnail" />
        <h1 class="display-6" style="padding-top: 15px; color: #ffffff;"></style>AIS AYUNI NUR ROFI'AH</h1>
        <p class="lead" style="color: #ffffff;">Mahasiswa | Sistem Informasi ITTS 2020</p>


        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
          <path
            fill="#ffffff"
            fill-opacity="1"
            d="M0,96L60,96C120,96,240,96,360,112C480,128,600,160,720,181.3C840,203,960,213,1080,197.3C1200,181,1320,139,1380,117.3L1440,96L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"
          ></path>
        </svg>
      </section>

      <!-- End Jumbotron-->

      <!-- About Me -->
      <section id="about">
        <div class="container">
          <div class="row text-center mb-2">
            <div class="col">
              <h3 style="padding-bottom: 20px; color: #008b8b;">TENTANG SAYA</h3>
            </div>
          </div>
          <div class="row">
              <div class="col-md-4 mb-4">
                  <img src="{{asset('image/Ais1.png')}}" alt="AIS AYUNI NUR" width="250" class=" img-thumbnail" />
              </div>

            <div class="col">
              <p>Hello! saya Ais Ayuni Nur Rofi'ah. Saya adalah orang yang mudah berbaur dengan banyak orang. Sejak masuk di bangku kuliah saya punya mimpi nanti nya untuk menjadi seorang system analyst atau business analyst.</p>
              <hr>
              <P><b>Nama Panggilan    : </b> Ais</P>
              <p><b>Program Studi     : </b> S1 Sistem Informasi | Fakultas Teknologi Informasi dan Bisnis</p>
              <p><b>No Telepon        : </b> 085731531181</p>
              <p><b>Alamat            : </b> Jombang</p>
              <p><b>Tempat,Tgl Lahir  : </b> Jombang, 18 Mei 2002</p>
              <p><b>Email             : </b> aisayuni4@gmail.com</p>
              <p><b>Hobi              : </b> Menari</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End About Me -->
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#008b8b" fill-opacity="0.8" d="M0,96L60,112C120,128,240,160,360,170.7C480,181,600,171,720,181.3C840,192,960,224,1080,213.3C1200,203,1320,149,1380,122.7L1440,96L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>


      <!-- Education dan Pengalaman Organisasi -->
      <section id="pendidikan">
          <div class="container">
            <div class="row text-center mb-6">
              <div class="col">
                <h3 style="padding-bottom: 20px; color: #008b8b;">PENDIDIKAN & PENGALAMAN</h3>
              </div>
            </div>

            <div class="row justify-content-center">

                <div class="col-md-4 mb-4">
                    <h4>Pendidikan</h4>
                    <br>
                    2020 - Now
                    <p><b>Institut Teknologi Telkom Surabaya</b></p>

                    2017 - 2020
                    <p><b>SMAN BandarKedungMulyo</b></p>

                    2014 - 2017
                    <p><b>SMP Negeri 1 Perak</b></p>

                    2008 - 2014
                    <p><b>TK Dharma Wanita</b></p>
                </div>

              <div class="col-md-4 mb-4">
                  <h4>Pengalaman & Organisasi</h4>
                    <br>
                    IT Telkom Surabaya | 2020 - Now
                    <p><b>Departement Syiar UKKI Al-Habsy ITTelkom Surabaya</b></p>

                    IT Telkom Surabaya | 2021
                    <p><b>Badan Eksekutif Mahasiswa</b></p>

                    IT Telkom Surabaya | 2021 - Now
                    <p><b>Tim Protokoler Generasi 2.0 ITTelkom Surabaya</b></p>

                    IT Telkom Surabaya | 2021
                    <p><b>Marketing Digital Team</b></p>

                    IT Telkom Surabaya | 2022
                    <p><b>Narasumber di Himpunan Sistem Informasi ITTelkom Surabaya</b></p>
                </div>

                <div class="col-md-4 mb-4">
                  <h4>Skills</h4>
                  <p>Microsoft</p>
                  <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">90%</div>
                  </div>
                  <br>
                  <p>System Analyst</p>
                  <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 88%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">88%</div>
                  </div>
              </div>
              </div>
            </div>
          </div>
          

        </section>

      <!-- End -->
@vite('resources/js/app.js')
@endsection

