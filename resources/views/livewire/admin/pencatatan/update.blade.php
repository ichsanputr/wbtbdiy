<div class="row">
    <div class="col-lg-12">
        <div class="card card-body mb-4">
            <h6 class="mb-0">Edit Pencatatan</h6>
            <p class="text-sm mb-0">Mengubah Pencatatan WBTb</p>
            <hr class="horizontal dark my-3">
            <form wire:submit.prevent="update" method="POST" role="form text-left">
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
                                <input wire:model='lokasi' class="form-control" type="text" placeholder="Lokasi"
                                    id="lokasi">
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
                <div class="form-group">
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