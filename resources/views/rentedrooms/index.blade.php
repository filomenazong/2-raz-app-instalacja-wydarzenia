<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('translation.navigation.rentedrooms') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-2">
                <div class="container">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        <table class="w-full table-fixed">
                            <thead>
                                <tr class="bg-gray-100">
                                    <th class="w-1/5 py-4 px-6 text-left text-gray-600 font-bold uppercase">
                                        {{ __('rentedrooms.attributes.id') }}</th>
                                    <th class="w-1/5 py-4 px-6 text-left text-gray-600 font-bold uppercase">
                                        {{ __('rentedrooms.attributes.number_people') }}</th>
                                    <th class="w-1/5 py-4 px-6 text-left text-gray-600 font-bold uppercase">
                                        {{ __('rentedrooms.attributes.date_from') }}</th>
                                    <th class="w-1/5 py-4 px-6 text-left text-gray-600 font-bold uppercase">
                                        {{ __('rentedrooms.attributes.date_to') }}</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white">
                                @foreach ($rentedrooms as $rentedroom )
                                    <tr>
                                        <td class="py-4 px-6 border-b border-gray-200">
                                            {{ $rentedroom->id }}
                                        </td>
                                        <td class="py-4 px-6 border-b border-gray-200 truncate">
                                            {{ $rentedroom->number_people }}
                                        </td>
                                        <td class="py-4 px-6 border-b border-gray-200">
                                            {{ $rentedroom->date_from }}
                                        </td>
                                        <td class="py-4 px-6 border-b border-gray-200">
                                            {{ $rentedroom->date_to }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="m-4">
                        {{ $rentedrooms->links() }}
                    </div>
                </div>    
            </div>
        </div>
    </div>
</x-app-layout>
