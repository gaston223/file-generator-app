<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
            <form method="POST" action="{{ route('users.file')}}">
                @csrf
                <button type="submit" class="inline-flex items-center mt-2 px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                    Générer un fichier
                </button>
            </form>
            @if ($message = Session::get('info'))
                <strong class="mt-2">{{ $message }}</strong>
            @endif
            <p id="file_url" class="mt-2">
                Lien du fichier :
            </p>
            <div id="app">

            </div>
        </div>
    </div>
</x-app-layout>

<script>
    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('d32133c1331b8621a4a8', {
        cluster: 'eu'
    });

    var channel = pusher.subscribe('userfile');
    channel.bind('UserFileGenerated', function(data) {
        console.log(JSON.stringify(data));
        document.getElementById("file_url").innerText = JSON.stringify(data);
    });
</script>
