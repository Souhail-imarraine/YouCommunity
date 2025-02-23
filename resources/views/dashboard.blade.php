<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Utilisateurs - EventConnect</title>
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
    <div class="lg:hidden fixed top-0 left-0 w-full bg-white z-50 px-4 py-3 flex items-center justify-between shadow-sm">
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
                <a href="#"
                    class="flex items-center px-4 py-3 text-white bg-gradient-to-r from-blue-800 to-emerald-600 rounded-lg">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                    Utilisateurs
                </a>
                <a href="/events" class="flex items-center px-4 py-3 text-gray-700 hover:bg-gray-100 rounded-lg">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    Événements
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
            <h2 class="text-xl lg:text-2xl font-bold text-gray-900">Gestion des Utilisateurs</h2>
        </div>

        <!-- Filters -->
        <div class="bg-white p-4 rounded-lg shadow-sm mb-6">
            <div class="flex flex-col lg:flex-row space-y-4 lg:space-y-0 lg:space-x-4">
                <div class="flex-1">
                    <input type="text" placeholder="Rechercher un utilisateur..."
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-800 focus:border-transparent">
                </div>
                <div class="flex flex-col sm:flex-row gap-4">
                    <select
                        class="w-full sm:w-auto px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-800 focus:border-transparent">
                        <option>Tous les rôles</option>
                        <option>Administrateur</option>
                        <option>Utilisateur</option>
                        <option>Organisateur</option>
                    </select>
                    <select
                        class="w-full sm:w-auto px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-800 focus:border-transparent">
                        <option>Statut</option>
                        <option>Actif</option>
                        <option>Inactif</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- Users Table -->
        <div class="bg-white rounded-lg shadow-sm overflow-hidden">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Utilisateur
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Rôle
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Statut
                            </th>
                            <th
                                class="hidden md:table-cell px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Date d'inscription
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <!-- User Row -->
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <img class="h-8 w-8 lg:h-10 lg:w-10 rounded-full"
                                        src="https://ui-avatars.com/api/?name=John+Doe" alt="">
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">John Doe</div>
                                        <div class="text-xs lg:text-sm text-gray-500">john@example.com</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span
                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">
                                    Administrateur
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span
                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                    Actif
                                </span>
                            </td>
                            <td class="hidden md:table-cell px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                01/01/2024
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <div class="flex space-x-3">
                                    <button
                                        class="text-blue-800 hover:text-emerald-600 transition-colors duration-200 edit-button">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                        </svg>
                                    </button>
                                    <button onclick="openDeleteModal('1')" class="text-red-600 hover:text-red-800 transition-colors duration-200">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <!-- Répétez ce bloc pour plus d'utilisateurs -->
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
                    <h3 class="text-xl font-semibold text-gray-900">Modifier l'utilisateur</h3>
                    <button onclick="closeEditModal()" class="text-gray-400 hover:text-gray-600">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <!-- Form -->
                <form class="space-y-4">
                    <!-- Photo de profil -->
                    <div class="flex flex-col items-center space-y-3">
                        <img id="editUserImage" src="https://ui-avatars.com/api/?name=John+Doe" alt="Photo de profil"
                            class="w-24 h-24 rounded-full">
                        <button type="button" class="text-sm text-blue-800 hover:text-blue-600">
                            Changer la photo
                        </button>
                    </div>

                    <!-- Nom -->
                    <div>
                        <label for="editName" class="block text-sm font-medium text-gray-700 mb-1">
                            Nom complet
                        </label>
                        <input type="text" id="editName" name="name"
                            class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-800 focus:border-transparent">
                    </div>

                    <!-- Email -->
                    <div>
                        <label for="editEmail" class="block text-sm font-medium text-gray-700 mb-1">
                            Email
                        </label>
                        <input type="email" id="editEmail" name="email"
                            class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-800 focus:border-transparent">
                    </div>

                    <!-- Rôle -->
                    <div>
                        <label for="editRole" class="block text-sm font-medium text-gray-700 mb-1">
                            Rôle
                        </label>
                        <select id="editRole" name="role"
                            class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-800 focus:border-transparent">
                            <option value="admin">Administrateur</option>
                            <option value="user">Utilisateur</option>
                            <option value="organizer">Organisateur</option>
                        </select>
                    </div>

                    <!-- Statut -->
                    <div>
                        <label for="editStatus" class="block text-sm font-medium text-gray-700 mb-1">
                            Statut
                        </label>
                        <select id="editStatus" name="status"
                            class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-800 focus:border-transparent">
                            <option value="active">Actif</option>
                            <option value="inactive">Inactif</option>
                        </select>
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

    <!-- Delete Modal -->
    <div id="deleteModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 hidden overflow-y-auto h-full w-full z-50">
        <div class="relative top-20 mx-auto p-5 border w-96 max-w-[95%] shadow-lg rounded-lg bg-white">
            <div class="flex flex-col space-y-4">
                <!-- Header -->
                <div class="flex justify-between items-center border-b pb-3">
                    <h3 class="text-xl font-semibold text-gray-900">Supprimer l'utilisateur</h3>
                    <button onclick="closeDeleteModal()" class="text-gray-400 hover:text-gray-600">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <!-- Form -->
                <form id="deleteUserForm" method="POST" action="/users/1">
                    @csrf
                    @method('DELETE')
                    <p>Êtes-vous sûr de vouloir supprimer cet utilisateur ?</p>
                    <div class="flex space-x-3 pt-4">
                        <button type="submit"
                            class="flex-1 px-4 py-2 bg-gradient-to-r from-blue-800 to-emerald-600 text-white rounded-lg hover:opacity-90 transition duration-200">
                            Supprimer
                        </button>
                        <button type="button" onclick="closeDeleteModal()"
                            class="flex-1 px-4 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition duration-200">
                            Annuler
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modifiez le script existant et ajoutez ces nouvelles fonctions -->
    <script>
        // ... Gardez le code existant du menu mobile ...

        // Fonctions pour la modale d'édition
        function openEditModal(userData) {
            const modal = document.getElementById('editModal');

            // Remplir les champs avec les données de l'utilisateur
            document.getElementById('editUserImage').src = userData.image;
            document.getElementById('editName').value = userData.name;
            document.getElementById('editEmail').value = userData.email;
            document.getElementById('editRole').value = userData.role;
            document.getElementById('editStatus').value = userData.status;

            modal.classList.remove('hidden');
            document.body.style.overflow = 'hidden'; // Empêche le défilement
        }

        function closeEditModal() {
            const modal = document.getElementById('editModal');
            modal.classList.add('hidden');
            document.body.style.overflow = 'auto'; // Réactive le défilement
        }

        // Modifier le bouton d'édition dans la table
        document.querySelectorAll('.edit-button').forEach(button => {
            button.addEventListener('click', () => {
                const userData = {
                    image: button.closest('tr').querySelector('img').src,
                    name: button.closest('tr').querySelector('.text-sm.font-medium').textContent,
                    email: button.closest('tr').querySelector('.text-xs.lg\\:text-sm').textContent,
                    role: button.closest('tr').querySelector('.bg-blue-100').textContent.trim(),
                    status: button.closest('tr').querySelector('.bg-green-100') ? 'active' : 'inactive'
                };
                openEditModal(userData);
            });
        });

        // Fermer la modale si on clique en dehors
        document.getElementById('editModal').addEventListener('click', (e) => {
            if (e.target === document.getElementById('editModal')) {
                closeEditModal();
            }
        });

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

        // Delete modal functions
        function openDeleteModal(userId) {
            console.log('Opening delete modal for user:', userId); // Debug line
            const modal = document.getElementById('deleteModal');
            if (modal) {
                modal.classList.remove('hidden');
                document.body.style.overflow = 'hidden';
                
                // Update the form action
                const form = document.getElementById('deleteUserForm');
                if (form) {
                    form.action = `/users/${userId}`;
                }
            }
        }

        function closeDeleteModal() {
            console.log('Closing delete modal'); // Debug line
            const modal = document.getElementById('deleteModal');
            if (modal) {
                modal.classList.add('hidden');
                document.body.style.overflow = 'auto';
            }
        }

        // Close modal when clicking outside
        document.getElementById('deleteModal').addEventListener('click', (e) => {
            if (e.target === document.getElementById('deleteModal')) {
                closeDeleteModal();
            }
        });
    </script>
</body>

</html>
