<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil - EventConnect</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Header avec photo de couverture -->
    <div class="relative h-48 md:h-64 bg-gradient-to-r from-blue-800 to-emerald-600">
        <div class="absolute bottom-0 left-0 right-0 px-4 py-6 bg-gradient-to-t from-black/50 to-transparent">
            <div class="max-w-7xl mx-auto flex items-end space-x-4">
                <div class="relative">
                    <img src="https://ui-avatars.com/api/?name=John+Doe&size=128"
                         alt="Photo de profil"
                         class="w-24 h-24 md:w-32 md:h-32 rounded-full border-4 border-white">
                    <button class="absolute bottom-0 right-0 p-1.5 bg-gray-100 rounded-full hover:bg-gray-200 transition">
                        <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                    </button>
                </div>
                <div class="pb-2">
                    <h1 class="text-2xl font-bold text-white">John Doe</h1>
                    <p class="text-gray-200">Organisateur d'événements • Paris, France</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Contenu Principal -->
    <div class="max-w-7xl mx-auto px-4 py-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Colonne de gauche -->
            <div class="md:col-span-1 space-y-6">
                <!-- Carte Informations -->
                <div class="bg-white rounded-xl shadow-sm p-6">
                    <h2 class="text-lg font-semibold text-gray-900 mb-4">Informations</h2>
                    <div class="space-y-4">
                        <div class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            john.doe@example.com
                        </div>
                        <div class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                            +33 6 12 34 56 78
                        </div>
                        <div class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            Paris, France
                        </div>
                    </div>
                    <button class="mt-6 w-full px-4 py-2 text-sm font-medium text-blue-800 border border-blue-800 rounded-lg hover:bg-blue-50 transition duration-200">
                        Modifier le profil
                    </button>
                </div>

                <!-- Carte Statistiques -->
                <div class="bg-white rounded-xl shadow-sm p-6">
                    <h2 class="text-lg font-semibold text-gray-900 mb-4">Statistiques</h2>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="text-center">
                            <div class="text-2xl font-bold text-blue-800">24</div>
                            <div class="text-sm text-gray-600">Événements</div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl font-bold text-emerald-600">1.2k</div>
                            <div class="text-sm text-gray-600">Participants</div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl font-bold text-purple-600">4.8</div>
                            <div class="text-sm text-gray-600">Note moyenne</div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl font-bold text-yellow-600">89%</div>
                            <div class="text-sm text-gray-600">Satisfaction</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Colonne principale -->
            <div class="md:col-span-2 space-y-6">
                <!-- À propos -->
                <div class="bg-white rounded-xl shadow-sm p-6">
                    <h2 class="text-lg font-semibold text-gray-900 mb-4">À propos</h2>
                    <p class="text-gray-600">
                        Passionné par l'organisation d'événements culturels et sportifs depuis plus de 5 ans.
                        Spécialisé dans la création d'expériences uniques et mémorables pour tous les participants.
                    </p>
                </div>

                <!-- Événements à venir -->
                <div class="bg-white rounded-xl shadow-sm p-6">
                    <h2 class="text-lg font-semibold text-gray-900 mb-4">Événements à venir</h2>
                    <div class="space-y-4">
                        <!-- Événement -->
                        <div class="flex items-center space-x-4 p-4 bg-gray-50 rounded-lg">
                            <img src="https://images.unsplash.com/photo-1540575467063-178a50c2df87"
                                 alt="Événement"
                                 class="w-20 h-20 rounded-lg object-cover">
                            <div class="flex-1">
                                <h3 class="font-medium text-gray-900">Festival d'été 2024</h3>
                                <p class="text-sm text-gray-600">25 Juin 2024 • Paris</p>
                                <div class="mt-2">
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                        245/500 participants
                                    </span>
                                </div>
                            </div>
                            <button class="text-gray-400 hover:text-gray-600">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </button>
                        </div>
                        <!-- Répéter pour plus d'événements -->
                    </div>
                </div>

                <!-- Avis et commentaires -->
                <div class="bg-white rounded-xl shadow-sm p-6">
                    <h2 class="text-lg font-semibold text-gray-900 mb-4">Avis et commentaires</h2>
                    <div class="space-y-4">
                        <!-- Commentaire -->
                        <div class="flex space-x-4">
                            <img src="https://ui-avatars.com/api/?name=Marie+B"
                                 alt="Marie B."
                                 class="w-10 h-10 rounded-full">
                            <div>
                                <div class="flex items-center">
                                    <h3 class="font-medium text-gray-900">Marie B.</h3>
                                    <span class="mx-2 text-gray-300">•</span>
                                    <div class="flex items-center text-yellow-400">
                                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>
                                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>
                                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>
                                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>
                                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>
                                    </div>
                                </div>
                                <p class="mt-1 text-sm text-gray-600">
                                    Excellent organisateur ! Les événements sont toujours bien pensés et parfaitement exécutés.
                                </p>
                                <p class="mt-1 text-xs text-gray-500">Il y a 2 jours</p>
                            </div>
                        </div>
                        <!-- Répéter pour plus de commentaires -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
