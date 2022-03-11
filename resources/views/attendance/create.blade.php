<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Attendance Add') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    
                        <form action="/attendance" method="POST" class="w-full">
                            @csrf

                            <div class="flex flex-wrap -mx-3 mb-6">
                                <div class="w-full px-3">
                                    <x-label for="nim" :value="__('NIM')" />
                    
                                    <x-input id="nim" class="block mt-1 w-full" placeholder="Enter your nim" type="text" name="nim" :value="old('nim')" required autofocus />
                                </div>
                            </div>
                            
                            <div class="flex flex-wrap -mx-3 mb-6">
                                <div class="w-full px-3">
                                    <x-label for="name" :value="__('Name')" />
                
                                    <x-input id="name" class="block mt-1 w-full" placeholder="Enter your name" type="text" name="name" :value="old('name')" required autofocus />
                                </div>
                            </div>

                            <div class="flex flex-wrap -mx-3 mb-6">
                                <div class="w-full px-3">
                                    <x-label for="email" :value="__('Email')" />
                
                                    <x-input id="email" class="block mt-1 w-full" placeholder="example@mail.com" type="email" name="email" :value="old('email')" required autofocus />
                                </div>
                            </div>

                            <x-button type="submit" class="bg-blue-700 hover:bg-blue-800 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 focus:ring-blue">
                                Submit
                            </x-button>
                        </form>
               
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
