@include('layouts.header')
@include('users.navbar')

<div class="page-wrapper">
    <div class="container mt-3">
        <div class="col-lg-12">
            <div class="row row-cards">
            <div class="col-12">
                <form class="card" action="/sendEditKarirByUser/{{$getId->id}}" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="card-body">
                    <h3 class="card-title">Edit Karir</h3>
                    <div class="row row-cards">
                    <div class="col-md-12">
                        <div class="mb-3">
                        <label class="form-label">Foto Karir</label>
                        <input name="field_foto" type="file" class="form-control" placeholder="Company"
                        /required>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="mb-3">
                        <label class="form-label">Judul Karir</label>
                        <input name="field_judul" type="text" class="form-control" value="{{ old('field_judul', $getId->judul) }}">
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
                            <label class="form-label">Artikel</label>
                            <textarea name="field_isi" id="editor" value="{{ old('field_isi', $getId->isi) }}" rows="5" class="form-control"></textarea>
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
                    <button type="submit" class="btn btn-success">Edit Artikel</button>
                </div>
                </form>
            </div>
            </div>
        </div>
    </div>



@include('layouts.footer')
@include('layouts.script')

