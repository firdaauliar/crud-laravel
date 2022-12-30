<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Data Mahasiswa') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <!DOCTYPE html>
                    <html lang="en">
                        <head>
                            <meta charset="utf-8" />
                            <meta
                                name="viewport"
                                content="width=device-width, initial-scale=1"
                            />
                            <title>CRUD Laravel</title>
                            <link
                                href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
                                rel="stylesheet"
                                integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
                                crossorigin="anonymous"
                            />
                        </head>
                        <body>
                            <div class="container">
                                <a href="/tambahdata" class="btn btn-success"
                                    >Tambah +</a
                                >
                                <a href="/exportpdf" class="btn btn-info"
                                    >Export PDF</a
                                >
                                <div class="row">
                                    @if ($message = Session::get('success'))
                                    <div
                                        class="alert alert-success mt-1"
                                        role="alert"
                                    >
                                        {{ $message }}
                                    </div>
                                    @endif
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Nama</th>
                                                <th scope="col">Mata Kuliah</th>
                                                <th scope="col">Nilai</th>
                                                <th scope="col">Indeks</th>
                                                <th scope="col">file pdf</th>
                                                <th scope="col">dibuat</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php $no = 1; @endphp @foreach
                                            ($data as $row)
                                            <tr>
                                                <th scope="row">{{ $no++ }}</th>
                                                <td>{{ $row -> nama }}</td>
                                                <td>
                                                    {{ $row -> matakuliah }}
                                                </td>
                                                <td>{{ $row -> nilai }}</td>
                                                <td>{{ $row -> indeks }}</td>
                                                <td>
                                                    <a
                                                        href="upload-file/{{ $row->uploadfile }}"
                                                        target="_blank"
                                                        >{{ $row->uploadfile
                                                        }}</a
                                                    >
                                                </td>
                                                <td></td>
                                                <td>
                                                    {{ $row ->
                                                    created_at->diffForHumans()}}
                                                </td>
                                                <td>
                                                    <a
                                                        href="/tampildataid/{{ $row->id }}"
                                                        class="btn btn-primary"
                                                        >Edit</a
                                                    >
                                                    <a
                                                        href="/deletedata/{{ $row->id }}"
                                                        class="btn btn-danger"
                                                        >Delete</a
                                                    >
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <script
                                src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
                                integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
                                crossorigin="anonymous"
                            ></script>
                        </body>
                    </html>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
