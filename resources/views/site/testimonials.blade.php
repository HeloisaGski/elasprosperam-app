<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Depoimentos - Elas Prosperam</title>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#D2AD53',   // Ouro
                        secondary: '#BFB8AF', // Laranja Acinzentado
                        tertiary: '#DFE1DC',  // Verde Claro
                    }
                }
            }
        }
    </script>
    <style>
        body { font-family: 'Times New Roman MT', serif; }
        h1, h2, h3 { font-family: 'Solomon', sans-serif; }
    </style>
</head>
<body class="bg-tertiary text-gray-800 antialiased">
    @include('layouts.header') 

    <main class="max-w-6xl mx-auto py-20 px-6">
        <div class="text-center mb-16">
            <h2 class="text-5xl font-bold text-primary mb-4">Relatos de Prosperidade</h2>
            <p class="text-gray-600 text-lg">Histórias reais de mulheres que transformaram suas vidas e negócios conosco.</p>
        </div>

        <div class="columns-1 md:columns-2 lg:columns-3 gap-6 space-y-6">
            <div class="break-inside-avoid bg-white p-8 rounded-2xl shadow-sm border border-gray-100 italic">
                <p class="mb-6 leading-relaxed">"Participar da Jornada foi um divisor de águas. Eu não apenas organizei minhas finanças com a Vanessa Mello, mas recuperei minha autoconfiança com a Priscila. Hoje meu negócio prospera porque eu mudei por dentro."</p>
                <footer class="not-italic font-bold text-primary">— Ana Paula, Empreendedora</footer>
            </div>

            <div class="break-inside-avoid bg-white p-8 rounded-2xl shadow-sm border border-gray-100 italic">
                <p class="mb-6 leading-relaxed">"O Experience foi impactante, mas a Jornada me deu o suporte semanal que eu precisava. O grupo de WhatsApp é uma verdadeira egrégora de luz."</p>
                <footer class="not-italic font-bold text-primary">— Mariana L., Designer</footer>
            </div>

            <div class="break-inside-avoid bg-white p-8 rounded-2xl shadow-sm border border-gray-100 italic">
                <p class="mb-6 leading-relaxed">"Aprendi com a Vanessa Santos que prosperidade é energia. Minha vida estava travada e agora sinto que os caminhos finalmente se abriram."</p>
                <footer class="not-italic font-bold text-primary">— Carla Silva, Médica</footer>
            </div>
        </div>
    </main>
</body>
</html>