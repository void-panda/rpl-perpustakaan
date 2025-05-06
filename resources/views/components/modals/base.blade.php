<!-- Modal Base -->
<div class="modal fade" data-backdrop="static" id="{{ $modalId ?? 'modalId' }}" tabindex="-1" role="dialog"
    aria-labelledby="{{ $modalId ?? 'modalId' }}Title" aria-hidden="true">
    <div class="modal-dialog {{ $modalSize ?? 'modal-lg' }} modal-dialog-centered" role="document">
        <form method="POST" class="modal-content">
            @csrf
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">{{ $title ?? 'Modal Title' }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row px-3">
                    <div class="col">
                        <div class="alert alert-info" role="alert">
                            <i class="fas fa-info-circle"></i>
                            Field dengan tanda <span class="text-danger">*</span> wajib diisi.
                        </div>

                    </div>
                </div>
                {{ $slot }}
            </div>
            <div class="modal-footer">
                <button type="reset" class="btn btn-secondary">Reset</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>
