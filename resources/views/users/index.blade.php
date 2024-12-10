<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('translation.navigation.users') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container">
                <div class="shadow-lg rounded-lg overflow-hidden mx-4">
                    <table class="w-full table-fixed">
                        <thead>
                            <tr>
                                <th class="w-1/7 py-4 px-6 text-left text-gray-600 font-bold uppercase">{{ __('users.attributes.id') }}</th>
                                <th class="w-1/7 py-4 px-6 text-left text-gray-600 font-bold uppercase">{{ __('users.attributes.name') }}</th>
                                <th class="w-1/7 py-4 px-6 text-left text-gray-600 font-bold uppercase">{{ __('users.attributes.email') }}</th>
                                <th class="w-1/7 py-4 px-6 text-left text-gray-600 font-bold uppercase">{{ __('users.attributes.email_verified_at') }}</th>
                                <th class="w-1/7 py-4 px-6 text-left text-gray-600 font-bold uppercase">{{ __('users.attributes.created_at') }}</th>
                                <th class="w-1/7 py-4 px-6 text-left text-gray-600 font-bold uppercase">{{ __('users.attributes.roles') }}</th>
                            </tr>
                        </thead>

                            <tbody class="bg-white">
                                @foreach ($users as $user)
                                <tr>
                                    <td class="py-4 px-6 border-b border-gray-200">{{$user->id}} </td>
                                    <td class="py-4 px-6 border-b border-gray-200">{{$user->name}} </td>
                                    <td class="py-4 px-6 border-b border-gray-200">{{$user->email}} </td>
                                    <td class="py-4 px-6 border-b border-gray-200">{{$user->email_verified_at}} </td>
                                    <td class="py-4 px-6 border-b border-gray-200">{{$user->created_at}} </td>
                                    <td class="py-4 px-6 border-b border-gray-200">{{$user->roles}} </td>
                                    <td class="py-4 px-6 border-b border-gray-200">{{$user->roles}} </td>

                                </tr>
                                @endforeach
                            </tbody>
                    </table>
                </div>
                <div class="m-4">
                {{ $users->links() }}
                </div>
            </div>
            </div>
        </div>
    </x-app-layout>
