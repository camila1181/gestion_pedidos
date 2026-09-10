<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información del Entorno PHP</title>
    <script src="https://jsdelivr.net"></script>
</head>
<body class="bg-slate-900 text-slate-100 min-h-screen flex items-center justify-center p-4 antialiased">

    <div class="max-w-xl w-full bg-slate-800 rounded-2xl shadow-2xl border border-slate-700 p-6 md:p-8">
        <!-- Encabezado -->
        <div class="flex items-center gap-4 mb-6 border-b border-slate-700 pb-4">
            <div class="bg-indigo-500/10 p-3 rounded-xl text-indigo-400">
                <svg xmlns="http://w3.org" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.852l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
                </svg>
            </div>
            <div>
                <h1 class="text-xl font-bold text-white">Estado del Servidor</h1>
                <p class="text-xs text-slate-400">Variables de entorno y configuración activa</p>
            </div>
        </div>

        <!-- Lista de Detalles Técnicos -->
        <dl class="space-y-3 text-sm">
            <div class="flex justify-between p-3 rounded-lg bg-slate-850 border border-slate-700/50">
                <dt class="text-slate-400 font-medium">Versión de PHP:</dt>
                <dd class="text-indigo-400 font-mono font-bold"><?php echo phpversion(); ?></dd>
            </div>

            <div class="flex justify-between p-3 rounded-lg bg-slate-850 border border-slate-700/50">
                <dt class="text-slate-400 font-medium">Software del Servidor:</dt>
                <dd class="text-slate-200 font-mono text-xs"><?php echo $_SERVER['SERVER_SOFTWARE']; ?></dd>
            </div>

            <div class="flex justify-between p-3 rounded-lg bg-slate-850 border border-slate-700/50">
                <dt class="text-slate-400 font-medium">Sistema Operativo:</dt>
                <dd class="text-slate-200 text-xs"><?php echo php_uname('s') . ' (' . php_uname('r') . ')'; ?></dd>
            </div>

            <div class="flex justify-between p-3 rounded-lg bg-slate-850 border border-slate-700/50">
                <dt class="text-slate-400 font-medium">Límite de Memoria (Memory Limit):</dt>
                <dd class="text-emerald-400 font-mono"><?php echo ini_get('memory_limit'); ?></dd>
            </div>

            <div class="flex justify-between p-3 rounded-lg bg-slate-850 border border-slate-700/50">
                <dt class="text-slate-400 font-medium">Tamaño Máximo de Carga (Upload):</dt>
                <dd class="text-emerald-400 font-mono"><?php echo ini_get('upload_max_filesize'); ?></dd>
            </div>

            <div class="flex justify-between p-3 rounded-lg bg-slate-850 border border-slate-700/50">
                <dt class="text-slate-400 font-medium">Zona Horaria:</dt>
                <dd class="text-slate-200 font-mono"><?php echo date_default_timezone_get(); ?></dd>
            </div>
        </dl>

        <!-- Recordatorio de Seguridad -->
        <div class="mt-6 bg-amber-500/10 border border-amber-500/20 p-3 rounded-xl flex gap-3 items-start">
            <svg xmlns="http://w3.org" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 text-amber-500 shrink-0 mt-0.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
            </svg>
            <p class="text-xs text-amber-200 leading-relaxed">
                <strong class="text-amber-400">Nota de seguridad:</strong> Recuerda eliminar o restringir este archivo si subes tu proyecto a una **rama (branch)** de producción pública.
            </p>
        </div>
    </div>

</body>
</html>
