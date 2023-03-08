<!-- Tombol untuk membuka jendela modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
    Jadikan Pemenang
</button>

<!-- Jendela modal -->
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">KONFIRMASI PEMENANG?</h5>
                <button type="button" class="btn-close" data-bs-target="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ANDA YAKIN UNTUK MENJADIKANNYA PEMENANG?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <form action="{{ route('historie.setpemenang', $item->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
