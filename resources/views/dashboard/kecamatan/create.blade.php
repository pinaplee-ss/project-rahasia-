<x-layouts.app>
    <div class="container-fluid">
        <div class="card shadow-sm">
            {{-- card header start --}}
            <div class="card-header bg-dark">
                 <h3 class="card-title mb-0 text-white">Tambah Kecamatan Baru</h3>
            </div>
            {{-- card header stop --}}

            {{-- card body start --}}
            <div class="card-body">
                <form action="{{route ('kecamatan.store')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Nama Kecamatan</label>
                                <input type="text" class="form-control" placeholder="Masukkan Nama Kecamatan"
                                name="nama_kecamatan">
                            </div>
                        </div>
                        <div class="col-md-6">
                                <label class="form-label">kabupaten</label>
                                <select name="kabupaten_id" class="form-select">
                                    <option value="disabled">Pilih kabupaten</option>
                                    @forelse ($kecamatan->unique('kabupaten_id') as $k )
                                        <option value="{{ $k->kabupaten_id }}">{{
                                        $k->kabupaten->nama_kabupaten }}</option>
                                    @empty
                                        <option value="disabled">Data Tidak Ditemukan</option>
                                    @endforelse
                                </select>
                        </div>
                    </div>

                        <div class="col-12 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">
                                <i class="ti ti-check"></i> Simpan
                            </button>
                        </div>
                </form>
            </div>
        </div>
    </div>
</x-layouts.app>
