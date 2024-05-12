@extends('layouts.main')

@section('container')
  <div class="grid lg:grid-cols-[auto_auto_auto] grid-cols-[auto]">

    <div class="max-w-[600px] bg-white overflow-hidden shadow-[0_0_10px_rgba(0,0,0,0.1)] lg:mr-0 mx-auto my-[50px] rounded-[10px] flex flex-col">
      <div class="flex justify-center">
        <img class="w-[200px] h-[200px] mt-5 rounded-[50%]" src="{{ asset('img/photo.png') }}" alt="Profile Picture">
      </div>
      <div class="p-5">
        <h1 class="text-2xl mb-2.5 font-bold">Christopher Joshua</h1>
        <p class="text-lg mb-[5px]">C14230260</p>
        <div class="flex">
          <span class="material-symbols-outlined py-1 pr-1">
            school
            </span>
            <p class="text-lg mb-[5px]">Data Science & Analytics</p>
          </div>
        <div class="flex">
          <span class="material-symbols-outlined py-1 pr-1">
            location_city
            </span>
          <p class="text-lg mb-[5px]">Surabaya, Indonesia</p>
        </div>
        <div class="flex">
          <span class="material-symbols-outlined py-1 pr-1">
            calendar_month
            </span>
          <p class="text-lg mb-[5px]">19 Years Old</p>
        </div>
        <div class="flex">
          <span class="material-symbols-outlined py-1 pr-1">
            history_edu
            </span>
          <p class="text-lg mb-[5px]">Currently student @ PCU</p>
        </div>
      </div>
    </div>


    <div class="lg:col-[2_/_4] max-w-[600px] mx-auto my-[50px] col-[1_/_2  ]">
      <div>
        <div class="bg-white overflow-hidden shadow-md lg:mx-auto mx-5 my-8 rounded-lg px-6 py-4 mt-0">
          <div class="flex">
            <span class="material-symbols-outlined p-1.5">
              info
            </span>
            <h3 class="text-2xl mb-2.5 font-bold">General Information</h3>
          </div>
          <div class="overflow-x-auto">
            <table class="w-full table-auto border border-gray-300">
              <tbody>
                <tr>
                  <th class="text-left text-lg mb-[5px] py-2 px-4 border border-gray-300"><p>Roll</p></th>
                  <td class="text-lg mb-[5px] py-2 px-4 border-b border-gray-300">125</td>
                </tr>
                <tr>
                  <th class="text-left text-lg mb-[5px] py-2 px-4 border border-gray-300">Academic Year</th>
                  <td class="text-lg mb-[5px] py-2 px-4 border-b border-gray-300">2023</td>
                </tr>
                <tr>
                  <th class="text-left text-lg mb-[5px] py-2 px-4 border border-gray-300">Gender</th>
                  <td class="text-lg mb-[5px] py-2 px-4 border-b border-gray-300">Male</td>
                </tr>
                <tr>
                  <th class="text-left text-lg mb-[5px] py-2 px-4 border border-gray-300">Religion</th>
                  <td class="text-lg mb-[5px] py-2 px-4 border-b border-gray-300">Christian</td>
                </tr>
                <tr>
                  <th class="text-left text-lg mb-[5px] py-2 px-4 border border-gray-300">Blood</th>
                  <td class="text-lg mb-[5px] py-2 px-4 border-b border-gray-300">O</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <div class="max-w-[600px] bg-white overflow-hidden shadow-md lg:mx-auto mx-5 my-8 rounded-lg px-6 py-4">
          <div class="flex">
            <span class="material-symbols-outlined p-1.5">
              info
            </span>
            <h3 class="text-2xl mb-2.5 font-bold">Other Information</h3>
          </div>
          <p class="text-lg mb-[5px]">Hi! My name is Christopher and I like to sleep. Also breathing is fun.</p>
        </div>
      </div>
    </div>

    <div class="lg:col-[1_/_4] col-[1_/_2] mx-auto">
      <div class="lg:max-w-[1200px] bg-white overflow-hidden shadow-[0_0_10px_rgba(0,0,0,0.1)] lg:mx-auto mx-5 my-8 rounded-lg px-6 py-4 flex flex-col flex-wrap">
        <div class="flex">
          <span class="material-symbols-outlined py-1 pr-1">
            public
          </span>
          <p class="text-lg mb-[5px]">My youtube channel :D </p>
        </div>
          <div class="grid lg:grid-cols-[auto_auto_auto] md:grid-cols-[auto_auto]">
              <iframe class="latestVideoEmbed" vnum='0' cid="UC4ZIYVSrF-OFJ-9uqbeHSzA" allowfullscreen></iframe>
              <iframe class="latestVideoEmbed" vnum='1' cid="UC4ZIYVSrF-OFJ-9uqbeHSzA" allowfullscreen></iframe>
              <iframe class="latestVideoEmbed" vnum='2' cid="UC4ZIYVSrF-OFJ-9uqbeHSzA" allowfullscreen></iframe>
              <iframe class="latestVideoEmbed" vnum='3' cid="UC4ZIYVSrF-OFJ-9uqbeHSzA" allowfullscreen></iframe>
              <iframe class="latestVideoEmbed" vnum='4' cid="UC4ZIYVSrF-OFJ-9uqbeHSzA" allowfullscreen></iframe>
              <iframe class="latestVideoEmbed" vnum='5' cid="UC4ZIYVSrF-OFJ-9uqbeHSzA" allowfullscreen></iframe>
          </div>
      </div>
  </div>

  </div>
    
  </div>
  <script src="{{ asset('js/youtube.js') }}"></script>
  <script src="{{ asset('js/image-zoom.js') }}"></script>
@endsection

