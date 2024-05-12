@extends('layouts.main')

@section('container')
    <div class="grid lg:grid-cols-[auto_auto_auto] md:grid-cols-[auto_auto]">

        <div class="max-w-[600px] overflow-hidden mx-auto my-[50px]">
            <div class="bg-white shadow-[0_0_10px_rgba(0,0,0,0.1)] rounded-[10px] p-5">
                <div class="flex">
                    <span class="material-symbols-outlined p-1">
                      calendar_today
                    </span>
                    <h3 class="text-2xl mb-2.5 font-bold">Monday</h3>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full table-auto border border-gray-300">
                        <tbody>
                            <tr>
                                <th class="text-left text-lg mb-[5px] py-2 px-4 border border-gray-300"><p>08:30 - 10:30</p></th>
                                <td class="text-lg mb-[5px] py-2 px-4 border-b border-gray-300">PBO</td>
                            </tr>
                            <tr>
                                <th class="text-left text-lg mb-[5px] py-2 px-4 border border-gray-300">10:30 - 13:00</th>
                                <td class="text-lg mb-[5px] py-2 px-4 border-b border-gray-300">Istirahat</td>
                            </tr>
                            <tr>
                                <th class="text-left text-lg mb-[5px] py-2 px-4 border border-gray-300">13:00 - 16:00</th>
                                <td class="text-lg mb-[5px] py-2 px-4 border-b border-gray-300">Jarkom</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="max-w-[600px] overflow-hidden mx-auto my-[50px]">
            <div class="bg-white shadow-[0_0_10px_rgba(0,0,0,0.1)] rounded-[10px] p-5">
                <div class="flex">
                    <span class="material-symbols-outlined p-1">
                      calendar_today
                    </span>
                    <h3 class="text-2xl mb-2.5 font-bold">Tuesday</h3>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full table-auto border border-gray-300">
                        <tbody>
                            <tr>
                                <th class="text-left text-lg mb-[5px] py-2 px-4 border border-gray-300"><p>08:30 - 10:30</p></th>
                                <td class="text-lg mb-[5px] py-2 px-4 border-b border-gray-300">BD</td>
                            </tr>
                            <tr>
                                <th class="text-left text-lg mb-[5px] py-2 px-4 border border-gray-300">10:30 - 13:30</th>
                                <td class="text-lg mb-[5px] py-2 px-4 border-b border-gray-300">Istirahat</td>
                            </tr>
                            <tr>
                                <th class="text-left text-lg mb-[5px] py-2 px-4 border border-gray-300">13:30 - 15:30</th>
                                <td class="text-lg mb-[5px] py-2 px-4 border-b border-gray-300">Statdas</td>
                            </tr>
                            <tr>
                                <th class="text-left text-lg mb-[5px] py-2 px-4 border border-gray-300">15:30 - 16:30</th>
                                <td class="text-lg mb-[5px] py-2 px-4 border-b border-gray-300">Istirahat</td>
                            </tr>
                            <tr>
                                <th class="text-left text-lg mb-[5px] py-2 px-4 border border-gray-300">16:30 - 19:30</th>
                                <td class="text-lg mb-[5px] py-2 px-4 border-b border-gray-300">Matdis</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="max-w-[600px] overflow-hidden mx-auto my-[50px]">
            <div class="bg-white shadow-[0_0_10px_rgba(0,0,0,0.1)] rounded-[10px] p-5">
                <div class="flex">
                    <span class="material-symbols-outlined p-1">
                      calendar_today
                    </span>
                    <h3 class="text-2xl mb-2.5 font-bold">Wednesday</h3>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full table-auto border border-gray-300">
                        <tbody>
                            <tr>
                                <th class="text-left text-lg mb-[5px] py-2 px-4 border border-gray-300"><p>09:30 - 11:30</p></th>
                                <td class="text-lg mb-[5px] py-2 px-4 border-b border-gray-300">Pancasila</td>
                            </tr>
                            <tr>
                                <th class="text-left text-lg mb-[5px] py-2 px-4 border border-gray-300">11:30 - 13:30</th>
                                <td class="text-lg mb-[5px] py-2 px-4 border-b border-gray-300">Istirahat</td>
                            </tr>
                            <tr>
                                <th class="text-left text-lg mb-[5px] py-2 px-4 border border-gray-300">13:30 - 16:30</th>
                                <td class="text-lg mb-[5px] py-2 px-4 border-b border-gray-300">Komal</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="max-w-[600px] overflow-hidden mx-auto my-[50px]">
            <div class="bg-white shadow-[0_0_10px_rgba(0,0,0,0.1)] rounded-[10px] p-5">
                <div class="flex">
                    <span class="material-symbols-outlined p-1">
                      calendar_today
                    </span>
                    <h3 class="text-2xl mb-2.5 font-bold">Thursday</h3>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full table-auto border border-gray-300">
                        <tbody>
                            <tr>
                                <th class="text-left text-lg mb-[5px] py-2 px-4 border border-gray-300"><p>07:30 - 10:30</p></th>
                                <td class="text-lg mb-[5px] py-2 px-4 border-b border-gray-300">Prak PBO</td>
                            </tr>
                            <tr>
                                <th class="text-left text-lg mb-[5px] py-2 px-4 border border-gray-300">10:30 - 13:30</th>
                                <td class="text-lg mb-[5px] py-2 px-4 border-b border-gray-300">Istirahat</td>
                            </tr>
                            <tr>
                                <th class="text-left text-lg mb-[5px] py-2 px-4 border border-gray-300">13:30 - 16:30</th>
                                <td class="text-lg mb-[5px] py-2 px-4 border-b border-gray-300">Prak BD</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="max-w-[600px] overflow-hidden mx-auto my-[50px]">
            <div class="bg-white shadow-[0_0_10px_rgba(0,0,0,0.1)] rounded-[10px] p-5">
                <div class="flex">
                    <span class="material-symbols-outlined p-1">
                      calendar_today
                    </span>
                    <h3 class="text-2xl mb-2.5 font-bold">Friday</h3>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full table-auto border border-gray-300">
                        <tbody>
                            <tr>
                                <th class="text-left text-lg mb-[5px] py-2 px-4 border border-gray-300"><p>07:30 - 10:30</p></th>
                                <td class="text-lg mb-[5px] py-2 px-4 border-b border-gray-300">Prak Statdas</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="max-w-[600px] overflow-hidden mx-auto my-[50px]">
            <div class="bg-white shadow-[0_0_10px_rgba(0,0,0,0.1)] rounded-[10px] p-5">
                <div class="flex">
                    <span class="material-symbols-outlined p-1">
                      calendar_today
                    </span>
                    <h3 class="text-2xl mb-2.5 font-bold">Saturday</h3>
                </div>
                <div class="overflow-x-auto">
                    <p class="text-lg mb-[5px] py-2 px-4">No classes today :)</p>
                </div>
            </div>
        </div>

    </div>
@endsection
