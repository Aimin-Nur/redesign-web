@include('layouts.header')
@include('admin.navbar')

<div class="page-wrapper">
    <div class="container mt-3">
        <div class="col-lg-12">
            <div class="row row-cards">
            <div class="col-12">
                <form class="card" action="/savePorto" method="POST" enctype="multipart/form-data">
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
                        <input name="field_judul" type="text" class="form-control" placeholder="Decision Making System, etc" value="Chet">
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
                    <div class="col-md-12">
                        <div class="mb-3 mb-0">
                            <label class="form-label">Deskripsi Portofolio</label>
                            <textarea name="field_deskripsi" id="editor" rows="5" class="form-control"></textarea>

                            <script>
                                ClassicEditor
                                    .create(document.querySelector('#editor'), {
                                        toolbar: {
                                            items: [
                                                'heading',
                                                '|',
                                                'bold',
                                                'italic',
                                                'underline',
                                                'outdent',
                                                '|',
                                                'link',
                                                'insertTable',
                                                'mediaEmbed',
                                                'blockquote',
                                                '|',
                                                'fontFamily',
                                                '|',
                                                'bulletedList',
                                                'numberedList',
                                                '|',
                                                'alignLeft',
                                                'alignCenter',
                                                'alignRight',
                                                'alignJustify',
                                                '|',
                                                'undo',
                                                'redo'
                                            ]
                                        },
                                        language: 'en'
                                    })
                                    .catch(error => {
                                        console.error(error);
                                    });
                            </script>

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

