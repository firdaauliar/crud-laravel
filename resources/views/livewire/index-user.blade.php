<div>
    <link
                                href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
                                rel="stylesheet"
                                integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
                                crossorigin="anonymous"
                            />


        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Username</th>
                    <th scope="col">Hak Akses</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @php $no = 1; @endphp 
                @foreach ($data as $row)
                <tr>
                    <th scope="row">{{ $no++ }}</th>
                    <td>{{ $row -> username  }}</td>
                    <td>{{ $row -> hak_akses }}</td>
                    <td>
                        <button
                            wire:click="updateUser({{ $row->id }})"
                            class="btn btn-primary"
                            >Edit</button
                        >
                        <button
                        
                            wire:click="deleteUser({{ $row->id }})"
                            class="btn btn-danger"
                            >Delete</button
                        >
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <script
                                    src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
                                    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
                                    crossorigin="anonymous"
                                ></script>
    </div>
    
</div>
