<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                チーム一覧
            </h2>
            <a href="{{ route('teams.create') }}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                ＋ 新しいチーム
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if ($teams->isEmpty())
                        <p class="text-center text-gray-500">現在チームはありません</p>
                    @else
                        <ul class="divide-y divide-gray-200">
                            @foreach ($teams as $team)
                                <li class="py-4">
                                    <a href="{{ route('teams.show', $team) }}" class="block hover:bg-gray-50 -mx-6 px-6 py-2">
                                        <p class="font-medium text-gray-900">{{ $team->name }}</p>
                                        @if ($team->description)
                                            <p class="mt-1 text-sm text-gray-500">{{ $team->description }}</p>
                                        @endif
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
