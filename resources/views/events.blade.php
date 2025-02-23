<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Événements - EventConnect</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
    body {
        font-family: 'Poppins', sans-serif;
    }

    @media (max-width: 1024px) {
        .table-container {
            overflow-x: auto;
        }
    }
    </style>
</head>

<body class="bg-gray-50">
    <!-- Mobile Menu Button -->
    <div
        class="lg:hidden fixed top-0 left-0 w-full bg-white z-50 px-4 py-3 flex items-center justify-between shadow-sm">
        <h1 class="text-xl font-bold bg-gradient-to-r from-blue-800 to-emerald-600 bg-clip-text text-transparent">
            EventConnect
        </h1>
        <button id="mobile-menu-button" class="text-gray-500">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
    </div>

    <!-- Sidebar -->
    <div id="sidebar"
        class="fixed inset-y-0 left-0 w-64 bg-white shadow-lg transform -translate-x-full lg:translate-x-0 transition-transform duration-200 ease-in-out z-40">
        <div class="flex flex-col h-full">
            <!-- Logo -->
            <div class="p-6">
                <h1
                    class="text-2xl font-bold bg-gradient-to-r from-blue-800 to-emerald-600 bg-clip-text text-transparent">
                    EventConnect
                </h1>
            </div>

            <!-- Navigation Links -->
            <nav class="flex-1 px-4 space-y-2">
                <a href="#" class="flex items-center px-4 py-3 text-gray-700 hover:bg-gray-100 rounded-lg">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    Dashboard
                </a>
                <a href="/dashboard" class="flex items-center px-4 py-3 text-gray-700 hover:bg-gray-100 rounded-lg">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                    Utilisateurs
                </a>
                <a href="/events"
                    class="flex items-center px-4 py-3 text-white bg-gradient-to-r from-blue-800 to-emerald-600 rounded-lg">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    Événements
                </a>
                <a href="/profile" class="flex items-center px-4 py-3 text-gray-700 hover:bg-gray-100 rounded-lg">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                    Profile
                </a>
            </nav>

            <!-- User Profile -->
            <div class="p-4 border-t space-y-4">
                <div class="flex items-center">
                    <img src="https://ui-avatars.com/api/?name=Admin+User" alt="Admin" class="w-10 h-10 rounded-full">
                    <div class="ml-3">
                        <p class="text-sm font-medium text-gray-900">Admin User</p>
                        <p class="text-xs text-gray-500">admin@eventconnect.com</p>
                    </div>
                </div>
                <!-- Logout Button -->
                <form method="POST" action="{{ route('logout') }}" class="w-full">
                    @csrf
                    <button type="submit"
                        class="w-full flex items-center justify-center px-4 py-2 text-sm font-medium text-red-600 hover:text-white hover:bg-red-600 rounded-lg transition-colors duration-200">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                        </svg>
                        Déconnexion
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="lg:ml-64 p-4 lg:p-8 mt-16 lg:mt-0">
        <!-- Header -->
        <div class="flex flex-col lg:flex-row justify-between items-start lg:items-center mb-8 space-y-4 lg:space-y-0">
            <h2 class="text-xl lg:text-2xl font-bold text-gray-900">Gestion des Événements</h2>
            <!-- ... existing code ... -->
            @if(session('success'))
            <div class="fixed top-4 right-4 flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-50 shadow-lg transition-all duration-500 transform translate-x-0"
                role="alert" id="successAlert">
                <div
                    class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                    </svg>
                </div>
                <div class="ml-3 text-sm font-normal">{{ session('success') }}</div>
                <button type="button"
                    class="ml-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8"
                    onclick="closeAlert()">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                </button>
            </div>

            <script>
            // Auto hide after 5 seconds
            setTimeout(() => {
                closeAlert();
            }, 7000);

            function closeAlert() {
                const alert = document.getElementById('successAlert');
                alert.classList.add('translate-x-full', 'opacity-0');
                setTimeout(() => {
                    alert.style.display = 'none';
                }, 500);
            }
            </script>
            @endif
            <button onclick="openAddEventModal()"
                class="w-full lg:w-auto bg-gradient-to-r from-blue-800 to-emerald-600 text-white px-4 py-2 rounded-lg hover:opacity-90 transition duration-300 flex items-center justify-center">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                </svg>
                Ajouter un événement
            </button>
        </div>
        <!-- Filters -->
        <div class="bg-white p-4 rounded-lg shadow-sm mb-6">
            <div class="flex flex-col lg:flex-row space-y-4 lg:space-y-0 lg:space-x-4">
                <div class="flex-1">
                    <input type="text" placeholder="Rechercher un événement..."
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-800 focus:border-transparent">
                </div>
                <div class="flex flex-col sm:flex-row gap-4">
                    <select
                        class="w-full sm:w-auto px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-800 focus:border-transparent">
                        <option>Toutes les catégories</option>
                        <option>Concert</option>
                        <option>Festival</option>
                        <option>Conférence</option>
                        <option>Sport</option>
                    </select>
                    <select
                        class="w-full sm:w-auto px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-800 focus:border-transparent">
                        <option>Statut</option>
                        <option>À venir</option>
                        <option>En cours</option>
                        <option>Terminé</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- Events Table -->
        <div class="bg-white rounded-lg shadow-sm overflow-hidden">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Événement
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Catégorie
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Date
                            </th>
                            <th
                                class="hidden md:table-cell px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Participants
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Statut
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach($events as $event)
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <img class="h-8 w-8 lg:h-10 lg:w-10 rounded-lg object-cover"
                                        src="https://images.unsplash.com/photo-1501281668745-f7f57925c3b4?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80"
                                        alt="">
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">{{ $event->titre }}</div>
                                        <div class="text-xs lg:text-sm text-gray-500">{{ $event->adresse }}</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span
                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-purple-100 text-purple-800">
                                    {{ $event->categorie }}
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ \Carbon\Carbon::parse($event->date_heure)->format('d M Y H:i') }}
                            </td>
                            <td class="hidden md:table-cell px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                0 / {{ $event->max_participants }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span
                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                    À venir
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <div class="flex space-x-3">
                                    <button
                                        class="text-blue-800 hover:text-emerald-600 transition-colors duration-200 edit-button"
                                        data-event-id="{{ $event->id }}">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                        </svg>
                                    </button>
                                    <button
                                        class="text-red-600 hover:text-red-800 transition-colors duration-200 delete-button"
                                        data-event-id="{{ $event->id }}">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <div class="bg-white px-4 py-3 border-t border-gray-200">
                <div class="flex flex-col lg:flex-row items-center justify-between">
                    <div class="flex-1 flex justify-between items-center w-full lg:w-auto mb-4 lg:mb-0">
                        <p class="text-sm text-gray-700">
                            <span class="hidden lg:inline">Affichage de </span>
                            <span class="font-medium">1-10</span>
                            <span class="hidden lg:inline"> sur </span>
                            <span class="font-medium">97</span>
                        </p>
                    </div>
                    <div class="flex justify-center w-full lg:w-auto space-x-2">
                        <a href="#"
                            class="relative inline-flex items-center px-3 py-2 rounded border border-gray-300 text-sm font-medium bg-white text-gray-700 hover:bg-gray-50">
                            Précédent
                        </a>
                        <div class="hidden lg:flex space-x-2">
                            <a href="#"
                                class="relative inline-flex items-center px-3 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">1</a>
                            <a href="#"
                                class="relative inline-flex items-center px-3 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">2</a>
                            <a href="#"
                                class="relative inline-flex items-center px-3 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">3</a>
                        </div>
                        <a href="#"
                            class="relative inline-flex items-center px-3 py-2 rounded border border-gray-300 text-sm font-medium bg-white text-gray-700 hover:bg-gray-50">
                            Suivant
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Édition -->
    <div id="editModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 hidden overflow-y-auto h-full w-full z-50">
        <div class="relative top-20 mx-auto p-5 border w-96 max-w-[95%] shadow-lg rounded-lg bg-white">
            <div class="flex flex-col space-y-4">
                <!-- Header -->
                <div class="flex justify-between items-center border-b pb-3">
                    <h3 class="text-xl font-semibold text-gray-900">Modifier l'événement</h3>
                    <button onclick="closeEditModal()" class="text-gray-400 hover:text-gray-600">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <!-- Form -->
                <form class="space-y-4" action="{{ route('events.update', $event->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <!-- Image de l'événement -->
                    <div class="flex flex-col items-center space-y-3">
                        <img id="editEventImage"
                            src="https://images.unsplash.com/photo-1501281668745-f7f57925c3b4?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80"
                            alt="Image de l'événement" class="w-full h-40 rounded-lg object-cover">
                        <button type="button" class="text-sm text-blue-800 hover:text-blue-600">
                            Changer l'image
                        </button>
                    </div>

                    <!-- Nom de l'événement -->
                    <div>
                        <label for="editEventName" class="block text-sm font-medium text-gray-700 mb-1">
                            Nom de l'événement
                        </label>
                        <input type="text" id="editEventName" name="titre" value="{{$event->titre}}"
                            class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-800 focus:border-transparent">
                    </div>

                    <!-- Lieu -->
                    <div>
                        <label for="editEventLocation" class="block text-sm font-medium text-gray-700 mb-1">
                            Lieu
                        </label>
                        <input type="text" id="editEventLocation" name="location"
                            class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-800 focus:border-transparent">
                    </div>

                    <!-- Date -->
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label for="editStartDate" class="block text-sm font-medium text-gray-700 mb-1">
                                Date de début
                            </label>
                            <input type="date" id="editStartDate" name="start_date"
                                class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-800 focus:border-transparent">
                        </div>
                    </div>

                    <!-- Catégorie -->
                    <div>
                        <label for="addCategory" class="block text-sm font-medium text-gray-700 mb-1">
                            Catégorie
                        </label>
                        <select id="addCategory" name="categorie"
                            class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-800 focus:border-transparent">
                            <option value="sport">Sport</option>
                            <option value="musique">Musique</option>
                            <option value="education">Education</option>
                        </select>
                    </div>

                    <!-- Capacité -->
                    <div>
                        <label for="editCapacity" class="block text-sm font-medium text-gray-700 mb-1">
                            Capacité maximale
                        </label>
                        <input type="number" id="editCapacity" name="capacity"
                            class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-800 focus:border-transparent">
                    </div>

                    <!-- Description -->
                    <div>
                        <label for="editDescription" class="block text-sm font-medium text-gray-700 mb-1">
                            Description
                        </label>
                        <textarea id="editDescription" name="description" rows="4"
                            class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-800 focus:border-transparent"></textarea>
                    </div>

                    <!-- Buttons -->
                    <div class="flex space-x-3 pt-4">
                        <button type="submit"
                            class="flex-1 px-4 py-2 bg-gradient-to-r from-blue-800 to-emerald-600 text-white rounded-lg hover:opacity-90 transition duration-200">
                            Enregistrer
                        </button>
                        <button type="button" onclick="closeEditModal()"
                            class="flex-1 px-4 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition duration-200">
                            Annuler
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Add Event Modal -->
    <div id="addEventModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 hidden overflow-y-auto h-full w-full z-50">
        <div class="relative top-20 mx-auto p-5 border w-96 max-w-[95%] shadow-lg rounded-lg bg-white">
            <div class="flex flex-col space-y-4">
                <!-- Header -->
                <div class="flex justify-between items-center border-b pb-3">
                    <h3 class="text-xl font-semibold text-gray-900">Ajouter un événement</h3>
                    <button onclick="closeAddModal()" class="text-gray-400 hover:text-gray-600">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <!-- Form -->
                <form class="space-y-4" action="{{ route('events.store') }}" method="POST">
                    <!-- Image de l'événement -->
                    @csrf
                    <!-- Add this error section -->
                    @if ($errors->any())
                    <div class="bg-red-50 border-l-4 border-red-500 p-4">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <svg class="h-5 w-5 text-red-400" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm text-red-700">
                                    Please fix the following errors:
                                </p>
                                <ul class="mt-2 text-sm text-red-700">
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endif
                    <div class="flex flex-col items-center space-y-3">
                        <img id="addEventImage"
                            src="https://images.unsplash.com/photo-1501281668745-f7f57925c3b4?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80"
                            alt="Image de l'événement" class="w-full h-40 rounded-lg object-cover">
                        <button type="button" class="text-sm text-blue-800 hover:text-blue-600">
                            Changer l'image
                        </button>
                    </div>

                    <!-- Nom de l'événement -->
                    <div>
                        <label for="addEventName" class="block text-sm font-medium text-gray-700 mb-1">
                            Nom de l'événement
                        </label>
                        <input type="text" id="addEventName" name="titre"
                            class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-800 focus:border-transparent">
                    </div>

                    <!-- Lieu -->
                    <div>
                        <label for="addEventLocation" class="block text-sm font-medium text-gray-700 mb-1">
                            adresse
                        </label>
                        <input type="text" id="addEventLocation" name="adresse"
                            class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-800 focus:border-transparent">
                    </div>

                    <!-- Date -->
                    <div class="grid grid-cols-1 gap-4">
                        <div>
                            <label for="addStartDate" class="block text-sm font-medium text-gray-700 mb-1">
                                Date de début
                            </label>
                            <input type="datetime-local" id="addStartDate" name="date_heure"
                                class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-800 focus:border-transparent">
                        </div>
                    </div>

                    <!-- Catégorie -->
                    <div>
                        <label for="addCategory" class="block text-sm font-medium text-gray-700 mb-1">
                            Catégorie
                        </label>
                        <select id="addCategory" name="categorie"
                            class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-800 focus:border-transparent">
                            <option value="sport">Sport</option>
                            <option value="musique">Musique</option>
                            <option value="education">Education</option>
                        </select>
                    </div>

                    <!-- Capacité -->
                    <div>
                        <label for="addCapacity" class="block text-sm font-medium text-gray-700 mb-1">
                            Capacité maximale
                        </label>
                        <input type="number" min="10" max="150" id="addCapacity" name="max_participants"
                            class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-800 focus:border-transparent">
                    </div>

                    <!-- Description -->
                    <div>
                        <label for="addDescription" class="block text-sm font-medium text-gray-700 mb-1">
                            Description
                        </label>
                        <textarea id="addDescription" name="description" rows="4"
                            class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-800 focus:border-transparent"></textarea>
                    </div>

                    <!-- Buttons -->
                    <div class="flex space-x-3 pt-4">
                        <button type="submit"
                            class="flex-1 px-4 py-2 bg-gradient-to-r from-blue-800 to-emerald-600 text-white rounded-lg hover:opacity-90 transition duration-200">
                            Enregistrer
                        </button>
                        <button type="butston" onclick="closeAddModal()"
                            class="flex-1 px-4 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition duration-200">
                            Annuler
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Delete Confirmation Modal -->
    <div id="deleteModal" class="fixed inset-0 bg-black bg-opacity-50 hidden overflow-y-auto h-full w-full z-50">
        <div class="relative top-20 mx-auto p-5 border w-96 shadow-2xl rounded-xl bg-white">
            <div class="flex flex-col space-y-5">
                <!-- Header -->
                <div class="flex justify-between items-center pb-4 border-b border-gray-200">
                    <h3 class="text-xl font-semibold text-gray-900">Confirmer la suppression</h3>
                    <button onclick="closeDeleteModal()"
                        class="text-gray-400 hover:text-gray-600 transition-colors duration-200">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <!-- Content -->
                <div class="text-center py-4">
                    <div class="mx-auto flex items-center justify-center h-12 w-12 rounded-full bg-red-100 mb-4">
                        <svg class="h-6 w-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-medium text-gray-900 mb-2">Êtes-vous sûr ?</h3>
                    <p class="text-sm text-gray-500">
                        Voulez-vous vraiment supprimer cet événement ? Cette action est irréversible.
                    </p>
                </div>

                <!-- Footer Buttons -->
                <div class="flex justify-end space-x-3 pt-4 border-t border-gray-200">
                    <button type="button" onclick="closeDeleteModal()"
                        class="px-4 py-2 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 transition-colors duration-200">
                        Annuler
                    </button>
                    <form id="deleteEventForm" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition-colors duration-200">
                            Supprimer
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
    // Mobile menu toggle
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const sidebar = document.getElementById('sidebar');

    mobileMenuButton.addEventListener('click', () => {
        sidebar.classList.toggle('-translate-x-full');
    });

    // Close sidebar when clicking outside on mobile
    document.addEventListener('click', (e) => {
        if (window.innerWidth < 1024) {
            if (!sidebar.contains(e.target) && !mobileMenuButton.contains(e.target)) {
                sidebar.classList.add('-translate-x-full');
            }
        }
    });

    // Handle window resize
    window.addEventListener('resize', () => {
        if (window.innerWidth >= 1024) {
            sidebar.classList.remove('-translate-x-full');
        }
    });

    // Modal functions
    // Replace the existing openEditModal function and event listeners with this:
    function openEditModal(eventId) {
        const modal = document.getElementById('editModal');
        modal.classList.remove('hidden');
        document.body.style.overflow = 'hidden';
    }

    // Update event listeners for edit buttons
    document.querySelectorAll('.edit-button').forEach(button => {
        button.addEventListener('click', () => {
            const eventId = button.getAttribute('data-event-id');
            openEditModal(eventId);
        });
    });

    function closeEditModal() {
        const modal = document.getElementById('editModal');
        modal.classList.add('hidden');
        document.body.style.overflow = 'auto';
    }

    // Event listeners for edit buttons
    document.querySelectorAll('.edit-button').forEach(button => {
        button.addEventListener('click', () => {
            const eventData = {
                image: button.closest('tr').querySelector('img').src,
                name: button.closest('tr').querySelector('.text-sm.font-medium').textContent,
                location: button.closest('tr').querySelector('.text-xs.lg\\:text-sm').textContent,
                category: button.closest('tr').querySelector('.bg-purple-100').textContent.trim(),
                capacity: '2000',
                description: 'Description de l\'événement...'
            };
            openEditModal(eventData);
        });
    });

    // Close modal when clicking outside
    document.getElementById('editModal').addEventListener('click', (e) => {
        if (e.target === document.getElementById('editModal')) {
            closeEditModal();
        }
    });

    // Add these functions to your existing JavaScript
    function openAddModal() {
        const modal = document.getElementById('addEventModal');
        modal.classList.remove('hidden');
        document.body.style.overflow = 'hidden';
    }

    function closeAddModal() {
        const modal = document.getElementById('addEventModal');
        modal.classList.add('hidden');
        document.body.style.overflow = 'auto';
    }

    // Update your existing button click handler
    document.querySelector('button[onclick="openAddEventModal()"]').addEventListener('click', openAddModal);

    // Close modal when clicking outside
    document.getElementById('addEventModal').addEventListener('click', (e) => {
        if (e.target === document.getElementById('addEventModal')) {
            closeAddModal();
        }
    });

    // Add these functions to your existing JavaScript
    let currentEventId = null;

    function openDeleteModal(eventId) {
        currentEventId = eventId;
        const modal = document.getElementById('deleteModal');
        const form = document.getElementById('deleteEventForm');
        form.action = `/events/${eventId}`; // Update with your actual route
        modal.classList.remove('hidden');
        document.body.style.overflow = 'hidden';
    }

    function closeDeleteModal() {
        const modal = document.getElementById('deleteModal');
        modal.classList.add('hidden');
        document.body.style.overflow = 'auto';
        currentEventId = null;
    }

    // Close modal when clicking outside
    document.getElementById('deleteModal').addEventListener('click', (e) => {
        if (e.target === document.getElementById('deleteModal')) {
            closeDeleteModal();
        }
    });

    // Update your delete buttons to use the new modal
    document.querySelectorAll('.delete-button').forEach(button => {
        button.addEventListener('click', (e) => {
            e.preventDefault();
            const eventId = button.dataset.eventId;
            openDeleteModal(eventId);
        });
    });
    </script>
</body>

</html>