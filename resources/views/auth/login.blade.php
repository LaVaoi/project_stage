<x-guest-layout >
    <div class="font-sans min-h-screen antialiased bg-white-900 pt-24 pb-5">
        <div class="flex flex-col justify-center sm:w-96 sm:m-auto mx-5 mb-5 space-y-8">
            <h1 class="font-bold text-center text-4xl text-black-500">
              <span class="text-green-500">
               Login
              </span>
            </h1>
            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />
            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />
          <form method="POST" action="{{ route('admin.login') }}">
            @csrf
            <div class="flex flex-col bg-white p-10 rounded-lg shadow space-y-6">
              <h1 class="font-bold text-xl text-center">Retrouver votre compte</h1>

              <div class="flex flex-col space-y-1">
                <input type="email" name="email" id="email" class="border-2 rounded px-3 py-2 w-full focus:outline-none focus:border-green-400 focus:shadow" placeholder="Email" :value="old('email')" required autofocus />
              </div>

              <div class="flex flex-col space-y-1">
                <input type="password" name="password" id="password" class="border-2 rounded px-3 py-2 w-full focus:outline-none focus:border-green-400 focus:shadow" placeholder="Password" required autocomplete="current-password"/>
              </div>



              <div class="flex flex-col-reverse sm:flex-row sm:justify-between items-center">

                <button type="submit" class="bg-green-500 text-white font-bold px-5 py-2 rounded focus:outline-none shadow hover:bg-green-700 transition-colors m-auto">Se connecter</button>
              </div>
            </div>
          </form>
          <div class="flex justify-center text-white-500 text-sm">
            <p>.AtlasInter@Copyright <script>document.write(new Date().getFullYear());</script></p>
          </div>
        </div>
    </div>
 
</x-guest-layout>
