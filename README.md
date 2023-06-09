Transforme NFe(xml) em objetos PHP e vice-versa

Compatível com a NFe 3.10 - Pacote de Liberação No. 8f (09/10/2014)

### Como utilizar

Adicione a library

```sh
$ composer require GenesisTecnologia/nfephp-serialize
```

Adicione o autoload.php do composer no seu arquivo PHP.

```php
require_once 'vendor/autoload.php';  
```

### Serialize

Chame o método `xmlToObject` passando a string xml para transformá-la em um objeto `NfeProc`

```php
$nfeProc = NFePHPSerialize::xmlToObject(file_get_contents('nfe.xml'));
```

##### Exemplos

```php
//Capturando CNPJ do emitente
$cnpjEmitente = $nfeProc->getNFe()->getInfNFe()->getEmit()->getCNPJ();

//Capturando endereço do destinatário
$endereco = $nfeProc->getNFe()->getInfNFe()->getDest()->getEnderDest();
```

### Deserialize

Chame o método `objectToXml` passando o objeto `NfeProc` para transformá-la em uma string xml

```php
$xml = NFePHPSerialize::objectToXml(new NfeProc());
```

### License

The MIT License (MIT)
