<div class="row">
    <div class="col-md-12">
        <div class="card card-body mb-4">
            <h6 class="mb-0">Event Baru</h6>
            <p class="text-sm mb-0">Event Terbaru</p>
            <hr class="horizontal dark my-3">
            <form wire:submit.prevent="save" method="POST" role="form text-left">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="judul" class="form-control-label">{{ __('Judul') }}</label>
                            <div class="@error('judul') border border-danger rounded-3 @enderror">
                                <input wire:model='judul' class="form-control" type="text" placeholder="Judul"
                                    id="judul">
                            </div>
                            @error('judul') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="start" class="form-control-label">{{ __('Mulai') }}</label>
                            <div class="@error('start') border border-danger rounded-3 @enderror">
                                <input wire:model='start' class="form-control" type="datetime-local" placeholder="Mulai"
                                    id="start">
                            </div>
                            @error('start') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="end" class="form-control-label">{{ __('Berakhir') }}</label>
                            <div class="@error('end') border border-danger rounded-3 @enderror">
                                <input wire:model='end' class="form-control" type="datetime-local" placeholder="Berakhir"
                                    id="end">
                            </div>
                            @error('end') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>
                    </div>
                </div>
                <div class="form-group" wire:ignore>
                    <label for="konten">{{ 'Detail Event' }}</label>
                    <div class="@error('konten') border border-danger rounded-3 @enderror">
                        <textarea wire:model='konten' class="form-control" id="konten" rows="3"
                            placeholder=""></textarea>
                    </div>
                    @error('konten') <div class="text-danger">{{ $message }}</div> @enderror
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">{{ 'Simpan' }}</button>
                </div>
            </form>
        </div>
    </div>
</div>

