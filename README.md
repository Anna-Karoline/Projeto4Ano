

# SAOD

O SAOD é um sistema de agendamento odontologico, como muitos consultorios ainda utilizam da forma em papel para agendar suas consultas, o SAOD veio para agilizar e facilitar o agendamento dessas consultas. Ele consiste em um sistema em que o administrador(dono do consultorio) colocará horarios disponiveis, e os usuarios(seus clientes) poderão agendar esses horarios para fazerem sua consulta. Dessa forma, os clientes não precisarão ligar para o dono ou até mesmo ter que ir pessoalmente marca uma consulta, alem disso, o sistema guardará os dados das consultas que já aconteceram, assim como os dados do cliente que a fez.


# Layout
   Login            |  Cadastra-se
:-------------------------:|:-------------------------:
![login](https://github.com/Hernandes-Silva/Saod-1/blob/main/imgsGit/login.png)  |  ![register](https://github.com/Hernandes-Silva/Saod-1/blob/main/imgsGit/register.png)

Horários disponiveis            |  Horarios do usuário
:-------------------------:|:-------------------------:
![horarios](https://github.com/Hernandes-Silva/Saod-1/blob/main/imgsGit/horarios.png)  |  ![meusHorarios](https://github.com/Hernandes-Silva/Saod-1/blob/main/imgsGit/meusHorarios.png)

 Visualizar consultas(Admin)            |  Detalhar Consulta
:-------------------------:|:-------------------------:
![adminHorarios](https://github.com/Hernandes-Silva/Saod-1/blob/main/imgsGit/adminConsultas.png)  |  ![meusHorarios](https://github.com/Hernandes-Silva/Saod-1/blob/main/imgsGit/Detalhar.png)

 Cadastrar consulta        |  Cadastrar procedimentos
:-------------------------:|:-------------------------:
![Cadastar consulta](https://github.com/Hernandes-Silva/Saod-1/blob/main/imgsGit/cadastrarConsultas.png)  |  ![Cadastar procedimentos](https://github.com/Hernandes-Silva/Saod-1/blob/main/imgsGit/cadastrarProcedimentos.png)

## Pré-requisitos

 Para executar esse projeto é necessario ter instalado na sua maquina o [PHP 7](https://www.php.net/downloads) e o [Xampp](https://www.apachefriends.org/pt_br/index.html).

### Executando o sistema

```bash

# coloque o projeto na pasta htdocs do Xampp.

#acesse a pasta do projeto com o terminal/cmd e de o comando:
$ composer install

#faça uma copia do arquivo .env.example e renomeie-o para .env e configure seus banco de dados nele. Além disso não esqueça de checar se você adcionou a pastar vendor no seu projeto

# agora gere a api_key
$ php artisan key:generate

#faça as migrações do banco
$ php artisan migrate

#inicie o servidor apache no painel do Xampp e acesse: http://localhost/'nome da pasta do projeto'/public/

#Dicas: para criar o primeiro admin, basta você cadastrar um usuario comum, depois ir no phpadmin e mudar a campo admin para true



```

---
## Features
- Os admin podem:
   - [x] Ver os horários
   - [X] Ver informações sobre quem marcou determinado horários
   - [x] Excluir um horário
   - [x] Criar um procedimento
   - [x] Excluir um procedimento
   - [x] Editar um procedimento
   - [x] Criar um novo administrador
   - [x] Editar suas informações e senha
- Os usuários podem:
   - [x] Ver os horários
   - [x] Agendar um horário
   - [x] Desmarca seu hórario agendado
   - [x] Editar suas informações e senha
- os não usuários podem:
   - [x] cadastra-se
   


## Construido com
* [GitHub](https://github.com/) - O repositório usado pela equipe
* [PHP](https://www.php.net/downloads) - Linguagem de programação utilizada
* [Laravel](https://laravel.com/) - O framework web usado
* [MySQL](https://www.mysql.com/) - O banco de dados usado


## Authors

* [**Hernandes Matheus**](https://github.com/Hernandes-Silva) 
* [**Anna Karoline**](https://github.com/Anna-Karoline) 


## License

Este projeto está licenciado sob a Licença MIT - veja o arquivo [LICENSE.md](LICENSE.md) para detalhes