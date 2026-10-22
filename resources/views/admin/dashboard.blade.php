<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard Admin') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-semibold mb-4">Statistik Pengguna</h3>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div class="bg-blue-100 p-4 rounded-lg">
                            <p class="text-sm text-blue-800">Total Pengguna</p>
                            <p class="text-3xl font-bold text-blue-900">{{ $totalUsers }}</p>
                        </div>

                        <div class="bg-green-100 p-4 rounded-lg">
                            <p class="text-sm text-green-800">Admin</p>
                            <p class="text-3xl font-bold text-green-900">{{ $totalAdmins }}</p>
                        </div>

                                                <div class="bg-yellow-100 p-4 rounded-lg">
                            <p class="text-sm text-yellow-800">User Biasa</p>
                            <p class="text-3xl font-bold text-yellow-900">{{ $totalRegularUsers }}</p>
                        </div>
                    </div>

                    <a href="{{ route('admin.users.index') }}" class="inline-block mt-6 px-4 py-2 bg-gray-800 text-white rounded-md">Kelola Pengguna</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>