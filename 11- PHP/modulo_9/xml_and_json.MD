Criar arquivo XML:
Ex:
<rss>
    <informacoes>
        <title>Gusta</title>
        <idade>20</idade>
    </informacoes>
</rss>

Ler arquivo XML:
$xml = simplexml_load_file('nome_do_arq.xml');
print_r('$xml');
echo $xml->informacoes->title;


Ler arquivo Json (json_decode)   
    $json = '{"a":1,"b":2,"c":3,"d":4,"e":5}';

    //var_dump(json_decode($json));
    var_dump(json_decode($json, true));

    $obj = json_decode($json);
    $arr = json_decode($json, true);

    echo $obj->a;

Transformar array em JSON (json_encode):
 $array = ['ex1'=>'gugu', 'ex2'=>'gaga'];
 $json = json_encode($$array);
 echo $json;