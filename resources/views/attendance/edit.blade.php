<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Attendance Edit') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    
                        <form action="/attendance/{{ $attendance->id }}" method="POST" class="w-full">
                            @csrf
                            @method('PUT')

                            <div class="flex flex-wrap -mx-3 mb-6">
                                <div class="w-full px-3">
                                    <x-label for="nim" :value="__('NIM')" />
                    
                                    <x-input id="nim" class="block mt-1 w-full" placeholder="Enter your nim" type="text" name="nim" :value="old('nim') ? old('nim') : $attendance->nim" required autofocus />
                                </div>
                            </div>
                            
                            <div class="flex flex-wrap -mx-3 mb-6">
                                <div class="w-full px-3">
                                    <x-label for="name" :value="__('Name')" />
                
                                    <x-input id="name" class="block mt-1 w-full" placeholder="Enter your name" type="text" name="name" :value="old('name') ? old('name') : $attendance->name" required autofocus />
                                </div>
                            </div>

                            <div class="flex flex-wrap -mx-3 mb-6">
                                <div class="w-full px-3">
                                    <x-label for="email" :value="__('Email')" />
                
                                    <x-input id="email" class="block mt-1 w-full" placeholder="example@mail.com" type="email" name="email" :value="old('email') ? old('email') : $attendance->email" required autofocus />
                                </div>
                            </div>

                            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                        </form>
               
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
