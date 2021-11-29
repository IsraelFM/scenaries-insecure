# Ambientes

Esse repositório contém os ambientes simulados de "antes" para estudo de vulnerabilidades *web*. Juntamente ao repositório do ["depois"](https://github.com/IsraelFM/scenaries-secure), ele compõe uma parcela do Trabalho Final de Graduação para o curso de Sistemas de Informação na UNIFEI.

----------

## Subindo os serviços

Para subir os serviços e ficar assistindo-os, pode executar no terminal o comando:

```sh
❯ docker-compose up
```

Ou se possui o comando `make` instalado:

```sh
❯ make up
```

Comandos úteis para checar se os serviços estão rodando sem problemas:

```sh
❯ docker container ls

❯ docker images    

❯ docker volume ls   
```

Para remover os serviços parados e suas dependências, pode executar no terminal o comando:

```sh
❯ docker-compose rm -v -s
```

Ou se possui o comando `make` instalado:

```sh
❯ make removeall
```

## Observações

Você poderá adicionar um novo *source* para acessar a aplicação pelo endereço legível [http://learsi-insecure.news.br](http://learsi-insecure.news.br), ao invés do tradicional "localhost". Para isso, abra o arquivo de *hosts* com o comando abaixo:

```sh
sudo gedit /etc/hosts
```

Adiciona essa linha no final do arquivo:

```sh
127.0.0.1 learsi-insecure.news.br
```
