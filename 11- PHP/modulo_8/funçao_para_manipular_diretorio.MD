\\Função para verificar se o arquivo existe:
file_exist("nome_do_arquivo.tipo_do_arq");

\\Funçao para modificar ou criar um arq novo:
file_put_contents('exTest.txt', "Algum texto de exemplo");

\\Ler o que tem em algum arquivo
$readContent = file_get_content("file.txt");
echo $readContent;

\\Apagar arquivos no PHP:
unlink('file.txt');

\\Criar pastas
mkdir('nome_da_pasta');

\\Verificar se uma pasta existe:
if(is_dir("nome_da_pasta)){
    echo "Essa pasta é válida";
}

\\Deletar uma pasta:
rmdir('test');

