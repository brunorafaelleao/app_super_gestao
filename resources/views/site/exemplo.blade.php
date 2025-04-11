<!-- index.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Exibir/Recolher Texto</title>
    <style>
        .conteudo {
            display: none;
            margin-top: 10px;
        }
    </style>
</head>
<body>

<?php
// Gerando conteúdo com PHP
$titulos = ["Item 1", "Item 2", "Item 3"];
$descricoes = [
    "Descrição do item 1.",
    "Descrição do item 2.",
    "Descrição do item 3."
];

foreach ($titulos as $i => $titulo): ?>
    <div>
        <button onclick="toggleConteudo('conteudo<?= $i ?>')"><?= $titulo ?></button>
        <div class="conteudo" id="conteudo<?= $i ?>">
            <?= $descricoes[$i] ?>
        </div>
    </div>
<?php endforeach; ?>

<script>
    function toggleConteudo(id) {
        var el = document.getElementById(id);
        el.style.display = (el.style.display === 'none' || el.style.display === '') ? 'block' : 'none';
    }
</script>

</body>
</html>
