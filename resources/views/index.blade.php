<div>
</div>
<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-8 bg-white p-6 rounded-lg shadow">
                <form action="" method="GET" class="grid grid-cols-1 md:grid-cols-4 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Rechercher</label>
                        <input type="text" name="search" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Catégorie</label>
                        <select name="category" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                            <option value="">Toutes les catégories</option>
                            <option value="sport">Sport</option>
                            <option value="musique">Musique</option>
                            <option value="education">Éducation</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Date</label>
                        <input type="date" name="date" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                    </div>
                    <div class="flex items-end">
                        <button type="submit" class="w-full bg-indigo-600 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 rounded-md">
                            Filtrer
                        </button>
                    </div>
                </form>
            </div>

            <!-- Events Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <img src="" alt="" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex justify-between items-start">
                            <h3 class="text-xl font-semibold text-gray-900"></h3>
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium">
                            </span>
                        </div>
                        <p class="mt-2 text-gray-600 line-clamp-2"></p>
                        <div class="mt-4 flex items-center text-sm text-gray-500">
                            <svg class="mr-1.5 h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="mt-2 flex items-center text-sm text-gray-500">
                            <svg class="mr-1.5 h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="mt-6 flex items-center justify-between">
                            <a href="" class="text-indigo-600 hover:text-indigo-500 font-medium">
                                Voir les détails →
                            </a>
                            <span class="text-sm text-gray-500">
                                participants
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-span-full text-center py-12">
                    <h3 class="text-lg font-medium text-gray-900">Aucun événement trouvé</h3>
                    <p class="mt-2 text-gray-500">Créez le premier événement de votre région !</p>
                    <a href="" class="mt-4 inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700">
                        Créer un événement
                    </a>
                </div>
            </div>

            <!-- Pagination -->
            <div class="mt-8">
            </div>
        </div>
    </div>
</x-app-layout>
