<div>
<main>
  <div class="container-fluid py-4">
    @if ($is_create)
    @include('livewire.admin.event.create')
    @endif

    @if($is_update)
    @include('livewire.admin.event.update')
    @endif
    <div class="row">
      <div class="col-12">
        <div class="card mb-4 card-header pb-0">
          <div class="row">
            <div class="col-6 d-flex align-items-center">
              <h6 class="mb-0">Event</h6>
            </div>
            <div class="col-6 text-end">
              <button class="btn bg-gradient-dark mb-0" wire:click='create'><i class="fas fa-plus"
                  aria-hidden="true"></i> Buat Baru</button>
            </div>
          </div>
          <div class="card-body px-0 pt-0 pb-2">
            @if (session()->has('message'))
            <div class="mt-3 alert alert-primary alert-dismissible fade show" role="alert">
              <span class="alert-icon text-white"><i class="ni ni-like-2"></i></span>
              <span class="alert-text text-white">{!! session('message') !!}</span>
            </div>
            @endif
            @if ($this->message)
            <div class="mt-3 alert alert-primary alert-dismissible fade show" role="alert">
              <span class="alert-icon text-white"><i class="ni ni-like-2"></i></span>
              <span class="alert-text text-white">{!! $this->message !!}</span>
            </div>
            @endif

            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Judul</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                      Mulai-Berakhir</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>
                  </tr>
                </thead>
                <tbody>
                  @forelse ($event as $event)
                  <tr>
                    <td>
                      <div class="d-flex px-2 py-1">

                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm"><a href="">{{$event->title}}</a> </h6>
                        </div>
                      </div>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold">{{$event->start}} s.d {{$event->end}}</span>
                    </td>
                    <td>
                      <a href="{{route('detail-event', ['event' => $event->id])}}"
                        class="btn btn-secondary  font-weight-bold text-xs" target="_blank"><i class="fas fa-eye"></i>
                        Show</a>
                      <button wire:click='' class="btn btn-default font-weight-bold text-xs" data-toggle="tooltip"
                        data-original-title="">
                        <i class="far fa-edit"></i> Edit
                      </button>
                      <button wire:click='deleteId({{$event->id}})' class="btn btn-danger font-weight-bold text-xs" data-bs-toggle="modal" data-bs-target="#delete">
                        <i class="fas fa-trash-alt"></i> Hapus
                      </button>

                    </td>
                  </tr>
                  @empty
                  <tr>
                    <td colspan="4" class="text-center">
                      <h6 class="text-muted">Belum ada Event</h6>

                    </td>
                  </tr>
                  @endforelse
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

@push('style')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet" />
@endpush

@push('js')
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootbox@5.5.2/bootbox.all.min.js"></script>

<script>
  window.addEventListener("create", event => {
    $('#konten').summernote({
            placeholder: 'Mulai membuat event...',
            tabsize: 2,
            height: 350,
            toolbar: [
                // [groupName, [list of button]]
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']],
                ['insert', ['picture', 'link', 'video', 'table', 'hr']]
            ],
            dialogsInBody: true,
            dialogsFade: false,
            callbacks: {
                onChange: function(contents, $editable) {
                            @this.set('konten', contents);
                },
                onPaste: function(e){
                    var bufferText = ((e.originalEvent || e).clipboardData || window.clipboardData).getData('Text');
                    e.preventDefault();
                    document.execCommand('insertText', false, bufferText);
                }
            }
        });
    });       

</script>
@endpush


<div wire:ignore.self class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="deleteLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="deleteLabel">Konfirmasi Hapus Event</h5>
              <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                   <span aria-hidden="true close-btn">x</span>
              </button>
          </div>
         <div class="modal-body">
              <p>Apakah anda yakin akan menghapus event <strong>{{$judul}}</strong> ?</p>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary close-btn" data-bs-dismiss="modal">Tidak</button>
              <button type="button" wire:click.prevent="delete" class="btn btn-danger close-modal" data-bs-dismiss="modal">Ya</button>
          </div>
      </div>
  </div>
</div>
</div>