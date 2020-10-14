# **CSI477-2020-03 - PLE - Trabalho Final - Resultados**
## *Aluna(o): Lorena Silveira Lopes*

### Resumo

  A aplicação desenvolvida é uma plataforma para armazenamento de exames. É um projeto simples e acessível a qualquer público para manter o histórico de exames que serão armazenados manualmente.

### 1. Funcionalidades implementadas

 Este projeto tem as seguintes funcionalidades:

  - O usuário pode fazer um cadastro na aplicaçãp;
  - O usuário pode acessar a aplicação através do seu login.
  - O usuário pode inserir dados dos exames.
  - O usuário pode filtrar exames através de tipos.
  - O usuário pode excluir exames.  

### 2. Funcionalidades previstas e não implementadas

 Este projeto não tem as seguintes funcionalidades:

  - O usuário não pode filtrar exames através datas ou valores. (Esta funcionalidade não foi implementada devido a demanda do final do período, e por isso optei por fazer as mais funcionalidades mais cruciais)
  - O usuário não pode adicionar informações extras ao perfil. (Esta funcionalide não foi implementada pois não acrescentaria muito ao objetivo da plataforma)
  - O usuário não pode editar os exames. (Esta funcionalidade não foi adicionada pois achei que seria mais viável o usuário excluir e adicionar novamente o exame caso necessário)
  - Validações dos campos. (Esta funcionalidade não foi implementada pois obtive muitos erros e estava sem tempo pra tentar corrigí-los.)


### 3. Principais desafios e dificuldades

 O principal desafio do trabalho foi o tempo para implementá-lo e a alta demanda do final do período. A maiorias dos erros ocorridos no desenvolvimento do trabalho foi muitas vezes por falta de atenção ou por não entender 100% determinado tópico. 


### 4. Instruções para instalação e execução

    1. Abrir o projeto.
    2. Na raiz do projeto digitar o comando:
         composer install
    3. Na raiz do projeto digitar o comando:
         php artisan key:generate
    4. Na pasta database digitar o comando:
         touch nomedoararquivo.sqlite
    5. Na raiz do projeto digitar o comando:
         php artisan migrate
