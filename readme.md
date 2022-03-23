# WEEKLY PLANNER
<h3 align="center">
    <img alt="home-intro" src="static\images\home-intro-rm.PNG">
    <p>
    Planner semanal para organizar melhor as tarefas da semana, contendo CRUD (adição, leitura, edição, e exclusão de tarefas)
    </p>
</h3>

> [Vídeo completo mostrando o site](https://www.linkedin.com/posts/beatriz-vidal-a2b114200_sql-html-github-activity-6912455922967613441-H3Du?utm_source=linkedin_share&utm_medium=member_desktop_web)

# Sumário

* [INTRODUÇÃO](#weekly-planner)
* [SUMÁRIO](#sumário)
* [TECNOLOGIAS](#tecnologias)
  * [PRÉ-REQUISITOS](#pré-requisitos)
* [FUNCIONALIDADES](#funcionalidades)
* [TELAS DO SITE - PREVIEWS](#telas-do-site)
  * [HOMEPAGE](#homepage)
  * [LOGIN E CADASTRO](#login-e-cadastro)
  * [PLANNER SEMANAL](#planner-semanal)
  * [LOGOUT](#user-page-e-logout)

# Tecnologias
Nesse projeto foram usadas as seguintes tencnologias:
- [PHP](https://www.php.net/)
- [HTML](https://developer.mozilla.org/pt-BR/docs/Web/HTML)
- [CSS](https://developer.mozilla.org/pt-BR/docs/Web/CSS)
### Pré-requisitos
- [XAMPP](https://www.apachefriends.org/pt_br/index.html) : para rodar o servidor PHP e também o banco de dados

# Funcionalidades
Features do projeto:
- Criação de usuário (login e registro no banco de dados do phpmyadmin)
  - Proteção contra SQL Injections
  - Armazenamento de foto de perfil (file storage através da variável global $_FILES)
- Autenticação de usuário (login, logout e páginas apenas para usuários através de SESSIONS)
- Tarefas:
  - CRUD: Adição, leitura, edição e exclusão de tarefas
  - Sistema simples e intuitivo para realizar o CRUD
- Logout
- Código todo comentado em inglês

# Telas do Site
## Homepage
A homepage é o primeiro contato dos usuários, fiz como se fosse uma landing page. Quis deixar o layout clean mas mesmo assim direcionando o usuário a fazer o seu cadastro na plataforma. Abaixo da introdução do app, mostro um print de como é a funcionalidade do site
<h3 align="center">
    <img alt="homepage" src="static\images\rm-homepage.PNG">
    <img alt="homepage2" src="static\images\rm-homepage2.PNG">
</h3>  

---


## Login e Cadastro
O botão mais diferenciado da Homepage é o de criar conta, que leva o usuário para a página de login/cadastro.
<h3 align="center">
    <img alt="crie_sua_conta_btn" src="static\images\rm-crie-sua-conta2.gif">
</h3>
Se o usuário tentar entrar na aba de tarefas (users only), ele é redirecionado para a página de login/cadastro e é mostrado na tela a mensagem "Faça o login primeiro!".
<h3 align="center">
    <img alt="login-invalido" src="static\images\rm-log-inv2.gif">
</h3>

### Área de Cadastro
Com campo para foto de perfil ($_FILES)
<h3 align="center">
    <img alt="login-invalido" src="static\images\rm-cadastro.gif">
</h3>

### Área de login
Caso o username ou senha estiverem errados, é mostrado na tela a mensagem "Login Inválido"
<h3 align="center">
    <img alt="login-invalido" src="static\images\rm-log-invalido.gif">
</h3>
Se o login for permitido, o usuário é redirecionado para a tela do planner semanal
<h3 align="center">
    <img alt="login-invalido" src="static\images\rm-login.gif">
</h3>

---

## Planner Semanal
A área do planner é bem simples e intuitiva, para facilitar a vida do usuário e manter o objetivo da plataforma.
<h3 align="center">
    <img alt="login-invalido" src="static\images\rm-print-planner.PNG">
</h3>

### Adição de tarefas
Digite o conteúdo da sua tarefa e selecione o dia da semana em que você quer realizá-la.
Se o login for permitido, o usuário é redirecionado para a tela do planner semanal
<h3 align="center">
    <img alt="login-invalido" src="static\images\rm-add-task.gif">
</h3>

### Edição de tarefas
Para editar as tarefas também é bem simples, é só clicar no Icon de lápis e digitar o novo texto.
<h3 align="center">
    <img alt="login-invalido" src="static\images\rm-edit-task.gif">
</h3>

### Exclusão de tarefas
Para excluir, só clicar na borrachinha que a tarefa já vai ser excluída.
<h3 align="center">
    <img alt="login-invalido" src="static\images\rm-delete-task.gif">
</h3>

---

## User Page e Logout
Página para os usuários checarem seus dados e realizarem o Logout.
Se o usuário apertar o botão de Logout, a SESSION dele é destruída e ele é redirecionado para a página de Login e Cadastro.
<h3 align="center">
    <img alt="login-invalido" src="static\images\rm-logout.gif">
</h3>

---

> Entre em contato 👋 [Linkedin](https://www.linkedin.com/in/beatriz-vidal-a2b114200) | [Instagram](https://www.instagram.com/bvidalf/)  

> Made by Beatriz Vidal ❤🎯
