<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-8">
                <h2 class="text-2xl font-bold mb-8">Créer un événement</h2>

                <form action="{{ route('events.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                    @csrf

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Title -->
                        <div class="col-span-2">
                            <label for="title" class="block text-sm font-medium text-gray-700">Titre</label>
                            <input type="text" name="title" id="title" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" required>
                        </div>

                        <!-- Description -->
                        <div class="col-span-2">
                            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                            <textarea name="description" id="description" rows="4" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" required></textarea>
                        </div>

                        <!-- Category -->
                        <div>
                            <label for="category" class="block text-sm font-medium text-gray-700">Catégorie</label>
                            <select name="category" id="category" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" required>
                                <option value="">Sélectionner une catégorie</option>
                                <option value="sport">Sport</option>
                                <option value="musique">Musique</option>
                                <option value="education">Éducation</option>
                                <option value="art">Art</option>
                                <option value="technologie">Technologie</option>
                                <option value="bien-etre">Bien-être</option>
                            </select>
                        </div>

                        <!-- Max Participants -->
                        <div>
                            <label for="max_participants" class="block text-sm font-medium text-gray-700">Nombre maximum de participants</label>
                            <input type="number" name="max_participants" id="max_participants" min="1" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" required>
                        </div>

                        <!-- Date -->
                        <div>
                            <label for="date" class="block text-sm font-medium text-gray-700">Date</label>
                            <input type="date" name="date" id="date" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" required>
                        </div>

                        <!-- Time -->
                        <div>
                            <label for="time" class="block text-sm font-medium text-gray-700">Heure</label>
                            <input type="time" name="time" id="time" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" required>
                        </div>

                        <!-- Location -->
                        <div class="col-span-2">
                            <label for="location" class="block text-sm font-medium text-gray-700">Lieu</label>
                            <input type="text" name="location" id="location" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" required>
                        </div>

                        <!-- Image -->
                        <div class="col-span-2">
                            <label for="image" class="block text-sm font-medium text-gray-700">Image de l'événement</label>
                            <input type="file" name="image" id="image" accept="image/*" class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100">
                        </div>
                    </div>

                    <div class="flex justify-end space-x-4">
                        <a href="{{ route('events.index') }}" class="inline-flex justify-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50">
                            Annuler
                        </a>
                        <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700">
                            Créer l'événement
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout><div>
    <!-- Simplicity is the ultimate sophistication. - Leonardo da Vinci -->
</div>
