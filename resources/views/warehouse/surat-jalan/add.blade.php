@extends('template.main')

@section('content')
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
        <section class="bg-white dark:bg-gray-900">
            <div class="py-4 px-4">
                <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Tambah Surat Jalan</h2>
                <form action="{{ route('warehouse.gudang.tambah') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                        <div class="w-full">
                            <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No. Surat Jalan</label>
                            <input type="text" name="nama_gudang" id="brand" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="No. Surat Jalan" required="">
                        </div>
                        <div class="w-full">
                            <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No Transfer Gudang</label>
                            <input type="text" name="kode_gudang" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Kode Gudang" required="">
                        </div>
                        <div class="w-full ">
                            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
                            <select id="gudangAsal" name="gudang_asal_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="">Tervalidasi</option>
                                <option value="">Baru</option>
                                <option value="">Batal</option>
                            </select>
                        </div>
                        <div></div>
                        <div class=" items-center space-x-4">
                            <button type="submit" class=" text-green-500 inline-flex items-center hover:text-white border border-green-500 hover:bg-green-500 focus:ring-4 focus:outline-none focus:ring-green-500 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-green-500 dark:text-green-500 dark:hover:text-white dark:hover:bg-green-500 dark:focus:ring-green-500">
                                Simpan
                            </button>
                        </div>
                    </div>

                </form>
            </div>
        </section>
    </div>








@endsection

@section('script')
<script>
    const checkbox = document.getElementById('checkbox');
    checkbox.addEventListener('change', (event) => {
        if (event.target.checked) {
            checkbox.value = 'aktif';
            console.log('Checkbox is checked..');
        } else {
            checkbox.value = 'tidak aktif';
            console.log('Checkbox is not checked..');
        }
    });
</script>

@endsection
