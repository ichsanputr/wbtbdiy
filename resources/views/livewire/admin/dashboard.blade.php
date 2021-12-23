<main>  
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Pengusulan</p>
                    <h5 class="font-weight-bolder mb-0">
                      75
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                    <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Pencatatan</p>
                    <h5 class="font-weight-bolder mb-0">
                      2,300
                      <!-- <span class="text-success text-sm font-weight-bolder">+3%</span> -->
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                    <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">User</p>
                    <h5 class="font-weight-bolder mb-0">
                      12
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                    <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Berita</p>
                    <h5 class="font-weight-bolder mb-0">
                      8
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                    <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-4">
        @if (session()->has('message'))
        <div class="col-12">
              <div class="mt-3 alert alert-primary alert-dismissible fade show" role="alert">
                  <span class="alert-icon text-white"><i class="ni ni-like-2"></i></span>
                  <span class="alert-text text-white">{!! session('message') !!}</span>
              </div>
        </div>  
        @endif

        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6 class="mb-0">Verifikasi Pengusulan</h6>
              <p class="text-sm mb-0">Permohonan Verifikasi Pengusulan WBTb</p>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Judul</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Domain</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Lokasi-Kondisi</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tanggal Pengajuan</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($warisan_budaya as $warisan_budaya)
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm"><a href="">{{$warisan_budaya->judul}}</a> </h6>
                            <p class="text-xs text-secondary mb-0">oleh {{$warisan_budaya->user->name}}</p>
                          </div>
                        </div>
                      </td>
                      <td>
                          {{$warisan_budaya->domain}}
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">{{$warisan_budaya->lokasi}}</p>
                        <p class="text-xs text-secondary mb-0">{{$warisan_budaya->kondisi}}</p>
                      </td>

                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{$warisan_budaya->created_at}}</span>
                      </td>
                      <td>
                          <a href="{{route('preview', ['id' => $warisan_budaya->id])}}" class="btn btn-secondary  font-weight-bold text-xs" target="_blank"><i class="fas fa-eye"></i> Preview</a>
                      
                        <button wire:click='approve({{$warisan_budaya->id}})' class="btn btn-success font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Approve Pengusulan">
                            <i class="far fa-check-circle"></i> Approve
                        </button>
                      </td>
                    </tr>
                    @empty
                    <tr>
                      <td colspan="5" class="text-center">
                        <h6 class="text-muted">Belum ada permohonan verifikasi pengusulan</h6>
                        {{-- <a class="btn bg-gradient-light btn-md mt-4 mb-4" href="{{ url("/admin/pengusulan") }}"> Cek Warisan Budaya yg telah diverifikasi</a> --}}
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
      <div class="row mt-4">
        <div class="col-lg-12">
          <div class="card card-body mb-4">
            <h6 class="mb-0">Pencatatan Baru</h6>
            <p class="text-sm mb-0">Buat Pencatatan WBTb</p>
            <hr class="horizontal dark my-3">
                <form wire:submit.prevent="save" method="POST" role="form text-left">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="judul" class="form-control-label">{{ __('Judul Warisan Budaya') }}</label>
                                <div class="@error('judul')border border-danger rounded-3 @enderror">
                                    <input wire:model='judul' class="form-control" type="text" placeholder="Judul"
                                        id="judul">
                                </div>
                                @error('judul') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="lokasi" class="form-control-label">{{ __('Lokasi') }}</label>
                                <div class="@error('lokasi')border border-danger rounded-3 @enderror">
                                    <input wire:model='lokasi' class="form-control" type="text"
                                        placeholder="Lokasi" id="lokasi">
                                </div>
                                @error('lokasi') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                          <div class="form-group">
                              <label for="pelaku" class="form-control-label">{{ __('Pelaku Warisan Budaya') }}</label>
                              <div class="@error('pelaku')border border-danger rounded-3 @enderror">
                                  <input wire:model='pelaku' class="form-control" type="text"
                                      placeholder="Pelaku Warisan Budaya" id="pelaku">
                              </div>
                              @error('pelaku') <div class="text-danger">{{ $message }}</div> @enderror
                          </div>
                      </div>
                      <div class="col-md-3">
                          <div class="form-group">
                              <label for="domain" class="form-control-label">{{ __('Domain Warisan Budaya') }}</label>
                              <div class="@error('domain') border border-danger rounded-3 @enderror">
                                  <select name="domain" required wire:model='domain' id="domain" class="form-control">
                                        <option>--pilih--</option>  
                                    <optgroup label="Tradisi dan Ekspresi Lisan">
                                        <option value="Bahasa Daerah">Bahasa Daerah</option>
                                        <option value="Naskah Kuno">Naskah Kuno</option>
                                        <option value="Tradisi Lisan">Tradisi Lisan</option>
                                        <option value="Permainan Tradisional">Permainan Tradisional</option>
                                      </optgroup>
                                      <optgroup label="Seni Pertunjukan">
                                        <option value="Seni Tradisi">Seni Tradisi</option>
                                      </optgroup>
                                      <optgroup label="Adat Istiadat Masyarakat, Ritus, dan Perayaan-Perayaan">
                                        <option value="Upacara-Ritus">Upacara-Ritus</option>
                                      </optgroup>
                                      <optgroup label="Pengetahuan dan Kebiasaan Perilaku Mengenai Alam dan Semesta">
                                        <option value="Kearifan Lokal">Kearifan Lokal</option>
                                        <option value="Teknologi Tradisional">Teknologi Tradisional</option>
                                      </optgroup>
                                      <optgroup label="Keterampilan dan Kemahiran Kerajinan Tradisional">
                                        <option value="Arsitektur Tradisional">Arsitektur Tradisional</option>
                                        <option value="Pakaian Adat">Pakaian Adat</option>
                                        <option value="Kain Tradisional">Kain Tradisional</option>
                                        <option value="Kerajinan Tradisional">Kerajinan Tradisional</option>
                                        <option value="Kuliner Tradisional">Kuliner Tradisional</option>
                                        <option value="Senjata Tradisional">Senjata Tradisional</option>

                                      </optgroup>
                                      
                                  </select>
                              </div>
                              @error('domain') <div class="text-danger">{{ $message }}</div> @enderror
                          </div>
                      </div>
                      <div class="col-md-3">
                          <div class="form-group">
                              <label for="kondisi" class="form-control-label">{{ __('Kondisi') }}</label>
                              <div class="@error('kondisi') border border-danger rounded-3 @enderror">
                                  <select name="kondisi" wire:model='kondisi' id="kondisi" class="form-control">
                                      <option>--pilih--</option>  
                                      <option value="berkembang">Sedang Berkembang</option>
                                      <option value="bertahan">Masih Bertahan</option>
                                      <option value="berkurang">Sudah Berkurang</option>
                                      <option value="terancam">Terancam Punah</option>
                                      <option value="punah">Punah</option>
                                  </select>
                              </div>
                              @error('kondisi') <div class="text-danger">{{ $message }}</div> @enderror
                          </div>
                      </div>
                    </div>
                    <div class="form-group" wire:ignore>
                        <label for="deskripsi">{{ 'Deskripsi' }}</label>
                        <div class="@error('deskripsi') border border-danger rounded-3 @enderror">
                            <textarea wire:model='deskripsi' name="deskripsi" class="form-control" id="deskripsi" rows="3"
                                placeholder=""></textarea>
                        </div>
                        @error('deskripsi') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">{{ 'Simpan' }}</button>
                    </div>
                </form>

            </div>
        </div>
      </div>
          
    </div>
  </main>

  @push('style')
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet"/>
  @endpush
  
  @push('js')
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
  <script>
   $(document).ready(function() {
          $('#deskripsi').summernote({
              placeholder: 'Deskripsi Warisan Budaya',
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
                              @this.set('deskripsi', contents);
                  },
                  onPaste: function(e){
                      var bufferText = ((e.originalEvent || e).clipboardData || window.clipboardData).getData('Text');
                      e.preventDefault();
                      document.execCommand('insertText', false, bufferText);
                  }
              }
          });
          $('.dropdown-toggle').dropdown();
  
      });
  
  
  </script>
  @endpush
