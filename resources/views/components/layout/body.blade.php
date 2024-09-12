<!DOCTYPE html>
<html lang="en">
<x-head />

<body>
    <x-navbar />
    <x-sidebar />
    <div class="container ps-10 pt-24 sm:ps-[20rem] max-w-[90%] sm:max-w-[96%] md:max-w-[98%] text-gray-800">
        {{ $slot }}
    </div>
</body>

</html>
