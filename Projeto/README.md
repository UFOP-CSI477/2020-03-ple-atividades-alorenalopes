# **CSI477-2020-03 - PLE - Proposta de Trabalho Final**
## *Aluna: Lorena Silveira Lopes*

## **Resumo**
  
  Segundo MORSCH(2016), o correto gerenciamento do histórico de exames começa com um prontuário que seja completo e rapidamente acessível ao médico. Este gerenciamentp, através do uso de tecnologia, eleva a eficiência da prestação do serviço e aumenta a sua qualidade. Da mesma forma, é importante também para o paciente ter uma base de dados sólida sobre seus exames, dado que, nem sempre as consultas são no mesmo hospital ou clínica. 

  Diante disso, o projeto tem como objetivo desenvolver uma plataforma onde o usuário possa adicionar dados dos seus exames, mantendo dessa forma tudo em um só lugar de forma prática e acessível.

### **1. Tema**

  O trabalho final tem como tema o desenvolvimento de uma plataforma para armazenamento de exames. Este projeto tem o intuito de ser algo simples para ser acessível para qualquer público, sendo possível manter o histórico de exames que serão armazenados manualmente.

### **2. Escopo**

  Este projeto terá as seguintes funcionalidades:

  - O usuário deve fazer um cadastro na aplicaçãp;
  - O usuário deve acessar a aplicação através do seu login.
  - O usuário deve inserir dados dos exames.
  - O usuário deve pesquisar exames através de tipos, datas ou valores.
  - O usuário deve adicionar informações extras ao perfil.
  - O usuário deve editar e excluir exames.

### **3. Restrições**

  Neste trabalho não serão considerados:

  - O usuário não deve alterar os dados de cadastro, como nome, data de nascimento, email e senha.

### **4. Protótipos**
1. A primeira página da aplicação será a tela de Login para que tenha segurança com os dados do usuário.
![Login](https://user-images.githubusercontent.com/39659311/92332936-84db3180-f057-11ea-975b-0e4f03ad0f8b.png)

2. Caso o usuário não tenha o login, será possível fazer o cadastro através de um modal.
![Modal_ Cadastro](https://user-images.githubusercontent.com/39659311/92332959-c1a72880-f057-11ea-81c1-c2c072ffe2d8.png)

3. Após fazer o login, a aplicação irá abrir o histórico de dados dos exames adicionados pelo usuário.
![Tela Inicial](https://user-images.githubusercontent.com/39659311/92332962-c66bdc80-f057-11ea-8756-6163457b4498.png)

4. O usuário poderá adicionar dados dos exames de duas formas.
- Se o tipo já estiver cadastrado, ele clica no + do card do exame e adiciona os novos dados através de um modal. 
![Modal_ Cadastro tipo existente](https://user-images.githubusercontent.com/39659311/92333799-b9062080-f05e-11ea-8667-784249d68f6b.png)
- Se o tipo ainda não existir, ele clica no card com tracejado e o símbolo de + e adiciona os dados através de um modal.
![Modal_ cadastro tipo novo](https://user-images.githubusercontent.com/39659311/92333798-b86d8a00-f05e-11ea-8cd7-2858cf893685.png)


5. O usuário poderá analisar e comparar os dados adicionados à um respectivo tipo de exame basta clicar em "Exibir todos", na página direcionada será possível filtrar o conteúdo associado aos cards por data ou valor. 
![Histórico](https://user-images.githubusercontent.com/39659311/92332956-c075fb80-f057-11ea-9722-d4ea6888771a.png)

6. E para finalizar, o usuário vai poder acessar os seus dados pessoais e será possível adicionar informações extras.
![Perfil](https://user-images.githubusercontent.com/39659311/92332960-c1a72880-f057-11ea-80d8-681833ce0bd8.png)

### **5. Referências**

MORSCH, José A. AS VANTAGENS DO GERENCIAMENTO DO HISTÓRICO DE EXAMES. Morsch, 2016. Disponível em: <https://telemedicinamorsch.com.br/blog/gerenciamento-do-historico-de-exames>. Acesso em: 05 de Setembro de 2020.