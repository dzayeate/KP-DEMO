@extends('template.main')

@section('content')
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
        <section class="bg-white dark:bg-gray-900">
            <div class="py-4 px-4">
                <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Detail Barang</h2>
                <form action="{{ route('warehouse.barang.update', ['id' => $data->id]) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                        <div class="w-full">
                            <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Barang</label>
                            <input type="text" name="nama_barang" id="brand" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{ $data->nama_barang }}" placeholder="Nama Gudang" required="" disabled>
                        </div>
                        <div class="w-full">
                            <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kode Barang</label>
                            <input type="text" name="kode_barang" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{ $data->kode_barang }}"  placeholder="Kode Gudang" required="" disabled>
                        </div>
                        <div class="w-full">
                            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis Barang</label>
                            <select id="jenisBarang" name="jenis_barang" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled>

                                <option value="Bahan Baku">Bahan Baku</option>
                                <option value="Barang Setengah Jadi">Barang Setengah Jadi</option>
                                <option value="Barang Jadi">Barang Jadi</option>
                                <option value="Jasa">Jasa</option>
                            </select>
                        </div>
                        <div class="w-full">
                            <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Stock</label>
                            <input type="text" id="stock" name="stock" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{ $data->stock }}" placeholder="Stock Saat Ini" required="" disabled>
                        </div>
                        <div class="w-full">
                            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status Barang</label>
                            <select id="status" value="{{ $data->status }}" name="status" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled>

                                <option value="aktif">Aktif</option>
                                <option value="tidak aktif">Tidak Aktif</option>
                            </select>
                        </div>
                        <div class="w-full">
                            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Satuan Utama</label>
                            <select id="satuan" name="satuan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled>

                                <option value="pcs">PCS</option>
                                <option value="lusin">LUSIN</option>
                                <option value="kardus">KARDUS</option>
                            </select>
                        </div>
                        <div class="w-full">
                            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gudang</label>
                            <select id="gudang" name="gudang_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 disa" disabled>
                                <option value="">Pilih Gudang</option>
                            </select>
                        </div>
                        <div class="sm:col-span-2">

                            <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keterangan</label>
                            <textarea id="description" name="keterangan" rows="8" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Keterangan" disabled></textarea>
                        </div>
                    </div>

                </form>
            </div>
        </section>
    </div>







@endsection

@section('script')
<script>
    document.getElementById('jenisBarang').value = '{{ $data->jenis_barang }}';
    document.getElementById('status').value = '{{ $data->status }}';
    document.getElementById('satuan').value = '{{ $data->satuan }}';
    document.getElementById('description').value = '{{ $data->keterangan }}';

</script>

@endsection
