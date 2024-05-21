@extends('layouts.main')

@section('container')
    <div class="flex flex-col">

        <div class="max-w-[800px] overflow-hidden mx-auto my-[50px]">
            <div class="bg-white shadow-[0_0_10px_rgba(0,0,0,0.1)] rounded-[10px] p-5">
                <div class="flex">
                    <span class="material-symbols-outlined p-1">
                      calendar_today
                    </span>
                    <h3 class="text-2xl mb-2.5 font-bold">Database Mahasiswa</h3>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full table-auto border-gray-300">
                        <thead>
                            <tr>
                              <th class="text-left text-lg mb-[5px] py-2 px-4 border border-gray-300">NRP</th>
                              <th class="text-left text-lg mb-[5px] py-2 px-4 border border-gray-300">Nama</th>
                              <th class="text-left text-lg mb-[5px] py-2 px-4 border border-gray-300">GPA</th>
                              <th class="text-left text-lg mb-[5px] py-2 px-4 border border-gray-300">Semester</th>
                              <th class="text-left text-lg mb-[5px] py-2 px-4"></th>
                              <th class="text-left text-lg mb-[5px] py-2 px-4"></th>
                            </tr>
                          </thead>
                        <tbody>
                            @foreach ($mahasiswas as $mahasiswa)
                            <tr id="row-{{ $mahasiswa->id }}">
                                <td class="text-left text-lg mb-[5px] py-2 px-4 border border-gray-300" id="nrp-{{ $mahasiswa->id }}">{{ $mahasiswa->nrp }}</td>
                                <td class="text-lg mb-[5px] py-2 px-4 border border-gray-300" id="nama-{{ $mahasiswa->id }}">{{ $mahasiswa->nama }}</td>
                                <td class="text-lg mb-[5px] py-2 px-4 border border-gray-300" id="gpa-{{ $mahasiswa->id }}">{{ $mahasiswa->gpa }}</td>
                                <td class="text-lg mb-[5px] py-2 px-4 border border-gray-300" id="semester-{{ $mahasiswa->id }}">{{ $mahasiswa->semester }}</td>
                                <td class="text-lg mb-[5px] py-2 px-4">                    
                                    <span class="material-symbols-outlined p-1 cursor-pointer" onclick="editRow({{ $mahasiswa->id }})">
                                    edit
                                  </span>
                                </td>
                                <td class="text-lg mb-[5px] py-2 px-4">                    
                                    <span class="material-symbols-outlined p-1 cursor-pointer" onclick="deleteRow({{ $mahasiswa->id }})">
                                    delete
                                  </span>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="max-w-[800px] overflow-hidden mx-auto my-[50px]">
            <div class="bg-white shadow-[0_0_10px_rgba(0,0,0,0.1)] rounded-[10px] p-5">
                <div class="flex">
                    <span class="material-symbols-outlined p-1">
                      add
                    </span>
                    <h3 class="text-2xl mb-2.5 font-bold">Tambah mahasiswa baru</h3>
                </div>
                <div>
                    @if ($errors -> any())
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
                </div>
                <form action="{{ route('store') }}" method="post">
                    @csrf
                    @method('post')
                    <div>
                        <input type="text" name="nrp" placeholder="NRP">
                    </div>
                    <div>
                        <input type="text" name="nama" placeholder="Nama">
                    </div>
                    <div>
                        <input type="text" name="gpa" placeholder="GPA">
                    </div>
                    <div>
                        <input type="text" name="semester" placeholder="Semester">
                    </div>
                    <div>
                        <input type="submit" value="Tambah mahasiswa">
                    </div>
                </form>
            </div>
        </div>

    </div>

<script>
    function editRow(id) {
        const row = document.getElementById(`row-${id}`);
        const nrp = document.getElementById(`nrp-${id}`);
        const nama = document.getElementById(`nama-${id}`);
        const gpa = document.getElementById(`gpa-${id}`);
        const semester = document.getElementById(`semester-${id}`);

        nrp.innerHTML = `<input type="text" id="nrp-input-${id}" value="${nrp.innerText}">`;
        nama.innerHTML = `<input type="text" id="nama-input-${id}" value="${nama.innerText}">`;
        gpa.innerHTML = `<input type="text" id="gpa-input-${id}" value="${gpa.innerText}">`;
        semester.innerHTML = `<input type="text" id="semester-input-${id}" value="${semester.innerText}">`;

        row.innerHTML += `<td class="text-lg mb-[5px] py-2 px-4">
                                <button onclick="saveRow(${id})">Save</button>
                            </td>`;
    }

    function saveRow(id) {
        const row = document.getElementById(`row-${id}`);
        const nrp = document.getElementById(`nrp-input-${id}`).value;
        const nama = document.getElementById(`nama-input-${id}`).value;
        const gpa = document.getElementById(`gpa-input-${id}`).value;
        const semester = document.getElementById(`semester-input-${id}`).value;

        // Perform an AJAX request to update the data
        fetch(`/mahasiswa/${id}`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({
                nrp: nrp,
                nama: nama,
                gpa: gpa,
                semester: semester,
                _method: 'PUT'
            })
        }).then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Update the table row with the new data
                    document.getElementById(`nrp-${id}`).innerText = nrp;
                    document.getElementById(`nama-${id}`).innerText = nama;
                    document.getElementById(`gpa-${id}`).innerText = gpa;
                    document.getElementById(`semester-${id}`).innerText = semester;
                    // Remove the save button
                    row.removeChild(row.lastChild);
                } else {
                    // Handle the error
                    console.error(data.message);
                }
            }).catch(error => console.error('Error:', error));
    }

    function deleteRow(id) {
        if (confirm('Are you sure you want to delete this record?')) {
            fetch(`/mahasiswa/${id}`, {
                method: 'DELETE',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
            }).then(response => response.json())
                .then(data => {
                    if (data.success) {
                        // Remove the table row
                        document.getElementById(`row-${id}`).remove();
                    } else {
                        // Handle the error
                        console.error(data.message);
                    }
                }).catch(error => console.error('Error:', error));
        }
    }

</script>

@endsection
