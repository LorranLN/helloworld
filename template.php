

<?php 

// Carrega configurações globais
    require("_global.php");

$page = array(
    "title" => "- Lendo e Entendendo", // Título desta página
    "css" => "index.css", // Folha de estilos desta página
    "js" => "index.js", // JavaScript desta página
);



// Inclui o cabeçalho do documento
    require("_header.php");
?>

<article>
    <h2> Página Inicial</h2>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae in fuga nisi culpa nesciunt vero minus sapiente quas exercitationem impedit porro reiciendis iusto, provident ea, amet officia laborum id esse!
</article>

<aside>
    <h3>Complemento</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet molestias mollitia aliquam quasi eligendi rerum expedita ducimus assumenda nisi? Error expedita illo incidunt aut dicta, officiis enim quis obcaecati vel.</p>
</aside>

<?php require("_footer.php")?>