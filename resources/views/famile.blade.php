<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Family Officials</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body style="    margin: 10% 31%; width: 69%;">
    <form class="w-full max-w-lg" method="POST" action="{{ route('famile.store') }}">
        @csrf
        <div class="flex flex-wrap -mx-3 mb-6">
            <div style="margin-left:25%;" class="w-full md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="Leader">
                    إسم مسؤول ألأٌسرة ألثلاثي مع أللقب
                </label>
                <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="Leader" name="Leader"  type="text" placeholder="ألاسم">
            </div>
            <div style="margin-left:25%;" class="w-full md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="Academic_Achievement">
                    ألتحصيل ألدراسي
                </label>
                <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="Academic_Achievement" name="Academic_Achievement"  type="text" placeholder="ألاسم">
            </div>
            @error('Leader')
            <li style="color: rgb(0, 0, 0); background:#ff4747;">{{ $message }}</li>
            @enderror
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="Date_Of_Birth">
                    تاريخ الميلاد
                </label>
                <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="Date_Of_Birth" name="Date_Of_Birth" type="date" placeholder="******************">
                <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you'd like</p>
            </div>
            @error('Date_Of_Birth')
            <li style="color: rgb(0, 0, 0); background:#ff4747;">{{ $message }}</li>
            @enderror
        </div>
        <div class="flex flex-wrap -mx-3 mb-2">
            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="Living">
                    السكن الحالي
                </label>
                <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="Living" type="text" name="Living" placeholder="ادخال عنوان السكن">
                    @error('Living')
                    <li style="color: rgb(0, 0, 0); background:#ff4747;">{{ $message }}</li>
                    @enderror
                </div>
            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="Gender">
                    الجنس
                </label>
                <div class="relative">
                    <select
                        class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="Gender" name="Gender">
                        <option>اختار الجنس</option>
                        <option value="ذكر">ذكر</option>
                        <option value="انثى">انثى</option>
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                        </svg>
                    </div>
                </div>
                @error('Gender')
                <li style="color: rgb(0, 0, 0); background:#ff4747;">{{ $message }}</li>
                @enderror
            </div>
            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="Phone_Number">
                    رقم الهاتف
                </label>
                <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="Phone_Number" type="number" name="Phone_Number" placeholder="07517">
            </div>
            @error('Phone_Number')
            <li style="color: rgb(0, 0, 0); background:#ff4747;">{{ $message }}</li>
            @enderror
        </div>

            <button type="submit" class="text-white bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-purple-300 dark:focus:ring-purple-800 shadow-lg shadow-purple-500/50 dark:shadow-lg dark:shadow-purple-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                <svg style="color: white;" class="w-6 h-6 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5H1m0 0 4 4M1 5l4-4"/>
                </svg>
            </button>
    </form>
</body>

</html>
