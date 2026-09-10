<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Primer Sitio en PHP</title>
    <!-- Tailwind CSS para un diseño moderno y rápido -->
    <script src="https://jsdelivr.net"></script>
</head>
<body class="bg-slate-50 flex items-center justify-center min-h-screen font-sans antialiased text-slate-800">

    <main class="bg-white p-8 md:p-12 rounded-2xl shadow-xl shadow-slate-200/80 max-w-md w-full border border-slate-100 text-center transform transition hover:scale-[1.01]">
        <!-- Icono decorativo -->
        <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-indigo-50 text-indigo-600 mb-6">
            <svg xmlns="http://w3.org" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-8 h-8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 6.75 22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3-4.5 16.5" />
            </svg>
        </div>

        <!-- Mensaje Dinámico con PHP -->
        <h1 class="text-3xl font-extrabold tracking-tight text-slate-900 sm:text-4xl mb-3">
            <?php echo "¡Hola Mundo!"; ?>
        </h1>
        
        <p class="text-slate-500 text-base leading-relaxed mb-6">
            Tu servidor PHP está funcionando correctamente. Este es el comienzo de tu nuevo proyecto web.
        </p>

        <!-- Información del sistema (Opcional/Decorativa) -->
        <div class="pt-4 border-t border-slate-100 flex items-center justify-between text-xs font-medium text-slate-400">
            <span>Motor: PHP <?php echo phpversion(); ?></span>
            <span>Fecha: <?php echo date('d/m/Y'); ?></span>
        </div>
    </main>

</body>
</html>
