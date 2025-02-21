<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Profil - EventConnect</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body { font-family: 'Poppins', sans-serif; }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Navigation (same as index) -->

    <!-- Spacer for Fixed Header -->
    <div class="h-32"></div>

    <!-- Profile Header -->
    <!-- Profile Header -->
    <div class="relative bg-gradient-to-r from-blue-800 to-emerald-600 h-64 md:h-80">
        <div class="absolute inset-0 bg-black opacity-30"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative h-full">
            <div class="flex flex-col justify-end h-full pb-6">
                <div class="flex flex-col md:flex-row items-center md:items-end space-y-6 md:space-y-0">
                    <div class="relative z-10">
                        <img src="https://ui-avatars.com/api/?name=John+Doe&size=200&background=random"
                             alt="Profile"
                             class="w-32 h-32 md:w-40 md:h-40 rounded-full border-4 border-white shadow-xl object-cover transform hover:scale-105 transition-transform duration-300">
                        <button class="absolute bottom-2 right-2 bg-white rounded-full p-2.5 shadow-lg hover:bg-gray-100 hover:scale-110 transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-blue-800">
                            <i class="fas fa-camera text-gray-600"></i>
                        </button>
                    </div>
                    <div class="md:ml-8 text-center md:text-left">
                        <h1 class="text-3xl md:text-4xl font-bold text-white mb-2 tracking-tight">John Doe</h1>
                        <div class="flex flex-col sm:flex-row items-center sm:items-center gap-4 sm:gap-6">
                            <span class="text-white/90 flex items-center bg-black/20 px-4 py-2 rounded-full">
                                <i class="fas fa-calendar-alt mr-2"></i>
                                Membre depuis Janvier 2024
                            </span>
                            <span class="text-white/90 flex items-center bg-black/20 px-4 py-2 rounded-full">
                                <i class="fas fa-map-marker-alt mr-2"></i>
                                Paris, France
                            </span>
                            <span class="text-white/90 flex items-center bg-black/20 px-4 py-2 rounded-full">
                                <i class="fas fa-star mr-2"></i>
                                Organisateur Pro
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 -mt-8">
        <div class="bg-white rounded-xl shadow-lg p-6">
            <!-- Profile Navigation -->
            <div class="flex flex-wrap gap-4 border-b border-gray-200 -mx-6 px-6 overflow-x-auto">
                <button class="text-blue-800 border-b-2 border-blue-800 pb-4 px-4 font-medium whitespace-nowrap">
                    <i class="fas fa-user mr-2"></i>Profil
                </button>
                <button class="text-gray-500 hover:text-gray-700 pb-4 px-4 font-medium whitespace-nowrap">
                    <i class="fas fa-calendar-check mr-2"></i>Mes Événements
                </button>
                <button class="text-gray-500 hover:text-gray-700 pb-4 px-4 font-medium whitespace-nowrap">
                    <i class="fas fa-ticket-alt mr-2"></i>Participations
                </button>
                <button class="text-gray-500 hover:text-gray-700 pb-4 px-4 font-medium whitespace-nowrap">
                    <i class="fas fa-cog mr-2"></i>Paramètres
                </button>
            </div>

            <!-- Profile Content -->
            <div class="mt-8 grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Left Column -->
                <div class="lg:col-span-2 space-y-8">
                    <!-- Personal Information -->
                    <div class="bg-white p-6 rounded-lg border border-gray-200">
                        <h3 class="text-xl font-bold text-gray-900 mb-6 flex items-center">
                            <i class="fas fa-user-circle mr-3 text-blue-800"></i>
                            Informations Personnelles
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Nom complet</label>
                                <input type="text" value="John Doe"
                                       class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-800 focus:border-transparent">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                                <input type="email" value="john.doe@example.com"
                                       class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-800 focus:border-transparent">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Téléphone</label>
                                <input type="tel" value="+33 6 12 34 56 78"
                                       class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-800 focus:border-transparent">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Ville</label>
                                <input type="text" value="Paris"
                                       class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-800 focus:border-transparent">
                            </div>
                        </div>
                    </div>

                    <!-- Bio Section -->
                    <div class="bg-white p-6 rounded-lg border border-gray-200">
                        <h3 class="text-xl font-bold text-gray-900 mb-6 flex items-center">
                            <i class="fas fa-edit mr-3 text-blue-800"></i>
                            Biographie
                        </h3>
                        <textarea rows="4"
                                  class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-800 focus:border-transparent"
                                  placeholder="Parlez-nous de vous..."></textarea>
                    </div>
                </div>

                <!-- Right Column -->
                <div class="space-y-8">
                    <!-- Statistics Card -->
                    <div class="bg-white p-6 rounded-lg border border-gray-200">
                        <h3 class="text-xl font-bold text-gray-900 mb-6">Statistiques</h3>
                        <div class="space-y-4">
                            <div class="flex justify-between items-center">
                                <span class="text-gray-600">Événements créés</span>
                                <span class="text-blue-800 font-semibold">12</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-gray-600">Participations</span>
                                <span class="text-blue-800 font-semibold">28</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-gray-600">Commentaires</span>
                                <span class="text-blue-800 font-semibold">45</span>
                            </div>
                        </div>
                    </div>

                    <!-- Interests -->
                    <div class="bg-white p-6 rounded-lg border border-gray-200">
                        <h3 class="text-xl font-bold text-gray-900 mb-6">Centres d'intérêt</h3>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm">Musique</span>
                            <span class="px-3 py-1 bg-emerald-100 text-emerald-600 rounded-full text-sm">Sport</span>
                            <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm">Tech</span>
                            <button class="px-3 py-1 border border-gray-300 rounded-full text-sm text-gray-600 hover:bg-gray-50">
                                + Ajouter
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Save Button -->
            <div class="mt-8 flex justify-end">
                <button class="bg-gradient-to-r from-blue-800 to-emerald-600 text-white px-8 py-3 rounded-lg hover:opacity-90 transition duration-300 font-medium">
                    Sauvegarder les modifications
                </button>
            </div>
        </div>
    </div>

    <!-- Spacer -->
    <div class="h-16"></div>

    <!-- Footer (same as index) -->
</body>
</html>
