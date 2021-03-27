<p align="center">
    <img src="" width='80%'>
    <img src="" width="80%">
    
</p>
<p align="center">
</p>

# SAOD

O SAOD é um sistema de agendamento odontologico, como muitos consultorios ainda utilizam da forma em papel para agendar suas consultas, o SAOD veio para agilizar e facilitar o agendamento dessas consultas. Ele consiste em um sistema em que o administrador(dono do consultorio) colocará horarios disponiveis, e os usuarios(seus clientes) poderão agendar esses horarios para fazerem sua consulta. Dessa forma, os clientes não precisarão ligar para o dono ou até mesmo ter que ir pessoalmente marca uma consulta, alem disso, o sistema guardará os dados das consultas que já aconteceram, assim como os dados do cliente que a fez.



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
* [GitHub](https://laravel.com/) - o repositório usado pela equipe
* [PHP](https://laravel.com/) - Linguagem de programação utilizada
* [Laravel](https://laravel.com/) - o framework web usado
* [MySQL](https://www.mysql.com/) - o banco de dados usado


## Authors

* [**Hernandes Matheus**](https://github.com/Hernandes-Silva) 
* [**Anna Karoline**](https://github.com/Anna-Karoline) 


## License

Este projeto está licenciado sob a Licença MIT - veja o arquivo [LICENSE.md](LICENSE.md) para detalhes

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/)**
- **[OP.GG](https://op.gg)**