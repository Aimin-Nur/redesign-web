@include('layouts.header')
@include('users.navbar')

<div class="page-wrapper">
    <div class="container mt-3">
        <div class="col-lg-12">
            <div class="row row-cards">
            <div class="col-12">
                <form class="card" action="/savePortoByUser" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="card-body">
                    <h3 class="card-title">Tambah Portofolio</h3>
                    <div class="row row-cards">
                    <div class="col-md-12">
                        <div class="mb-3">
                        <label class="form-label">Foto Portofolio</label>
                        <input name="field_foto" type="file" class="form-control" placeholder="Company"
                                        value="Creative Code Inc.">
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="mb-3">
                        <label class="form-label">Judul Portofolio</label>
                        <input name="field_judul" type="text" class="form-control" placeholder="Decision Making System, etc">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                        <label class="form-label">Status</label>
                        <select name="field_status" class="form-control form-select">
                            <option value="">Pilih Status</option>
                            <option value="Publish">Publish</option>
                            <option value="Draf">Draf</option>
                        </select>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="card-footer text-end">
                    <button type="submit" class="btn btn-success">Simpan Artikel</button>
                </div>
                </form>
            </div>
            </div>
        </div>
    </div>



@include('layouts.footer')
@include('layouts.script')

