<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mon Portfolio | Développeur Web & Mobile</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-white font-sans">

  <!-- Header / Navbar -->
  <header class="flex justify-between items-center p-6 max-w-6xl mx-auto">
    <h1 class="text-2xl font-bold text-blue-500">DevPortfolio.</h1>
    <a href="#contact" class="bg-blue-600 hover:bg-blue-700 px-4 py-2 rounded-lg text-sm font-semibold transition">Contactez-moi</a>
  </header>

  <!-- Hero Section -->
  <section class="text-center py-20 px-4 max-w-4xl mx-auto">
    <h2 class="text-4xl md:text-6xl font-extrabold mb-6">
      Je développe vos <span class="text-blue-500">Sites Web</span> & <span class="text-blue-500">Applications</span> sur-mesure.
    </h2>
    <p class="text-gray-400 text-lg mb-8">
      Transformez vos idées en solutions numériques performantes (E-commerce, Apps Mobile, Vitrine).
    </p>
    <a href="#projets" class="border border-blue-500 text-blue-500 hover:bg-blue-500 hover:text-white px-6 py-3 rounded-lg font-medium transition">Voir mes projets</a>
  </section>

  <!-- Section Projets -->
  <section id="projets" class="py-16 max-w-6xl mx-auto px-6">
    <h3 class="text-3xl font-bold mb-10 text-center">Mes Projets Récents</h3>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
      
      <!-- Projet 1 -->
      <div class="bg-gray-800 rounded-xl overflow-hidden border border-gray-700 hover:border-blue-500 transition">
        <div class="h-48 bg-gray-700 flex items-center justify-center text-gray-400">[ Capture d'écran du projet 1 ]</div>
        <div class="p-6">
          <h4 class="text-xl font-bold mb-2">Plateforme E-Commerce</h4>
          <p class="text-gray-400 text-sm mb-4">Site d'achat/vente en ligne avec gestion de stock et paiement à la livraison.</p>
          <div class="flex justify-between items-center">
            <span class="text-xs bg-blue-900 text-blue-300 px-3 py-1 rounded-full">React / Node.js</span>
            <a href="#" class="text-blue-400 hover:underline text-sm">Voir la Demo →</a>
          </div>
        </div>
      </div>

      <!-- Projet 2 -->
      <div class="bg-gray-800 rounded-xl overflow-hidden border border-gray-700 hover:border-blue-500 transition">
        <div class="h-48 bg-gray-700 flex items-center justify-center text-gray-400">[ Capture d'écran du projet 2 ]</div>
        <div class="p-6">
          <h4 class="text-xl font-bold mb-2">Application Mobile de Gestion</h4>
          <p class="text-gray-400 text-sm mb-4">Application Android/iOS pour la gestion des commandes et clients.</p>
          <div class="flex justify-between items-center">
            <span class="text-xs bg-blue-900 text-blue-300 px-3 py-1 rounded-full">Flutter / Firebase</span>
            <a href="#" class="text-blue-400 hover:underline text-sm">Voir la Demo →</a>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- Section Contact -->
  <section id="contact" class="bg-gray-800 py-16 text-center">
    <h3 class="text-3xl font-bold mb-4">Un projet en tête ?</h3>
    <p class="text-gray-400 mb-6">Discutons de votre projet sur WhatsApp ou par téléphone.</p>
    <a href="https://wa.me/213000000000" target="_blank" class="bg-green-600 hover:bg-green-700 text-white font-bold px-8 py-3 rounded-xl shadow-lg transition">
      Contactez-moi sur WhatsApp
    </a>
  </section>

</body>
</html>
