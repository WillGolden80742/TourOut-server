# Servidor do Aplicativo Guia Turístico para Deficientes Visuais

Este repositório contém o código do servidor PHP responsável por fornecer os dados do aplicativo "Guia Turístico para Deficientes Visuais".

## Sobre o Servidor

O servidor foi desenvolvido em PHP e provê uma API REST para o aplicativo mobile se comunicar e obter os dados necessários sobre pontos turísticos. 

Ele faz interface com um banco de dados MySQL que armazena informações como:

- Nome e ID dos pontos turísticos
- Coordenadas geográficas (latitude e longitude)
- Descrições em texto e áudio

## Funcionalidades

As principais funcionalidades providas são:

- Busca textual de pontos turísticos por nome
- Busca de descrição e áudio por ID do ponto turístico
- Retorno de mensagens customizadas em caso de erro ou necessidade de permissão

## Tecnologias Utilizadas

- Linguagem PHP com orientação a objetos
- MySQL
- Padrão MVC com Models, Views e Controllers
- JSON para serialização e retorno das respostas

## Configuração

- Importe o banco de dados MySQL disponibilizado
- Configure os parâmetros de conexão no arquivo ConnectionFactory
- Certifique-se que a pasta de áudios referenciada existe

## Utilização

A API pode ser consumida via requisições HTTP GET passando os parâmetros necessários.

Exemplos:

```
//Busca texto por nome 
http://servidor/monumentos.php?nome=museu

//Busca descrição por ID
http://servidor/audioDescricao.php?idDocumento=35

//Busca áudio da descrição por ID 
http://servidor/audioDescricaoNome.php?idDocumento=35
```

## Licença

[MIT](https://choosealicense.com/licenses/mit/)
