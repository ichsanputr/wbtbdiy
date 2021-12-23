<main>
    <div class="container-fluid py-4">
      @if ($is_create)
                      @include('livewire.admin.berita.create')
                  @endif
                  
                  @if($is_update)
                    @include('livewire.admin.berita.update')                   
                  @endif
        <div class="row">
            <div class="col-12">
              <div class="card mb-4">
                <div class="card-header pb-0">
                  <h6>Berita</h6>
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
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Konten</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tanggal Posting</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>
                        </tr>
                      </thead>
                      <tbody>
                        @forelse ($berita as $berita)
                        <tr>
                            <td>
                            <div class="d-flex px-2 py-1">
                              
                              <div class="d-flex flex-column justify-content-center">
                                <h6 class="mb-0 text-sm"><a href="">{{$berita->judul}}</a> </h6>
                              </div>
                            </div>
                            </td>
                            <td>
                                {!!substr(strip_tags($berita->konten, '<p>'),0,270)!!}...
                            </td> 
                            <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold">{{$berita->created_at}}</span>
                            </td>
                            <td>
                              <a href="{{route('detail-berita', ['berita' => $berita->id])}}" class="btn btn-secondary  font-weight-bold text-xs" target="_blank"><i class="fas fa-eye"></i> Show</a>
                              <button wire:click='' class="btn btn-default font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Approve Pengusulan">
                                <i class="far fa-edit"></i> Edit
                              </button>
                              <button wire:click='' class="btn btn-danger font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Approve Pengusulan">
                                <i class="fas fa-trash-alt"></i> Hapus
                              </button>
                            
                            </td>
                        </tr>
                        @empty
                        <tr>
                          <td colspan="4" class="text-center">
                            <h6 class="text-muted">Belum ada Berita</h6>
                            
                          </td>
                        </tr>
                        @endforelse
                        <tr>
                          <td colspan="4" class="text-center"><button class="btn bg-gradient-light btn-md mt-4 mb-4" wire:click='create'> Buat Baru</button></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </div>    
</main>

@if ($is_create || $is_update)
    
@endif
@push('style')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet"/>
@endpush

@push('js')
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<script>
  window.addEventListener("create", event => {
    $('#konten').summernote({
            placeholder: 'Mulai membuat berita...',
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