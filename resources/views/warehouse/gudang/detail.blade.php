@extends('template.main')

@section('content')
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
        <section class="bg-white dark:bg-gray-900">
            <div class=" px-4 py-8 ">
                <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Detail Gudang</h2>
                <form action="#">
                    <div class="grid gap-4 mb-4 sm:grid-cols-2 sm:gap-6 sm:mb-5">
                        <div class="w-full">
                            <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Gudang</label>
                            <input type="text" name="brand" id="brand" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{ $data->nama_gudang }}" placeholder="Nama Gudang" required="" disabled>
                        </div>
                        <div class="w-full">
                            <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kode Gudang</label>
                            <input type="text" name="price" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{ $data->kode_gudang }}" placeholder="Kode Gudang" required="" disabled>
                        </div>
                        <div class="sm:col-span-2">

                            <label class="relative inline-flex items-center ">
                                @if($data->status == 'aktif')
                                <input name="status" id="checkbox" type="checkbox" value="aktif" class="sr-only peer" checked disabled>
                                @else
                                <input name="status" id="checkbox" type="checkbox" value="tidak aktif" class="sr-only peer" disabled>
                                @endif
                                <div class="w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                                <span class="ms-3 text-sm font-medium text-gray-900 dark:text-gray-300">Aktif</span>
                            </label>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>






@endsection

@section('script')


@endsection
