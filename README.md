# :rocket: API Leospa W-51

Essa é a API para a aplicação [Leospa](https://bl4nc.github.io/leospa-w51/) que foi criada um teste na empresa w-51. Link para repósitorio do frontend: [Link](https://github.com/bl4nc/leospa-w51)

# Sobre

## Deploy

Foi feito o deplay da API no heroku então ele já está online em produção no link.

> https://api-w51.herokuapp.com/api/

## Base de dados

Inicialmente o objetivo era utilizar um banco **Mysql** porem tive problemas para utilizar o CC na heroku, com isso acabei utilizando um banco **Postgresql**

### Conexão com o banco
- HOST: ec2-34-193-101-0.compute-1.amazonaws.com
- PORT: 5432
- USER: cjxfdjcoqjdikt
- PASS: af73d6a444540ddb3bf9d4056893d5817764f838ed4a6bacee2daebb60671e7a
- DATABASE: d9lul0dan78bmd

Caso queira utilizar localhost todas as migrations estão na pasta da API só rodar o comando 
> php artisan migrate

## ENV 
Todo o env da API foi criado diretamente na Heroku com os secrets, por esse motivo o arquivo.env não está preenchido.


# :email: Rotas

### :star: POST: appointment
Params:
- name : String
- email : String
- service : String
- phone_number : String
- date : Date
- time : Time
- your_notes : String

Return: JSON

### :star: POST: send_contact
Params:
- name : String
- email : String
- comment : String

Return: JSON


