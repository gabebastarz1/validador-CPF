# Validador de CPF

Este é um sistema simples em PHP que valida um CPF e verifica se ele está presente em uma blacklist. A aplicação permite a validação de um CPF com base nos seus dígitos verificadores e também a adição de CPFs à blacklist.

## Funcionalidades

- **Validação de CPF:** Verifica se o CPF informado é válido através da verificação dos dígitos verificadores.
- **Blacklist:** Adiciona CPFs à blacklist e verifica se o CPF já está na lista antes de validá-lo.
- **Interface Web Simples:** Uma página em HTML onde o usuário pode inserir o CPF para validar ou adicionar à blacklist.

## Como Usar

1. **Clone o repositório:**

   ```bash
   git clone https://github.com/SEU_USUARIO/validador-cpf.git
   cd validador-cpf
   ```
2. **Configuração do Servidor:**
  Este projeto requer um servidor PHP. Caso não tenha um servidor rodando, você pode usar o servidor embutido do PHP:  
    ```bash
    php -S localhost:8000 
    ```
    

3. **Acesse a Aplicação:**
  Abra seu navegador e vá para:
  
    ```bash
    http://localhost:8000/view.php
    ```
    Na página, você poderá inserir um CPF para validar ou adicionar à blacklist.
  

## Estrutura de Arquivos
- **view.php:** A página HTML com o formulário para inserir o CPF e as opções de envio.
- **model.php:** Contém a classe validarCPF, que lida com a validação do CPF e a manipulação da blacklist.
- **controller.php:** Controlador que recebe os dados do formulário e chama as funções da classe validarCPF para validação e manipulação da blacklist.
- **blacklist.json:** Arquivo JSON onde os CPFs da blacklist são armazenados.

## Como Funciona
1. **Validação de CPF:**
- O CPF inserido é validado com base nos dígitos verificadores. Caso o CPF seja válido, a aplicação exibe uma mensagem de sucesso. Caso contrário, informa que o CPF é inválido.
2. **Blacklist:**
- Se o CPF não estiver na blacklist, ele será adicionado. Caso o CPF já esteja na lista, a aplicação informa que o CPF já foi adicionado anteriormente

## Dependências
Este projeto não possui dependências externas, mas é necessário ter o PHP instalado no seu ambiente para executá-lo.

## Contribuições
Se você deseja contribuir para este projeto, sinta-se à vontade para enviar um pull request.

## Licença
Este projeto está licenciado sob a MIT License - veja o arquivo LICENSE para mais detalhes.