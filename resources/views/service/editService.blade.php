@include('layout.header')
<!--begin::App Wrapper-->
<div class="app-wrapper">
    <!--begin::Header-->
    @include('layout.navbar')
    <!--end::Header-->
    <!--begin::Sidebar-->
    @include('layout.sidebar')
    <!--end::Sidebar-->
    <!--begin::App Main-->
    <main class="app-main">
        <div class="app-content-header">
            <!--begin::Container-->
            <div class="container-fluid">
                <!--begin::Row-->
                <div class="row">
                    <div class="col-sm-6"><h3 class="mb-0">Service</h3></div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-end">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><a href="{{route('service.index')}}">Service</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit</li>
                        </ol>
                    </div>
                </div>
                <!--end::Row-->
            </div>
            <!--end::Container-->
        </div>
        <div class="app-content">
            <!--begin::Container-->
            <div class="container-fluid">
                <!--begin::Row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary card-outline mb-4">
                            <!--begin::Header-->
                            <div class="card-header">
                                <div class="card-title">Masukkan Data</div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Form-->
                            @foreach($data as $row)
                                <form class="needs-validation" action="{{ route('service.update', $id) }}" method="post" novalidate>
                                    <!--begin::Body-->
                                    @csrf
                                    <div class="card-body">
                                        <div class="row g-3">
                                            <div class="col-md-6">
                                                <label class="form-label">Keluhan</label>
                                                <input type="text" class="form-control" name="keluhan"
                                                    value="{{$row->keluhan}}" required
                                                />
                                                <div class="invalid-feedback">Tabel Tidak Boleh Kosong!</div>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Tanggal Masuk</label>
                                                <input type="text" class="form-control" name="tgl_masuk"
                                                    value="{{$row->tgl_masuk}}" required
                                                />
                                                <div class="invalid-feedback">Tabel Tidak Boleh Kosong!</div>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Tanggal Keluar</label>
                                                <input type="text" class="form-control" name="tgl_lahir"
                                                    value="{{$row->alamat}}" required
                                                />
                                                <div class="invalid-feedback">Tabel Tidak Boleh Kosong!</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Body-->
                                    <!--begin::Footer-->
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                    <!--end::Footer-->
                                </form>
                            @endforeach
                            <!--end::Form-->
                            <!--begin::JavaScript-->
                            <script>
                                // Example starter JavaScript for disabling form submissions if there are invalid fields
                                (() => {
                                'use strict';

                                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                                const forms = document.querySelectorAll('.needs-validation');

                                // Loop over them and prevent submission
                                Array.from(forms).forEach((form) => {
                                    form.addEventListener(
                                    'submit',
                                    (event) => {
                                        if (!form.checkValidity()) {
                                        event.preventDefault();
                                        event.stopPropagation();
                                        }

                                        form.classList.add('was-validated');
                                    },
                                    false,
                                    );
                                });
                                })();
                            </script>
                            <!--end::JavaScript-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!--end::App Main-->
    <!--begin::Footer-->
    @include('layout.bebas')
    <!--end::Footer-->
</div>
@include('layout.footer')