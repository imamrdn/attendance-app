<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800">
                {{ __('Attendance') }}
            </h2>
        
            <div>
                <x-button class="mx-1 bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <a href="/attendance/create">
                        Create
                    </a>
                </x-button>
                <x-button class="mx-1 bg-green-600 hover:bg-green-700 focus:ring-4 focus:ring-blue-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                    <a href="/attendance/export_excel" >
                        Export
                    </a>
                </x-button>
            </div>
        </div>
    
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {{-- frame-border --}}
                    <div class="flex flex-col">
                        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="inline-block py-2 min-w-full sm:px-6 lg:px-8">
                                <div class="overflow-hidden shadow-md sm:rounded-lg">
                                    <table class="min-w-full">
                                        <thead class="bg-gray-200 dark:bg-gray-700">
                                            <tr>
                                                <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                NIM
                                                </th>
                                                <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                Name
                                                </th>
                                                <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                Email
                                                </th>
                                                <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                Time
                                                </th>
                                                <th scope="col" class="relative py-3 px-6">
                                                <span class="sr-only">Edit</span>
                                                </th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach ($attendances as $attendance)
                                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                
                                                <td class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    {{ $attendance->nim }}
                                                </td>
                                                <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    {{ $attendance->name }}
                                                </td>
                                                <td class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    {{ $attendance->email }}
                                                </td>
                                                <td class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    {{ $attendance->created_at }}
                                                </td>
                                                <td class="py-4 px-2 text-sm font-medium text-right whitespace-nowrap flex items-center">
                                                    <x-button class="mx-1 bg-gray-800 hover:bg-gray-900 focus:ring-4 focus:ring-gray-300 text-center dark:bg-gray-500 dark:hover:bg-gray-600 dark:focus:ring-gray-800">
                                                        <a href="attendance/{{ $attendance->id }}/edit">Edit</a>
                                                    </x-button>

                                                    <form action="attendance/{{ $attendance->id }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                            <x-button class="mx-1 bg-red-500 hover:bg-red-600 focus:ring-4 focus:ring-red-300 text-center dark:bg-red-500 dark:hover:bg-red-600 dark:focus:ring-red-800">
                                                                Delete
                                                            </x-button>
                                                        </form> 
                                                </td>
                                            </tr>
                                            @endforeach
                                            
                                        </tbody>
                                    </table>
                                    
                                </div>
                            </div>
                            
                        </div>

                        
                        <div class="mt-5 float-right">
                            {{ $attendances->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>