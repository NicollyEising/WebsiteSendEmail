<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulário</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-100">


  <div class="grid grid-cols-1 md:grid-cols-2 gap-6 w-full max-w-4xl bg-white p-8 rounded-xl shadow-lg">

  <form action="enviar_email.php" method="POST">

  <!-- Coluna com formulário -->
    <div class="space-y-6">

        <h1 class="text-2xl font-bold text-center text-slate-700">Enviar Email</h1>

      <!-- Email Input -->
      <div class="w-full">
        <div class="relative">
          <input
            name="email"
            type="email"
            class="peer w-full bg-transparent placeholder-transparent text-slate-700 text-sm border border-slate-300 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-500 shadow-sm"
            placeholder="Email"
          />
          <label class="absolute bg-white px-1 left-2.5 top-2.5 text-slate-400 text-sm transition-all peer-placeholder-shown:top-2.5 peer-placeholder-shown:text-slate-400 peer-placeholder-shown:text-sm peer-focus:-top-2 peer-focus:text-xs peer-focus:text-slate-500">
            Email
          </label>
        </div>
      </div>

      <!-- Title Input -->
      <div class="w-full">
        <div class="relative">
          <input
            name ="title"
            type="text"
            class="peer w-full bg-transparent placeholder-transparent text-slate-700 text-sm border border-slate-300 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-500 shadow-sm"
            placeholder="Title"
          />
          <label class="absolute bg-white px-1 left-2.5 top-2.5 text-slate-400 text-sm transition-all peer-placeholder-shown:top-2.5 peer-placeholder-shown:text-slate-400 peer-placeholder-shown:text-sm peer-focus:-top-2 peer-focus:text-xs peer-focus:text-slate-500">
            Title
          </label>
        </div>
      </div>

      <!-- Message Textarea -->
      <div class="w-full">
        <div class="relative">
          <textarea
            name ="message"
            class="peer w-full bg-transparent placeholder-transparent text-slate-700 text-sm border border-slate-300 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-500 shadow-sm"
            rows="4"
            placeholder="Message"
          ></textarea>
          <label class="absolute bg-white px-1 left-2.5 top-2.5 text-slate-400 text-sm transition-all peer-placeholder-shown:top-2.5 peer-placeholder-shown:text-slate-400 peer-placeholder-shown:text-sm peer-focus:-top-2 peer-focus:text-xs peer-focus:text-slate-500">
            Message
          </label>
        </div>
      </div>

      <button type="submit" class="w-full rounded-md bg-slate-800 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-slate-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" type="button">
        Block Level Button
      </button>
      </form>
    </div>

    <!-- Coluna ao lado -->
    <div class="flex items-center justify-center">
        <img src="email.svg" alt="Ícone de email" height="300" width="300">
    </div>

  </div>

</body>
</html>
