<x-app-layout>
    <div class="container mx-auto p-6">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">🔍 Search Results</h2>

        @if($users->isEmpty())
            <div class="bg-yellow-100 text-yellow-700 p-4 rounded-lg">
                No results found. Try searching with different keywords.
            </div>
        @else
            <div class="bg-white shadow-lg rounded-lg p-4">
                <table class="w-full border-collapse border border-gray-300">
                    <thead class="bg-gray-200">
                        <tr>
                            <th class="border border-gray-300 px-4 py-2 text-left">👤 Username</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">📧 Email</th>
                            <th class="border border-gray-300 px-4 py-2 text-center">👁 View Profile</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            <tr class="hover:bg-gray-100 transition">
                                <td class="border border-gray-300 px-4 py-2">{{ $user->username }}</td>
                                <td class="border border-gray-300 px-4 py-2">{{ $user->email }}</td>
                                <td class="border border-gray-300 px-4 py-2 text-center">
                                    <a href="{{ route('profile.show', $user->id) }}" 
                                       class="bg-blue-500 text-white px-3 py-1 rounded-lg hover:bg-blue-700 transition">
                                        🔗 View Profile
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
</x-app-layout>
