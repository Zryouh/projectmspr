<x-guest-layout>
    <div class="container mx-auto ">
            <div class="bg-gray-200 py-5">
                <div class="text">
                    <h3>Autoriser un nouvel appareil</h3>

                    <p>Il semble que vous vous connectiez à partir d'un ordinateur ou d'un appareil pour la première
                        fois, ou depuis un certain temps.</p>
                    <p>
                        Veuillez <strong>cliquer sur le lien de confirmation dans l'e-mail que nous venons de vous
                            envoyer.</strong> Il s'agit d'un processus qui protège la sécurité de votre compte.
                </div>
                <div class="authorize__resend">
                    <form action="{{ route('authorize.resend') }}" method="POST">
                        {{ csrf_field() }}

                        <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                            Renvoyer le mail
                        </button>
                    </form>
                </div>
            </div>
    </div>
</x-guest-layout>
