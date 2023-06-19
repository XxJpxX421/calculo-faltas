<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcule sua frequência</title>
    <script>
        window.onload = function() {
            var diaRadio = document.getElementById('dia');
            var semanaRadio = document.getElementById('semana');
            var diaContent = document.getElementById('dia-content');
            var semanaContent = document.getElementById('semana-content');

            diaRadio.addEventListener('change', function() {
                if (diaRadio.checked) {
                    diaContent.style.display = 'block';
                    semanaContent.style.display = 'none';
                }
            });

            semanaRadio.addEventListener('change', function() {
                if (semanaRadio.checked) {
                    diaContent.style.display = 'none';
                    semanaContent.style.display = 'block';
                }
            });
        };
    </script>
    <style>
        #dia-content, #semana-content {
            display: none;
        }
    </style>
</head>
<body>
    <p>Você quer calcular sua frequência como?<br>
        (Caso as aulas diferenciem durante a semana, escolha a segunda opção para um resultado mais preciso)</p>
    <input type="radio" name="tipo" id="dia">Por dia
    <input type="radio" name="tipo" id="semana">Por semana

    <div id="dia-content">
        <!-- Conteúdo a ser exibido quando "Por dia" estiver selecionado -->
        <form action="calculos.php" method="post">
        <p>Quantas aulas você tem por dia?</p>
        <input type="number" name="aulas_dia" id="aulas_dia"><br>
        <p>Quantas aulas você faltou?</p>
        <input type="number" name="faltas_dia" id="faltas_dia"><br>
        <button type="submit">Enviar</button>
        </form>
    </div>

    <div id="semana-content">
        <!-- Conteúdo a ser exibido quando "Por semana" estiver selecionado -->
        <form action="calculos.php" method="post">
        <p>Quantas aulas você tem por semana?</p>
        <input type="number" name="aulas_semana" id="aulas_semana"><br>
        <p>Quantas aulas você faltou?</p>
        <input type="number" name="faltas_semana" id="faltas_semana"><br>
        <button type="submit">Enviar</button>
    </form>
    </div>
</body>
</html>