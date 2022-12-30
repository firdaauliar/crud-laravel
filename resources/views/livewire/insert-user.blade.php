<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <link
                                href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
                                rel="stylesheet"
                                integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
                                crossorigin="anonymous"
                            />
    <link href="/css/style.css" rel="stylesheet">

    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <main class="form-registration ">
                    <h1 class="h3 mb-3 text-center">Form Data</h1>
                    @if (session()->has('error'))    
                        <div class="alert alert-danger" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif
                    <div class="form-floating">
                        <input 
                        wire:model="username"
                        type="text" class="form-control rounded-top @error('username')
                        is-invalid
                        @enderror" id="username" name="username" placeholder="Username" required value="{{ old('username') }}">
                        <label for="username">Username</label>
                        @error('username')    
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                    <input
                    wire:model="hak_akses"
                    type="text" class="form-control @error('hak_akses')
                        is-invalid
                    @enderror" id="hakakses" name="hak_akses" placeholder="Hak akses" required value="{{ old('hak_akses') }}">
                    <label for="hak_akses">Hak Akses</label>
                    @error('name')    
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    </div>
                    <div class="form-floating">
                    <input
                    wire:model="password"
                    type="password" name="password" class="form-control rounded-bottom" id="password" placeholder="Password" required>
                    <label for="password">Password</label>
                    </div>
                    <button
                    wire:click="createUser"
                     class="d-flex ms-auto btn btn-primary mt-3">Submit</button>
                {{-- </form> --}}
                </main>
            </div>
        </div>
    </div>
<div class="container mt-4">
    <script
                                src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
                                integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
                                crossorigin="anonymous"
                            ></script>
</div>
