<aside id="default-sidebar"
    class="fixed top-0 left-0 z-40  w-64  h-screen transition-transform -translate-x-full sm:translate-x-0"
    aria-label="Sidenav">


    <div
        class="overflow-y-hidden py-3  px-3 h-full bg-primary-950  border-primary-950 dark:bg-gray-800 dark:border-gray-700">
        <div class="flex justify-center w-100 mb-4">
            <img src="{{ asset('assets/img/logo.png') }}" class="mr-3 h-10 " alt="Logo" />

        </div>
        <div class="mb-5 px-2">
            <div class="font-light text-xl text-white">Selamat Pagi,</div>
            <div class="font-semibold text-xl text-white">Budiono Siregar</div>
        </div>
        <ul class="space-y-2">
            <x-side-link title="Dashboard" href="#" icon="fa-solid fa-house" />
            <x-side-link title="Add User" href="#" icon="fa-solid fa-user-plus" />
            <x-side-link title="Kepegawaian" icon="fa-solid fa-people-group" :child="[
                ['title' => 'Data Karyawan', 'href' => '#'],
                ['title' => 'Tunjangan', 'href' => '#'],
                ['title' => 'Approval Cuti', 'href' => '#'],
                ['title' => 'Import Gaji', 'href' => '#'],
            ]" />
            <x-side-link title="Keuangan" href="#" icon="fa-solid fa-money-bills" />
            <x-side-link title="Pengaturan" href="#" icon="fa-solid fa-gear" />

        </ul>
    </div>

</aside>
