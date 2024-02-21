@extends('template.main')

@section('content')

    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">

        <section class="bg-white dark:bg-gray-900">
            <div class=" px-4 py-8 ">
                <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Edit Gudang</h2>
                <form action="{{ route('warehouse.gudang.update', ['id' => $data->id]) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="id" id="" value="{{ $data->id }}">
                    <div class="grid gap-4 mb-4 sm:grid-cols-2 sm:gap-6 sm:mb-5">
                        <div class="w-full">
                            <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Gudang</label>
                            <input type="text" name="nama_gudang" id="brand" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{ $data->nama_gudang }}" placeholder="Nama Gudang" required="">
                        </div>
                        <div class="w-full">
                            <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kode Gudang</label>
                            <input type="text" name="kode_gudang" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{ $data->kode_gudang }}" placeholder="Kode Gudang" required="">
                        </div>
                        <div class="sm:col-span-2">

                            <label class="relative inline-flex items-center cursor-pointer">
                                @if($data->status == 'aktif')
                                <input name="status" id="checkbox" type="checkbox" value="aktif" class="sr-only peer" checked>
                                @else
                                <input name="status" id="checkbox" type="checkbox" value="tidak aktif" class="sr-only peer">
                                @endif
                                <div class="w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                                <span class="ms-3 text-sm font-medium text-gray-900 dark:text-gray-300">Aktif</span>
                            </label>
                        </div>
                    </div>
                    <div class="flex items-center space-x-4">
                        <button type="submit" class="text-green-500 inline-flex items-center hover:text-white border border-green-500 hover:bg-green-500 focus:ring-4 focus:outline-none focus:ring-green-500 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-green-500 dark:text-green-500 dark:hover:text-white dark:hover:bg-green-500 dark:focus:ring-green-500">
                            Simpan
                        </button>
                        <button type="button" class="text-red-600 inline-flex items-center hover:text-white border border-red-600 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">
                            Batal
                        </button>
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
